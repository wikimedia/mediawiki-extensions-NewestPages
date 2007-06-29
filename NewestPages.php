<?php

/**
 * Special page to show the last X pages added to the wiki
 * This doesn't use recent changes so the items don't expire
 *
 * @addtogroup Extensions
 * @author Rob Church <robchur@gmail.com>
 * @copyright © 2006 Rob Church
 * @licence GNU General Public Licence 2.0
 */

if( defined( 'MEDIAWIKI' ) ) {

	$wgExtensionCredits['specialpage'][] = array(
		'name' => 'Newest Pages',
		'author' => 'Rob Church',
		'url' => 'http://www.mediawiki.org/wiki/Extension:Newest_Pages',
		'description' => 'Shows the [[Special:Newestpages|last X pages]] added to the wiki',
	);
	require_once( 'NewestPages.i18n.php' );
	$wgExtensionFunctions[] = 'efNewestPages';

	$wgNewestPagesLimit = 50;

	if( version_compare( $wgVersion, '1.7.0', '>=' ) ) {
		$wgAutoloadClasses['NewestPages'] = dirname( __FILE__ ) . '/NewestPages.page.php';
		$wgSpecialPages['Newestpages'] = 'NewestPages';
	} else {
		require_once( 'SpecialPage.php' );
		require_once( 'NewestPages.page.php' );
	}

	function efNewestPages() {
		global $wgMessageCache, $wgVersion;
		if( version_compare( $wgVersion, '1.8.0', '<' ) ) {
			$wgMessageCache->addMessages( efNewestPagesMessages( true ) );
		} else {
			foreach( efNewestPagesMessages() as $lang => $messages )
				$wgMessageCache->addMessages( $messages, $lang );
		}
		if( version_compare( $wgVersion, '1.7.0', '<' ) )
			SpecialPage::addPage( new NewestPages() );
	}

} else {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

