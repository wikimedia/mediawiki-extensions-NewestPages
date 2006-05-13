<?php

/**
 * Special page to show the last X pages added to the wiki
 * This doesn't use recent changes so the items don't expire
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Rob Church <robchur@gmail.com>
 * @copyright © 2006 Rob Church
 * @licence GNU General Public Licence 2.0
 */
 
if( defined( 'MEDIAWIKI' ) ) {

	require_once( 'SpecialPage.php' );
	require_once( 'NewestPages.i18n.php' );
	$wgExtensionFunctions[] = 'efNewestPages';
	$wgExtensionCredits['specialpage'][] = array( 'name' => 'Newest Pages', 'author' => 'Rob Church', 'url' => 'http://meta.wikimedia.org/wiki/Newest_Pages_%28extension%29' );
	$wgNewestPagesLimit = 50;
	
	function efNewestPages() {
		global $wgMessageCache, $wgNewestPagesMessages;
		$wgMessageCache->addMessages( $wgNewestPagesMessages );
		SpecialPage::addPage( new NewestPages() );
	}
	
	class NewestPages extends IncludableSpecialPage {
	
		var $limit = 0;
		var $namespace = -1;
	
		function NewestPages() {
			global $wgNewestPagesLimit;
			$this->limit = $wgNewestPagesLimit;
			SpecialPage::SpecialPage( 'Newestpages', '', true, false, 'default', true );
		}
	
		function execute( $par ) {
			global $wgRequest, $wgNewestPagesLimit, $wgOut, $wgContLang;
			
			# Decipher input passed to the page
			$this->decipherParams( $par );
			$this->setOptions( $wgRequest );
			
			# Enforce an absolute limit for performance
			$this->limit = min( $this->limit, $wgNewestPagesLimit );
			
			# Don't show the navigation if we're including the page		
			if( !$this->mIncluding ) {
				$this->setHeaders();
				if( $this->namespace > 0 ) {
					$wgOut->addWikiText( wfMsg( 'newestpages-ns-header', $this->limit, $wgContLang->getFormattedNsText( $this->namespace ) ) );
				} else {
					$wgOut->addWikiText( wfMsg( 'newestpages-header', $this->limit ) );
				}
				$wgOut->addHTML( $this->makeLimitLinks() );
			}

			$dbr =& wfGetDB( DB_SLAVE );
			$page = $dbr->tableName( 'page' );
			$nsf = $this->getNsFragment();
			$res = $dbr->query( "SELECT page_namespace, page_title FROM $page WHERE {$nsf} ORDER BY page_id DESC LIMIT 0,{$this->limit}" );
			$count = $dbr->numRows( $res );
			if( $count > 0 ) {
				# Make list
				if( !$this->mIncluding )
					$wgOut->addWikiText( wfMsg( 'newestpages-showing', $count ) );
				$wgOut->addHTML( "<ol>" );
				while( $row = $dbr->fetchObject( $res ) )
					$wgOut->addHTML( $this->makeListItem( $row ) );
				$wgOut->addHTML( "</ol>" );
			} else {
				$wgOut->addWikiText( wfMsg( 'newestpages-none' ) );
			}
			$dbr->freeResult( $res );			
		}
	
		function setOptions( &$req ) {
			if( $limit = $req->getIntOrNull( 'limit' ) )
				$this->limit = $limit;
			if( $ns = $req->getText( 'namespace', NULL ) )
				$this->setNamespace( $ns );
		}
		
		function decipherParams( $par ) {
			if( $par ) {
				$bits = explode( '/', $par );
				foreach( $bits as $bit ) {
					if( is_numeric( $bit ) ) {
						$this->limit = (int)$bit;
					} else {
						$this->setNamespace( $bit );
					}
				}
			}
		}
		
		function setNamespace( $nst ) {
			global $wgContLang;
			$nsi = $wgContLang->getNsIndex( $nst );
			if( $nsi !== false )
				$this->namespace = $nsi;
			if( $nst == '-' )
				$this->namespace = NS_MAIN;
		}
		
		function getNsFragment() {
			$this->namespace = (int)$this->namespace;
			return $this->namespace > -1 ? "page_namespace = {$this->namespace}" : "page_namespace != 8";
		}
		
		function makeListItem( $row ) {
			global $wgUser;
			$title = Title::makeTitleSafe( $row->page_namespace, $row->page_title );
			if( !is_null( $title ) ) {
				$skin = $wgUser->getSkin();
				$link = $skin->makeKnownLinkObj( $title );
				return( "<li>{$link}</li>\n" );
			} else {
				return( "<!-- Invalid title " . htmlspecialchars( $row->page_title ) . " in namespace " . htmlspecialchars( $row->page_namespace ) . " -->\n" );
			}
		}

		function makeLimitLinks() {
			global $wgUser;
			$skin = $wgUser->getSkin();
			$title = Title::makeTitle( NS_SPECIAL, 'Newestpages' );
			$limits = array( 10, 20, 30, 50, 100, 150 );
			foreach( $limits as $limit ) {
				if( $limit != $this->limit ) {
					$links[] = $skin->makeKnownLinkObj( $title, $limit, 'limit=' . $limit );
				} else {
					$links[] = (string)$limit;
				}
			}
			return( wfMsgHtml( 'newestpages-limitlinks', implode( ' | ', $links ) ) );
		}
		
	}

} else {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

?>