<?php

/**
 * Internationalisation file for the NewestPages extension
 * @addtogroup Extensions
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

/* German (Markus Klatt) */
'de' => array(
'newestpages' => 'Neueste Seiten',
'newestpages-header' => "'''Diese Seite listet die $1 neuesten Seiten dieses Wikis auf.'''",
'newestpages-limitlinks' => 'Zeige $1 Seiten',
'newestpages-namespace' => 'Namensraum:',
'newestpages-none' => 'Kein Eintrag gefunden.',
'newestpages-ns-header' => "'''Diese Seite listet die $1 neuesten Seiten im Namensraum $2 auf.'''",
'newestpages-showing' => 'Die $1 neuesten Seiten:',
'newestpages-submit' => 'Suchen',
'newestpages-showredir' => 'Weiterleitungsseiten anzeigen',
'newestpages-hideredir' => 'Weiterleitungsseiten ausblenden',
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
'newestpages-limitlinks' => 'Afficher jusqu’à $1 pages',
'newestpages-namespace' => 'Espace Wiki :',
'newestpages-none' => 'Aucune page n’a été trouvée',
'newestpages-ns-header' => "'''Cette page liste les $1 pages les plus récente dans l’espace $2.'''",
'newestpages-showing' => 'Affichage des $1 pages les plus récentes :',
'newestpages-submit' => 'Lancer',
'newestpages-showredir' => 'Afficher les pages de redirection.',
'newestpages-hideredir' => 'Cacher les pages de redirection.',
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

/* Serbian default (Sasa Stefanovic) */
'sr' => array(
'newestpages' => 'Најновије странице',
'newestpages-header' => "'''Ова страница показује $1 најновијих страница на Вики.'''",
'newestpages-limitlinks' => 'Прикажи $1 страница',
'newestpages-namespace' => 'Именски простор:',
'newestpages-none' => 'Није ништа пронађено.',
'newestpages-ns-header' => "'''Ова страница показује $1 најновијих страница у $2 именском простору.'''",
'newestpages-showing' => 'Приказ $1 најновијих страница:',
'newestpages-submit' => 'Иди',
'newestpages-showredir' => 'Прикажи странице преусмерења',
'newestpages-hideredir' => 'Сакриј странице преусмерења',
),

/* Serbian cyrillic (Sasa Stefanovic) */
'sr-ec' => array(
'newestpages' => 'Најновије странице',
'newestpages-header' => "'''Ова страница показује $1 најновијих страница на Вики.'''",
'newestpages-limitlinks' => 'Прикажи $1 страница',
'newestpages-namespace' => 'Именски простор:',
'newestpages-none' => 'Није ништа пронађено.',
'newestpages-ns-header' => "'''Ова страница показује $1 најновијих страница у $2 именском простору.'''",
'newestpages-showing' => 'Приказ $1 најновијих страница:',
'newestpages-submit' => 'Иди',
'newestpages-showredir' => 'Прикажи странице преусмерења',
'newestpages-hideredir' => 'Сакриј странице преусмерења',
),

/* Serbian latin (Sasa Stefanovic) */
'sr-el' => array(
'newestpages' => 'Najnovije stranice',
'newestpages-header' => "'''Ova stranica pokazuje $1 najnovijih stranica na Viki.'''",
'newestpages-limitlinks' => 'Prikaži $1 stranica',
'newestpages-namespace' => 'Imenski prostor:',
'newestpages-none' => 'Nije ništa pronađeno.',
'newestpages-ns-header' => "'''Ova stranica pokazuje $1 najnovijih stranica u $2 imenskom prostoru.'''",
'newestpages-showing' => 'Prikaz $1 najnovijih stranica:',
'newestpages-submit' => 'Idi',
'newestpages-showredir' => 'Prikaži stranice preusmerenja',
'newestpages-hideredir' => 'Sakrij stranice preusmerenja',
),

	);
	return $single ? $messages['en'] : $messages;
}

?>