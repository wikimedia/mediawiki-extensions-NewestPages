<?php

/**
 * Class definition file for the Newest Pages extension
 * This doesn't use recent changes so the items don't expire
 *
 * @file
 * @ingroup Extensions
 * @author Rob Church <robchur@gmail.com>
 * @copyright © 2006 Rob Church
 * @license GPL-2.0-or-later
 */

use MediaWiki\MediaWikiServices;

class SpecialNewestPages extends IncludableSpecialPage {

	private $limit = null;
	private $namespace = null;
	private $redirects = null;

	public function __construct() {
		parent::__construct( 'NewestPages', '', true, false, 'default', true );
	}

	/**
	 * @inheritDoc
	 */
	public function execute( $par ) {
		$language = MediaWikiServices::getInstance()->getContentLanguage();

		$out = $this->getOutput();
		$request = $this->getRequest();

		# Decipher input passed to the page
		$this->decipherParams( $par );
		$this->setOptions( $request );

		// Load style for class="allpagesredirect"
		$out->addModuleStyles( 'mediawiki.special' );

		$dbr = wfGetDB( DB_REPLICA );

		$conds = [];
		$conds[] = $this->getNsFragment();
		if ( !$this->redirects ) {
			$conds['page_is_redirect'] = 0;
		}
		$res = $dbr->select(
			'page',
			[
				'page_namespace',
				'page_title',
				'page_is_redirect'
			],
			$conds,
			__METHOD__,
			[
				'ORDER BY' => 'page_id DESC',
				'LIMIT' => "{$this->limit}",
				'OFFSET' => '0',
			]
		);
		$count = $dbr->numRows( $res );

		# Don't show the navigation if we're including the page
		if ( !$this->including() ) {
			$this->setHeaders();
			$limit = $this->getLanguage()->formatNum( $this->limit );
			if ( $this->namespace > 0 ) {
				$out->addWikiMsg( 'newestpages-ns-header', $limit,
					$language->getFormattedNsText( $this->namespace ) );
			} else {
				$out->addWikiMsg( 'newestpages-header', $limit );
			}
			$this->makeNamespaceForm();
			$out->addHTML( '<p>' . $this->makeLimitLinks() );
			$out->addHTML( '<br />' . $this->makeRedirectToggle() . '</p>' );
		}

		if ( $count > 0 ) {
			# Make list
			if ( !$this->including() ) {
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
	private function setOptions( WebRequest $req ) {
		$newestPagesLimit = $this->getConfig()->get( 'NewestPagesLimit' );
		if ( !isset( $this->limit ) ) {
			$this->limit = $this->sanitiseLimit( $req->getInt( 'limit', $newestPagesLimit ) );
		}
		if ( !isset( $this->namespace ) ) {
			$this->namespace = $this->extractNamespace( $req->getVal( 'namespace', -1 ) );
		}
		if ( !isset( $this->redirects ) ) {
			$this->redirects = (bool)$req->getInt( 'redirects', 1 );
		}
	}

	private function sanitiseLimit( $limit ) {
		return min( (int)$limit, 5000 );
	}

	private function decipherParams( $par ) {
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

	private function extractNamespace( $namespace ) {
		$language = MediaWikiServices::getInstance()->getContentLanguage();
		if ( is_numeric( $namespace ) ) {
			return $namespace;
		} elseif ( $language->getNsIndex( $namespace ) !== false ) {
			return $language->getNsIndex( $namespace );
		} elseif ( $namespace == '-' ) {
			return NS_MAIN;
		} else {
			return -1;
		}
	}

	private function getNsFragment() {
		$this->namespace = (int)$this->namespace;
		return $this->namespace > -1 ? "page_namespace = {$this->namespace}" : 'page_namespace != 8';
	}

	private function makeListItem( $row ) {
		$title = Title::makeTitleSafe( $row->page_namespace, $row->page_title );
		$linkRenderer = $this->getLinkRenderer();
		if ( $title !== null ) {
			$link = $row->page_is_redirect
					? '<span class="allpagesredirect">' . $linkRenderer->makeKnownLink( $title ) . '</span>'
					: $linkRenderer->makeKnownLink( $title );
			return "<li>{$link}</li>\n";
		} else {
			return "<!-- Invalid title " . htmlspecialchars( $row->page_title ) .
				" in namespace " . htmlspecialchars( $row->page_namespace ) . " -->\n";
		}
	}

	private function makeLimitLinks() {
		$lang = $this->getLanguage();
		$limits = [ 10, 20, 30, 50, 100, 150 ];
		$links = [];
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

	private function makeRedirectToggle() {
		$label = $this->msg(
				$this->redirects ? 'newestpages-hideredir' : 'newestpages-showredir' )->text();
		return $this->makeSelfLink( $label, 'redirects', (int)!$this->redirects );
	}

	private function makeSelfLink( $label, $oname = false, $oval = false ) {
		$linkRenderer = $this->getLinkRenderer();
		$self = $this->getPageTitle();
		$attr = [];
		$attr['limit'] = $this->limit;
		$attr['namespace'] = $this->namespace;

		if ( !$this->redirects ) {
			$attr['redirects'] = 0;
		}

		if ( $oname ) {
			$attr[$oname] = $oval;
		}

		return $linkRenderer->makeKnownLink( $self, $label, [], $attr );
	}

	private function makeNamespaceForm() {
		$self = $this->getPageTitle();
		$formDescriptor = [
			'namespace' => [
				'type' => 'namespaceselect',
				'name' => 'namespace',
				'id' => 'namespace',
				'label' => $this->msg( 'newestpages-namespace' )->text(),
				'all' => 'all',
				'value' => $this->namespace,
			]
		];

		$htmlForm = HTMLForm::factory( 'ooui', $formDescriptor, $this->getContext() );
		$htmlForm
			->addHiddenField( 'limit', $this->limit )
			->addHiddenField( 'redirects', $this->redirects )
			->setMethod( 'get' )
			->setSubmitText( $this->msg( 'newestpages-submit' )->text() )
			->setWrapperLegend( null )
			->prepareForm()
			->displayForm( false );

		 return true;
	}

	/**
	 * @inheritDoc
	 */
	protected function getGroupName() {
		return 'changes';
	}
}
