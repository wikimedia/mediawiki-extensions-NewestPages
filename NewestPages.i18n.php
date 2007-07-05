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

/* Dutch (Siebrand Mazeland) */
'nl' => array(
'newestpages' => 'Nieuwe pagina\'s',
'newestpages-header' => "'''Op deze pagina staan de $1 meest recent aangemaakte pagina's van deze wiki.'''",
'newestpages-limitlinks' => 'Toon maximaal $1 pagina\'s',
'newestpages-namespace' => 'Naamruimte:',
'newestpages-none' => 'Geen resultaten.',
'newestpages-ns-header' => "'''Deze pagina geeft de $1 meest recente aangemaakte pagina's weer in de naamruimte $2.'''",
'newestpages-showing' => 'De $1 meest recente pagina\'s worden getoond:',
'newestpages-submit' => 'OK',
'newestpages-showredir' => 'Toon redirects',
'newestpages-hideredir' => 'Verberg redirects',
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

/* Slovak (helix84) */
'sk' => array(
'newestpages' => 'Najnovšie stránky',
'newestpages-header' => "'''Toto je zoznam $1 najnovších stránok na wiki.'''",
'newestpages-limitlinks' => 'Zobraziť najviac $1 stránok',
'newestpages-namespace' => 'Menný priestor:',
'newestpages-none' => 'Neboli nájdené žiadne záznamy.',
'newestpages-ns-header' => "'''Toto je zoznam $1 najnovších stránok v mennom priestore $2.'''",
'newestpages-showing' => 'Zoznam $1 najnovších stránok:',
'newestpages-submit' => 'Choď',
'newestpages-showredir' => 'Zobraziť presmerovacie stránky',
'newestpages-hideredir' => 'Skryť presmerovacie stránky',
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

/* Cantonese (Hillgentleman, Shinjiman) */
'yue' => array(
'newestpages' => '新頁',
'newestpages-header' => "'''呢度列舉成個維基入面最新 $1 頁。'''",
'newestpages-limitlinks' => '攤開頂龍 $1 版',
'newestpages-namespace' => '空間名:',
'newestpages-none' => '乜都揾唔到。',
'newestpages-ns-header' => "'''呢度列舉$2 空間名裏面最新 $1 篇文。'''",
'newestpages-showing' => '攤開最新$1 篇文：',
'newestpages-submit' => '去',
'newestpages-showredir' => '攤開啲跳轉頁',
'newestpages-hideredir' => '摺埋啲跳轉頁',
),

/* Chinese (Simplified) (下一次登录) */
'zh-hans' => array(
'newestpages' => '最新页面',
'newestpages-header' => "'''本页面列举维基上第$1新的页面。'''",
'newestpages-limitlinks' => '显示$1个页面',
'newestpages-namespace' => '名字空间：',
'newestpages-none' => '没找到页面。',
'newestpages-ns-header' => "'''本页面列举$2名字空间中第$1新的页面。'''",
'newestpages-showing' => '正在列举第$1新的页面：',
'newestpages-submit' => '提交',
'newestpages-showredir' => '显示重定向页面',
'newestpages-hideredir' => '隐藏重定向页面',
),

/* Chinese (Traditional) (KilluaZaoldyeck, Shinjiman) */
'zh-hant' => array(
'newestpages' => '最新頁面',
'newestpages-header' => "'''本頁列出維基上第$1新的頁面。'''",
'newestpages-limitlinks' => '顯示$1個頁面',
'newestpages-namespace' => '名字空間：',
'newestpages-none' => '沒找到頁面。',
'newestpages-ns-header' => "'''本頁列出$2名字空間中第$1個新的頁面。'''",
'newestpages-showing' => '正在列出第$1個新的頁面：',
'newestpages-submit' => '提交',
'newestpages-showredir' => '顯示重定向頁面',
'newestpages-hideredir' => '隱藏重定向頁面',
),

	);
	/* Chinese defaults, fallback to zh-hans or zh-hant */
	$messages['zh-cn'] = $messages['zh-hans'];
	$messages['zh-hk'] = $messages['zh-hant'];
	$messages['zh-sg'] = $messages['zh-hans'];
	$messages['zh-tw'] = $messages['zh-hant'];
	/* CAntonese default, fallback to yue */
	$messages['zh-yue'] = $messages['yue'];

	return $single ? $messages['en'] : $messages;
}


