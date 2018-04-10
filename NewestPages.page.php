<?php

/**
 * Class definition file for the Newest Pages extension
 * This doesn't use recent changes so the items don't expire
 *
 * @file
 * @ingroup Extensions
 * @author Rob Church <robchur@gmail.com>
 * @copyright © 2006 Rob Church
 * @licence GNU General Public Licence 2.0
 */

class NewestPages extends IncludableSpecialPage {

	public $limit = null;
	public $namespace = null;
	public $redirects = null;

	public function __construct() {
		parent::__construct( 'NewestPages', '', true, false, 'default', true );
	}

	public function execute( $par ) {
		global $wgContLang;

		$out = $this->getOutput();
		$request = $this->getRequest();

		# Decipher input passed to the page
		$this->decipherParams( $par );
		$this->setOptions( $request );

		// Load style for class="allpagesredirect"
		$out->addModuleStyles( 'mediawiki.special' );

		$dbr = wfGetDB( DB_SLAVE );

		$conds = array();
		$conds[] = $this->getNsFragment();
		if ( !$this->redirects ) {
			$conds['page_is_redirect'] = 0;
		}
		$res = $dbr->select(
			'page',
			array(
				'page_namespace',
				'page_title',
				'page_is_redirect'
			),
			$conds,
			__METHOD__,
			array(
				'ORDER BY' => 'page_id DESC',
				'LIMIT' => "{$this->limit}",
				'OFFSET' => '0',
			)
		);
		$count = $dbr->numRows( $res );

		# Don't show the navigation if we're including the page
		if ( !$this->mIncluding ) {
			$this->setHeaders();
			$limit = $this->getLanguage()->formatNum( $this->limit );
			if ( $this->namespace > 0 ) {
				$out->addWikiMsg( 'newestpages-ns-header', $limit,
					$wgContLang->getFormattedNsText( $this->namespace ) );
			} else {
				$out->addWikiMsg( 'newestpages-header', $limit );
			}
			$this->makeNamespaceForm();
			$out->addHTML( '<p>' . $this->makeLimitLinks() );
			$out->addHTML( '<br />' . $this->makeRedirectToggle() . '</p>' );
		}

		if ( $count > 0 ) {
			# Make list
			if ( !$this->mIncluding ) {
				$out->addWikiMsg( 'newestpages-showing', $this->getLanguage()->formatNum( $count ) );
			}
			$out->addHTML( '<ol>' );
			foreach ( $res as $row ) {
				$out->addHTML( $this->makeListItem( $row ) );
			}
			$out->addHTML( '</ol>' );
		} else {
			$out->addWikiMsg( 'newestpages-none' );
		}
	}

	/**
	 * @param WebRequest $req
	 */
	function setOptions( &$req ) {
		global $wgNewestPagesLimit;
		if ( !isset( $this->limit ) ) {
			$this->limit = $this->sanitiseLimit( $req->getInt( 'limit', $wgNewestPagesLimit ) );
		}
		if ( !isset( $this->namespace ) ) {
			$this->namespace = $this->extractNamespace( $req->getVal( 'namespace', -1 ) );
		}
		if ( !isset( $this->redirects ) ) {
			$this->redirects = (bool)$req->getInt( 'redirects', 1 );
		}
	}

	function sanitiseLimit( $limit ) {
		return min( (int)$limit, 5000 );
	}

	function decipherParams( $par ) {
		if ( $par ) {
			$bits = explode( '/', $par );
			foreach ( $bits as $bit ) {
				if ( is_numeric( $bit ) ) {
					$this->limit = $this->sanitiseLimit( $bit );
				} else {
					$this->namespace = $this->extractNamespace( $bit );
				}
			}
		}
	}

	function extractNamespace( $namespace ) {
		global $wgContLang;
		if ( is_numeric( $namespace ) ) {
			return $namespace;
		} elseif ( $wgContLang->getNsIndex( $namespace ) !== false ) {
			return $wgContLang->getNsIndex( $namespace );
		} elseif ( $namespace == '-' ) {
			return NS_MAIN;
		} else {
			return -1;
		}
	}

	function getNsFragment() {
		$this->namespace = (int)$this->namespace;
		return $this->namespace > -1 ? "page_namespace = {$this->namespace}" : "page_namespace != 8";
	}

	function makeListItem( $row ) {
		$title = Title::makeTitleSafe( $row->page_namespace, $row->page_title );
		if ( !is_null( $title ) ) {
			$link = $row->page_is_redirect
					? '<span class="allpagesredirect">' . Linker::linkKnown( $title ) . '</span>'
					: Linker::linkKnown( $title );
			return "<li>{$link}</li>\n";
		} else {
			return "<!-- Invalid title " . htmlspecialchars( $row->page_title ) .
				" in namespace " . htmlspecialchars( $row->page_namespace ) . " -->\n";
		}
	}

	function makeLimitLinks() {
		$lang = $this->getLanguage();
		$limits = array( 10, 20, 30, 50, 100, 150 );
		$links = array();
		foreach ( $limits as $limit ) {
			if ( $limit != $this->limit ) {
				$links[] = $this->makeSelfLink( $lang->formatNum( $limit ), 'limit', $limit );
			} else {
				$links[] = (string)$limit;
			}
		}
		return $this->msg( 'newestpages-limitlinks' )->rawParams(
				$lang->pipeList( $links ) )->escaped();
	}

	function makeRedirectToggle() {
		$label = $this->msg(
				$this->redirects ? 'newestpages-hideredir' : 'newestpages-showredir'  )->escaped();
		return $this->makeSelfLink( $label, 'redirects', (int)!$this->redirects );
	}

	function makeSelfLink( $label, $oname = false, $oval = false ) {
		$self = $this->getPageTitle();
		$attr = array();
		$attr['limit'] = $this->limit;
		$attr['namespace'] = $this->namespace;

		if ( !$this->redirects ) {
			$attr['redirects'] = 0;
		}

		if ( $oname ) {
			$attr[$oname] = $oval;
		}

		return Linker::linkKnown( $self, $label, array(), $attr );
	}

	function makeNamespaceForm() {
		$self = $this->getPageTitle();
		$formDescriptor = [
			'namespace' => [
				'type' => 'namespaceselect',
				'name' => 'namespace',
				'id' => 'namespace',
				'label' =>  $this->msg( 'newestpages-namespace' )->text(),
				'all' => 'all',
				'value' => $this->namespace,
			]
		];

		$htmlForm = HTMLForm::factory( 'ooui', $formDescriptor, $this->getContext() );
		$htmlForm
			->addHiddenField( 'limit', $this->limit )
			->addHiddenField( 'redirects', $this->redirects )
			->setMethod( 'post' )
			->setAction( $self->getLocalURL() )
			->setSubmitText( $this->msg( 'newestpages-submit' )->text() )
			->setWrapperLegend( Null )
			->prepareForm()
			->displayForm( false );

		 return true;
	}

	protected function getGroupName() {
		return 'changes';
	}
}
