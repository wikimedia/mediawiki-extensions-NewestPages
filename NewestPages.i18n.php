<?php

/**
 * Internationalisation file for the NewestPages extension
 * @package MediaWiki
 * @subpackage Extensions
 * @author Rob Church <robchur@gmail.com>
 * @copyright © 2006 Rob Church
 * @licence GNU General Public Licence 2.0
 */

function efNewestPagesMessages( $single = false ) {
	$messages = array(

/* English (Rob Church) */
'en' => array(
'newestpages' => 'Newest pages',
'newestpages-header' => "'''This page lists the $1 newest pages on the wiki.'''",
'newestpages-limitlinks' => 'Show up to $1 pages',
'newestpages-namespace' => 'Namespace:',
'newestpages-none' => 'No entries were found.',
'newestpages-ns-header' => "'''This page lists the $1 newest pages in the $2 namespace.'''",
'newestpages-showing' => 'Listing $1 newest pages:',
'newestpages-submit' => 'Go',
'newestpages-showredir' => 'Show redirect pages',
'newestpages-hideredir' => 'Hide redirect pages',
),

/* Italian (BrokenArrow) */
'it' => array(
'newestpages' => 'Pagine più recenti',
'newestpages-header' => "'''In questa pagina vengono elencate le $1 pagine create più di recente nel sito.'''",
'newestpages-limitlinks' => 'Mostra fino a $1 pagine',
'newestpages-namespace' => 'Namespace:',
'newestpages-none' => 'Nessuna pagina trovata.',
'newestpages-ns-header' => "'''In questa pagina vengono elencate le $1 pagine create più di recente nel namespace $2.'''",
'newestpages-showing' => 'Elenco delle $1 pagine create più di recente:',
'newestpages-submit' => 'Vai',
'newestpages-showredir' => 'Mostra i redirect',
'newestpages-hideredir' => 'Nascondi i redirect',
),

	);
	return $single ? $messages['en'] : $messages;
}

?>