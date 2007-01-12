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

/* Finnish (Niklas Laxström) */
'fi' => array(
'newestpages' => 'Uusimmat sivut',
'newestpages-header' => "'''Tällä sivulla on luettelo $1 uusimmasta sivusta tässä wikissä.'''",
'newestpages-limitlinks' => 'Näytä enintään $1 sivua',
'newestpages-namespace' => 'Nimiavaruus:',
'newestpages-none' => 'Ei uusia sivuja.',
'newestpages-ns-header' => "'''Tällä sivulla on luettelo $1 uusimmasta sivusta nimiavaruudessa $2.'''",
'newestpages-showing' => 'Näytetään $1 uusinta sivua:',
'newestpages-submit' => 'Hae',
'newestpages-showredir' => 'Näytä uudelleenohjaukset',
'newestpages-hideredir' => 'Piilota uudelleenohjaukset',
),

/* French (Bertrand GRONDIN) */
'fr' => array(
'newestpages' => 'Pages les plus récentes',
'newestpages-header' => "'''Cette pages liste les $1 pages les plus récentes sur le wiki.'''",
'newestpages-limitlinks' => 'Afficher jusqu\'à $1 pages',
'newestpages-namespace' => 'Espace Wiki:',
'newestpages-none' => 'Aucune page n\'a été trouvée',
'newestpages-ns-header' => "'''Cette page liste les $1 pages les plus récente dans l'espace $2.'''",
'newestpages-showing' => 'Affichage des $1 pages les plus récentes:',
'newestpages-submit' => 'Lancer',
'newestpages-showredir' => 'Afficher les pages de redirect.',
'newestpages-hideredir' => 'Cacher les pages de redirect.',
),

/* Indonesian (Ivan Lanin) */
'id' => array(
'newestpages' => 'Halaman terbaru',
'newestpages-header' => "'''Halaman ini memberikan daftar $1 halaman terbaru di wiki ini.'''",
'newestpages-limitlinks' => 'Menampilkan sampai $1 halaman',
'newestpages-namespace' => 'Ruang nama:',
'newestpages-none' => 'Tidak ditemukan entri.',
'newestpages-ns-header' => "'''Halaman ini memberikan daftar $1 halaman terbaru di ruang nama $2.'''",
'newestpages-showing' => 'Menampilkan $1 halaman terbaru:',
'newestpages-submit' => 'Cari',
'newestpages-showredir' => 'Tampilkan halaman pengalihan',
'newestpages-hideredir' => 'Sembunyikan halaman pengalihan',
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

/* Portuguese (Lugusto) */
'pt' => array(
'newestpages' => 'Páginas novas',
'newestpages-header' => "'''Esta página lista as $1 páginas mais recentes deste wiki.'''",
'newestpages-limitlinks' => 'Exibir até $1 páginas',
'newestpages-namespace' => 'Espaço nominal:',
'newestpages-none' => 'Não foram encontrados resultados.',
'newestpages-ns-header' => "'''Esta página lista as $1 páginas mais recentes do espaço nominal $2.'''",
'newestpages-showing' => 'Listando as $1 páginas mais recentes:',
'newestpages-submit' => 'Ir',
'newestpages-showredir' => 'Exibir redireccionamentos',
'newestpages-hideredir' => 'Ocultar redireccionamentos',
),

	);
	return $single ? $messages['en'] : $messages;
}

?>