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

use MediaWiki\HTMLForm\HTMLForm;
use MediaWiki\Request\WebRequest;
use MediaWiki\SpecialPage\IncludableSpecialPage;
use MediaWiki\Title\Title;
use Wikimedia\Rdbms\IConnectionProvider;

class SpecialNewestPages extends IncludableSpecialPage {

	private ?int $limit = null;
	private ?int $namespace = null;
	private ?bool $redirects = null;

	public function __construct(
		private readonly IConnectionProvider $dbProvider,
	) {
		parent::__construct( 'NewestPages' );
	}

	/**
	 * @inheritDoc
	 */
	public function execute( $par ) {
		$out = $this->getOutput();
		$request = $this->getRequest();

		# Decipher input passed to the page
		$this->decipherParams( $par );
		$this->setOptions( $request );

		// Load style for class="allpagesredirect"
		$out->addModuleStyles( 'mediawiki.special' );

		$dbr = $this->dbProvider->getReplicaDatabase();

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
				'LIMIT' => $this->limit,
				'OFFSET' => '0',
			]
		);
		$count = $res->numRows();

		# Don't show the navigation if we're including the page
		if ( !$this->including() ) {
			$this->setHeaders();
			$limit = $this->getLanguage()->formatNum( $this->limit );
			if ( $this->namespace > 0 ) {
				$out->addWikiMsg( 'newestpages-ns-header', $limit,
					$this->getContentLanguage()->getFormattedNsText( $this->namespace ) );
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

	private function setOptions( WebRequest $req ): void {
		$newestPagesLimit = $this->getConfig()->get( 'NewestPagesLimit' );
		if ( $this->limit === null ) {
			$this->setLimit( $req->getInt( 'limit', $newestPagesLimit ) );
		}
		if ( $this->namespace === null ) {
			$this->namespace = $this->extractNamespace( $req->getVal( 'namespace', -1 ) );
		}
		if ( $this->redirects === null ) {
			$this->redirects = $req->getBool( 'redirects', true );
		}
	}

	private function setLimit( int $limit ): void {
		if ( $limit < 0 ) {
			$limit = 0;
		}
		if ( $limit > 5000 ) {
			$limit = 5000;
		}
		$this->limit = $limit;
	}

	private function decipherParams( ?string $par ): void {
		if ( $par ) {
			$bits = explode( '/', $par );
			foreach ( $bits as $bit ) {
				if ( is_numeric( $bit ) ) {
					$this->setLimit( (int)$bit );
				} else {
					$this->namespace = $this->extractNamespace( $bit );
				}
			}
		}
	}

	/**
	 * @param int|string $namespace
	 */
	private function extractNamespace( $namespace ): int {
		if ( is_numeric( $namespace ) ) {
			return (int)$namespace;
		}
		$namespaceFromString = $this->getContentLanguage()->getNsIndex( $namespace );
		if ( $namespaceFromString !== false ) {
			return $namespaceFromString;
		}
		if ( $namespace === '-' ) {
			return NS_MAIN;
		}
		return -1;
	}

	private function getNsFragment(): string {
		return $this->namespace > -1 ? "page_namespace = {$this->namespace}" : 'page_namespace != 8';
	}

	/**
	 * @param stdClass $row
	 * @return string HTML
	 */
	private function makeListItem( stdClass $row ): string {
		$title = Title::newFromRow( $row );
		$link = $this->getLinkRenderer()->makeKnownLink( $title );
		if ( $title->isRedirect() ) {
			$link = '<span class="allpagesredirect">' . $link . '</span>';
		}
		return "<li>$link</li>\n";
	}

	/**
	 * @return string HTML
	 */
	private function makeLimitLinks(): string {
		$lang = $this->getLanguage();
		$limits = [ 10, 20, 30, 50, 100, 150 ];
		$links = [];
		foreach ( $limits as $limit ) {
			if ( $limit !== $this->limit ) {
				$links[] = $this->makeSelfLink( $lang->formatNum( $limit ), [ 'limit' => $limit ] );
			} else {
				$links[] = (string)$limit;
			}
		}
		return $this->msg( 'newestpages-limitlinks' )->rawParams(
				$lang->pipeList( $links ) )->escaped();
	}

	/**
	 * @return string HTML
	 */
	private function makeRedirectToggle(): string {
		$label = $this->msg(
				$this->redirects ? 'newestpages-hideredir' : 'newestpages-showredir' )->text();
		return $this->makeSelfLink( $label, [ 'redirects' => (int)!$this->redirects ] );
	}

	/**
	 * @param string $label
	 * @param array $attr Additional attributes for the link
	 * @return string HTML
	 */
	private function makeSelfLink( string $label, array $attr ): string {
		$linkRenderer = $this->getLinkRenderer();
		$self = $this->getPageTitle();
		$attr = array_merge( [
			'limit' => $this->limit,
			'namespace' => $this->namespace,
			'redirects' => $this->redirects ? null : 0,
		], $attr );

		return $linkRenderer->makeKnownLink( $self, $label, [], $attr );
	}

	private function makeNamespaceForm(): void {
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
	}

	/**
	 * @inheritDoc
	 */
	protected function getGroupName() {
		return 'changes';
	}
}
