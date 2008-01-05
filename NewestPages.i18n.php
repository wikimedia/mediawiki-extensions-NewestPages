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

'af' => array(
	'newestpages-namespace' => 'Naamruimte:',
),

'ar' => array(
	'newestpages' => 'أجدد الصفحات',
	'newestpages-header' => '\'\'\'هذه الصفحة تعرض أجدد $1 صفحة في الويكي.\'\'\'',
	'newestpages-limitlinks' => 'اعرض حتى $1 صفحة',
	'newestpages-namespace' => 'النطاق:',
	'newestpages-none' => 'لم يتم العثور على مدخلات.',
	'newestpages-ns-header' => '\'\'\'هذه الصفحة تعرض أجدد $1 صفحة في نطاق $2.\'\'\'',
	'newestpages-showing' => 'عرض أجدد $1 صفحة:',
	'newestpages-submit' => 'اذهب',
	'newestpages-showredir' => 'عرض صفحات التحويل',
	'newestpages-hideredir' => 'إخفاء صفحات التحويل',
),

'bcl' => array(
	'newestpages' => 'Mga pinakabâgong páhina',
	'newestpages-limitlinks' => 'Ipahiling hasta sa $1 na mga páhina',
	'newestpages-none' => 'Mayong nakuâng entrada.',
	'newestpages-submit' => 'Dumanán',
	'newestpages-hideredir' => 'Tagôon an mga redirektang páhina',
),

/** Bulgarian (Български)
 * @author Spiritia
 */
'bg' => array(
	'newestpages'            => 'Най-нови страници',
	'newestpages-header'     => "'''{{PLURAL:$1|Най-новата $1 страница|Списък на най-новите $1 страници}} в уикито.'''",
	'newestpages-limitlinks' => 'Показване най-много на $1 {{PLURAL:$1|страница|страници}}',
	'newestpages-namespace'  => 'Именно пространство:',
	'newestpages-none'       => 'Няма намерени записи.',
	'newestpages-ns-header'  => "'''{{PLURAL:$1|Най-новата $1 страница|Списък на най-новите $1 страници}} в именно пространство $2.'''",
	'newestpages-showing'    => 'Показване на $1 {{PLURAL:$1|най-нова страница|най-нови страници}}:',
	'newestpages-submit'     => 'Показване',
	'newestpages-showredir'  => 'Показване на пренасочващите страници',
	'newestpages-hideredir'  => 'Скриване на пренасочващите страници',
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

'dsb' => array(
	'newestpages' => 'Nejnowše boki',
	'newestpages-header' => '\'\'\'Toś ten bok nalicujo $1 nejnowšych bokow na toś tom wikiju.\'\'\'',
	'newestpages-limitlinks' => 'Pokaž {{Plural:$1|bok|boka|boki}}',
	'newestpages-namespace' => 'mjenjowy rum',
	'newestpages-none' => 'Žedne zapise njejsu se namakali.',
	'newestpages-ns-header' => '\'\'\'Toś ten bok nalicujo $1 nejnowšych bokow w mjenjowem rumje $2.\'\'\'',
	'newestpages-showing' => 'Nejnowše $1 boki:',
	'newestpages-submit' => 'Pytaś',
	'newestpages-showredir' => 'Pśesměrowanja pokazaś',
	'newestpages-hideredir' => 'Pśesměrowanja schowaś',
),

/** Greek (Ελληνικά)
 * @author Consta
 */
'el' => array(
	'newestpages'        => 'Νεώτερες σελίδες',
	'newestpages-submit' => 'Πηγαίνετε',
),

'eo' => array(
	'newestpages' => 'Plej novaj paĝoj',
	'newestpages-header' => '\'\'\'Ĉi tiu paĝo listigas la $1 plej novajn paĝojn en la vikio.\'\'\'',
	'newestpages-limitlinks' => 'Montru ĝis $1 paĝojn',
	'newestpages-namespace' => 'Nomspaco:',
	'newestpages-none' => 'Ne estis trovitaj iuj enskribaĵoj',
	'newestpages-ns-header' => '\'\'\'Ĉi tiu paĝo listigas la $1 plej novajn paĝojn en la $2 nomspaco.\'\'\'',
	'newestpages-showing' => 'Listigas la $1 plej novajn paĝojn:',
	'newestpages-submit' => 'Ek',
	'newestpages-showredir' => 'Montru alidirektajn paĝojn',
	'newestpages-hideredir' => 'Kaŝu alidirektajn paĝojn',
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
	'newestpages-header' => "'''Cette page liste les $1 pages les plus récentes sur le wiki.'''",
	'newestpages-limitlinks' => 'Afficher jusqu’à $1 pages',
	'newestpages-namespace' => 'Espace Wiki :',
	'newestpages-none' => 'Aucune page n’a été trouvée',
	'newestpages-ns-header' => "'''Cette page liste les $1 pages les plus récente dans l’espace $2.'''",
	'newestpages-showing' => 'Affichage des $1 pages les plus récentes :',
	'newestpages-submit' => 'Lancer',
	'newestpages-showredir' => 'Afficher les pages de redirection.',
	'newestpages-hideredir' => 'Cacher les pages de redirection.',
),

'gl' => array(
	'newestpages' => 'Páxinas máis novas',
	'newestpages-header' => '\'\'\'Esta páxina lista as $1 páxinas novas no wiki.\'\'\'',
	'newestpages-limitlinks' => 'Amosar $1 páxinas',
	'newestpages-namespace' => 'Espazo de nomes:',
	'newestpages-none' => 'Ningunhas entradas foron atopadas.',
	'newestpages-ns-header' => '\'\'\'Esta páxina lista as $1 páxinas novas no espazo de nomes $2.\'\'\'',
	'newestpages-showing' => 'Listando $1 páxinas novas:',
	'newestpages-submit' => 'Ir',
	'newestpages-showredir' => 'Amosar páxinas redirixidas',
	'newestpages-hideredir' => 'Ocultar páxinas redirixidas',
),

'hsb' => array(
	'newestpages' => 'Najnowše strony',
	'newestpages-header' => '\'\'\'Tuta strona nalistuje $1 najnowšich stronow tutoho wikija.\'\'\'',
	'newestpages-limitlinks' => 'Do $1 stronow pokazać',
	'newestpages-namespace' => 'Mjenowy rum',
	'newestpages-none' => 'Žane zapiski namakane.',
	'newestpages-ns-header' => '\'\'\'Tuta strona nalistuje $1 najnowšich stronow z mjenoweho ruma $2.\'\'\'',
	'newestpages-showing' => '$1 najnowšich stronow:',
	'newestpages-submit' => 'Pytać',
	'newestpages-showredir' => 'Daleposrědkowanske strony pokazać',
	'newestpages-hideredir' => 'Dalesposrědkowanske strony schować',
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

'is' => array(
	'newestpages' => 'Nýjustu síður',
	'newestpages-header' => '\'\'\'Þessi síða listar $1 nýjustu síðurnar á þessu wiki.\'\'\'',
	'newestpages-limitlinks' => 'Sýna að hámarki $1 síður',
	'newestpages-namespace' => 'Nafnrými:',
	'newestpages-ns-header' => '\'\'\'Þessi síða listar $1 nýjustu síðurnar í $2 nafnrýminu.\'\'\'',
	'newestpages-showing' => 'Lista $1 nýjustu síðurnar:',
	'newestpages-submit' => 'Áfram',
	'newestpages-showredir' => 'Sýna tilvísanir',
	'newestpages-hideredir' => 'Fela tilvísanir',
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

'la' => array(
	'newestpages-namespace' => 'Spatium nominale:',
	'newestpages-submit' => 'Ire',
),

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
'lb' => array(
	'newestpages'            => 'Neitste Säiten',
	'newestpages-header'     => "'''Op dëser Säit stinn déi $1 neitste Säite vun dëser Wiki.'''",
	'newestpages-limitlinks' => 'Weis bis zu $1 Säiten',
	'newestpages-namespace'  => 'Nummraum:',
	'newestpages-none'       => 'Näischt fonnt.',
	'newestpages-ns-header'  => "'''Op dëse Säite stinn déi $1 neitste Säiten aus dem Nummraum $2.'''",
	'newestpages-showing'    => 'Déi $1 neitste Säiten:',
	'newestpages-submit'     => 'Sichen',
	'newestpages-showredir'  => 'Weis Redirect-Säiten',
	'newestpages-hideredir'  => 'Verstopp Redirect-Säiten',
),

'nds' => array(
	'newestpages' => 'Ne’este Sieden',
	'newestpages-header' => '\'\'\'Disse Siet wiest de $1 ne’esten Sieden op dat Wiki.\'\'\'',
	'newestpages-limitlinks' => '$1 Sieden wiesen',
	'newestpages-namespace' => 'Naamruum:',
	'newestpages-none' => 'Nix funnen',
	'newestpages-ns-header' => '\'\'\'Disse Siet wiest de $1 ne’esten Sieden in’n Naamruum $2.\'\'\'',
	'newestpages-showing' => '$1 ne’este Sieden wiesen:',
	'newestpages-submit' => 'Los',
	'newestpages-showredir' => 'Wiederleiden wiesen',
	'newestpages-hideredir' => 'Wiederleiden nich wiesen',
),

/* Dutch (Siebrand Mazeland) */
'nl' => array(
	'newestpages' => 'Nieuwe pagina\'s',
	'newestpages-header' => '\'\'\'Op deze pagina staan de $1 meest recent aangemaakte pagina\'s van deze wiki.\'\'\'',
	'newestpages-limitlinks' => 'Toon maximaal $1 pagina\'s',
	'newestpages-namespace' => 'Naamruimte:',
	'newestpages-none' => 'Geen resultaten.',
	'newestpages-ns-header' => '\'\'\'Deze pagina geeft de $1 meest recente aangemaakte pagina\'s weer in de naamruimte $2.\'\'\'',
	'newestpages-showing' => 'De $1 meest recente pagina\'s worden getoond:',
	'newestpages-submit' => 'OK',
	'newestpages-showredir' => 'Doorverwijzingen tonen',
	'newestpages-hideredir' => 'Doorverwijzingen verbergen',
),

'no' => array(
	'newestpages' => 'Nyeste sider',
	'newestpages-header' => '\'\'\'Denne siden lister opp de $1 nyeste sidene på denne wikien.\'\'\'',
	'newestpages-limitlinks' => 'Vis opptil $1 sider',
	'newestpages-namespace' => 'Navnerom:',
	'newestpages-none' => 'Ingenting funnet.',
	'newestpages-ns-header' => '\'\'\'Denne siden lister opp de $1 nyeste sidene i navnerommet $2.\'\'\'',
	'newestpages-showing' => 'Lister opp de $1 nyeste sidene:s',
	'newestpages-submit' => 'Gå',
	'newestpages-showredir' => 'Vis omdirigeringer',
	'newestpages-hideredir' => 'Skjul omdirigeringer',
),

/** Occitan (Occitan)
 * @author Cedric31
 */
'oc' => array(
	'newestpages'            => 'Paginas mai recentas',
	'newestpages-header'     => "'''Aquesta pagina lista las $1 paginas mai recentas sul wiki.'''",
	'newestpages-limitlinks' => 'Afichar fins a $1 paginas',
	'newestpages-namespace'  => 'Espaci Wiki:',
	'newestpages-none'       => 'Cap de pagina es pas estada trobada',
	'newestpages-ns-header'  => "'''Aquesta pagina lista las $1 paginas mai recentas dins l’espaci $2.'''",
	'newestpages-showing'    => 'Afichatge de las $1 paginas mai recentas :',
	'newestpages-submit'     => 'Amodar',
	'newestpages-showredir'  => 'Afichar las paginas de redireccion.',
	'newestpages-hideredir'  => 'Amagar las paginas de redireccion.',
),

'pl' => array(
	'newestpages' => 'Najnowsze strony',
	'newestpages-header' => '\'\'\'Ta strona pokazuje $1 najnowszych stron na tej wiki.\'\'\'',
	'newestpages-limitlinks' => 'Pokaż do $1 stron',
	'newestpages-namespace' => 'Przestrzeń nazw:',
	'newestpages-none' => 'Nie znaleziono żadnych wpisów.',
	'newestpages-ns-header' => '\'\'\'Ta strona pokazuje $1 najnowszych stron w przestrzeni nazw $2.\'\'\'',
	'newestpages-showing' => 'Prezentowanie $1 najnowszych stron:',
	'newestpages-submit' => 'Pokaż',
	'newestpages-showredir' => 'Pokaż strony przekierowujące',
	'newestpages-hideredir' => 'Ukryj strony przekierowujące',
),

'pms' => array(
	'newestpages' => 'Pàgine pì neuve',
	'newestpages-header' => '\'\'\'Ambelessì a-i é la lista dle $1 pàgine pì neuve dla wiki.\'\'\'',
	'newestpages-limitlinks' => 'Smon fin a $1 pàgine',
	'newestpages-namespace' => 'Spassi nominal:',
	'newestpages-none' => 'Gnun-a vos trovà.',
	'newestpages-ns-header' => '\'\'\'Ambelessì a-i é la lista dle $1 pàgine pì neuve dlë spassi nominal $2.\'\'\'',
	'newestpages-showing' => 'Lista dle $1 pàgine pì neuve:',
	'newestpages-submit' => 'Va',
	'newestpages-showredir' => 'Smon j\'ardiression',
	'newestpages-hideredir' => 'Stërma j\'ardiression',
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

'ss' => array(
	'newestpages-submit' => 'Kúhámba',
),

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
'stq' => array(
	'newestpages'            => 'Näiste Sieden',
	'newestpages-header'     => "'''Disse Siede liestet do $1 näiste Sieden fon dit Wiki ap.'''",
	'newestpages-limitlinks' => 'Wies $1 Sieden',
	'newestpages-namespace'  => 'Noomensruum:',
	'newestpages-none'       => 'Naan Iendraach fuunen.',
	'newestpages-ns-header'  => "'''Disse Siede liestet do $1 näiste Sieden in dän Noomensruum $2 ap.'''",
	'newestpages-showing'    => 'Do $1 näiste Sieden:',
	'newestpages-submit'     => 'Säike',
	'newestpages-showredir'  => 'Wiederlaitengssieden anwiese',
	'newestpages-hideredir'  => 'Wiederlaitengssieden ferstopje.',
),

/** Tonga (faka-Tonga)
 * @author Tauʻolunga
 */
'to' => array(
	'newestpages'            => 'Ngaahi peesi foʻou taha',
	'newestpages-header'     => "'''ʻOku lisi ʻi he pēsí ni ko e ngaahi peesi foʻou ʻe $1 ʻo e ''wiki'' ʻeni.'''",
	'newestpages-limitlinks' => 'ʻAsi mai ha ngaahi peesi aʻu ki he $1',
	'newestpages-namespace'  => 'Vā hingoa:',
	'newestpages-none'       => 'Naʻe ʻikai ʻilo ha lēkoti',
	'newestpages-ns-header'  => "'''ʻOku lisi ʻi he pēsí ni ko e ngaahi peesi foʻou ʻe $1 ʻi he vā hingoa $2.'''",
	'newestpages-showing'    => 'ʻOku lisi ha peesi foʻou taha ʻe $1:',
	'newestpages-submit'     => 'Fai ā',
	'newestpages-showredir'  => 'ʻAsi ha ngaahi kupu fakaʻuhingakehe',
	'newestpages-hideredir'  => 'Toi ha ngaahi kupu fakaʻuhingakehe',
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
	$messages['zh'] = $messages['zh-hans'];
	$messages['zh-cn'] = $messages['zh-hans'];
	$messages['zh-hk'] = $messages['zh-hant'];
	$messages['zh-sg'] = $messages['zh-hans'];
	$messages['zh-tw'] = $messages['zh-hant'];
	/* CAntonese default, fallback to yue */
	$messages['zh-yue'] = $messages['yue'];

	return $single ? $messages['en'] : $messages;
}
