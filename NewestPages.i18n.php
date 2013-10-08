<?php
/**
 * Internationalisation file for the NewestPages extension
 *
 * @file
 * @ingroup Extensions
 * @author Rob Church <robchur@gmail.com>
 * @copyright © 2006 Rob Church
 * @licence GNU General Public Licence 2.0
 */

$messages = array();

/** English
 * @author Rob Church
 */
$messages['en'] = array(
	'newestpages'            => 'Newest pages',
	'newestpages-desc'       => 'Shows the [[Special:NewestPages|last X pages]] added to the wiki',
	'newestpages-header'     => "'''This page lists the {{PLURAL:$1|newest page|$1 newest pages}} on the wiki.'''",
	'newestpages-limitlinks' => 'Show up to $1 pages',
	'newestpages-namespace'  => 'Namespace:',
	'newestpages-none'       => 'No entries were found.',
	'newestpages-ns-header'  => "'''This page lists the {{PLURAL:$1|newest page|$1 newest pages}} in the $2 namespace.'''",
	'newestpages-showing'    => 'Listing {{PLURAL:$1|newest page|$1 newest pages}}:',
	'newestpages-submit'     => 'Go',
	'newestpages-showredir'  => 'Show redirect pages',
	'newestpages-hideredir'  => 'Hide redirect pages',
);

/** Message documentation (Message documentation)
 * @author Jon Harald Søby
 * @author Purodha
 * @author Shirayuki
 * @author Siebrand
 * @author The Evil IP address
 */
$messages['qqq'] = array(
	'newestpages' => '{{doc-special|NewestPages|unlisted=1}}',
	'newestpages-desc' => '{{desc|name=Newest Pages|url=http://www.mediawiki.org/wiki/Extension:Newest_Pages}}',
	'newestpages-header' => 'Parameters
* $1 - limit of number of pages (value of <code>$wgNewestPagesLimit</code>)
See also:
* {{msg-mw|Newestpages-ns-header}}',
	'newestpages-limitlinks' => 'Parameters:
* $1 - a list of links (pipe-separated), like "10 | 20 | 30 | 50 | 100 | 150"',
	'newestpages-namespace' => '{{Identical|Namespace}}',
	'newestpages-none' => 'Used if the query result is empty.',
	'newestpages-ns-header' => 'Parameters
* $1 - limit of number of pages (value of <code>$wgNewestPagesLimit</code>)
* $2 - namespace name
See also:
* {{msg-mw|Newestpages-header}}',
	'newestpages-showing' => 'This message is followed by the list of newest pages. Parameters:
* $1 - number of pages',
	'newestpages-submit' => '{{Identical|Go}}',
	'newestpages-showredir' => 'Used as link text.

See also:
* {{msg-mw|Newestpages-hideredir}}',
	'newestpages-hideredir' => 'Used as link text.

See also:
* {{msg-mw|Newestpages-showredir}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 * @author SPQRobin
 */
$messages['af'] = array(
	'newestpages' => 'Nuutste bladsye',
	'newestpages-desc' => 'Die [[Special:NewestPages|X nuutste bladsye]] in die wiki',
	'newestpages-namespace' => 'Naamruimte:',
	'newestpages-none' => 'Geen resultate.',
	'newestpages-submit' => 'Laat waai',
	'newestpages-showredir' => 'Wys aanstuurbladsye',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'newestpages-namespace' => 'ክፍለ-ዊኪ፦',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'newestpages-namespace' => 'Espacio de nombres:',
);

/** Old English (Ænglisc)
 * @author Gott wisst
 * @author Wōdenhelm
 */
$messages['ang'] = array(
	'newestpages' => 'Nīwoste trametas',
	'newestpages-showing' => 'Ātellende $1 nīwoste trametas:', # Fuzzy
	'newestpages-submit' => 'Gān',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'newestpages' => 'أجدد الصفحات',
	'newestpages-desc' => 'يعرض [[Special:NewestPages|آخر صفحات]] تمت إضافتها إلى الويكي',
	'newestpages-header' => "'''هذه الصفحة تعرض أحدث {{PLURAL:$1||صفحة|صفحتين|$1 صفحات|$1 صفحة}} في الويكي.'''",
	'newestpages-limitlinks' => 'اعرض حتى $1 صفحة',
	'newestpages-namespace' => 'النطاق:',
	'newestpages-none' => 'لم يتم العثور على مدخلات.',
	'newestpages-ns-header' => "'''هذه الصفحة تعرض أحدث {{PLURAL:$1||صفحة|صفحتين|$1 صفحات|$1 صفحة}} في نطاق $2.'''",
	'newestpages-showing' => 'سرد أحدث {{PLURAL:$1||صفحة|صفحتين|$1 صفحات|$1 صفحة}}:',
	'newestpages-submit' => 'اذهب',
	'newestpages-showredir' => 'عرض صفحات التحويل',
	'newestpages-hideredir' => 'إخفاء صفحات التحويل',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'newestpages-namespace' => 'ܚܩܠܐ:',
	'newestpages-submit' => 'ܙܠ',
	'newestpages-showredir' => 'ܚܘܝ ܦܐܬܬ̈ܐ ܕܨܘܝܒܐ',
	'newestpages-hideredir' => 'ܛܫܝ ܦܐܬܬ̈ܐ ܕܨܘܝܒܐ',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 */
$messages['arz'] = array(
	'newestpages' => 'أجدد الصفحات',
	'newestpages-desc' => 'يعرض [[Special:NewestPages|آخر صفحات]] تمت إضافتها إلى الويكي',
	'newestpages-header' => "'''الصفحة دى بتعرض {{PLURAL:$1|صفحة|أجدد $1 صفحة}} فى الويكى.'''",
	'newestpages-limitlinks' => 'اعرض حتى $1 صفحة',
	'newestpages-namespace' => 'النطاق:',
	'newestpages-none' => 'لم يتم العثور على مدخلات.',
	'newestpages-ns-header' => "'''الصفحة دى بتعرض أجدد {{PLURAL:$1|صفحة|$1 صفحة}} فى النيمسبيس $2.'''",
	'newestpages-showing' => 'عرض {{PLURAL:$1|الصفحة|الصفحات $1}} الأجدد:',
	'newestpages-submit' => 'اذهب',
	'newestpages-showredir' => 'عرض صفحات التحويل',
	'newestpages-hideredir' => 'إخفاء صفحات التحويل',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'newestpages' => 'Páxines más nueves',
	'newestpages-desc' => 'Amuesa les [[Special:NewestPages|caberes X páxines]] amestaes a la wiki',
	'newestpages-header' => "'''Esta páxina llista {{PLURAL:$1|la páxina más nueva|les $1 páxines más nueves}} de la wiki.'''",
	'newestpages-limitlinks' => 'Amosar fasta $1 páxines',
	'newestpages-namespace' => 'Espaciu de nomes:',
	'newestpages-none' => "Nun s'alcontró entrada denguna.",
	'newestpages-ns-header' => "'''Esta páxina llista {{PLURAL:$1|la páxina más nueva|les $1 páxines más nueves}} del espaciu de nomes $2.'''",
	'newestpages-showing' => 'Llistando {{PLURAL:$1|la páxina más nueva|les $1 páxines más nueves}}:',
	'newestpages-submit' => 'Dir',
	'newestpages-showredir' => 'Amosar páxines de redireición',
	'newestpages-hideredir' => 'Anubrir páxines de redireición',
);

/** Kotava (Kotava)
 * @author Wikimistusik
 */
$messages['avk'] = array(
	'newestpages' => 'Tel lowarzaf bueem',
	'newestpages-header' => "'''Batu bu va telu $1 lowarzafu bu ke wiki vexalar.'''", # Fuzzy
	'newestpages-limitlinks' => 'Kimara va $1 bu',
	'newestpages-namespace' => 'Yoltxo :',
	'newestpages-none' => 'Nedoy trasiks.',
	'newestpages-ns-header' => "'''Batu bu va telu $1 lowarzafu bu koe $2 yoltxo vexalar.'''", # Fuzzy
	'newestpages-showing' => 'Vexalar va telu $1 lowarzafu bu :', # Fuzzy
	'newestpages-submit' => 'Skú !',
	'newestpages-showredir' => 'Nedira va graskan bueem',
	'newestpages-hideredir' => 'Palsera va graskan bueem',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'newestpages-namespace' => 'Adlar fəzası:',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'newestpages' => 'ان یئنی صحیفه‌لر',
	'newestpages-desc' => 'بو ویکی‌یه آرتیریلمیش [[Special:NewestPages|سون X صحیفه]]‌نی گؤسترر',
	'newestpages-header' => "'''بو صحیفه‌ده ویکی‌نین یئنی {{PLURAL:$1|صحیفه|$1 صحیفه}}‌سی لیست اولونور.'''",
	'newestpages-limitlinks' => '$1 صحیفه‌یه کیمی گؤستر',
	'newestpages-namespace' => 'آد فضاسی:',
	'newestpages-none' => 'هئچ بیر گیردی تاپیلانمادی.',
	'newestpages-ns-header' => "'''بو صحیفه‌ده $2 آد فضاسینین یئنی {{PLURAL:$1|صحیفه|$1 صحیفه}}‌سی لیست اولونور.'''",
	'newestpages-showing' => 'یئنی {{PLURAL:$1|صحیفه|$1 صحیفه}} لیستی:',
	'newestpages-submit' => 'گئت',
	'newestpages-showredir' => 'یول‌لاندیرما صحیفه‌لرینی گؤستر',
	'newestpages-hideredir' => 'یول‌لاندیرما صحیفه‌لرینی گیزلت',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'newestpages' => 'Mga pinakabâgong páhina',
	'newestpages-limitlinks' => 'Ipahiling hasta sa $1 na mga páhina',
	'newestpages-none' => 'Mayong nakuâng entrada.',
	'newestpages-submit' => 'Dumanán',
	'newestpages-hideredir' => 'Tagôon an mga redirektang páhina',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 */
$messages['be-tarask'] = array(
	'newestpages' => 'Новыя старонкі',
	'newestpages-desc' => 'Адлюстроўвае [[Special:NewestPages|апошнія X старонак]], дададзеных у {{GRAMMAR:месны|{{SITENAME}}}}',
	'newestpages-header' => "'''Гэтая старонка паказвае $1 {{PLURAL:$1|новую старонку|новыя старонкі|новых старонак}} {{GRAMMAR:родны|{{SITENAME}}}}.'''",
	'newestpages-limitlinks' => 'Паказваць да $1 {{PLURAL:$1|старонкі|старонак|старонак}}',
	'newestpages-namespace' => 'Прастора назваў:',
	'newestpages-none' => 'Запісаў ня знойдзена.',
	'newestpages-ns-header' => "'''Гэтая старонка паказвае $1 {{PLURAL:$1|новую старонку ў|новыя старонкі ў|новых старонак у}} прасторы назваў $2.'''",
	'newestpages-showing' => 'Сьпіс $1 {{PLURAL:$1|новай старонкі|новых старонак|новых старонак}}:',
	'newestpages-submit' => 'Паказаць',
	'newestpages-showredir' => 'Паказаць старонкі перанакіраваньняў',
	'newestpages-hideredir' => 'Схаваць старонкі перанакіраваньняў',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Spiritia
 */
$messages['bg'] = array(
	'newestpages' => 'Най-нови страници',
	'newestpages-desc' => 'Показва [[Special:NewestPages|последните Х страници]], създадени в уикито',
	'newestpages-header' => "'''Тази страница съдържа списък на {{PLURAL:$1|най-новата страница|най-новите $1 страници}} в уикито.'''",
	'newestpages-limitlinks' => 'Показване най-много на $1 {{PLURAL:$1|страница|страници}}',
	'newestpages-namespace' => 'Именно пространство:',
	'newestpages-none' => 'Няма намерени записи.',
	'newestpages-ns-header' => "'''Тази страница съдържа списък на {{PLURAL:$1|най-новата страница|най-новите $1 страници}} в именно пространство $2.'''",
	'newestpages-showing' => 'Показване на {{PLURAL:$1|най-новата страница|най-новите $1 страници}}:',
	'newestpages-submit' => 'Отваряне',
	'newestpages-showredir' => 'Показване на пренасочващите страници',
	'newestpages-hideredir' => 'Скриване на пренасочващите страници',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'newestpages' => 'নতুনতম পাতাসমূহ',
	'newestpages-limitlinks' => '$1টি পর্যন্ত পাতা দেখাও',
	'newestpages-namespace' => 'নামস্থান:',
	'newestpages-none' => 'কোনো সংযোজন খুঁজে পাওয়া যায়নি।',
	'newestpages-submit' => 'চলো',
	'newestpages-showredir' => 'পুনর্নির্দেশ পাতাগুলো দেখাও',
	'newestpages-hideredir' => 'পুনর্নির্দেশ পাতাগুলো লুকাও',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'newestpages' => 'Pajennoù nevesañ',
	'newestpages-desc' => 'Diskouez a ra an [[Special:NewestPages|X pajenn ziwezhañ]] bet ouzhpennet war ar wiki.',
	'newestpages-header' => "'''Rollañ a ra ar bajenn-mañ {{PLURAL:$1|pajenn nevesañ|$1 pajenn nevesañ}} ar wiki.'''",
	'newestpages-limitlinks' => 'Diskouez betek $1 pajenn',
	'newestpages-namespace' => 'Esaouenn anv :',
	'newestpages-none' => 'Pajenn ebet kavet.',
	'newestpages-ns-header' => "'''Rollañ a ra ar bajenn-mañ ar {{PLURAL:$1|bajenn nevesañ|$1 pajenn nevesañ}} en esaouenn anv $2.'''",
	'newestpages-showing' => 'Rollañ {{PLURAL:$1|diouzh ar bajenn nevesañ|diouzh ar $1 pajenn nevesañ}} :',
	'newestpages-submit' => 'Mont',
	'newestpages-showredir' => 'Diskouez ar pajennoù adkas',
	'newestpages-hideredir' => 'Kuzhat ar pajennoù adkas',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'newestpages' => 'Najnovije stranice',
	'newestpages-desc' => 'Prikazuje [[Special:NewestPages|zadnjih X stranica]] dodanih na wiki',
	'newestpages-header' => "'''Ova stranica prikazuje {{PLURAL:$1|najnoviju stranicu|$1 najnovije stranice|$1 najnovijih stranica}} na wikiju.'''",
	'newestpages-limitlinks' => 'Prikaži do $1 stranica',
	'newestpages-namespace' => 'Imenski prostor:',
	'newestpages-none' => 'Nije pronađeno ništa.',
	'newestpages-ns-header' => "'''Ova stranica prikazuje {{PLURAL:$1|najnoviju stranicu|$1 najnovije stranice|$1 najnovijih stranica}} u imenskom prostoru $2.'''",
	'newestpages-showing' => 'Prikazuje {{PLURAL:$1|najnoviju stranicu|$1 najnovije stranice|$1 najnovijih stranica}}:',
	'newestpages-submit' => 'Idi',
	'newestpages-showredir' => 'Prikaži stranice preusmjeravanja',
	'newestpages-hideredir' => 'Sakrij stranice preusmjerenja',
);

/** Catalan (català)
 * @author SMP
 * @author Solde
 */
$messages['ca'] = array(
	'newestpages' => 'Pàgines més noves',
	'newestpages-submit' => 'Vés-hi',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'newestpages' => 'Керла агӀонаш',
	'newestpages-submit' => 'Кхочушдé',
);

/** Chamorro (Chamoru)
 * @author Jatrobat
 */
$messages['ch'] = array(
	'newestpages-submit' => 'Hånao',
);

/** Sorani Kurdish (کوردی)
 */
$messages['ckb'] = array(
	'newestpages-submit' => 'بڕۆ',
);

/** Czech (česky)
 */
$messages['cs'] = array(
	'newestpages-namespace' => 'Jmenný prostor:',
	'newestpages-submit' => 'Jít na',
);

/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'newestpages-submit' => 'прѣиди́',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'newestpages' => 'Tudalennau newydd diweddaraf',
	'newestpages-desc' => "Yn dangos y [[Special:NewestPages|llwyth diweddaraf o dudalennau newydd]] 'u gosodwyd ar y wici",
	'newestpages-header' => "'''Dyma restr o'r {{PLURAL:$1||dudalen|$1 dudalen|$1 tudalen|$1 thudalen|$1 tudalen}} newydd diweddaraf ar y wici.'''",
	'newestpages-limitlinks' => 'Dangos hyd at $1 o dudalennau',
	'newestpages-namespace' => 'Parth:',
	'newestpages-none' => 'Ni chafwyd unrhyw dudalennau newydd.',
	'newestpages-ns-header' => "'''Rhestrir yma y(r) {{PLURAL:$1||dudalen|$1 dudalen|$1 tudalen|$1 thudalen|$1 tudalen}} newydd diweddaraf yn y parth $2.'''",
	'newestpages-showing' => "Yn rhestru'r {{PLURAL:$1||dudalen|$1 dudalen|$1 tudalen|$1 thudalen|$1 tudalen}} newydd diweddaraf:",
	'newestpages-submit' => 'Eler',
	'newestpages-showredir' => 'Dangos tudalennau ailgyfeirio',
	'newestpages-hideredir' => 'Cuddio tudalennau ailgyfeirio',
);

/** Danish (dansk)
 * @author Jon Harald Søby
 */
$messages['da'] = array(
	'newestpages-namespace' => 'Navnerum:',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Markus Klatt
 * @author Raimond Spekking
 */
$messages['de'] = array(
	'newestpages' => 'Neueste Seiten',
	'newestpages-desc' => 'Ergänzt eine [[Special:NewestPages|Spezialseite]] zur Anzeige einer festzulegenden Anzahl neuer Seiten',
	'newestpages-header' => "'''Diese Seite listet die {{PLURAL:$1|neueste Seite|$1 neuesten Seiten}} dieses Wikis auf.'''",
	'newestpages-limitlinks' => 'Zeige $1 Seiten',
	'newestpages-namespace' => 'Namensraum:',
	'newestpages-none' => 'Kein Eintrag gefunden.',
	'newestpages-ns-header' => "'''Diese Seite listet die {{PLURAL:$1|neueste Seite|$1 neuesten Seiten}} im Namensraum $2 auf.'''",
	'newestpages-showing' => 'Die {{PLURAL:$1|neueste Seite|$1 neuesten Seiten}}:',
	'newestpages-submit' => 'Suchen',
	'newestpages-showredir' => 'Weiterleitungsseiten anzeigen',
	'newestpages-hideredir' => 'Weiterleitungsseiten ausblenden',
);

/** Zazaki (Zazaki)
 * @author Mirzali
 */
$messages['diq'] = array(
	'newestpages-namespace' => 'Cayê namey:',
	'newestpages-submit' => 'Şo',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 * @author Nepl1
 */
$messages['dsb'] = array(
	'newestpages' => 'Nejnowše boki',
	'newestpages-desc' => 'Pokazujo [[Special:NewestPages|nejnowšych X bokow]] wikija',
	'newestpages-header' => "Toś ten bok nalicujo {{PLURAL:$1|nejnowšy bok|$1 nejnowšej boka|$1 nejnowše boki|$1 nejnowšych bokow}} na toś tom wikiju.'''",
	'newestpages-limitlinks' => 'Pokaž {{PLURAL:$1|bok|boka|boki}}',
	'newestpages-namespace' => 'Mjenjowy rum',
	'newestpages-none' => 'Žedne zapise njejsu se namakali.',
	'newestpages-ns-header' => "Toś ten bok nalicujo {{PLURAL:$1|nejnowšy bok|$1 nejnowšej boka|$1 nejnowše boki|$1 nejnowšych bokow}} w mjenjowem rumje $2.'''",
	'newestpages-showing' => '{{PLURAL:$1|nejnowšy bok|$1 nejnowšej boka|$1 nejnowše boki|$1 nejnowšych bokow}}:',
	'newestpages-submit' => 'Pytaś',
	'newestpages-showredir' => 'Pśesměrowanja pokazaś',
	'newestpages-hideredir' => 'Pśesměrowanja schowaś',
);

/** Ewe (eʋegbe)
 * @author Natsubee
 */
$messages['ee'] = array(
	'newestpages' => 'Axa siwo le yeye wu',
	'newestpages-desc' => 'Efia [[Special:NewestPages|axa X susuewo]] siwo woda ɖe wiki la dzi',
	'newestpages-header' => "'''Axa sia fia {{PLURAL:$1|axa yeyeawu|axa $1 yeyeawowu}} le wiki la dzi'''",
	'newestpages-limitlinks' => 'Fia axawo ƒe xexlẽme vaseɖe $1',
	'newestpages-none' => 'Womekpɔ nuŋɔ̃ŋlɔ̃wo aɖeke o.',
	'newestpages-showing' => 'Wofia {{PLURAL: $1|axa yeyetɔwu|axa $1 yeyewutɔwo}}:',
	'newestpages-submit' => 'Yi',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Crazymadlover
 * @author Glavkos
 * @author ZaDiak
 */
$messages['el'] = array(
	'newestpages' => 'Νεώτερες σελίδες',
	'newestpages-limitlinks' => 'Εμφάνιση μέχρι και $1 σελίδες',
	'newestpages-namespace' => 'Ονοματοχώρος:',
	'newestpages-none' => 'Δεν βρέθηκαν καθόλου καταχωρήσεις.',
	'newestpages-showing' => 'Καταγραφή {{PLURAL:$1|νεότερης σελίδας|$1 νεότερων σελίδων}}:',
	'newestpages-submit' => 'Πηγαίνετε',
	'newestpages-showredir' => 'Εμφάνιση σελίδων ανακατεύθυνσης',
	'newestpages-hideredir' => 'Απόκρυψη σελίδων ανακατεύθυνσης',
);

/** Esperanto (Esperanto)
 * @author Michawiki
 * @author Tlustulimu
 * @author Yekrats
 */
$messages['eo'] = array(
	'newestpages' => 'Plej novaj paĝoj',
	'newestpages-desc' => 'Montras la [[Special:NewestPages|plej novajn X paĝojn]] aldonitajn al la vikio.',
	'newestpages-header' => "'''Ĉi tiu paĝo montras la plej {{PLURAL:$1|novan paĝon|novajn $1 paĝojn}} en la vikio.'''",
	'newestpages-limitlinks' => 'Montru ĝis $1 paĝojn',
	'newestpages-namespace' => 'Nomspaco:',
	'newestpages-none' => 'Ne estis trovitaj iuj enskribaĵoj',
	'newestpages-ns-header' => "'''Ĉi tiu paĝo montras la {{PLURAL:$1:plej novan paĝon|$1 plej novajn paĝojn}} en la nomspaco $2.'''",
	'newestpages-showing' => 'Listigas la {{PLURAL:$1|plej novan paĝon|$1 plej novajn paĝojn}}:',
	'newestpages-submit' => 'Ek',
	'newestpages-showredir' => 'Montru alidirektajn paĝojn',
	'newestpages-hideredir' => 'Kaŝu alidirektajn paĝojn',
);

/** Spanish (español)
 * @author Baiji
 * @author Crazymadlover
 * @author Imre
 * @author Jatrobat
 */
$messages['es'] = array(
	'newestpages' => 'Páginas más recientes',
	'newestpages-desc' => 'Muestra las [[Special:NewestPages|últimas X páginas]] agregadas al wiki',
	'newestpages-header' => "'''Esta página lista las {{PLURAL:$1|página más nueva|$1 páginas más nuevas}} en el wiki.'''",
	'newestpages-limitlinks' => 'Mostrar hasta $1 páginas',
	'newestpages-namespace' => 'Espacio de nombres:',
	'newestpages-none' => 'Ninguna entrada fue encontrada.',
	'newestpages-ns-header' => "'''esta página lista las {{PLURAL:$1|página más nueva|$1 páginas más nuevas}} en el nombre de espacio $2.'''",
	'newestpages-showing' => 'Listando {{PLURAL:$1|la página más nueva|$1 Las páginas más nuevas}}:',
	'newestpages-submit' => 'Ir',
	'newestpages-showredir' => 'Mostrar página de redirección',
	'newestpages-hideredir' => 'Esconder páginas de redirección',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Hendrik
 * @author Pikne
 */
$messages['et'] = array(
	'newestpages' => 'Uuemad leheküljed',
	'newestpages-limitlinks' => 'Näita kuni $1 lehekülge',
	'newestpages-namespace' => 'Nimeruum:',
	'newestpages-submit' => 'Mine',
	'newestpages-showredir' => 'Näita ümbersuunamislehekülgi',
	'newestpages-hideredir' => 'Peida ümbersuunamisleheküljed',
);

/** Basque (euskara)
 * @author An13sa
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'newestpages' => 'Orrialde berrienak',
	'newestpages-namespace' => 'Izen-tartea:',
	'newestpages-submit' => 'Joan',
	'newestpages-showredir' => 'Erakutsi birzuzenketa orrialdeak',
	'newestpages-hideredir' => 'Ezkutatu birzuzenketa orrialdeak',
);

/** Persian (فارسی)
 * @author Mjbmr
 * @author Vahid
 */
$messages['fa'] = array(
	'newestpages' => 'جدیدترین صفحه‌ها',
	'newestpages-desc' => 'نمایش [[Special:NewestPages|آخرین X صفحهٔ]] افزوده شده به ویکی',
	'newestpages-namespace' => 'فضای نام:',
	'newestpages-submit' => 'برو',
);

/** Finnish (suomi)
 * @author Crt
 * @author Niklas Laxström
 */
$messages['fi'] = array(
	'newestpages' => 'Uusimmat sivut',
	'newestpages-desc' => 'Näyttää halutun määrän [[Special:NewestPages|viimeisimmistä luoduista sivuista]] wikiin.',
	'newestpages-header' => "'''Tällä sivulla on luettelo {{PLURAL:$1|uusimmasta sivusta|$1 uusimmasta sivusta}} tässä wikissä.'''",
	'newestpages-limitlinks' => 'Näytä enintään $1 sivua',
	'newestpages-namespace' => 'Nimiavaruus:',
	'newestpages-none' => 'Ei uusia sivuja.',
	'newestpages-ns-header' => "'''Tällä sivulla on luettelo {{PLURAL:$1|uusimmasta sivusta|$1 uusimmasta sivusta}} nimiavaruudessa $2.'''",
	'newestpages-showing' => 'Näytetään {{PLURAL:$1|uusin sivu|$1 uusinta sivua}}:',
	'newestpages-submit' => 'Hae',
	'newestpages-showredir' => 'Näytä ohjaukset',
	'newestpages-hideredir' => 'Piilota ohjaukset',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'newestpages' => 'Nýggjastu síður',
	'newestpages-desc' => 'Vísir tær [[Special:NewestPages|seinastu X síðurnar]] sum vóru lagdar til wikiina',
	'newestpages-header' => "'''Henda síðan hevur yvirlit yvir {{PLURAL:$1|nýggjastu síðu|$1 nýggjastu síður}} á wikiini.'''",
	'newestpages-limitlinks' => 'Vís upp til $1 síður',
	'newestpages-namespace' => 'Navnarúm:',
	'newestpages-submit' => 'Far',
);

/** French (français)
 * @author Grondin
 * @author Urhixidur
 */
$messages['fr'] = array(
	'newestpages' => 'Pages les plus récentes',
	'newestpages-desc' => 'Affiche les [[Special:NewestPages|dernières pages]] ajoutées au wiki.',
	'newestpages-header' => "'''Cette page liste {{PLURAL:$1|la page la plus récente|les $1 pages les plus récentes}} sur le wiki.'''",
	'newestpages-limitlinks' => 'Afficher jusqu’à $1 pages',
	'newestpages-namespace' => 'Espace Wiki :',
	'newestpages-none' => 'Aucune page n’a été trouvée',
	'newestpages-ns-header' => "'''Cette page liste {{PLURAL:$1|la page la plus récente|les $1 pages les plus récentes}} dans l’espace $2.'''",
	'newestpages-showing' => 'Affichage {{PLURAL:$1|de la page la plus récente|des $1 pages les plus récentes}} :',
	'newestpages-submit' => 'Lancer',
	'newestpages-showredir' => 'Afficher les pages de redirection.',
	'newestpages-hideredir' => 'Cacher les pages de redirection.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'newestpages' => 'Pâges les ples novèles',
	'newestpages-desc' => 'Montre les [[Special:NewestPages|dèrriéres X pâges]] apondues u vouiqui',
	'newestpages-header' => "'''Ceta pâge liste {{PLURAL:$1|la pâge la ples novèla|les $1 pâges les ples novèles}} sur lo vouiqui.'''",
	'newestpages-limitlinks' => 'Fâre vêre tant qu’a $1 pâges',
	'newestpages-namespace' => 'Èspâço de noms :',
	'newestpages-none' => 'Gins d’entrâ trovâ.',
	'newestpages-ns-header' => "'''Ceta pâge liste {{PLURAL:$1|la pâge la ples novèla|les $1 pâges les ples novèles}} dedens l’èspâço de noms $2.'''",
	'newestpages-showing' => 'Visualisacion de l{{PLURAL:$1|a pâge la ples novèla|es $1 pâges les ples novèles}} :',
	'newestpages-submit' => 'Emmodar',
	'newestpages-showredir' => 'Fâre vêre les pâges de redirèccion',
	'newestpages-hideredir' => 'Cachiér les pâges de redirèccion',
);

/** Irish (Gaeilge)
 * @author Alison
 */
$messages['ga'] = array(
	'newestpages-namespace' => 'Ainmspás:',
);

/** Galician (galego)
 * @author Alma
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'newestpages' => 'Páxinas máis novas',
	'newestpages-desc' => 'Amosa as [[Special:NewestPages|últimas X páxinas]] engadidas ao wiki',
	'newestpages-header' => "'''Esta páxina lista {{PLURAL:$1|a páxina máis nova|as $1 páxinas máis novas}} do wiki.'''",
	'newestpages-limitlinks' => 'Mostrar $1 páxinas',
	'newestpages-namespace' => 'Espazo de nomes:',
	'newestpages-none' => 'Ningunhas entradas foron atopadas.',
	'newestpages-ns-header' => "'''Esta páxina lista {{PLURAL:$1|a páxina máis nova|as $1 páxinas máis novas}} no espazo de nomes $2.'''",
	'newestpages-showing' => 'Listando {{PLURAL:$1|a páxina máis nova|as $1 páxinas máis novas}}:',
	'newestpages-submit' => 'Ir',
	'newestpages-showredir' => 'Mostrar páxinas redirixidas',
	'newestpages-hideredir' => 'Ocultar páxinas redirixidas',
);

/** Gothic (Gothic)
 * @author Jocke Pirat
 */
$messages['got'] = array(
	'newestpages-namespace' => 'Seidofera:',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 */
$messages['grc'] = array(
	'newestpages-namespace' => 'Ὀνοματεῖον:',
	'newestpages-submit' => 'Ἱέναι',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'newestpages' => 'Nejschti Syte',
	'newestpages-desc' => 'Zeigt di [[Special:NewestPages|nejschte X Syte]] vum Wiki',
	'newestpages-header' => "'''Die Syte lischtet di {{PLURAL:$1|nejscht Syte|$1 nejschte Syte}} vu däm Wiki uf.'''",
	'newestpages-limitlinks' => 'Zeig $1 Syte',
	'newestpages-namespace' => 'Namensruum:',
	'newestpages-none' => 'Kei Yytrag gfunde.',
	'newestpages-ns-header' => "'''Die Syte lischtet di {{PLURAL:$1|nejscht Syten|$1 nejschte Syten}} im Namensruum $2 uf.'''",
	'newestpages-showing' => 'Di {{PLURAL:$1|nejscht Syte|$1 nejschte Syte}}:',
	'newestpages-submit' => 'Sueche',
	'newestpages-showredir' => 'Wyterleitigssyten aazeige',
	'newestpages-hideredir' => 'Wyterleitigssyten uusblände',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'newestpages-submit' => 'Gow',
);

/** Hausa (Hausa)
 */
$messages['ha'] = array(
	'newestpages-namespace' => 'Sararin suna:',
);

/** Hebrew (עברית)
 * @author Agbad
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'newestpages' => 'דפים אחרונים',
	'newestpages-desc' => 'הצגת [[Special:Newestpage|X הדפים האחרונים]] שנוספו לאתר',
	'newestpages-header' => "'''דף זה כולל רשימה של {{PLURAL:$1|הדף החדש ביותר שנוסף|$1 הדפים החדשים ביותר שנוספו}} לוויקי.'''",
	'newestpages-limitlinks' => 'הצגת $1 דפים לכל היותר',
	'newestpages-namespace' => 'מרחב שם:',
	'newestpages-none' => 'לא נמצאו רשומות.',
	'newestpages-ns-header' => "'''דף זה כולל רשימה של {{PLURAL:$1|הדף החדש ביותר שנוסף|$1 הדפים האחרונים שנוספו}} במרחב השם $2.'''",
	'newestpages-showing' => 'הצגת {{PLURAL:$1|הדף החדש ביותר|$1 הדפים החדשים ביותר}}:',
	'newestpages-submit' => 'הצגה',
	'newestpages-showredir' => 'הצגת דפי הפניה',
	'newestpages-hideredir' => 'הסתרת דפי הפניה',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'newestpages' => 'नवीनतम पन्ने',
	'newestpages-desc' => 'विकिपर बनाये गये [[Special:NewestPages|आखिरी X पन्ने]] दर्शाता हैं',
	'newestpages-header' => "'''यह पृष्ठ विकिपर बनाये गये आखिरी $1 पन्नोंकी सूची दर्शाता हैं।'''", # Fuzzy
	'newestpages-limitlinks' => '$1 तक पन्ने दर्शायें',
	'newestpages-namespace' => 'नामस्थान:',
	'newestpages-none' => 'एन्ट्री मिली नहीं।',
	'newestpages-ns-header' => "'''यह पृष्ठ $2 नामस्थानमें बनायें $1 नवीनतम पन्नोंकी सूची दर्शाता हैं।'''", # Fuzzy
	'newestpages-showing' => '$1 नवीनतम पन्नोंकी सूची:', # Fuzzy
	'newestpages-submit' => 'जायें',
	'newestpages-showredir' => 'अनुप्रेषित पन्ने दर्शायें',
	'newestpages-hideredir' => 'अनुप्रेषित पन्ने छुपायें',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 */
$messages['hil'] = array(
	'newestpages-submit' => 'Lakat',
);

/** Croatian (hrvatski)
 * @author Dalibor Bosits
 * @author Herr Mlinka
 */
$messages['hr'] = array(
	'newestpages' => 'Najnovije stranice',
	'newestpages-namespace' => 'Imenski prostor:',
	'newestpages-submit' => 'Kreni',
	'newestpages-showredir' => 'Prikaži preusmjerene stranice',
	'newestpages-hideredir' => 'Sakrij preusmjerene stranice',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'newestpages' => 'Najnowše strony',
	'newestpages-desc' => 'Pokazuje [[Special:NewestPages|poslednich X stronow]], kotrež je so wikiju přidało',
	'newestpages-header' => "Tuta strona nalistuje {{PLURAL:$1|najnowšu stronu|$1 najnowšej stronje|$1 najnowše strony|$1 najnowšich stronow}} tutoho wikija.'''",
	'newestpages-limitlinks' => 'Do $1 stronow pokazać',
	'newestpages-namespace' => 'Mjenowy rum',
	'newestpages-none' => 'Žane zapiski namakane.',
	'newestpages-ns-header' => "'''Tuta strona nalistuje {{PLURAL:$1|najnowšu stronu|$1 najnowšej stronje|$1 najnowše strony|$1 najnowšich stronow}} z mjenoweho ruma $2.'''",
	'newestpages-showing' => '{{PLURAL:$1|najnowša strona|$1 najnowšej stronje|$1 najnowše strony|$1 najnowšich stronow}}:',
	'newestpages-submit' => 'Pytać',
	'newestpages-showredir' => 'Daleposrědkowanske strony pokazać',
	'newestpages-hideredir' => 'Dalesposrědkowanske strony schować',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Enbéká
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'newestpages' => 'Legújabb lapok',
	'newestpages-desc' => 'Megmutatja az [[Special:NewestPages|utolsó X lapot]] a wikin',
	'newestpages-header' => "'''Ezen az oldalon a wiki {{PLURAL:$1||$1}} legújabb lapja látható.'''",
	'newestpages-limitlinks' => '$1 oldal megjelenítése',
	'newestpages-namespace' => 'Névtér:',
	'newestpages-none' => 'Nincsenek találatok.',
	'newestpages-ns-header' => "'''Ez az oldal a wiki {{PLURAL:$1||$1}} legújabb lapját listázza a(z) $2 névtérben.'''",
	'newestpages-showing' => '{{PLURAL:$1|Legújabb|$1 legújabb}} lap listázása:',
	'newestpages-submit' => 'Megjelenítés',
	'newestpages-showredir' => 'Átirányítások mutatása',
	'newestpages-hideredir' => 'Átirányítások elrejtése',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'newestpages' => 'Le paginas le plus recente',
	'newestpages-desc' => 'Monstra le [[Special:NewestPages|ultime X paginas]] addite al wiki',
	'newestpages-header' => "'''Iste pagina lista le {{PLURAL:$1|pagina|$1 paginas}} le plus recente in le wiki.'''",
	'newestpages-limitlinks' => 'Monstrar ussque a $1 paginas',
	'newestpages-namespace' => 'Spatio de nomines:',
	'newestpages-none' => 'Nulle entratas esseva trovate.',
	'newestpages-ns-header' => "'''Iste pagina lista le {{PLURAL:$1|pagina|$1 paginas}} le plus nove in le spatio de nomines $2.'''",
	'newestpages-showing' => 'Lista del {{PLURAL:$1|pagina|$1 paginas}} le plus nove:',
	'newestpages-submit' => 'Va',
	'newestpages-showredir' => 'Revelar paginas de redirection',
	'newestpages-hideredir' => 'Celar paginas de redirection',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Ivan Lanin
 * @author IvanLanin
 */
$messages['id'] = array(
	'newestpages' => 'Halaman terbaru',
	'newestpages-desc' => 'Menampilkan [[Special:NewestPages|X halaman terakhir]] yang ditambahkan ke wiki',
	'newestpages-header' => "'''Halaman ini menyajikan daftar {{PLURAL:$1|halaman|$1 halaman}} terbaru di wiki ini.'''",
	'newestpages-limitlinks' => 'Menampilkan sampai $1 halaman',
	'newestpages-namespace' => 'Ruang nama:',
	'newestpages-none' => 'Tidak ditemukan entri.',
	'newestpages-ns-header' => "'''Halaman ini menyajikan daftar {{PLURAL:$1|halaman|$1 halaman}} terbaru di ruang nama $2.'''",
	'newestpages-showing' => 'Menampilkan {{PLURAL:$1|halaman|$1 halaman}} terbaru:',
	'newestpages-submit' => 'Tuju ke',
	'newestpages-showredir' => 'Tampilkan halaman pengalihan',
	'newestpages-hideredir' => 'Sembunyikan halaman pengalihan',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'newestpages-namespace' => 'Nomaro:',
	'newestpages-submit' => 'Irez',
);

/** Icelandic (íslenska)
 * @author Bjarki S
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'newestpages' => 'Nýjustu síður',
	'newestpages-desc' => 'Sýnir [[Special:NewestPages|síðustu X síðurnar]] sem bætt var við þennan wiki',
	'newestpages-header' => "'''Þessi síða listar {{PLURAL:$1|nýjustu síðuna|$1 nýjustu síðurnar}} á þessu wiki.'''",
	'newestpages-limitlinks' => 'Sýna að hámarki $1 síður',
	'newestpages-namespace' => 'Nafnrými:',
	'newestpages-none' => 'Engin færsla fannst.',
	'newestpages-ns-header' => "'''Þessi síða listar {{PLURAL:$1|nýjustu síðuna|$1 nýjustu síðurnar}} í $2 nafnarýminu.'''",
	'newestpages-showing' => 'Lista {{PLURAL:$1|nýjustu síðuna|$1 nýjustu síðurnar}}:',
	'newestpages-submit' => 'Áfram',
	'newestpages-showredir' => 'Sýna tilvísanir',
	'newestpages-hideredir' => 'Fela tilvísanir',
);

/** Italian (italiano)
 * @author BrokenArrow
 * @author Darth Kule
 */
$messages['it'] = array(
	'newestpages' => 'Pagine più recenti',
	'newestpages-desc' => 'Mostra le [[Special:NewestPages|ultime X pagine]] aggiunte alla wiki',
	'newestpages-header' => "'''In questa pagina {{PLURAL:$1|viene elencata la pagina creata|vengono elencate le $1 pagine create}} più di recente nel sito.'''",
	'newestpages-limitlinks' => 'Mostra fino a $1 pagine',
	'newestpages-namespace' => 'Namespace:',
	'newestpages-none' => 'Nessuna pagina trovata.',
	'newestpages-ns-header' => "'''In questa pagina {{PLURAL:$1|viene elencata la pagina creata|vengono elencate le $1 pagine create}} più di recente nel namespace $2.'''",
	'newestpages-showing' => 'Elenco {{PLURAL:$1|della pagina creata|delle $1 pagine create}} più di recente:',
	'newestpages-submit' => 'Vai',
	'newestpages-showredir' => 'Mostra i redirect',
	'newestpages-hideredir' => 'Nascondi i redirect',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 * @author 青子守歌
 */
$messages['ja'] = array(
	'newestpages' => '新規作成されたページ',
	'newestpages-desc' => 'ウィキに追加された[[Special:NewestPages|最新の X 件のページ]]を表示する',
	'newestpages-header' => "'''このページでは、ウィキ内の{{PLURAL:$1|最新のページを表示|最新の $1 件のページ}}を列挙しています。'''",
	'newestpages-limitlinks' => '$1 件のページを表示する',
	'newestpages-namespace' => '名前空間:',
	'newestpages-none' => '該当するものはありませんでした。',
	'newestpages-ns-header' => "'''このページでは、$2名前空間内の{{PLURAL:$1|最新のページを表示|最新の $1 件のページを列挙}}しています。'''",
	'newestpages-showing' => '{{PLURAL:$1|最新のページ|最新の $1 件のページ}}:',
	'newestpages-submit' => '表示',
	'newestpages-showredir' => '転送ページを表示',
	'newestpages-hideredir' => '転送ページを非表示',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'newestpages' => 'Kaca-kaca anyar',
	'newestpages-limitlinks' => 'Tuduhna nganti tekan $1 kaca-kaca',
	'newestpages-namespace' => 'Bilik nama:',
	'newestpages-none' => 'Ora ditemokaké èntri.',
	'newestpages-submit' => 'Golèk',
	'newestpages-showredir' => 'Tuduhna kaca-kaca pangalihan',
	'newestpages-hideredir' => 'Delikna kaca-kaca pangalihan',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 * @author Malafaya
 */
$messages['ka'] = array(
	'newestpages' => 'უახლესი გვერდები',
	'newestpages-namespace' => 'სახელთა სივრცე:',
	'newestpages-none' => 'ჩანაწერები ვერ მოიძებნა.',
	'newestpages-ns-header' => "'''ეს გვერდი {{PLURAL:$1|უახლესია სახელთა სივრცეში|$1 უახლესია სახელთა სივრცეში}} $2.'''",
	'newestpages-showing' => '{{PLURAL:$1|უახლესი გვერდის|$1 უახლესი გვერდის}} სია:',
	'newestpages-submit' => 'სტატია',
	'newestpages-showredir' => 'გადამისამართების გვერდების ჩვენება',
	'newestpages-hideredir' => 'გადამისამართებული გვერდების დამალვა',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author Arystanbek
 */
$messages['kk-cyrl'] = array(
	'newestpages' => 'Ең жаңа беттер',
	'newestpages-desc' => 'Уикиге қосылған [[Special:NewestPages|соңғы X беттерді]] көрсету',
	'newestpages-header' => "'''Бұл бет уикидегі {{PLURAL:$1|ең жаңа|$1 ең жаңа беттер}} тізімі.'''",
	'newestpages-limitlinks' => '$1 бетке дейін көрсету',
	'newestpages-namespace' => 'Есім кеңістігі:',
	'newestpages-none' => 'Жазбалар табылмады.',
	'newestpages-ns-header' => "'''Бұл бет $2 есім кеңістігіндегі {{PLURAL:$1|ең жаңа бет|$1 ең жаңа беттер}} тізімі.'''",
	'newestpages-showing' => '{{PLURAL:$1|ең жаңа бет|$1 ең жаңа беттер}} тізімделген :',
	'newestpages-submit' => 'Өту',
	'newestpages-showredir' => 'Айдатқыш беттерді көрсету',
	'newestpages-hideredir' => 'Айдатқыш беттерді жасыру',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'newestpages' => 'ទំព័រថ្មីៗបំផុត',
	'newestpages-desc' => 'បង្ហាញ [[Special:ទំព័រ​ចុងក្រោយបំផុត|ទំព័រ​ចុងក្រោយបំផុត]] ដែលបានបន្ថែម​ទៅ​វិគី',
	'newestpages-header' => "'''ទំព័រនេះ​រាយ {{PLURAL:$1|newest page|$1 ទំព័រថ្មីៗបំផុត}} លើវិគីនេះ។'''",
	'newestpages-limitlinks' => 'បង្ហាញអតិបរមា $1 ទំព័រ',
	'newestpages-namespace' => 'លំហឈ្មោះ៖',
	'newestpages-none' => 'រកមិនឃើញអត្ថបទទេ។',
	'newestpages-ns-header' => "'''ទំព័រនេះ​រាយ{{PLURAL:$1|newest page|$1 ទំព័រថ្មីៗបំផុត}}ក្នុងលំហឈ្មោះ $2 ។'''",
	'newestpages-showing' => 'រាយ {{PLURAL:$1|ទំព័រថ្មីបំផុត|$1 ទំព័រថ្មីបំផុត}}​៖',
	'newestpages-submit' => 'ទៅ',
	'newestpages-showredir' => 'បង្ហាញទំព័របញ្ជូន',
	'newestpages-hideredir' => 'លាក់ទំព័របញ្ជូនបន្ត',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'newestpages' => 'ಹೊಚ್ಚಹೊಸ ಪುಟಗಳು',
	'newestpages-submit' => 'ಹೋಗು',
	'newestpages-showredir' => 'ಪುನರ್ನಿರ್ದೇಶನ ಪುಟಗಳನ್ನು ತೋರಿಸು',
	'newestpages-hideredir' => 'ಪುನರ್ನಿರ್ದೇಶನ ಪುಟಗಳನ್ನು ಅಡಗಿಸು',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'newestpages' => '최근 문서',
	'newestpages-desc' => '위키에 추가한 [[Special:NewestPages|최근 문서 X개]]를 봅니다',
	'newestpages-header' => "'''이 문서는 위키에 {{PLURAL:$1|최근 문서|최근 문서 $1개}}를 나타냅니다.'''",
	'newestpages-limitlinks' => '문서 $1개를 봅니다',
	'newestpages-namespace' => '이름공간:',
	'newestpages-none' => '항목을 찾을 수 없습니다',
	'newestpages-ns-header' => "'''이 문서는 $2 이름공간에서 {{PLURAL:$1|최근 문서 $1개}}를 나타냅니다.'''",
	'newestpages-showing' => '{{PLURAL:$1|최근 문서|최근 문서 $1}} 나타내기:',
	'newestpages-submit' => '보기',
	'newestpages-showredir' => '넘겨주기 문서 보기',
	'newestpages-hideredir' => '넘겨주기 문서 숨기기',
);

/** Krio (Krio)
 * @author Jose77
 */
$messages['kri'] = array(
	'newestpages-submit' => 'Go to am',
);

/** Kinaray-a (Kinaray-a)
 * @author Jose77
 */
$messages['krj'] = array(
	'newestpages-submit' => 'Agto',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'newestpages' => 'Neuste Sigge',
	'newestpages-desc' => 'Zeich de [[Special:NewestPages|neuste X Sigge]] em Wiki.',
	'newestpages-header' => "'''Di Sigg he list {{PLURAL:$1|de neuste Sigg|de $1 neuste Sigge|kein neu Sigge}} em Wiki op.'''",
	'newestpages-limitlinks' => 'Zeich {{PLURAL:ein Sigg|bes op $1 Sigge|kein Sigg}}:',
	'newestpages-namespace' => 'Appachtemang:',
	'newestpages-none' => 'Keine Enndraach jefonge.',
	'newestpages-ns-header' => "'''Di Sigg he list {{PLURAL:de neuste Sigg|de $1 neuste Sigge|kein neu Sigge}} em Appachtemang $2 op.'''",
	'newestpages-showing' => 'Zeich {{PLURAL:de neuste Sigg|de $1 neuste Sigge|kein neu Sigge}}:',
	'newestpages-submit' => 'Lohß Jonn!',
	'newestpages-showredir' => 'Zeich Ömleidunge',
	'newestpages-hideredir' => 'Lohß Ömleidunge fott',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'newestpages' => 'Rûpelên herî nû',
	'newestpages-namespace' => 'Boşahîya nav:',
	'newestpages-none' => 'Ti gorat nehate dîtin.',
	'newestpages-submit' => 'Biçe',
	'newestpages-showredir' => 'Rûpelên redirect nîşan bide',
	'newestpages-hideredir' => 'Rûpelên redirect veşêre',
);

/** Latin (Latina)
 * @author SPQRobin
 */
$messages['la'] = array(
	'newestpages-namespace' => 'Spatium nominale:',
	'newestpages-submit' => 'Ire',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'newestpages' => 'Neiste Säiten',
	'newestpages-desc' => 'Weist déi [[Special:NewestPages|läscht X Säiten]] déi op enger Wiki opgemaach goufen',
	'newestpages-header' => "'''Op dëser Säit {{Plural:$1|steet déi neiste Säit|stinn déi $1 neiste Säite}} vun dëser Wiki.'''",
	'newestpages-limitlinks' => 'Weis bis zu $1 Säiten',
	'newestpages-namespace' => 'Nummraum:',
	'newestpages-none' => 'Näischt fonnt.',
	'newestpages-ns-header' => "'''Op dëser Säit {{PLURAL:$1|steet déi neiste Säit|stinn déi $1 neiste Säiten}} aus dem Nummraum $2.'''",
	'newestpages-showing' => 'Weis déi {{PLURAL:$1|neiste Säit|$1 neiste Säiten}}:',
	'newestpages-submit' => 'Sichen',
	'newestpages-showredir' => 'Weis Redirect-Säiten',
	'newestpages-hideredir' => 'Verstopp Redirect-Säiten',
);

/** Ganda (Luganda)
 * @author Kizito
 */
$messages['lg'] = array(
	'newestpages-namespace' => 'Kuŋaanyizo:',
);

/** Lithuanian (lietuvių)
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'newestpages' => 'Naujausi puslapiai',
	'newestpages-desc' => 'Rodo [[Special:NewestPages|paskutiniuosius X puslapius]], pridėtus į wiki',
	'newestpages-header' => "'''Šis puslapis rikiuoja $1 naujausius šios wiki puslapius.'''", # Fuzzy
	'newestpages-limitlinks' => 'Rodyti iki $1 puslapių',
	'newestpages-namespace' => 'Vardų sritis:',
	'newestpages-none' => 'Reikšmių nerasta.',
	'newestpages-ns-header' => "'''Šis puslapis rikiuoja $1 naujausius puslapius $2 vardų srityje.'''", # Fuzzy
	'newestpages-showing' => 'Rikiuojami $1 naujausi puslapiai:', # Fuzzy
	'newestpages-submit' => 'Eiti',
	'newestpages-showredir' => 'Rodyti peradresavimų puslapius',
	'newestpages-hideredir' => 'Slėpti peradresavimų puslapius',
);

/** Latgalian (latgaļu)
 * @author Dark Eagle
 */
$messages['ltg'] = array(
	'newestpages-namespace' => 'Vuordu pluots:',
);

/** Latvian (latviešu)
 * @author GreenZeb
 */
$messages['lv'] = array(
	'newestpages' => 'Jaunākās lapas',
	'newestpages-desc' => 'Rāda [[Special:NewestPages|pēdējās X lapas]], kas pievienotas Vikipēidjā',
	'newestpages-header' => "Šajā lapā ir {{PLURAL:$1|parādīta viki jaunākā lapa| parādītas viki $1 jaunākās lapas}}.'''",
	'newestpages-limitlinks' => 'Rādīt līdz $1 lapām',
	'newestpages-namespace' => 'Vārdtelpa:',
	'newestpages-none' => 'Netika atrasts neviens ieraksts.',
	'newestpages-ns-header' => "Šajā lapā ir {{PLURAL:$1|parādīta jaunākā lapa| parādītas $1 jaunākās lapas}} $2 vārdtelpā.'''",
	'newestpages-showing' => 'Rāda {{PLURAL:$1|jaunāko lapu|$1 jaunākās lapas}}:',
	'newestpages-submit' => 'Atlasīt',
	'newestpages-showredir' => 'Parādīt pāradresācijas',
	'newestpages-hideredir' => 'Paslēpt pāradresācijas',
);

/** Eastern Mari (олык марий)
 * @author Сай
 */
$messages['mhr'] = array(
	'newestpages-namespace' => 'Лӱм-влакын кумдыкышт:',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'newestpages-submit' => 'Tuju',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'newestpages' => 'Најнови страници',
	'newestpages-desc' => 'Ги прикажува [[Special:NewestPages|последните X страници]] додадени на викито',
	'newestpages-header' => "'''На оваа страница {{PLURAL:$1|е наведена најновата страница|се наведени $1-те најнови страници}} на викито.'''",
	'newestpages-limitlinks' => 'Прикажи највеќе $1 страници',
	'newestpages-namespace' => 'Именски простор:',
	'newestpages-none' => 'Нема пронајдено записи.',
	'newestpages-ns-header' => "'''На оваа страница {{PLURAL:$1|е прикажана најновата страница|се прикажани $1-те најнови страници}} во именскиот простор $2.'''",
	'newestpages-showing' => 'Приказ на {{PLURAL:$1|најновата страница|$1-те најнови страници}}:',
	'newestpages-submit' => 'Прикажи',
	'newestpages-showredir' => 'Прикажи пренасочувања',
	'newestpages-hideredir' => 'Скриј пренасочувања',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'newestpages' => 'ഏറ്റവും പുതിയ താളുകൾ',
	'newestpages-desc' => 'വിക്കിയിലേക്കു [[Special:NewestPages|അവസാനമായി ചേർക്കപ്പെട്ട X താളുകൾ]] പ്രദർശിപ്പിക്കുന്നു.',
	'newestpages-header' => "'''വിക്കിയിലെ ഏറ്റവും {{PLURAL:$1|പുതിയ താൾ|പുതിയ $1 താളുകൾ}} ഈ താളിൽ പ്രദർശിപ്പിച്ചിരിക്കുന്നു.'''",
	'newestpages-limitlinks' => '$1 താളുകൾ വരെ പ്രദർശിപ്പിക്കുന്നു',
	'newestpages-namespace' => 'നാമമേഖല:',
	'newestpages-none' => 'എൻ‌ട്രികൾ ഒന്നും കണ്ടില്ല.',
	'newestpages-ns-header' => "ഈ താൾ $2 നാമമേഖലയിൽ പുതുതായി സൃഷ്ടിക്കപ്പെട്ട {{PLURAL:$1|ഒരു താൾ|$1 താളുകൾ}} പ്രദർശിപ്പിക്കുന്നു.'''",
	'newestpages-showing' => 'ഏറ്റവും പുതിയ {{PLURAL:$1|താൾ|$1 താളുകൾ}} പ്രദർശിപ്പിക്കുന്നു:',
	'newestpages-submit' => 'പോകൂ',
	'newestpages-showredir' => 'തിരിച്ചുവിടൽ താളുകൾ പ്രദർശിപ്പിക്കുക',
	'newestpages-hideredir' => 'തിരിച്ചുവിടൽ താളുകൾ മറയ്ക്കുക',
);

/** Mongolian (монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'newestpages-namespace' => 'Нэрний зай:',
	'newestpages-submit' => 'Явах',
);

/** Marathi (मराठी)
 * @author Kaustubh
 */
$messages['mr'] = array(
	'newestpages' => 'नवीनतम पाने',
	'newestpages-desc' => 'विकिवर वाढविण्यात आलेली [[Special:NewestPages|शेवटची X पाने]] दर्शवितो',
	'newestpages-header' => "'''हे पान विकिवर वाढविण्यात आलेल्या शेवटच्या $1 पानांची यादी देते.'''", # Fuzzy
	'newestpages-limitlinks' => '$1 पर्यंतची पाने दाखवा',
	'newestpages-namespace' => 'नामविश्व:',
	'newestpages-none' => 'नोंदी सापडल्या नाहीत.',
	'newestpages-ns-header' => "'''हे पान $2 नामविश्वातील $1 नवीनतम पानांची यादी देते.'''", # Fuzzy
	'newestpages-showing' => '$1 नवीनतम पानांची यादी:', # Fuzzy
	'newestpages-submit' => 'जा',
	'newestpages-showredir' => 'पुनर्निर्देशन पाने दाखवा',
	'newestpages-hideredir' => 'पुनर्निर्देशन पाने लपवा',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'newestpages' => 'Halaman terbaru',
	'newestpages-desc' => 'Memaparkan [[Special:NewestPages|X halaman terbaru]] yang ditambahkan pada wiki',
	'newestpages-header' => "'''Halaman ini menyenaraikan {{PLURAL:$1|halaman terbaru|$1 halaman terbaru}} di wiki ini.'''",
	'newestpages-limitlinks' => 'Paparkan sebanyak $1 halaman',
	'newestpages-namespace' => 'Ruang nama:',
	'newestpages-none' => 'Tiada entri dijumpai.',
	'newestpages-ns-header' => "'''Halaman ini menyenaraikan {{PLURAL:$1|halaman terbaru|$1 halaman terbaru}} di ruang nama $2.'''",
	'newestpages-showing' => 'Menyenaraikan {{PLURAL:$1|halaman terbaru|$1 halaman terbaru}}:',
	'newestpages-submit' => 'Pergi',
	'newestpages-showredir' => 'Paparkan halaman lencongan',
	'newestpages-hideredir' => 'Sorokkan halaman lencongan',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'newestpages' => 'Paġni l-aktar riċenti',
	'newestpages-desc' => 'Turi l-[[Special:NewestPages|aħħar X paġna]] miżjuda fuq il-wiki.',
	'newestpages-header' => "'''Din il-paġna turi l-aktar {{PLURAL:$1|paġna riċenti|$1 paġna riċenti}} fuq il-wiki.'''",
	'newestpages-limitlinks' => 'Uri sa $1 paġna',
	'newestpages-namespace' => 'Spazju tal-isem:',
	'newestpages-none' => 'Ma nstabet l-ebda paġna.',
	'newestpages-ns-header' => "'''Din il-paġna telenka l-aktar {{PLURAL:$1|paġna riċenti|$1 paġna riċenti}} fl-ispazju tal-isem $2.'''",
	'newestpages-showing' => 'Lista tal-{{PLURAL:$1|paġna|$1 paġna}} l-aktar riċenti:',
	'newestpages-submit' => 'Mur',
	'newestpages-showredir' => 'Uri r-riindirizzi',
	'newestpages-hideredir' => 'Aħbi r-riindirizzi',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'newestpages-namespace' => 'Лем потмозо:',
	'newestpages-submit' => 'Адя',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'newestpages' => 'Yancuīc zāzaniltin',
	'newestpages-desc' => 'Tiquinttāz in [[Special:NewestPages|xōcoyōc X zāzaniltin]] huiquipan',
	'newestpages-header' => "'''Nicān, in achi yancuīc ahmo {{PLURAL:$1|occē|occequīntīn $1}} zāzanilli huiquipan.'''",
	'newestpages-limitlinks' => 'Xiquintta huehca ōmpa $1 zāzaniltin',
	'newestpages-namespace' => 'Tōcātzin:',
	'newestpages-none' => 'Ahtleh ōmonēxti.',
	'newestpages-ns-header' => "'''Nicān {{PLURAL:$1|tiquitta in achi yancuīc ahmo occē|tiquintta in achi yancuīc ahmo occequīntīn $1}} zāzanilli $2 tōcātzimpan.'''",
	'newestpages-showing' => '{{PLURAL:$1|Motta achi yancuīc ahmo occē|Mottah achi yancuīc ahmo occequīntīn $1}} zāzanilli:',
	'newestpages-submit' => 'Yāuh',
	'newestpages-showredir' => 'Tiquinttāz tlacuepaliztli zāzaniltin',
	'newestpages-hideredir' => 'Tiquintlātīz tlacuepaliztli zāzaniltin',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'newestpages' => 'Nyeste sider',
	'newestpages-desc' => 'Viser de [[Special:NewestPages|siste X sidene]] som er lagt til på wikien',
	'newestpages-header' => "'''Denne siden lister opp {{PLURAL:$1|den nyeste siden|de $1 nyeste sidene}} på denne wikien.'''",
	'newestpages-limitlinks' => 'Vis opptil $1 sider',
	'newestpages-namespace' => 'Navnerom:',
	'newestpages-none' => 'Ingenting funnet.',
	'newestpages-ns-header' => "'''Denne siden lister opp {{PLURAL:$1|den nyeste siden|de $1 nyeste sidene}} i navnerommet $2.'''",
	'newestpages-showing' => 'Lister opp {{PLURAL:$1|den nyeste siden|de $1 nyeste sidene}}:',
	'newestpages-submit' => 'Gå',
	'newestpages-showredir' => 'Vis omdirigeringer',
	'newestpages-hideredir' => 'Skjul omdirigeringer',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'newestpages' => 'Ne’este Sieden',
	'newestpages-desc' => 'Wiest de [[Special:NewestPages|lesten X ne’en Sieden]] op dat Wiki',
	'newestpages-header' => "'''Disse Sied wiest de {{PLURAL:$1|ne’este Sied|$1 ne’esten Sieden}} op dat Wiki.'''",
	'newestpages-limitlinks' => '$1 Sieden wiesen',
	'newestpages-namespace' => 'Naamruum:',
	'newestpages-none' => 'Nix funnen',
	'newestpages-ns-header' => "'''Disse Sied wiest de {{PLURAL:$1|ne’este Sied|$1 ne’esten Sieden}} in’n Naamruum $2.'''",
	'newestpages-showing' => '{{PLURAL:$1|Ne’este Sied|$1 ne’este Sieden}} wiesen:',
	'newestpages-submit' => 'Los',
	'newestpages-showredir' => 'Wiederleiden wiesen',
	'newestpages-hideredir' => 'Wiederleiden nich wiesen',
);

/** Nepali (नेपाली)
 * @author RajeshPandey
 */
$messages['ne'] = array(
	'newestpages' => 'नयाँ पृष्ठहरू',
	'newestpages-limitlinks' => '$1 वटा पृष्ठहरू देखाउ',
	'newestpages-namespace' => 'नामस्थान:',
	'newestpages-none' => 'कुनैपनि प्रविष्ठि पाइएन।',
	'newestpages-submit' => 'जाउ',
	'newestpages-showredir' => 'रिडाइरेक्ट पृष्ठहरू देखाउ',
	'newestpages-hideredir' => 'रिडाइरेक्ट पृष्ठहरू लुकाउ',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'newestpages-submit' => 'Fano',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'newestpages' => "Nieuwe pagina's",
	'newestpages-desc' => "De [[Special:NewestPages|laatste X nieuwe pagina's]] in de wiki",
	'newestpages-header' => "'''Op deze pagina {{PLURAL:$1|staat de meest recent aangemaakte pagina|staan de $1 meest recent aangemaakte pagina's}} van deze wiki.'''",
	'newestpages-limitlinks' => "Geeft maximaal $1 pagina's weer",
	'newestpages-namespace' => 'Naamruimte:',
	'newestpages-none' => 'Geen resultaten.',
	'newestpages-ns-header' => "'''Deze pagina geeft de {{PLURAL:$1|de meest recent aangemaakte pagina|de $1 meest recent aangemaakte pagina's}} weer in de naamruimte $2.'''",
	'newestpages-showing' => "De {{PLURAL:$1|meest recent aangemaakte pagina wordt|$1 meest recent aangemaakte pagina's worden}} weergegeven:",
	'newestpages-submit' => 'OK',
	'newestpages-showredir' => 'Doorverwijzingen weergeven',
	'newestpages-hideredir' => 'Doorverwijzingen verbergen',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'newestpages' => 'Nyaste sider',
	'newestpages-desc' => 'Viser dei [[Special:NewestPages|X siste sidene]] som er lagt til på wikien',
	'newestpages-header' => "'''Denne sida listar opp {{PLURAL:$1|den nyaste sida|dei $1 nyaste sidene}} på denne wikien.'''",
	'newestpages-limitlinks' => 'Vis opptil $1 sider',
	'newestpages-namespace' => 'Namnerom:',
	'newestpages-none' => 'Fann ingenting.',
	'newestpages-ns-header' => "'''Denne sida listar opp {{PLURAL:$1|den nyaste sida|dei $1 nyaste sidene}} i namnerommet $2.'''",
	'newestpages-showing' => 'Listar opp {{PLURAL:$1|den nyaste sida|dei $1 nyaste sidene}}:',
	'newestpages-submit' => 'Gå',
	'newestpages-showredir' => 'Vis omdirigeringar',
	'newestpages-hideredir' => 'Gøym omdirigeringar',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'newestpages-submit' => 'Sepela',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'newestpages' => 'Paginas mai recentas',
	'newestpages-desc' => 'Aficha las [[Special:NewestPages|darrièras paginas]] apondudas al wiki.',
	'newestpages-header' => "'''Aquesta pagina lista {{PLURAL:$1|la pagina mai recenta|las $1 paginas mai recentas}} sul wiki.'''",
	'newestpages-limitlinks' => 'Afichar fins a $1 paginas',
	'newestpages-namespace' => 'Espaci de nom :',
	'newestpages-none' => 'Cap de pagina es pas estada trobada',
	'newestpages-ns-header' => "'''Aquesta pagina lista {{PLURAL:$1|la pagina mai recenta|las $1 paginas mai recentas}} dins l’espaci $2.'''",
	'newestpages-showing' => 'Afichatge {{PLURAL:$1|de la pagina mai recenta|de las $1 paginas mai recentas}} :',
	'newestpages-submit' => 'Amodar',
	'newestpages-showredir' => 'Afichar las paginas de redireccion.',
	'newestpages-hideredir' => 'Amagar las paginas de redireccion.',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Psubhashish
 */
$messages['or'] = array(
	'newestpages-showing' => '{{PLURAL:$1|newest page|$1 ନଗଦ ପୃଷ୍ଠାସବୁର}} ତାଲିକା ତିଆରି କରୁଛି:',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Gman124
 */
$messages['pa'] = array(
	'newestpages' => 'ਨਵੇਂ ਲੇਖ',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'newestpages-namespace' => 'Blatznaame:',
	'newestpages-submit' => 'Uffgucke',
);

/** Polish (polski)
 * @author Derbeth
 * @author Leinad
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'newestpages' => 'Najnowsze strony',
	'newestpages-desc' => 'Pokazuje [[Special:NewestPages|X stron]] ostatnio dodanych do wiki',
	'newestpages-header' => "'''Ta strona zawiera {{PLURAL:$1|nazwę najnowszej strony|listę z $1 najnowszymi stronami}} tej wiki.'''",
	'newestpages-limitlinks' => 'Pokaż do $1 stron',
	'newestpages-namespace' => 'Przestrzeń nazw:',
	'newestpages-none' => 'Nie znaleziono żadnych wpisów.',
	'newestpages-ns-header' => "'''Ta strona zawiera {{PLURAL:$1|nazwę najnowszej strony|listę z $1 najnowszymi stronami}} w przestrzeni nazw $2.'''",
	'newestpages-showing' => '{{PLURAL:$1|Nazwa najnowszej strony|Lista z $1 najnowszymi stronami}}',
	'newestpages-submit' => 'Pokaż',
	'newestpages-showredir' => 'Pokaż strony przekierowujące',
	'newestpages-hideredir' => 'Ukryj strony przekierowujące',
);

/** Piedmontese (Piemontèis)
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 */
$messages['pms'] = array(
	'newestpages' => 'Pàgine pì neuve',
	'newestpages-desc' => "A mosta j'[[Special:NewestPages|ùltime X pàgine]] giontà a la wiki",
	'newestpages-header' => "'''Sta pàgina-sì a lista {{PLURAL:$1|la pàgina pì neuva|le $1 pàgine pì neuve}} an sla wiki.'''",
	'newestpages-limitlinks' => 'Smon fin a $1 pàgine',
	'newestpages-namespace' => 'Spassi nominal:',
	'newestpages-none' => 'Gnun-a vos trovà.',
	'newestpages-ns-header' => "'''Sta pàgina-sì a lista {{PLURAL:$1|la pàgina pì neuva|le $1 pàgine pì neuve}} an slë spassi nominal $2.'''",
	'newestpages-showing' => 'Lista {{PLURAL:$1|dla pàgina pì neuva|dle $1 pagine pì neuve}}:',
	'newestpages-submit' => 'Va',
	'newestpages-showredir' => "Smon j'ardiression",
	'newestpages-hideredir' => "Stërma j'ardiression",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'newestpages' => 'تر ټولو نوي مخونه',
	'newestpages-limitlinks' => 'تر $1 پورې مخونه ښکاره کړی',
	'newestpages-namespace' => 'نوم-تشيال:',
	'newestpages-submit' => 'ورځه',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Luckas
 * @author Lugusto
 * @author Waldir
 */
$messages['pt'] = array(
	'newestpages' => 'Páginas mais recentes',
	'newestpages-desc' => 'Mostra as [[Special:NewestPages|últimas X páginas]] adicionadas à wiki',
	'newestpages-header' => "'''Esta página lista {{PLURAL:$1|a página mais recente|as $1 páginas mais recentes}} desta wiki.'''",
	'newestpages-limitlinks' => 'Mostrar até $1 páginas',
	'newestpages-namespace' => 'Espaço nominal:',
	'newestpages-none' => 'Não foram encontrados resultados.',
	'newestpages-ns-header' => "'''Esta página lista {{PLURAL:$1|a página mais recente|as $1 páginas mais recentes}} do espaço nominal $2.'''",
	'newestpages-showing' => 'A listar {{PLURAL:$1|a página mais recente|as $1 páginas mais recentes}}:',
	'newestpages-submit' => 'Ir',
	'newestpages-showredir' => 'Mostrar páginas de redirecionamento',
	'newestpages-hideredir' => 'Ocultar páginas de redirecionamento',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Waldir
 */
$messages['pt-br'] = array(
	'newestpages' => 'Páginas mais recentes',
	'newestpages-desc' => 'Mostra as [[Special:NewestPages|últimas X páginas]] adicionadas ao wiki',
	'newestpages-header' => "'''Esta página lista {{PLURAL:$1|a página mais recente|as $1 páginas mais recentes}} deste wiki.'''",
	'newestpages-limitlinks' => 'Exibir até $1 páginas',
	'newestpages-namespace' => 'Espaço nominal:',
	'newestpages-none' => 'Não foram encontrados resultados.',
	'newestpages-ns-header' => "'''Esta página lista {{PLURAL:$1|a página mais recente|as $1 páginas mais recentes}} do espaço nominal $2.'''",
	'newestpages-showing' => 'Listando {{PLURAL:$1|a página mais recente|as $1 páginas mais recentes}}:',
	'newestpages-submit' => 'Ir',
	'newestpages-showredir' => 'Exibir redirecionamentos',
	'newestpages-hideredir' => 'Ocultar redirecionamentos',
);

/** Tarifit (Tarifit)
 * @author Jose77
 */
$messages['rif'] = array(
	'newestpages-submit' => 'Raḥ ɣa',
);

/** Romanian (română)
 * @author KlaudiuMihaila
 * @author Mihai
 */
$messages['ro'] = array(
	'newestpages' => 'Cele mai noi pagini',
	'newestpages-desc' => 'Arată [[Special:NewestPages|ultimele X pagini]] adăugate în wiki',
	'newestpages-header' => "'''Această pagină afișează {{PLURAL:$1|pagina cea mai nouă|$1 cele mai noi pagini}} din wiki.'''",
	'newestpages-limitlinks' => 'Arată până la $1 pagini',
	'newestpages-namespace' => 'Spațiu de nume:',
	'newestpages-none' => 'Nu au fost găsite intrări.',
	'newestpages-ns-header' => "'''Această pagină afișează {{PLURAL:$1|pagina cea mai nouă|$1 cele mai noi pagini}} din spațiul de nume $2.'''",
	'newestpages-showing' => 'Afișează {{PLURAL:$1|pagină nouă|$1 pagini noi}}:',
	'newestpages-submit' => 'Du-te',
	'newestpages-showredir' => 'Arată paginile de redirecționare',
	'newestpages-hideredir' => 'Ascunde paginile de redirecționare',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'newestpages' => 'Pàggene cchiù nuève',
	'newestpages-desc' => 'Fà vedè le [[Special:NewestPages|urteme X pàggene]] aggiunde a sta uicchi',
	'newestpages-header' => "'''Sta pàgene elenghe {{PLURAL:$1|'a pàgena cchiù nove|le $1 pàggene cchiù nuève}} sus a sta uicchi.'''",
	'newestpages-limitlinks' => "Fà vedè 'nzigne a $1 pàggene",
	'newestpages-namespace' => 'Namespace:',
	'newestpages-none' => 'Nisciuna vôsce acchiate.',
	'newestpages-ns-header' => "'''Sta pàgene elenghe {{PLURAL:$1|'a pàgena cchiù nove|le $1 pàggene cchiù nuève}} jndr'à 'u namespace $2.'''",
	'newestpages-showing' => "Elenghe de {{PLURAL:$1|'a pàgena cchiù nove|le $1 pàggene cchiù nuève}}:",
	'newestpages-submit' => 'Veje',
	'newestpages-showredir' => 'Fà vedè le pàggene de redirezionamende',
	'newestpages-hideredir' => 'Scunne le pàggene de le redirezionaminde',
);

/** Russian (русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'newestpages' => 'Новые страницы',
	'newestpages-desc' => 'Показывает [[Special:NewestPages|последние X страниц]] добавленных в вики',
	'newestpages-header' => "'''Эта страница {{PLURAL:$1|является новейшей|входит в список $1 новейших страниц}} этой вики.'''",
	'newestpages-limitlinks' => 'Показывать до $1 страниц',
	'newestpages-namespace' => 'Пространство имён:',
	'newestpages-none' => 'Не найдено записей.',
	'newestpages-ns-header' => "'''Эта страница {{PLURAL:$1|является новейшей в пространстве имён|входит в список $1 новейших страниц пространства имён}} $2.'''",
	'newestpages-showing' => 'Список {{PLURAL:$1|$1 новейшей страницы|$1 новейших страниц|$1 новейших страниц}}:',
	'newestpages-submit' => 'Выполнить',
	'newestpages-showredir' => 'Показывать страницы-перенаправления',
	'newestpages-hideredir' => 'Скрыть страницы-перенаправления',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'newestpages' => 'නවතම පිටු',
	'newestpages-limitlinks' => 'පිටු $1 දක්වා පෙන්වන්න',
	'newestpages-namespace' => 'නාමඅවකාශය:',
	'newestpages-none' => 'ඇතුලත් කිරීම් හමු නොවුණි.',
	'newestpages-submit' => 'යන්න',
	'newestpages-showredir' => 'යළියොමු පිටු පෙන්වන්න',
	'newestpages-hideredir' => 'යළියොමු පිටු සඟවන්න',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'newestpages' => 'Najnovšie stránky',
	'newestpages-desc' => 'Zobrazuje [[Special:NewestPages|posledných X stránok]] pridaných na wiki',
	'newestpages-header' => "'''Toto je {{PLURAL:$1|najnovšia stránka|zoznam $1 najnovších stránok}} na wiki.'''",
	'newestpages-limitlinks' => 'Zobraziť najviac $1 stránok',
	'newestpages-namespace' => 'Menný priestor:',
	'newestpages-none' => 'Neboli nájdené žiadne záznamy.',
	'newestpages-ns-header' => "'''Toto je {{PLURAL:$1|najnovšia stránka|zoznam $1 najnovších stránok}} v mennom priestore $2.'''",
	'newestpages-showing' => '{{PLURAL:$1|najnovšia stránka|Zoznam $1 najnovších stránok}}:',
	'newestpages-submit' => 'Vykonať',
	'newestpages-showredir' => 'Zobraziť presmerovacie stránky',
	'newestpages-hideredir' => 'Skryť presmerovacie stránky',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Nikola Smolenski
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Жељко Тодоровић
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'newestpages' => 'Најновије странице',
	'newestpages-desc' => 'Показује [[Special:NewestPages|последњих X страница]] додатих викију',
	'newestpages-header' => "'''Ово је списак {{PLURAL:$1|са најновијом страном|$1 најновијих страна}} на овој Вики.'''",
	'newestpages-limitlinks' => 'Прикажи $1 страница',
	'newestpages-namespace' => 'Именски простор:',
	'newestpages-none' => 'Није ништа пронађено.',
	'newestpages-ns-header' => "'''Ово је списак {{PLURAL:$1|са најновијом страном|$1 најновијих страна}} на у именском простору $2.'''",
	'newestpages-showing' => 'Списак {{PLURAL:$1|најновије стране|$1 најновијих страна}}:',
	'newestpages-submit' => 'Иди',
	'newestpages-showredir' => 'Прикажи странице преусмерења',
	'newestpages-hideredir' => 'Сакриј странице преусмерења',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Liangent
 * @author Michaello
 * @author Sasa Stefanovic
 */
$messages['sr-el'] = array(
	'newestpages' => 'Najnovije stranice',
	'newestpages-desc' => 'Pokazuje [[Special:NewestPages|zadnjih X članaka]] dodatih Vikiju',
	'newestpages-header' => "'''Ovo je spisak {{PLURAL:$1|sa najnovijom stranom|$1 najnovijih strana}} na ovoj Viki.'''",
	'newestpages-limitlinks' => 'Prikaži $1 stranica',
	'newestpages-namespace' => 'Imenski prostor:',
	'newestpages-none' => 'Nije ništa pronađeno.',
	'newestpages-ns-header' => "'''Ovo je spisak {{PLURAL:$1|sa najnovijom stranom|$1 najnovijih strana}} na u imenskom prostoru $2.'''",
	'newestpages-showing' => 'Spisak {{PLURAL:$1|najnovije strane|$1 najnovijih strana}}:',
	'newestpages-submit' => 'Idi',
	'newestpages-showredir' => 'Prikaži stranice preusmerenja',
	'newestpages-hideredir' => 'Sakrij stranice preusmerenja',
);

/** Swati (SiSwati)
 * @author Jatrobat
 */
$messages['ss'] = array(
	'newestpages-submit' => 'Kúhámba',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'newestpages' => 'Näiste Sieden',
	'newestpages-header' => "'''Disse Siede liestet {{PLURAL:$1|ju näiste Siede|do $1 näiste Sieden}} fon dit Wiki ap.'''",
	'newestpages-limitlinks' => 'Wies $1 Sieden',
	'newestpages-namespace' => 'Noomensruum:',
	'newestpages-none' => 'Naan Iendraach fuunen.',
	'newestpages-ns-header' => "'''Disse Siede liestet {{PLURAL:$1|ju $1 näiste Siede|do $1 näiste Sieden}} in dän Noomensruum $2 ap.'''",
	'newestpages-showing' => '{{PLURAL:$1|Ju näiste Siede|Do $1 näiste Sieden}}:',
	'newestpages-submit' => 'Säike (1)',
	'newestpages-showredir' => 'Wiederlaitengssieden anwiese',
	'newestpages-hideredir' => 'Wiederlaitengssieden ferstopje.',
);

/** Sundanese (Basa Sunda)
 * @author Kandar
 */
$messages['su'] = array(
	'newestpages' => 'Kaca-kaca panganyarna',
	'newestpages-desc' => 'Témbongkeun [[Special:NewestPages|X kaca panungtung]] nu dijieun di wiki',
	'newestpages-header' => "'''Ieu kaca ngabéréndélkeun $1 kaca panganyarna di wiki.'''", # Fuzzy
	'newestpages-limitlinks' => 'Témbongkeun nepi ka $1 kaca',
	'newestpages-namespace' => 'Spasi ngaran:',
	'newestpages-none' => 'Euweuh éntri nu kapanggih.',
	'newestpages-ns-header' => "'''Ieu kaca ngabéréndélkeun $1 kaca panganyarna dina ngaran spasi $2.'''", # Fuzzy
	'newestpages-showing' => 'Ngabéréndélkeun $1 kaca panganyarna:', # Fuzzy
	'newestpages-submit' => 'Jung',
	'newestpages-showredir' => 'Témbongkeun kaca alihan',
	'newestpages-hideredir' => 'Sumputkeun kaca alihan',
);

/** Swedish (svenska)
 * @author M.M.S.
 * @author Najami
 * @author Sannab
 */
$messages['sv'] = array(
	'newestpages' => 'Nyaste sidor',
	'newestpages-desc' => 'Visar de [[Special:NewestPages|senaste X sidorna]] som lagts till i wikin',
	'newestpages-header' => "'''Denna sida listar {{PLURAL:$1|den nyaste sidan|de $1 nyaste sidorna}} på wikin.'''",
	'newestpages-limitlinks' => 'Visa upp till $1 sidor',
	'newestpages-namespace' => 'Namnrymd:',
	'newestpages-none' => 'Inga entréer hittades.',
	'newestpages-ns-header' => "'''Denna sida listar {{PLURAL:$1|den nyaste sidan|de $1 nyaste sidorna}} i namnrymden $2.'''",
	'newestpages-showing' => 'Listar {{PLURAL:$1|den nyaste sidan|de $1 nyaste sidorna}}:',
	'newestpages-submit' => 'Gå',
	'newestpages-showredir' => 'Visa omdirigerings sidor',
	'newestpages-hideredir' => 'Dölj omdirigerings sidor',
);

/** Tamil (தமிழ்)
 * @author TRYPPN
 * @author Ulmo
 */
$messages['ta'] = array(
	'newestpages' => 'புத்தம்புதிய பக்கங்கள்',
	'newestpages-desc' => 'விக்கியில் சேர்க்கப்பட்ட [[Special:NewestPages| கடைசி 10 பக்கங்களைக்]]  காட்டுகிறது',
	'newestpages-header' => "'''இந்த பக்கமானது விக்கியில் உருவான {{PLURAL:$1|புத்தம் புதிய பக்கம்|$1 புத்தம் புதிய பக்கங்களை}} பட்டியலிட்டுக்காட்டுகிறது.'''",
	'newestpages-limitlinks' => '$1 பக்கம் வரை காட்டவும்',
	'newestpages-namespace' => 'பெயர்வெளி:',
	'newestpages-none' => 'எந்தவித உள்ளடக்கமும் காணப்படவில்லை',
	'newestpages-ns-header' => "'''இந்த பக்கமானது $2 பெயர்வெளியில் உருவான {{PLURAL:$1|புத்தம் புதிய பக்கம்|$1 புத்தம் புதிய பக்கங்களை}} பட்டியலிட்டுக்காட்டுகிறது.'''",
	'newestpages-showing' => '{{PLURAL:$1|newest page|$1 புதிய பக்கங்கள்}} பற்றிய பட்டியல்:',
	'newestpages-submit' => 'செல்',
	'newestpages-showredir' => 'வழிமாற்றுப் பக்கங்களைக் காண்பிக்கவும்',
	'newestpages-hideredir' => 'வழிமாற்றுப் பக்கங்களை மறைக்கவும்',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Veeven
 */
$messages['te'] = array(
	'newestpages' => 'కొంగొత్త పేజీలు',
	'newestpages-desc' => 'వికీలో చేర్చిన [[Special:NewestPages|చివరి X పేజీల]]ను చూపిస్తుంది',
	'newestpages-header' => "'''ఈ వికీలోని {{PLURAL:$1|క్రొత్త పేజిని|$1 క్రొత్త పేజిలను}} ఈ పేజీ చూపిస్తుంది.'''",
	'newestpages-limitlinks' => '$1 పేజీల వరకు చూపించు',
	'newestpages-namespace' => 'పేరుబరి:',
	'newestpages-none' => 'ఏమీ కనబడలేదు.',
	'newestpages-ns-header' => "'''ఈ పేజీ $2 పేరుబరి లోని {{PLURAL:$1|క్రొత్త పేజిని|$1 క్రొత్త పేజిలను}} ఈ పేజీ చూపిస్తుంది.'''",
	'newestpages-showing' => '{{PLURAL:$1|ఒక కొంగొత్త పేజీని|$1 కొంగొత్త పేజీలను}} చూపిస్తున్నాం:',
	'newestpages-submit' => 'వెళ్ళు',
	'newestpages-showredir' => 'దారిమార్పు పేజీలను చూపించు',
	'newestpages-hideredir' => 'దారిమార్పు పేజీలను దాచు',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'newestpages-namespace' => 'Espasu pájina nian:',
	'newestpages-submit' => 'Bá',
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'newestpages' => 'Саҳифаҳои навтарин',
	'newestpages-namespace' => 'Фазоином:',
	'newestpages-ns-header' => "'''Ин саҳифа $1 навтарин саҳифаҳоро дар фазоиноми $2 феҳрист мекунад.'''", # Fuzzy
	'newestpages-submit' => 'Бирав',
	'newestpages-showredir' => 'Намоиши саҳифаҳои масир',
	'newestpages-hideredir' => 'Пинҳон кардани саҳифаҳои масир',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'newestpages' => 'Sahifahoi navtarin',
	'newestpages-namespace' => 'Fazoinom:',
	'newestpages-submit' => 'Birav',
	'newestpages-showredir' => 'Namoişi sahifahoi masir',
	'newestpages-hideredir' => 'Pinhon kardani sahifahoi masir',
);

/** Thai (ไทย)
 * @author Octahedron80
 */
$messages['th'] = array(
	'newestpages-namespace' => 'เนมสเปซ:',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 * @author Runningfridgesrule
 */
$messages['tk'] = array(
	'newestpages' => 'Iň täze sahypalar',
	'newestpages-submit' => 'Git',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'newestpages' => 'Pinakabagong mga pahina',
	'newestpages-desc' => 'Nagpapakita ng [[Special:NewestPages|huling X mga pahina]]ng naidagdag sa wiki',
	'newestpages-header' => "'''Nagtatala ang pahinang ito ng {{PLURAL:$1|pinakabagong pahina|$1 pinakabagong mga pahina}} sa ibabaw ng wiki.'''",
	'newestpages-limitlinks' => 'Magpakita ng hanggang sa $1 mga pahina',
	'newestpages-namespace' => 'Espasyo ng pangalan:',
	'newestpages-none' => 'Walang natagpuang mga entrado/ipinasok.',
	'newestpages-ns-header' => "'''Nagtatala ang pahinang ito ng {{PLURAL:$1|pinakabagong pahina|$1 pinakabagong mga pahina}} sa loob ng $2 espasyo ng pangalan.'''",
	'newestpages-showing' => 'Itinatala ang {{PLURAL:$1|pinakabagong pahina|$1 pinakabagong mga pahina}}:',
	'newestpages-submit' => 'Gawin na',
	'newestpages-showredir' => 'Ipakita ang mga pahina ipinanuto/muling itinuro',
	'newestpages-hideredir' => 'Itago ang mga pahinang ipinanuto/muling itinuro',
);

/** Tongan (lea faka-Tonga)
 * @author Tauʻolunga
 */
$messages['to'] = array(
	'newestpages' => 'Ngaahi peesi foʻou taha',
	'newestpages-header' => "'''ʻOku lisi ʻi he pēsí ni ko e ngaahi peesi foʻou ʻe $1 ʻo e ''wiki'' ʻeni.'''", # Fuzzy
	'newestpages-limitlinks' => 'ʻAsi mai ha ngaahi peesi aʻu ki he $1',
	'newestpages-namespace' => 'Vā hingoa:',
	'newestpages-none' => 'Naʻe ʻikai ʻilo ha lēkoti',
	'newestpages-ns-header' => "'''ʻOku lisi ʻi he pēsí ni ko e ngaahi peesi foʻou ʻe $1 ʻi he vā hingoa $2.'''", # Fuzzy
	'newestpages-showing' => 'ʻOku lisi ha peesi foʻou taha ʻe $1:', # Fuzzy
	'newestpages-submit' => 'Fai ā',
	'newestpages-showredir' => 'ʻAsi ha ngaahi kupu fakaʻuhingakehe',
	'newestpages-hideredir' => 'Toi ha ngaahi kupu fakaʻuhingakehe',
);

/** Turkish (Türkçe)
 * @author Karduelis
 * @author Srhat
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'newestpages' => 'En yeni sayfalar',
	'newestpages-desc' => 'Vikiye eklenen [[Special:NewestPages|son X sayfayı]] gösterir',
	'newestpages-header' => "'''Bu sayfa, vikideki {{PLURAL:$1|en yeni sayfayı|en yeni $1 sayfayı}} listelemektedir.'''",
	'newestpages-limitlinks' => '$1 sayfaya kadar göster',
	'newestpages-namespace' => 'Ad alanı:',
	'newestpages-none' => 'Girdi bulunamadı.',
	'newestpages-ns-header' => "'''Bu sayfa, $2 isim alanındaki {{PLURAL:$1|en yeni sayfayı|en yeni $1 sayfayı}} listelemektedir.'''",
	'newestpages-showing' => '{{PLURAL:$1|En yeni sayfa|En yeni $1 sayfa}} listeleniyor:',
	'newestpages-submit' => 'Git',
	'newestpages-showredir' => 'Yönlendirilmiş sayfaları gör',
	'newestpages-hideredir' => 'Gizli yönlendirme sayfaları',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Alfredie
 */
$messages['ug-arab'] = array(
	'newestpages-submit' => 'كۆچۈش',
);

/** Uyghur (Latin script) (Uyghurche)
 * @author Jose77
 */
$messages['ug-latn'] = array(
	'newestpages-submit' => 'Köchüsh',
);

/** Ukrainian (українська)
 * @author A1
 * @author Steve.rusyn
 * @author SteveR
 * @author Ата
 * @author Тест
 */
$messages['uk'] = array(
	'newestpages' => 'Нові сторінки',
	'newestpages-desc' => 'Показує [[Special:NewestPages|останні X сторінок]] доданих у вікі',
	'newestpages-header' => "'''На цій сторінці показується {{PLURAL:$1|найновіша сторінка|список із $1 найновіших сторінок}} у вікі.'''",
	'newestpages-limitlinks' => 'Показати до $1 сторінок',
	'newestpages-namespace' => 'Простір назв:',
	'newestpages-none' => 'Записів не знайдено.',
	'newestpages-ns-header' => "'''На цій сторінці показується {{PLURAL:$1|найновіша сторінка|список із $1 найновіших сторінок}} у просторі $2.'''",
	'newestpages-showing' => '{{PLURAL:$1|Найновіша сторінка|Список із $1 найновіших сторінок}}:',
	'newestpages-submit' => 'Перейти',
	'newestpages-showredir' => 'Показати перенаправлення сторінок',
	'newestpages-hideredir' => 'Приховати перенаправлення сторінок',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'newestpages-namespace' => 'نیم سپیس:',
	'newestpages-none' => 'میں لکھے گئے مراسلے نہیں پائے گئے.',
	'newestpages-submit' => 'جانا',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'newestpages' => 'Pagine piassè nove',
	'newestpages-desc' => 'Mostra le [[Special:NewestPages|ultime X pagine]] zontà a la wiki',
	'newestpages-header' => "'''Sta pagina la elenca {{PLURAL:$1|la pagina piassè nova|le $1 pagine piassè nove}} su sta wiki.'''",
	'newestpages-limitlinks' => 'Mostra fin a $1 pagine',
	'newestpages-namespace' => 'Namespace:',
	'newestpages-none' => 'No xe stà catà nissuna pagina.',
	'newestpages-ns-header' => "'''Sta pagina la elenca {{PLURAL:$1|la pagina piassè nova|le $1 pagine piassè nove}} nel namespace $2.'''",
	'newestpages-showing' => 'Elenco de {{PLURAL:$1|la pagina piassè nova|le $1 pagine piassè nove}}:',
	'newestpages-submit' => 'Và',
	'newestpages-showredir' => 'Mostra i redirect',
	'newestpages-hideredir' => 'Scondi i redirect',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'newestpages' => 'Kaikiš udembad lehtpoled',
	'newestpages-namespace' => 'Nimiavaruz:',
	'newestpages-submit' => 'Mäne',
	'newestpages-showredir' => 'Ozutada läbikosketusiden lehtpoled',
	'newestpages-hideredir' => 'Peitta läbikosketusiden lehtpoled',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'newestpages' => 'Trang mới nhất',
	'newestpages-desc' => 'Hiển thị [[Special:NewestPages|X trang cuối cùng]] được thêm vào wiki',
	'newestpages-header' => "'''Trang này liệt kê {{PLURAL:$1|trang mới nhất|$1 trang mới nhất}} trên wiki.'''",
	'newestpages-limitlinks' => 'Hiển thị tối đa $1 trang',
	'newestpages-namespace' => 'Không gian:',
	'newestpages-none' => 'Không tìm thấy mục nào.',
	'newestpages-ns-header' => "'''Trang nay liệt kê {{PLURAL:$1|trang mới nhất|$1 trang mới nhất}} trong không gian tên $2.'''",
	'newestpages-showing' => 'Liệt kê {{PLURAL:$1|trang mới nhất|$1 trang mới nhất}}:',
	'newestpages-submit' => 'Xem',
	'newestpages-showredir' => 'Hiện các trang đổi hướng',
	'newestpages-hideredir' => 'Ẩn các trang đổi hướng',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'newestpages' => 'Pads nulikün',
	'newestpages-desc' => 'Jonön [[Special:NewestPages|padis lätik X]] vüke at peläükölis',
	'newestpages-header' => "'''Su pad at {{PLURAL:$1|palisedon pad nulikün|palisedons pads nulikün $1}} vüka at.'''",
	'newestpages-limitlinks' => 'Jonön padis jü $1',
	'newestpages-namespace' => 'Nemaspad:',
	'newestpages-none' => 'Pads nonik petuvons.',
	'newestpages-ns-header' => "'''Su pad at {{PLURAL:$1|palisedon pad nulikün|palisedons pads nulikün $1}} nemaspada: $2.'''",
	'newestpages-showing' => '{{PLURAL:$1|Pad nulikün palisedon|Pads nulikün $1 palisedons}}:',
	'newestpages-submit' => 'Ledunolöd',
	'newestpages-showredir' => 'Jonön lüodükömapadis',
	'newestpages-hideredir' => 'Klänedön lüodükömapadis',
);

/** Yiddish (ייִדיש)
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'newestpages-submit' => 'גיין',
);

/** Cantonese (粵語)
 * @author Hillgentleman
 * @author Shinjiman
 */
$messages['yue'] = array(
	'newestpages' => '新頁',
	'newestpages-desc' => '顯示[[Special:NewestPages|最近X版]]到個wiki度',
	'newestpages-header' => "'''呢度列舉成個維基入面最新 $1 頁。'''", # Fuzzy
	'newestpages-limitlinks' => '攤開頂龍 $1 版',
	'newestpages-namespace' => '空間名:',
	'newestpages-none' => '乜都揾唔到。',
	'newestpages-ns-header' => "'''呢度列舉$2 空間名裏面最新 $1 篇文。'''", # Fuzzy
	'newestpages-showing' => '攤開最新$1 篇文：', # Fuzzy
	'newestpages-submit' => '去',
	'newestpages-showredir' => '攤開啲跳轉頁',
	'newestpages-hideredir' => '摺埋啲跳轉頁',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author PhiLiP
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'newestpages' => '最新页面',
	'newestpages-desc' => '显示[[Special:NewestPages|最近X个页面]]到wiki中',
	'newestpages-header' => "'''本页面列出了本维基$1最新的页面。'''",
	'newestpages-limitlinks' => '显示$1个页面',
	'newestpages-namespace' => '名字空间：',
	'newestpages-none' => '没找到页面。',
	'newestpages-ns-header' => "'''本页面列出了$2名字空间中$1最新的页面。'''",
	'newestpages-showing' => '正列出$1最新的页面：',
	'newestpages-submit' => '提交',
	'newestpages-showredir' => '显示重定向页面',
	'newestpages-hideredir' => '隐藏重定向页面',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author KilluaZaoldyeck
 * @author Mark85296341
 * @author Shinjiman
 */
$messages['zh-hant'] = array(
	'newestpages' => '最新頁面',
	'newestpages-desc' => '顯示[[Special:NewestPages|最近 X 個頁面]]到 wiki 中',
	'newestpages-header' => "'''本頁面列出了本維基$1最新的頁面。'''",
	'newestpages-limitlinks' => '顯示 $1 個頁面',
	'newestpages-namespace' => '名字空間：',
	'newestpages-none' => '沒找到頁面。',
	'newestpages-ns-header' => "'''本頁面列出了$2名字空間中$1最新的頁面。'''",
	'newestpages-showing' => '正列出$1最新的頁面：',
	'newestpages-submit' => '提交',
	'newestpages-showredir' => '顯示重定向頁面',
	'newestpages-hideredir' => '隱藏重定向頁面',
);
