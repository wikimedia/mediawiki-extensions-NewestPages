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
	
		var $limit = 50;
	
		function NewestPages() {
			SpecialPage::SpecialPage( 'Newestpages', '', true, false, 'default', true );
		}
	
		function execute( $par ) {
			global $wgOut;
			$this->setLimit( $par );
			
			# Don't show the navigation if we're including the page		
			if( !$this->mIncluding ) {
				$this->setHeaders();
				$wgOut->addWikiText( wfMsg( 'newestpages-header', $this->limit ) );
				$wgOut->addHTML( $this->makeLimitLinks() );
			}

			$dbr =& wfGetDB( DB_SLAVE );
			$page = $dbr->tableName( 'page' );
			$res = $dbr->query( "SELECT page_namespace, page_title FROM $page WHERE page_namespace != 8 ORDER BY page_id DESC LIMIT 0,{$this->limit}" );
			$count = $dbr->numRows( $res );
			if( $count > 0 ) {
				# Make list
				if( !$this->mIncluding )
					$wgOut->addWikiText( wfMsg( 'newestpages-showing', $count ) );
				$wgOut->addHTML( "<ol>\n" );
				while( $row = $dbr->fetchObject( $res ) )
					$wgOut->addHTML( $this->makeListItem( $row ) );
				$wgOut->addHTML( "</ol>\n" );
			} else {
				$wgOut->addWikiText( wfMsg( 'newestpages-none' ) );
			}
			$dbr->freeResult( $res );			
		}
	
		function setLimit( $par ) {
			if( $par ) {
				$this->limit = intval( $par );
			} else {
				global $wgRequest;
				if( $limit = $wgRequest->getIntOrNull( 'limit' ) ) {
					$this->limit = $limit;
				} else {
					$this->limit = 50;
				}
			}
			$this->limit = min( $this->limit, 5000 );
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