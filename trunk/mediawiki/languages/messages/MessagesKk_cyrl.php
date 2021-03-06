<?php
/** Kazakh (Cyrillic) (Қазақша (Кирил))
 *
 * @addtogroup Language
 *
 * @author GaiJin
 * @author AlefZet
 */

$separatorTransformTable = array(
	',' => "\xc2\xa0",
	'.' => ',',
);

$extraUserToggles = array(
	'nolangconversion'
);

$fallback8bitEncoding = 'windows-1251';

$linkPrefixExtension = true;

$namespaceNames = array(
	NS_MEDIA            => 'Таспа',
	NS_SPECIAL          => 'Арнайы',
	NS_MAIN	            => '',
	NS_TALK	            => 'Талқылау',
	NS_USER             => 'Қатысушы',
	NS_USER_TALK        => 'Қатысушы_талқылауы',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK     => '$1_талқылауы',
	NS_IMAGE            => 'Сурет',
	NS_IMAGE_TALK       => 'Сурет_талқылауы',
	NS_MEDIAWIKI        => 'МедиаУики',
	NS_MEDIAWIKI_TALK   => 'МедиаУики_талқылауы',
	NS_TEMPLATE         => 'Үлгі',
	NS_TEMPLATE_TALK    => 'Үлгі_талқылауы',
	NS_HELP             => 'Анықтама',
	NS_HELP_TALK        => 'Анықтама_талқылауы',
	NS_CATEGORY         => 'Санат',
	NS_CATEGORY_TALK    => 'Санат_талқылауы'
);

$namespaceAliases = array(
	# Aliases to kk-latn namespaces
	'Taspa'               => NS_MEDIA,
	'Arnaýı'              => NS_SPECIAL,
	'Talqılaw'            => NS_TALK,
	'Qatıswşı'            => NS_USER,
	'Qatıswşı_talqılawı'  => NS_USER_TALK,
	'$1_talqılawı'        => NS_PROJECT_TALK,
	'Swret'               => NS_IMAGE,
	'Swret_talqılawı'     => NS_IMAGE_TALK,
	'MedïaWïkï'           => NS_MEDIAWIKI,
	'MedïaWïkï_talqılawı' => NS_MEDIAWIKI_TALK,
	'Ülgi'                => NS_TEMPLATE,
	'Ülgi_talqılawı'      => NS_TEMPLATE_TALK,
	'Anıqtama'            => NS_HELP,
	'Anıqtama_talqılawı'  => NS_HELP_TALK,
	'Sanat'               => NS_CATEGORY,
	'Sanat_talqılawı'     => NS_CATEGORY_TALK,

	# Aliases to renamed kk-arab namespaces
	'مەدياۋيكي'        => NS_MEDIAWIKI,
	'مەدياۋيكي_تالقىلاۋى'  => NS_MEDIAWIKI_TALK ,
	'ٷلگٸ'        => NS_TEMPLATE ,
	'ٷلگٸ_تالقىلاۋى'    => NS_TEMPLATE_TALK,
	'ٴۇلگٴى'              => NS_TEMPLATE,
	'ٴۇلگٴى_تالقىلاۋى'    => NS_TEMPLATE_TALK,

	# Aliases to kk-arab namespaces
	'تاسپا'              => NS_MEDIA,
	'ارنايى'              => NS_SPECIAL,
	'تالقىلاۋ'            => NS_TALK,
	'قاتىسۋشى'          => NS_USER,
	'قاتىسۋشى_تالقىلاۋى'=> NS_USER_TALK,
	'$1_تالقىلاۋى'        => NS_PROJECT_TALK,
	'سۋرەت'              => NS_IMAGE,
	'سۋرەت_تالقىلاۋى'    => NS_IMAGE_TALK,
	'مەدياۋيكي'           => NS_MEDIAWIKI,
	'مەدياۋيكي_تالقىلاۋى' => NS_MEDIAWIKI_TALK,
	'ٷلگٸ'              => NS_TEMPLATE,
	'ٷلگٸ_تالقىلاۋى'    => NS_TEMPLATE_TALK,
	'انىقتاما'            => NS_HELP,
	'انىقتاما_تالقىلاۋى'  => NS_HELP_TALK,
	'سانات'              => NS_CATEGORY,
	'سانات_تالقىلاۋى'    => NS_CATEGORY_TALK,
);

$skinNames = array(
	'standard'    => 'Дағдылы (standard)',
	'nostalgia'   => 'Аңсау (nostalgia)',
	'cologneblue' => 'Көлн зеңгірлігі (cologneblue)',
	'monobook'    => 'Дара кітап (monobook)',
	'myskin'      => 'Өз мәнерім (myskin)',
	'chick'       => 'Балапан (chick)',
	'simple'      => 'Кәдімгі (simple)',
	'modern'      => 'Қазіргі заман (modern)',
);

$datePreferences = array(
	'default',
	'mdy',
	'dmy',
	'ymd',
	'yyyy-mm-dd',
	'persian',
	'hebrew',
	'ISO 8601',
);

$defaultDateFormat = 'ymd';

$datePreferenceMigrationMap = array(
	'default',
	'mdy',
	'dmy',
	'ymd'
);

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'xg j, Y "ж."',
	'mdy both' => 'H:i, xg j, Y "ж."',

	'dmy time' => 'H:i',
	'dmy date' => 'j F, Y "ж."',
	'dmy both' => 'H:i, j F, Y "ж."',

	'ymd time' => 'H:i',
	'ymd date' => 'Y "ж." xg j',
	'ymd both' => 'H:i, Y "ж." xg j',

	'yyyy-mm-dd time' => 'xnH:xni:xns',
	'yyyy-mm-dd date' => 'xnY-xnm-xnd',
	'yyyy-mm-dd both' => 'xnH:xni:xns, xnY-xnm-xnd',

	'persian time' => 'H:i',
	'persian date' => 'xij xiF xiY', 
	'persian both' => 'xij xiF xiY, H:i',
	
	'hebrew time' => 'H:i',
	'hebrew date' => 'xjj xjF xjY',
	'hebrew both' => 'H:i, xjj xjF xjY',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

/**
 * Magic words
 * Customisable syntax for wikitext and elsewhere.
 *
 * IDs must be valid identifiers, they can't contain hyphens. 
 *
 * Note to translators:
 *   Please include the English words as synonyms.  This allows people
 *   from other wikis to contribute more easily.
 *   Please don't remove deprecated values, them should be keeped for backward compatibility.
 *
 * This array can be modified at runtime with the LanguageGetMagic hook
 */
$magicWords = array(
#   ID                                 CASE  SYNONYMS
	'redirect'               => array( 0,    '#REDIRECT', '#АЙДАУ' ),
	'notoc'                  => array( 0,    '__МАЗМҰНСЫЗ__', '__МСЫЗ__', '__NOTOC__' ),
	'nogallery'              => array( 0,    '__ҚОЙМАСЫЗ__', '__ҚСЫЗ__', '__NOGALLERY__' ),
	'forcetoc'               => array( 0,    '__МАЗМҰНДАТҚЫЗУ__', '__МҚЫЗУ__', '__FORCETOC__' ),
	'toc'                    => array( 0,    '__МАЗМҰНЫ__', '__МЗМН__', '__TOC__' ),
	'noeditsection'          => array( 0,    '__БӨЛІМӨНДЕТКІЗБЕУ__', '__NOEDITSECTION__' ),
	'currentmonth'           => array( 1,    'АҒЫМДАҒЫАЙ', 'CURRENTMONTH' ),
	'currentmonthname'       => array( 1,    'АҒЫМДАҒЫАЙАТАУЫ', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'    => array( 1,    'АҒЫМДАҒЫАЙІЛІКАТАУЫ', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'     => array( 1,    'АҒЫМДАҒЫАЙЖИЫР', 'АҒЫМДАҒЫАЙҚЫСҚА', 'CURRENTMONTHABBREV' ),
	'currentday'             => array( 1,    'АҒЫМДАҒЫКҮН', 'CURRENTDAY' ),
	'currentday2'            => array( 1,    'АҒЫМДАҒЫКҮН2', 'CURRENTDAY2' ),
	'currentdayname'         => array( 1,    'АҒЫМДАҒЫКҮНАТАУЫ', 'CURRENTDAYNAME' ),
	'currentyear'            => array( 1,    'АҒЫМДАҒЫЖЫЛ', 'CURRENTYEAR' ),
	'currenttime'            => array( 1,    'АҒЫМДАҒЫУАҚЫТ', 'CURRENTTIME' ),
	'currenthour'            => array( 1,    'АҒЫМДАҒЫСАҒАТ', 'CURRENTHOUR' ),
	'localmonth'             => array( 1,    'ЖЕРГІЛІКТІАЙ', 'LOCALMONTH' ),
	'localmonthname'         => array( 1,    'ЖЕРГІЛІКТІАЙАТАУЫ', 'LOCALMONTHNAME' ),
	'localmonthnamegen'      => array( 1,    'ЖЕРГІЛІКТІАЙІЛІКАТАУЫ', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'       => array( 1,    'ЖЕРГІЛІКТІАЙЖИЫР', 'ЖЕРГІЛІКТІАЙҚЫСҚАША', 'ЖЕРГІЛІКТІАЙҚЫСҚА', 'LOCALMONTHABBREV' ),
	'localday'               => array( 1,    'ЖЕРГІЛІКТІКҮН', 'LOCALDAY' ),
	'localday2'              => array( 1,    'ЖЕРГІЛІКТІКҮН2', 'LOCALDAY2'  ),
	'localdayname'           => array( 1,    'ЖЕРГІЛІКТІКҮНАТАУЫ', 'LOCALDAYNAME' ),
	'localyear'              => array( 1,    'ЖЕРГІЛІКТІЖЫЛ', 'LOCALYEAR' ),
	'localtime'              => array( 1,    'ЖЕРГІЛІКТІУАҚЫТ', 'LOCALTIME' ),
	'localhour'              => array( 1,    'ЖЕРГІЛІКТІСАҒАТ', 'LOCALHOUR' ),
	'numberofpages'          => array( 1,    'БЕТСАНЫ', 'NUMBEROFPAGES' ),
	'numberofarticles'       => array( 1,    'МАҚАЛАСАНЫ', 'NUMBEROFARTICLES' ),
	'numberoffiles'          => array( 1,    'ФАЙЛСАНЫ', 'NUMBEROFFILES' ),
	'numberofusers'          => array( 1,    'ҚАТЫСУШЫСАНЫ', 'NUMBEROFUSERS' ),
	'numberofedits'          => array( 1,    'ТҮЗЕТУСАНЫ', 'NUMBEROFEDITS' ),
	'pagename'               => array( 1,    'БЕТАТАУЫ', 'PAGENAME' ),
	'pagenamee'              => array( 1,    'БЕТАТАУЫ2', 'PAGENAMEE' ),
	'namespace'              => array( 1,    'ЕСІМАЯСЫ', 'NAMESPACE' ),
	'namespacee'             => array( 1,    'ЕСІМАЯСЫ2', 'NAMESPACEE' ),
	'talkspace'              => array( 1,    'ТАЛҚЫЛАУАЯСЫ', 'TALKSPACE' ),
	'talkspacee'             => array( 1,    'ТАЛҚЫЛАУАЯСЫ2', 'TALKSPACEE' ),
	'subjectspace'           => array( 1,    'ТАҚЫРЫПБЕТІ', 'МАҚАЛАБЕТІ', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'          => array( 1,    'ТАҚЫРЫПБЕТІ2', 'МАҚАЛАБЕТІ2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'           => array( 1,    'ТОЛЫҚБЕТАТАУЫ', 'FULLPAGENAME' ),
	'fullpagenamee'          => array( 1,    'ТОЛЫҚБЕТАТАУЫ2', 'FULLPAGENAMEE' ),
	'subpagename'            => array( 1,    'БЕТШЕАТАУЫ', 'АСТЫҢҒЫБЕТАТАУЫ', 'SUBPAGENAME' ),
	'subpagenamee'           => array( 1,    'БЕТШЕАТАУЫ2', 'АСТЫҢҒЫБЕТАТАУЫ2', 'SUBPAGENAMEE' ),
	'basepagename'           => array( 1,    'НЕГІЗГІБЕТАТАУЫ', 'BASEPAGENAME' ),
	'basepagenamee'          => array( 1,    'НЕГІЗГІБЕТАТАУЫ2', 'BASEPAGENAMEE' ),
	'talkpagename'           => array( 1,    'ТАЛҚЫЛАУБЕТАТАУЫ', 'TALKPAGENAME' ),
	'talkpagenamee'          => array( 1,    'ТАЛҚЫЛАУБЕТАТАУЫ2', 'TALKPAGENAMEE' ),
	'subjectpagename'        => array( 1,    'ТАҚЫРЫПБЕТАТАУЫ', 'МАҚАЛАБЕТАТАУЫ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'       => array( 1,    'ТАҚЫРЫПБЕТАТАУЫ2', 'МАҚАЛАБЕТАТАУЫ2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                    => array( 0,    'ХБР:', 'MSG:' ),
	'subst'                  => array( 0,    'БӘДЕЛ:', 'SUBST:' ),
	'msgnw'                  => array( 0,    'УИКИСІЗХБР:', 'MSGNW:' ),
	'img_thumbnail'          => array( 1,    'нобай', 'thumbnail', 'thumb' ),
	'img_manualthumb'        => array( 1,    'нобай=$1', 'thumbnail=$1', 'thumb=$1'),
	'img_right'              => array( 1,    'оңға', 'оң', 'right' ),
	'img_left'               => array( 1,    'солға', 'сол', 'left' ),
	'img_none'               => array( 1,    'ешқандай', 'жоқ', 'none' ),
	'img_width'              => array( 1,    '$1 px', '$1px' ),
	'img_center'             => array( 1,    'ортаға', 'орта', 'center', 'centre' ),
	'img_framed'             => array( 1,    'сүрмелі', 'framed', 'enframed', 'frame' ),
	'img_frameless'          => array( 1,    'сүрмесіз', 'frameless' ),
	'img_page'               => array( 1,    'бет=$1', 'бет $1', 'page=$1', 'page $1' ),
	'img_upright'            => array( 1,    'тікті', 'тіктік=$1', 'тіктік $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'             => array( 1,    'шекті', 'border' ),
	'img_baseline'           => array( 1,    'негізжол', 'baseline' ),
	'img_sub'                => array( 1,    'астылығы', 'аст', 'sub'),
	'img_super'              => array( 1,    'үстілігі', 'үст', 'sup', 'super', 'sup' ),
	'img_top'                => array( 1,    'үстіне', 'top' ),
	'img_text_top'           => array( 1,    'мәтін-үстінде', 'text-top' ),
	'img_middle'             => array( 1,    'аралығына', 'middle' ),
	'img_bottom'             => array( 1,    'астына', 'bottom' ),
	'img_text_bottom'        => array( 1,    'мәтін-астында', 'text-bottom' ),
	'int'                    => array( 0,    'ІШКІ:', 'INT:' ),
	'sitename'               => array( 1,    'ТОРАПАТАУЫ', 'SITENAME' ),
	'ns'                     => array( 0,    'ЕА:', 'ЕСІМАЯ:', 'NS:' ),
	'localurl'               => array( 0,    'ЖЕРГІЛІКТІЖАЙ:', 'LOCALURL:' ),
	'localurle'              => array( 0,    'ЖЕРГІЛІКТІЖАЙ2:', 'LOCALURLE:' ),
	'server'                 => array( 0,    'СЕРВЕР', 'SERVER' ),
	'servername'             => array( 0,    'СЕРВЕРАТАУЫ', 'SERVERNAME' ),
	'scriptpath'             => array( 0,    'ӘМІРЖОЛЫ', 'SCRIPTPATH' ),
	'grammar'                => array( 0,    'СЕПТІГІ:', 'СЕПТІК:', 'GRAMMAR:' ),
	'notitleconvert'         => array( 0,    '__АТАУАЛМАСТЫРҒЫЗБАУ__', '__ААБАУ__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'       => array( 0,    '__МАҒЛҰМАТАЛМАСТЫРҒЫЗБАУ__', '__МАБАУ__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'            => array( 1,    'АҒЫМДАҒЫАПТАСЫ', 'АҒЫМДАҒЫАПТА', 'CURRENTWEEK' ),
	'currentdow'             => array( 1,    'АҒЫМДАҒЫАПТАКҮНІ', 'CURRENTDOW' ),
	'localweek'              => array( 1,    'ЖЕРГІЛІКТІАПТАСЫ', 'ЖЕРГІЛІКТІАПТА', 'LOCALWEEK' ),
	'localdow'               => array( 1,    'ЖЕРГІЛІКТІАПТАКҮНІ', 'LOCALDOW' ),
	'revisionid'             => array( 1,    'НҰСҚАНӨМІРІ', 'REVISIONID' ),
	'revisionday'            => array( 1,    'НҰСҚАКҮНІ' , 'REVISIONDAY' ),
	'revisionday2'           => array( 1,    'НҰСҚАКҮНІ2', 'REVISIONDAY2' ),
	'revisionmonth'          => array( 1,    'НҰСҚААЙЫ', 'REVISIONMONTH' ),
	'revisionyear'           => array( 1,    'НҰСҚАЖЫЛЫ', 'REVISIONYEAR' ),
	'revisiontimestamp'      => array( 1,    'НҰСҚАУАҚЫТТҮЙІНДЕМЕСІ', 'REVISIONTIMESTAMP' ),
	'plural'                 => array( 0,    'КӨПШЕТҮРІ:','КӨПШЕ:', 'PLURAL:' ),
	'fullurl'                => array( 0,    'ТОЛЫҚЖАЙЫ:', 'ТОЛЫҚЖАЙ:', 'FULLURL:' ),
	'fullurle'               => array( 0,    'ТОЛЫҚЖАЙЫ2:', 'ТОЛЫҚЖАЙ2:', 'FULLURLE:' ),
	'lcfirst'                => array( 0,    'КӘ1:', 'КІШІӘРІППЕН1:', 'LCFIRST:' ),
	'ucfirst'                => array( 0,    'БӘ1:', 'БАСӘРІППЕН1:', 'UCFIRST:' ),
	'lc'                     => array( 0,    'КӘ:', 'КІШІӘРІППЕН:', 'LC:' ),
	'uc'                     => array( 0,    'БӘ:', 'БАСӘРІППЕН:', 'UC:' ),
	'raw'                    => array( 0,    'ҚАМ:', 'RAW:' ),
	'displaytitle'           => array( 1,    'КӨРСЕТІЛЕТІНАТАУ', 'DISPLAYTITLE' ),
	'rawsuffix'              => array( 1,    'Қ', 'R' ),
	'newsectionlink'         => array( 1,    '__ЖАҢАБӨЛІМСІЛТЕМЕСІ__', '__NEWSECTIONLINK__' ),
	'currentversion'         => array( 1,    'БАҒДАРЛАМАНҰСҚАСЫ', 'CURRENTVERSION' ),
	'urlencode'              => array( 0,    'ЖАЙДЫМҰҚАМДАУ:', 'URLENCODE:' ),
	'anchorencode'           => array( 0,    'ЖӘКІРДІМҰҚАМДАУ', 'ANCHORENCODE' ),
	'currenttimestamp'       => array( 1,    'АҒЫМДАҒЫУАҚЫТТҮЙІНДЕМЕСІ', 'АҒЫМДАҒЫУАҚЫТТҮЙІН', 'CURRENTTIMESTAMP' ),
	'localtimestamp'         => array( 1,    'ЖЕРГІЛІКТІУАҚЫТТҮЙІНДЕМЕСІ', 'ЖЕРГІЛІКТІУАҚЫТТҮЙІН', 'LOCALTIMESTAMP' ),
	'directionmark'          => array( 1,    'БАҒЫТБЕЛГІСІ', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'               => array( 0,    '#ТІЛ:', '#LANGUAGE:' ),
	'contentlanguage'        => array( 1,    'МАҒЛҰМАТТІЛІ', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'       => array( 1,    'ЕСІМАЯБЕТСАНЫ:', 'ЕАБЕТСАНЫ:', 'АЯБЕТСАНЫ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'         => array( 1,    'ӘКІМШІСАНЫ', 'NUMBEROFADMINS' ),
	'formatnum'              => array( 0,    'САНПІШІМІ', 'FORMATNUM' ),
	'padleft'                => array( 0,    'СОЛҒАЫҒЫС', 'СОЛЫҒЫС', 'PADLEFT' ),
	'padright'               => array( 0,    'ОҢҒАЫҒЫС', 'ОҢЫҒЫС', 'PADRIGHT' ),
	'special'                => array( 0,    'арнайы', 'special' ),
	'defaultsort'            => array( 1,    'ӘДЕПКІСҰРЫПТАУ:', 'ӘДЕПКІСАНАТСҰРЫПТАУ:', 'ӘДЕПКІСҰРЫПТАУКІЛТІ:', 'ӘДЕПКІСҰРЫП:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'               => array( 0,    'FILEPATH:', 'ФАЙЛМЕКЕНІ' ),
	'tag'                    => array( 0,    'белгі', 'tag' ),
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'Шынжырлы_айдатулар' ),
	'BrokenRedirects'           => array( 'Жарамсыз_айдатулар' ),
	'Disambiguations'           => array( 'Айрықты_беттер' ),
	'Userlogin'                 => array( 'Қатысушы_кіруі' ),
	'Userlogout'                => array( 'Қатысушы_шығуы' ),
	'CreateAccount'             => array( 'Тіркелгі_Жарату' ),
	'Preferences'               => array( 'Баптау' ),
	'Watchlist'                 => array( 'Бақылау_тізімі' ),
	'Recentchanges'             => array( 'Жуықтағы_өзгерістер' ),
	'Upload'                    => array( 'Қотару' ),
	'Imagelist'                 => array( 'Сурет_тізімі' ),
	'Newimages'                 => array( 'Жаңа_суреттер' ),
	'Listusers'                 => array( 'Қатысушылар', 'Қатысушы_тізімі' ),
	'Statistics'                => array( 'Санақ' ),
	'Randompage'                => array( 'Кездейсоқ', 'Кездейсоқ_бет' ),
	'Lonelypages'               => array( 'Саяқ_беттер' ),
	'Uncategorizedpages'        => array( 'Санатсыз_беттер' ),
	'Uncategorizedcategories'   => array( 'Санатсыз_санаттар' ),
	'Uncategorizedimages'       => array( 'Санатсыз_суреттер' ),
	'Uncategorizedtemplates'    => array( 'Санатсыз_үлгілер' ),
	'Unusedcategories'          => array( 'Пайдаланылмаған_санаттар' ),
	'Unusedimages'              => array( 'Пайдаланылмаған_суреттер' ),
	'Wantedpages'               => array( 'Толтырылмаған_беттер', 'Жарамсыз_сілтемелер' ),
	'Wantedcategories'          => array( 'Толтырылмаған_санаттар' ),
	'Mostlinked'                => array( 'Ең_көп_сілтенген_беттер' ),
	'Mostlinkedcategories'      => array( 'Ең_көп_пайдаланылған_санаттар', 'Ең_көп_сілтенген_санаттар' ),
	'Mostlinkedtemplates'       => array( 'Ең_көп_пайдаланылған_үлгілер', 'Ең_көп_сілтенген_үлгілер' ),
	'Mostcategories'            => array( 'Ең_көп_санаттар_бары' ),
	'Mostimages'                => array( 'Ең_көп_пайдаланылған_суреттер', 'Ең_көп_суреттер_бары' ),
	'Mostrevisions'             => array( 'Ең_көп_нұсқалар_бары' ),
	'Fewestrevisions'           => array( 'Ең_аз_түзетілген ' ),
	'Shortpages'                => array( 'Қысқа_беттер' ),
	'Longpages'                 => array( 'Ұзын_беттер', 'Үлкен_беттер' ),
	'Newpages'                  => array( 'Жаңа_беттер' ),
	'Ancientpages'              => array( 'Ескі_беттер' ),
	'Deadendpages'              => array( 'Тұйық_беттер' ),
	'Protectedpages'            => array( 'Қорғалған_беттер' ),
	'Protectedtitles'           => array( 'Қорғалған_атаулар' ),
	'Allpages'                  => array( 'Барлық_беттер' ),
	'Prefixindex'               => array( 'Бастауыш_тізімі' ) ,
	'Ipblocklist'               => array( 'Бұғатталғандар' ),
	'Specialpages'              => array( 'Арнайы_беттер' ),
	'Contributions'             => array( 'Үлесі' ),
	'Emailuser'                 => array( 'Хат_жіберу' ),
	'Confirmemail'              => array( 'Құптау_хат' ),
	'Whatlinkshere'             => array( 'Мында_сілтегендер' ),
	'Recentchangeslinked'       => array( 'Сілтенгендердің_өзгерістері' ),
	'Movepage'                  => array( 'Бетті_жылжыту' ),
	'Blockme'                   => array( 'Өздіктік_бұғаттау', 'Өздік_бұғаттау', 'Мені_бұғаттау',),
	'Booksources'               => array( 'Кітап_қайнарлары' ),
	'Categories'                => array( 'Санаттар' ),
	'Export'                    => array( 'Сыртқа_беру' ),
	'Version'                   => array( 'Нұсқасы' ),
	'Allmessages'               => array( 'Барлық_хабарлар' ),
	'Log'                       => array( 'Журнал', 'Журналдар' ),
	'Blockip'                   => array( 'Жайды_бұғаттау', 'IP_бұғаттау'),
	'Undelete'                  => array( 'Жоюды_болдырмау', 'Жойылғанды_қайтару' ),
	'Import'                    => array( 'Сырттан_алу' ),
	'Lockdb'                    => array( 'Дерекқорды_құлыптау' ),
	'Unlockdb'                  => array( 'Дерекқорды_құлыптамау' ),
	'Userrights'                => array( 'Қатысушы_құқықтары' ),
	'MIMEsearch'                => array( 'MIME_түрімен_іздеу' ),
	'Unwatchedpages'            => array( 'Бақыланылмаған_беттер' ),
	'Listredirects'             => array( 'Айдату_тізімі' ),
	'Revisiondelete'            => array( 'Нұсқаны_жою' ),
	'Unusedtemplates'           => array( 'Пайдаланылмаған_үлгілер' ),
	'Randomredirect'            => array( 'Кедейсоқ_айдату' ),
	'Mypage'                    => array( 'Жеке_бетім' ),
	'Mytalk'                    => array( 'Талқылауым' ),
	'Mycontributions'           => array( 'Үлесім' ),
	'Listadmins'                => array( 'Әкімшілер', 'Әкімші_тізімі'),
	'Listbots'                  => array( 'Боттар', 'Боттар_тізімі' ),
	'Popularpages'              => array( 'Ең_көп_қаралған_беттер', 'Әйгілі_беттер' ),
	'Search'                    => array( 'Іздеу' ),
	'Resetpass'                 => array( 'Құпия_сөзді_қайтару' ),
	'Withoutinterwiki'          => array( 'Уики-аралықсыздар' ),
	'MergeHistory'              => array( 'Тарих_біріктіру' ),
);

#-------------------------------------------------------------------
# Default messages
#-------------------------------------------------------------------

$messages = array(
# User preference toggles
'tog-underline'               => 'Сілтеменің астын сыз:',
'tog-highlightbroken'         => 'Жарамсыз сілтемелерді <a href="" class="new">былай сияқты</a> пішімде (баламасы: былай сияқты<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Ежелерді ені бойынша туралау',
'tog-hideminor'               => 'Жуықтағы өзгерістерден шағындарын жасыр',
'tog-extendwatchlist'         => 'Бақылау тізімді ұлғайт (барлық жарамды өзгерістерді көрсет)',
'tog-usenewrc'                => 'Кеңейтілген жуықтағы өзгерістер (JavaScript)',
'tog-numberheadings'          => 'Бас жолдарды өздіктік номірле',
'tog-showtoolbar'             => 'Өңдеу қуралдар жолағын көрсет (JavaScript)',
'tog-editondblclick'          => 'Қос нұқымдап өңдеу (JavaScript)',
'tog-editsection'             => 'Бөлімдерді [өңдеу] сілтемесімен өңдеуін қос',
'tog-editsectiononrightclick' => 'Бөлім атауын оң жақ нұқумен өңдеуін қос (JavaScript)',
'tog-showtoc'                 => 'Мазмұнын көрсет (3-тен арта бөлімі барыларға)',
'tog-rememberpassword'        => 'Кіргенімді осы компьютерде ұмытпа',
'tog-editwidth'               => 'Өңдеу аумағы толық енімен',
'tog-watchcreations'          => 'Мен бастаған беттерді бақылау тізіміме үсте',
'tog-watchdefault'            => 'Мен өңдеген беттерді бақылау тізіміме үсте',
'tog-watchmoves'              => 'Мен жылжытқан беттерді бақылау тізіміме үсте',
'tog-watchdeletion'           => 'Мен жойған беттерді бақылау тізіміме үсте',
'tog-minordefault'            => 'Әдепкіден барлық түзетулерді шағын деп белгіле',
'tog-previewontop'            => 'Қарап шығу аумағы өңдеу аумағы алдында',
'tog-previewonfirst'          => 'Бірінші өңдегенде қарап шығу',
'tog-nocache'                 => 'Бетті қосалқы қалтада сақтауды өшір',
'tog-enotifwatchlistpages'    => 'Бақыланған бет өзгергенде маған хат жібер',
'tog-enotifusertalkpages'     => 'Талқылауым өзгергенде маған хат жібер',
'tog-enotifminoredits'        => 'Шағын түзету туралы да маған хат жібер',
'tog-enotifrevealaddr'        => 'Е-пошта жайымды ескерту хатта ашық көрсет',
'tog-shownumberswatching'     => 'Бақылап тұрған қатысушылардың санын көрсет',
'tog-fancysig'                => 'Қам қолтаңба (өздіктік сілтемесіз;)',
'tog-externaleditor'          => 'Сыртқы өңдеуішті әдепкіден қолдан',
'tog-externaldiff'            => 'Сыртқы айырмағышты әдепкіден қолдан',
'tog-showjumplinks'           => '«Өтіп кету» қатынау сілтемелерін қос',
'tog-uselivepreview'          => 'Тура қарап шығуды қолдану (JavaScript) (Сынақтама)',
'tog-forceeditsummary'        => 'Өңдеу сипаттамасы бос қалғанда маған ескерт',
'tog-watchlisthideown'        => 'Түзетуімді бақылау тізімнен жасыр',
'tog-watchlisthidebots'       => 'Бот түзетуін бақылау тізімнен жасыр',
'tog-watchlisthideminor'      => 'Шағын түзетулерді бақылау тізімінде көрсетпе',
'tog-nolangconversion'        => 'Тіл түрі аударысын өшір',
'tog-ccmeonemails'            => 'Басқа қатысушыға жіберген хатымның көшірмесін маған да жібер',
'tog-diffonly'                => 'Айырма астында бет мағлұматын көрсетпе',

'underline-always'  => 'Әрқашан',
'underline-never'   => 'Ешқашан',
'underline-default' => 'Шолғыш бойынша',

'skinpreview' => '(Қарап шығу)',

# Dates
'sunday'        => 'Жексенбі',
'monday'        => 'Дүйсенбі',
'tuesday'       => 'Сейсенбі',
'wednesday'     => 'Сәрсенбі',
'thursday'      => 'Бейсенбі',
'friday'        => 'Жұма',
'saturday'      => 'Сенбі',
'sun'           => 'Жек',
'mon'           => 'Дүй',
'tue'           => 'Бей',
'wed'           => 'Сәр',
'thu'           => 'Бей',
'fri'           => 'Жұм',
'sat'           => 'Сен',
'january'       => 'қаңтар',
'february'      => 'ақпан',
'march'         => 'наурыз',
'april'         => 'cәуір',
'may_long'      => 'мамыр',
'june'          => 'маусым',
'july'          => 'шілде',
'august'        => 'тамыз',
'september'     => 'қыркүйек',
'october'       => 'қазан',
'november'      => 'қараша',
'december'      => 'желтоқсан',
'january-gen'   => 'қаңтардың',
'february-gen'  => 'ақпанның',
'march-gen'     => 'наурыздың',
'april-gen'     => 'сәуірдің',
'may-gen'       => 'мамырдың',
'june-gen'      => 'маусымның',
'july-gen'      => 'шілденің',
'august-gen'    => 'тамыздың',
'september-gen' => 'қыркүйектің',
'october-gen'   => 'қазанның',
'november-gen'  => 'қарашаның',
'december-gen'  => 'желтоқсанның',
'jan'           => 'қаң',
'feb'           => 'ақп',
'mar'           => 'нау',
'apr'           => 'cәу',
'may'           => 'мам',
'jun'           => 'мау',
'jul'           => 'шіл',
'aug'           => 'там',
'sep'           => 'қыр',
'oct'           => 'қаз',
'nov'           => 'қар',
'dec'           => 'жел',

# Bits of text used by many pages
'categories'            => 'Санаттар',
'pagecategories'        => '{{PLURAL:$1|Санат|Санаттар}}',
'category_header'       => '«$1» санатындағы беттер',
'subcategories'         => 'Санатшалар',
'category-media-header' => '«$1» санатындағы таспалар',
'category-empty'        => "''Бұл санатта ағымда еш бет не таспа жоқ.''",

'mainpagetext'      => "<big>'''МедиаУики бағдарламасы сәтті орнатылды.'''</big>",
'mainpagedocfooter' => 'Уики бағдарламасын пайдалану ақпараты үшін [http://meta.wikimedia.org/wiki/Help:Contents Пайдаланушы нұсқауларымен] танысыңыз.

== Бастау үшін ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Баптау қалауларының тізімі]
* [http://www.mediawiki.org/wiki/Manual:FAQ МедиаУикидің Жиы Қойылған Сауалдары]
* [http://lists.wikimedia.org/mailman/listinfo/mediawiki-announce МедиаУики шығу туралы хат тарату тізімі]',

'about'          => 'Жоба туралы',
'article'        => 'Мағлұмат беті',
'newwindow'      => '(жаңа терезеде)',
'cancel'         => 'Болдырмау',
'qbfind'         => 'Табу',
'qbbrowse'       => 'Шолу',
'qbedit'         => 'Өңдеу',
'qbpageoptions'  => 'Бұл бет',
'qbpageinfo'     => 'Мәтін аралығы',
'qbmyoptions'    => 'Беттерім',
'qbspecialpages' => 'Арнайы беттер',
'moredotdotdot'  => 'Көбірек…',
'mypage'         => 'Жеке бетім',
'mytalk'         => 'Талқылауым',
'anontalk'       => 'IP талқылауы',
'navigation'     => 'Бағыттау',
'and'            => 'және',

# Metadata in edit box
'metadata_help' => 'Қосымша деректер:',

'errorpagetitle'    => 'Қателік',
'returnto'          => '$1 дегенге қайта оралу.',
'tagline'           => '{{GRAMMAR:ablative|{{SITENAME}}}}',
'help'              => 'Анықтама',
'search'            => 'Іздеу',
'searchbutton'      => 'Ізде',
'go'                => 'Өту',
'searcharticle'     => 'Өт!',
'history'           => 'Бет тарихы',
'history_short'     => 'Тарихы',
'updatedmarker'     => 'соңғы келіп-кетуімнен бері жаңаланған',
'info_short'        => 'Мәлімет',
'printableversion'  => 'Басып шығару үшін',
'permalink'         => 'Тұрақты сілтеме',
'print'             => 'Басып шығару',
'edit'              => 'Өңдеу',
'editthispage'      => 'Бетті өңдеу',
'delete'            => 'Жою',
'deletethispage'    => 'Бетті жою',
'undelete_short'    => '{{PLURAL:$1|Бір|$1}} түзету жоюын болдырмау',
'protect'           => 'Қорғау',
'protect_change'    => 'қорғауды өзгерту',
'protectthispage'   => 'Бетті қорғау',
'unprotect'         => 'Қорғамау',
'unprotectthispage' => 'Бетті қорғамау',
'newpage'           => 'Жаңа бет',
'talkpage'          => 'Бетті талқылау',
'talkpagelinktext'  => 'Талқылауы',
'specialpage'       => 'Арнайы бет',
'personaltools'     => 'Жеке құралдар',
'postcomment'       => 'Мәндеме жіберу',
'articlepage'       => 'Мағлұмат бетін қарау',
'talk'              => 'Талқылау',
'views'             => 'Көрініс',
'toolbox'           => 'Құралдар',
'userpage'          => 'Қатысушы бетін қарау',
'projectpage'       => 'Жоба бетін қарау',
'imagepage'         => 'Сурет бетін қарау',
'mediawikipage'     => 'Хабар бетін қарау',
'templatepage'      => 'Үлгі бетін қарау',
'viewhelppage'      => 'Анықтама бетін қарау',
'categorypage'      => 'Санат бетін қарау',
'viewtalkpage'      => 'Талқылау бетін қарау',
'otherlanguages'    => 'Басқа тілдерде',
'redirectedfrom'    => '($1 бетінен айдатылған)',
'redirectpagesub'   => 'Айдату беті',
'lastmodifiedat'    => 'Бұл беттің өзгертілген соңғы кезі: $2, $1.', # $1 date, $2 time
'viewcount'         => 'Бұл бет {{PLURAL:$1|бір|$1}} рет қатыналған.',
'protectedpage'     => 'Қорғалған бет',
'jumpto'            => 'Мында өту:',
'jumptonavigation'  => 'бағыттау',
'jumptosearch'      => 'іздеу',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => '{{SITENAME}} туралы',
'aboutpage'         => 'Project:Жоба туралы',
'bugreports'        => 'Қателік есептемелері',
'bugreportspage'    => 'Project:Қателік есептемелері',
'copyright'         => 'Мағлұмат $1 бойынша қатыналады.',
'copyrightpagename' => '{{SITENAME}} ауторлық құқықтары',
'copyrightpage'     => '{{ns:project}}:Ауторлық құқықтар',
'currentevents'     => 'Ағымдағы оқиғалар',
'currentevents-url' => 'Project:Ағымдағы оқиғалар',
'disclaimers'       => 'Жауапкершіліктен бас тарту',
'disclaimerpage'    => 'Project:Жауапкершіліктен бас тарту',
'edithelp'          => 'Өндеу анықтамасы',
'edithelppage'      => 'Help:Өңдеу',
'faq'               => 'Жиі қойылған сауалдар',
'faqpage'           => 'Project:Жиі қойылған сауалдар',
'helppage'          => 'Help:Мазмұны',
'mainpage'          => 'Басты бет',
'policy-url'        => 'Project:Ережелер',
'portal'            => 'Қауым порталы',
'portal-url'        => 'Project:Қауым порталы',
'privacy'           => 'Жеке құпиясын сақтау',
'privacypage'       => 'Project:Жеке құпиясын сақтау',
'sitesupport'       => 'Демеушілік',
'sitesupport-url'   => 'Project:Демеушілік',

'badaccess'        => 'Рұқсат қатесі',
'badaccess-group0' => 'Сұратылған әрекетіңізді жегуіңізге рұқсат етілмейді.',
'badaccess-group1' => 'Сұратылған әрекетіңіз $1 тобының қатысушыларына шектеледі.',
'badaccess-group2' => 'Сұратылған әрекетіңіз $1 топтары бірінің қатусышыларына шектеледі.',
'badaccess-groups' => 'Сұратылған әрекетіңіз $1 топтары бірінің қатусышыларына шектеледі.',

'versionrequired'     => 'MediaWiki $1 нұсқасы керек',
'versionrequiredtext' => 'Осы бетті қолдану үшін MediaWiki $1 нұсқасы керек. [[{{ns:special}}:Version|Жүйе нұсқасы бетін]] қараңыз.',

'ok'                      => 'Жарайды',
'pagetitle'               => '$1 — {{SITENAME}}',
'retrievedfrom'           => '«$1» бетінен алынған',
'youhavenewmessages'      => 'Сізге $1 бар ($2).',
'newmessageslink'         => 'жаңа хабарлар',
'newmessagesdifflink'     => 'соңғы өзгерісіне',
'youhavenewmessagesmulti' => '$1 дегенде жаңа хабарлар бар',
'editsection'             => 'өңдеу',
'editold'                 => 'өңдеу',
'editsectionhint'         => 'Бөлімді өңдеу: $1',
'toc'                     => 'Мазмұны',
'showtoc'                 => 'көрсет',
'hidetoc'                 => 'жасыр',
'thisisdeleted'           => 'Қарау, не қалпына келтіру ме?: $1',
'viewdeleted'             => 'Қарау ма?: $1',
'restorelink'             => 'жойылған {{PLURAL:$1|бір|$1}} түзету',
'feedlinks'               => 'Арна:',
'feed-invalid'            => 'Жарамсыз жазылымды арна түрі.',
'site-rss-feed'           => '$1 RSS арнасы',
'site-atom-feed'          => '$1 Atom арнасы',
'page-rss-feed'           => '«$1» дегеннің RSS арнасы',
'page-atom-feed'          => '«$1» дегеннің Atom арнасы',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Бет',
'nstab-user'      => 'Жеке бет',
'nstab-media'     => 'Таспа беті',
'nstab-special'   => 'Арнайы',
'nstab-project'   => 'Жоба беті',
'nstab-image'     => 'Файл беті',
'nstab-mediawiki' => 'Хабар',
'nstab-template'  => 'Үлгі',
'nstab-help'      => 'Анықтама',
'nstab-category'  => 'Санат',

# Main script and global functions
'nosuchaction'      => 'Бұндай әрекет жоқ',
'nosuchactiontext'  => 'Осы URL жайымен енгізілген әрекетті
осы уики жорамалдап білмеді.',
'nosuchspecialpage' => 'Бұндай арнайы бет жоқ',
'nospecialpagetext' => "<big>'''Сұратылған арнайы бетіңіз жарамсыз.'''</big>

Жарамды арнайы бет тізімін [[{{ns:special}}:Specialpages]] дегеннен таба аласыз.",

# General errors
'error'                => 'Қате',
'databaseerror'        => 'Дерекқор қатесі',
'dberrortext'          => 'Дерекқор сұранымында синтаксис қатесі болды.
Бұл бағдарлама қатесін белгілеуі мүмкін.
Соңғы болған дерекқор сұранымы:
<blockquote><tt>$1</tt></blockquote>
мына функциясынан «<tt>$2</tt>».
MySQL қайтарған қатесі «<tt>$3: $4</tt>».',
'dberrortextcl'        => 'Дерекқор сұранымында синтаксис қатесі болды.
Соңғы болған дерекқор сұранымы:
«$1»
мына функциясынан: «$2».
MySQL қайтарған қатесі «$3: $4»',
'noconnect'            => 'Ғафу етіңіз! Бұл уикиде кейбір техникалық қиыншылықтар кездесті, және де дерекқор серверіне байланыса алмайды.<br />
$1',
'nodb'                 => '$1 дерекқоры бөлектенбеді',
'cachederror'          => 'Төменде сұратылған беттің қосалқы қалтадағы көшірмесі, осы бет жаңартылмаған болуы мүмкін.',
'laggedslavemode'      => 'Құлақтандыру: Бетте жуықтағы жаңалаулар болмауы мүмкін.',
'readonly'             => 'Дерекқоры құлыпталған',
'enterlockreason'      => 'Құлыптау себебін енгізіңіз, қай уақытқа дейін
құлыпталғанын кірістіріп',
'readonlytext'         => 'Ағымда дерекқор жаңа жазба және тағы басқа өзгерістер жасаудан құлыпталынған. Бұл дерекқорды жөндету бағдарламаларын орындау үшін болуы мүмкін, бұны бітіргеннен соң қаліпті іске қайтарылады.

Құлыптаған әкімші бұны былай түсіндіреді: $1',
'missingarticle'       => 'Іздестірілген «$1» атаулы бет мәтіні дерекқорда табылмады.

Бұл дағдыда ескірген айырма сілтемесіне немесе жойылған бет тарихының сілтемесіне
ергеннен болуы мүмкін.

Егер бұл болжам дұрыс себеп болмаса, бағдарламамыздағы қатеге тап болуыңыз мүмкін.
Бұл туралы нақты URL жайына аңғартып, әкімшіге есептеме жіберіңіз.',
'readonly_lag'         => 'Жетек дерекқор серверлер бастауышпен қадамланғанда осы дерекқор өздіктік құлыпталынған',
'internalerror'        => 'Ішкі қате',
'internalerror_info'   => 'Ішкі қатесі: $1',
'filecopyerror'        => '«$1» файлы «$2» файлына көшірілмеді.',
'filerenameerror'      => '«$1» файл аты «$2» атына өзгертілмеді.',
'filedeleteerror'      => '«$1» файлы жойылмайды.',
'directorycreateerror' => '«$1» қалтасы жаратылмады.',
'filenotfound'         => '«$1» файлы табылмады.',
'fileexistserror'      => '«$1» файлға жазуға болмайды: осындай файл бар түге',
'unexpected'           => 'Күтілмеген мағына: «$1» = «$2».',
'formerror'            => 'Қателік: пішін жіберілмейді',
'badarticleerror'      => 'Осындай әрекет мына бетте атқарылмайды.',
'cannotdelete'         => 'Айтылмыш бет не сурет жойылмайды. (Бұны басқа біреу алдақашан жойған мүмкін.)',
'badtitle'             => 'Жарамсыз атау',
'badtitletext'         => 'Сұратылған бет атауы жарамсыз, бос, тілара сілтемесі не уики-ара атауы бұрыс енгізілген. Атауларда сүемелдемеген бірқатар әріптер болуы мүмкін.',
'perfdisabled'         => 'Ғафу етіңіз! Бұл мүмкіндік, дерекқордың жылдамылығына әсер етіп, ешкімге уикиді пайдалануға бермегесін, уақытша өшірілген.',
'perfcached'           => 'Келесі дерек қосалқы қалтасынан алынған, сондықтан толықтай жаңаланмаған болуы мүмкін.',
'perfcachedts'         => 'Келесі дерек қосалқы қалтасынан алынған, соңғы жаңаланлған кезі: $1.',
'querypage-no-updates' => 'Бұл беттің жаңартылуы ағымда өшірілген. Деректері қазір өзгертілмейді.',
'wrong_wfQuery_params' => 'wfQuery() функциясы үшін бұрыс бапталымдары бар<br />
Функция: $1<br />
Сұраным: $2',
'viewsource'           => 'Қайнарын қарау',
'viewsourcefor'        => '$1 деген үшін',
'actionthrottled'      => 'Әрекет бәсеңдетілді',
'actionthrottledtext'  => 'Спамға қарсы күрес есебінде, осы әрекетті қысқа уақытта тым көп рет орындауыңыз шектелінді, және бұл шектеу шамасынан асып кеткенсіз. Бірнеше минөттан қайта байқап көріңіз.',
'protectedpagetext'    => 'Өңдеуді қақпайлау үшін бұл бет құлыпталынған.',
'viewsourcetext'       => 'Бұл беттің қайнарын қарауыңызға және көшіріп алуңызға болады:',
'protectedinterface'   => 'Бұл бет бағдарламаның тілдесу мәтінін жетістіреді, сондықтан қиянатты қақпайлау үшін өзгертуі құлыпталған.',
'editinginterface'     => "'''Құлақтандыру:''' Бағдарламаға тілдесу мәтінін жетістіретін бетін өңдеп жатырсыз. Бұл беттің өзгертуі басқа қатысушыларға пайдаланушылық тілдесуі қалай көрінетіне әсер етеді. Аудару үшін, MediaWiki бағдарламасын жерсіндіру [http://translatewiki.net/wiki/Translating:Intro Betawiki] жобасы пайдалануы жан-жағын қараңыз.",
'sqlhidden'            => '(SQL сұранымы жасырылған)',
'cascadeprotected'     => 'Бұл бет өңдеуден қорғалған, себебі келесі «баулы қорғауы» қосылған {{PLURAL:$1|бетке|беттерге}} кірістірілген:

$2',
'namespaceprotected'   => "'''$1''' есім аясындағы беттерді өңдеу үшін рұқсатыңыз жоқ.",
'customcssjsprotected' => 'Бұл бетті өңдеуге рұқсатыңыз жоқ, себебі мында басқа қатысушының жеке баптаулары бар.',
'ns-specialprotected'  => '{{ns:special}} есім аясындағы беттер өңделінбейді',
'titleprotected'       => 'Бұл атаудың жаратуын [[{{ns:user}}:$1|$1]] қорғады. Келтірілген себебі: <i>$2</i>.',

# Login and logout pages
'logouttitle'                => 'Қатысушы шығуы',
'logouttext'                 => '<strong>Енді жүйеден шықтыңыз.</strong><br />
Жүйеге кірместен {{SITENAME}} жобасын пайдалануын жалғастыра аласыз,
немесе дәл сол не басқа қатысушы боп қайта круіңіз мүмкін.
Аңғартпа: Кейбір беттер шолғыштың қосалқы қалтасын босатқанша дейін
әлі де жүйеге кіргеніңіздей көрінуі мүмкін.',
'welcomecreation'            => '== Қош келдіңіз, $1! ==

Тіркелгіңіз жаратылды. {{SITENAME}} баптауыңызды қалауыңызбен өзгертуді ұмытпаңыз.',
'loginpagetitle'             => 'Қатысушы кіруі',
'yourname'                   => 'Қатысушы атыңыз:',
'yourpassword'               => 'Құпия сөзіңіз:',
'yourpasswordagain'          => 'Құпия сөзді қайталаңыз:',
'remembermypassword'         => 'Менің кіргенімді бұл компьютерде ұмытпа',
'yourdomainname'             => 'Желі үйшігіңіз:',
'externaldberror'            => 'Осында не сыртқы теңдестіру дерекқорында қате болды, немесе сыртқы тіркелгіңізді жаңалау рұқсаты жоқ.',
'loginproblem'               => '<b>Кіруіңіз кезінде осында қиындыққа тап болдық.</b><br />Қайта байқап көріңіз.',
'login'                      => 'Кіру',
'loginprompt'                => '{{SITENAME}} торабына кіруіңіз үшін «cookies» қосылуы тиісті.',
'userlogin'                  => 'Кіру / Тіркелу',
'logout'                     => 'Шығу',
'userlogout'                 => 'Шығу',
'notloggedin'                => 'Кірмегенсіз',
'nologin'                    => 'Кірмегенсіз бе? $1.',
'nologinlink'                => 'Тіркеліңіз',
'createaccount'              => 'Тіркелу',
'gotaccount'                 => 'Алдақашан тіркелдіңіз бе? $1.',
'gotaccountlink'             => 'Кіріңіз',
'createaccountmail'          => 'е-поштамен',
'badretype'                  => 'Енгізген құпия сөздеріңіз бір біріне сәйкес емес.',
'userexists'                 => 'Енгізген қатысушы атыңыз алдақашан пайдалануда. Басқа атау тандаңыз.',
'youremail'                  => 'Е-пошта жайыңыз:',
'username'                   => 'Қатысушы атыңыз:',
'uid'                        => 'Қатысушы теңдестіруіңіз:',
'yourrealname'               => 'Шын атыңыз:',
'yourlanguage'               => 'Тіліңіз:',
'yourvariant'                => 'Нұсқаңыз:',
'yournick'                   => 'Лақап атыңыз:',
'badsig'                     => 'Қам қолтаңбаңыз жарамсыз; HTML белгішелерін тексеріңіз.',
'badsiglength'               => 'Лақап атыңыз тым ұзын; $1 нышаннан аспауы керек.',
'email'                      => 'Е-поштаңыз',
'prefs-help-realname'        => 'Міндетті емес: Енгізсеңіз, шығармаңыздың ауторлығын белгілеуі үшін қолданылады.',
'loginerror'                 => 'Кіру қатесі',
'prefs-help-email'           => 'Міндетті емес: «Қатысушы» немесе «Қатысушы_талқылауы» деген беттеріңіз арқылы басқаларға байланысу қосылады. Өзіңіздің кім екеніңізді білдіртпейді.',
'prefs-help-email-required'  => 'Е-пошта жайы керек.',
'nocookiesnew'               => 'Қатысушы тіркелгісі жаратылды, бірақ кірмегенсіз. Қатысушы кіру үшін {{SITENAME}} торабы «cookies» дегенді қолданады. Сізде «cookies» өшірілген. Соны қосыңыз да жаңа қатысушы атыңызды және құпия сөзіңізді енгізіп кіріңіз.',
'nocookieslogin'             => 'Қатысушы кіру үшін {{SITENAME}} торабы «cookies» дегенді қолданады. Сізде «cookies» өшірілген. Соны қосыңыз да кіруді қайта байқап көріңіз.',
'noname'                     => 'Жарамды қатысушы атын енгізбедіңіз.',
'loginsuccesstitle'          => 'Кіруіңіз сәтті өтті',
'loginsuccess'               => "'''Сіз енді {{SITENAME}} жобасына «$1» ретінде кіріп отырсыз.'''",
'nosuchuser'                 => 'Мында «$1» атаулы қатысушы жоқ. Емлеңізді тексеріңіз, немесе жаңадан тіркеліңіз.',
'nosuchusershort'            => 'Мында «<nowiki>$1</nowiki>» атаулы қатысушы жоқ. Емлеңізді тексеріңіз.',
'nouserspecified'            => 'Қатысушы атын енгізіуіңіз керек.',
'wrongpassword'              => 'Бұрыс құпия сөз енгізілген. Қайта байқап көріңіз.',
'wrongpasswordempty'         => 'Құпия сөз бос болған. Қайта байқап көріңіз.',
'passwordtooshort'           => 'Құпия сөзіңіз жарамсыз не тым қысқа. Ең кемінде $1 әріп және қатысушы атыңыздан басқа болуы керек.',
'mailmypassword'             => 'Құпия сөзімді хатпен жібер',
'passwordremindertitle'      => '{{SITENAME}} үшін жаңа уақытша құпия сөз',
'passwordremindertext'       => 'Кейбіреу (IP жайы: $1, бәлкім өзіңіз боларсыз)
{{SITENAME}} үшін бізден жаңа құпия сөзін жіберуін сұратылған ($4).
«$2» қатысушының құпия сөзі «$3» болды енді.
Қазір кіруіңіз және құпия сөзіңізді ауыструыңыз керек.

Егер басқа біреу бұны сұратылған болса, немесе құпия сөзіңізді ұмытсаңыз да,
және бұны өзгерткіңіз келмесе де, осы хабарламаға аңғармауыңызға да болады,
ескі құпия сөзіңізді әріғарай қолданып.',
'noemail'                    => 'Мында «$1» қатысушының е-поштасы жоқ.',
'passwordsent'               => 'Жаңа құпия сөз «$1» үшін тіркелген е-пошта
жайына жіберілді.
Қабылдағаннан кейін кіргенде соны енгізіңіз.',
'blocked-mailpassword'       => 'IP жайыңыздан өңдеу бұғатталған, сондықтан
қиянатты қақпайлау үшін құпия сөз жіберу қызметінің әрекеті рұқсат етілмейді.',
'eauthentsent'               => 'Құптау хаты аталмыш е-пошта жайына жіберілді.
Басқа е-пошта хатын жіберудің алдынан, тіркелгі шынынан сіздікі екенін
құптау үшін хаттағы нұсқауларға еріңіз.',
'throttled-mailpassword'     => 'Соңғы $1 сағатта құпия сөз ескерту хаты алдақашан жіберілді.
Қиянатты қақпайлау үшін, $1 сағат сайын тек бір ғана құпия сөз ескерту
хаты жіберіледі.',
'mailerror'                  => 'Хат жіберу қатесі: $1',
'acct_creation_throttle_hit' => 'Ғафу етіңіз, сіз алдақашан $1 рет тіркеіліпсіз. Онан артық істей алмайсыз.',
'emailauthenticated'         => 'Е-пошта жайыңыз құпталған кезі: $1.',
'emailnotauthenticated'      => 'Е-пошта жайыңыз әлі құпталған жоқ.
Төмендегі мүмкіндіктер үшін ешқандай хат жіберілмейді.',
'noemailprefs'               => 'Осы мүмкіндіктер істеуі үшін е-пошта жайыңызды енгізіңіз.',
'emailconfirmlink'           => 'Е-пошта жайыңызды құптаңыз',
'invalidemailaddress'        => 'Осы е-пошта жайда жарамсыз пішім болған, қабыл етілмейді.
Дұрыс пішімделген жайды енгізіңіз, не аумақты бос қалдырыңыз.',
'accountcreated'             => 'Тіркелгі жаратылды',
'accountcreatedtext'         => '$1 үшін қатысушы тіркелгісі жаратылды.',
'createaccount-title'        => '{{SITENAME}} үшін тіркелу',
'createaccount-text'         => 'Кейбіреу ($1) {{SITENAME}} жобасында $2 үшін тіркелген ($4).
«$2» дегеннің құпия сөзі — «$3». Қазір кіріңіз де құпия сөзіңізді
өзгертіңіз

Егер осы тіркелгі қателікпен жаратылса, бұл хабарға елемеуіңіз мүмкін.',
'loginlanguagelabel'         => 'Тіл: $1',

# Password reset dialog
'resetpass'               => 'Тіркелгінің құпия сөзін өзгерту',
'resetpass_announce'      => 'Хатпен жіберілген уақытша белгілемемен кіріпсіз. Тіркелуді бітіру үшін жаңа құпия сөзіңізді мында енгізіңіз:',
'resetpass_header'        => 'Құпия сөзді өзгерту',
'resetpass_submit'        => 'Құпия сөзді қойыңыз да кіріңіз',
'resetpass_success'       => 'Құпия сөзіңіз сәтті өзгертілді! Енді кіріңіз…',
'resetpass_bad_temporary' => 'Уақытша құпия сөз жарамсыз. Мүмкін құпия сөзіңізді алдақашан сәтті өзгерткен боларсыз немесе жаңа уақытша құпия сөзін сұратылғансыз.',
'resetpass_forbidden'     => '{{SITENAME}} жобасында құпия сөздер өзгертілмейді',
'resetpass_missing'       => 'Еш пішін деректері жоқ.',

# Edit page toolbar
'bold_sample'     => 'Жуан мәтін',
'bold_tip'        => 'Жуан мәтін',
'italic_sample'   => 'Қиғаш мәтін',
'italic_tip'      => 'Қиғаш мәтін',
'link_sample'     => 'Сілтеме атауы',
'link_tip'        => 'Ішкі сілтеме',
'extlink_sample'  => 'http://www.example.com сілтеме атауы',
'extlink_tip'     => 'Сыртқы сілтеме (алдынан http:// енгізуін ұмытпаңыз)',
'headline_sample' => 'Бас жол мәтіні',
'headline_tip'    => '2-ші деңгейлі бас жол',
'math_sample'     => 'Формуланы мында енгізіңіз',
'math_tip'        => 'Математика формуласы (LaTeX)',
'nowiki_sample'   => 'Пішімделмейтін мәтінді осында енгізіңіз',
'nowiki_tip'      => 'Уики пішімін елемеу',
'image_tip'       => 'Ендірілген сурет',
'media_tip'       => 'Таспа файлының сілтемесі',
'sig_tip'         => 'Қолтаңбаңыз және уақыт белгісі',
'hr_tip'          => 'Дерелей сызық (үнемді қолданыңыз)',

# Edit pages
'summary'                   => 'Сипаттамасы',
'subject'                   => 'Тақырыбы/бас жолы',
'minoredit'                 => 'Бұл шағын түзету',
'watchthis'                 => 'Бетті бақылау',
'savearticle'               => 'Бетті сақта!',
'preview'                   => 'Қарап шығу',
'showpreview'               => 'Қарап шық',
'showlivepreview'           => 'Тура қарап шық',
'showdiff'                  => 'Өзгерістерді көрсет',
'anoneditwarning'           => "'''Құлақтандыру:''' Сіз жүйеге кірмегенсіз. IP жайыңыз бұл беттің өңдеу тарихында жазылып алынады.",
'missingsummary'            => "'''Ескертпе:''' Түзету сипаттамасын енгізбепсіз. «Сақтау» түймесін тағы бассаңыз, түзетуіңіз мәндемесіз сақталады.",
'missingcommenttext'        => 'Төменде мәндемеңізді енгізіңіз.',
'missingcommentheader'      => "'''Ескертпе:''' Бұл мәндемеге тақырып/басжол жетістірмепсіз. Егер тағы да Сақтау түймесін нұқысаңыз, түзетуіңіз солсыз сақталады.",
'summary-preview'           => 'Сипаттамасын қарап шығу',
'subject-preview'           => 'Тақырыбын/бас жолын қарап шығу',
'blockedtitle'              => 'Қатысушы бұғатталған',
'blockedtext'               => "<big>'''Қатысушы атыңыз не IP жайыңыз бұғатталған.'''</big>

Осы бұғаттауды $1 істеген. Келтірілген себебі: ''$2''.

* Бұғаттау басталғаны: $8
* Бұғаттау бітетіні: $6
* Бұғаттау мақсаты: $7

Осы бұғаттауды талқылау үшін $1 дегенмен, не басқа [[{{{{ns:mediawiki}}:grouppage-sysop}}|әкімшімен]] қатынасуыңызға болады.
[[{{ns:special}}:Preferences|Тіркелгі баптауларын]] қолданып жарамды е-пошта жайын енгізгенше дейін және бұны пайдалануы 
бұғатталмағанша дейін «Қатысушыға хат жазу» мүмкіндігін қолдана алмайсыз.
Ағымдық IP жайыңыз: $3, және бұғатау нөмірі: $5. Соның біреуін, немесе екеуін де әрбір сұранымыңызға кірістіріңіз.",
'autoblockedtext'           => "$1 деген бұрын басқа қатысушы пайдаланған болғасын осы IP жайыңыз өздіктік бұғатталған.
Келтірілген себебі:

:''$2''

* Бұғаттау басталғаны: $8
* Бұғаттау бітетіні: $6

Осы бұғаттауды талқылау үшін $1 дегенмен,
не басқа [[{{{{ns:mediawiki}}:grouppage-sysop}}|әкімшімен]] қатынасуыңызға болады.

Аңғартпа: [[{{ns:special}}:Preferences|Тіркелгі баптауларын]] қолданып жарамды е-пошта жайын енгізгенше 
дейін және бұны пайдалануы бұғатталмағанша дейін «Қатысушыға хат жазу» мүмкіндігін қолдана алмайсыз. 

Бұғатау нөміріңіз: $5. Бұл нөмірді әрбір сұранымыңызға кірістіріңіз.",
'blockednoreason'           => 'еш себебі келтірілмеген',
'blockedoriginalsource'     => "'''$1''' дегеннің қайнары 
төменде көрсетіледі:",
'blockededitsource'         => "'''$1''' дегенге жасалған '''түзетулеріңіздің''' мәтіні төменде көрсетіледі:",
'whitelistedittitle'        => 'Өңдеу үшін кіруіңіз жөн.',
'whitelistedittext'         => 'Беттерді өңдеу үшін $1 жөн.',
'whitelistreadtitle'        => 'Оқу үшін кіруіңіз жөн',
'whitelistreadtext'         => 'Беттерді оқу үшін [[{{ns:special}}:Userlogin|кіруіңіз]] жөн.',
'whitelistacctitle'         => 'Тіркелуіңізге рұқсат берілмеген',
'whitelistacctext'          => '{{SITENAME}} жобасына тіркелуге үшін [[{{ns:special}}:Userlogin|кіруіңіз]] керек және жанасымды рұқсаттарыңыз болу керек.',
'confirmedittitle'          => 'Е-пошта жайын құптау хаты қайта өңделуі керек',
'confirmedittext'           => 'Беттерді өңдеу үшін алдын ала Е-пошта жайыңызды құптауыңыз керек. Жайыңызды [[{{ns:special}}:Preferences|қатысушы баптауы]] арқылы қойыңыз да жарамдылығын тексеріп шығыңыз.',
'nosuchsectiontitle'        => 'Бұндай бөлім жоқ',
'nosuchsectiontext'         => 'Жоқ бөлімді өңдеуді талап етіпсіз. Мында $1 деген бөлім жоқ екен, өңдеулеріңізді сақтау үшін орын жоқ.',
'loginreqtitle'             => 'Кіруіңіз керек',
'loginreqlink'              => 'кіру',
'loginreqpagetext'          => 'Басқа беттерді көру үшін сіз $1 болуыңыз керек.',
'accmailtitle'              => 'Құпия сөз жіберілді.',
'accmailtext'               => '$2 жайына «$1» құпия сөзі жіберілді.',
'newarticle'                => '(Жаңа)',
'newarticletext'            => 'Сілтемеге еріп әлі басталмаған бетке келіпсіз.
Бетті бастау үшін, төмендегі аумақта мәтініңізді теріңіз
(көбірек ақпарат үшін [[{{{{ns:mediawiki}}:helppage}}|анықтама бетін]] қараңыз).
Егер жаңылғаннан осында келген болсаңыз, шолғышыңыз «Артқа» деген батырмасын нұқыңыз.',
'anontalkpagetext'          => "----''Бұл тіркелгісіз (немесе тіркелгісін қолданбаған) қатысушы талқылау беті. Осы қатысушыны біз тек сандық IP жайымен теңдестіреміз. Осындай IP жайлар бірнеше қатысушыға ортақ болуы мүмкін. Егер сіз тіркелгісіз қатысушы болсаңыз және сізге қатыссыз мәндемелер жіберілгенін сезсеңіз, басқа тіркелгісіз қатысушылармен араластырмауы үшін [[{{ns:special}}:Userlogin|тіркеліңіз не кіріңіз]].''",
'noarticletext'             => 'Бұл бетте ағымда еш мәтін жоқ, басқа беттерден осы бет атауын [[{{ns:special}}:Search/{{PAGENAME}}|іздеп көруіңізге]] немесе осы бетті [{{fullurl:{{FULLPAGENAME}}|action=edit}} түзетуіңізге] болады.',
'userpage-userdoesnotexist' => '«$1» қатысушы тіркелгісі жазып алынбаған. Бұл бетті бастау/өңдеу талабыңызды тексеріп шығыңыз.',
'clearyourcache'            => "'''Аңғартпа:''' Сақтағаннан кейін өзгерістерді көру үшін шолғыш қосалқы қалтасын босату керегі мүмкін. '''Mozilla  / Safari:''' ''Shift'' пернесін басып тұрып ''Reload'' (''Қайта жүктеу'') батырмасын нұқыңыз (не ''Ctrl-Shift-R'' басыңыз); ''IE:'' ''Ctrl-F5'' басыңыз; '''Opera / Konqueror''' ''F5'' пернесін басыңыз.",
'usercssjsyoucanpreview'    => '<strong>Басалқы:</strong> Сақтау алдында жаңа CSS/JS файлын тексеру үшін «Қарап шығу» батырмасын қолданыңыз.',
'usercsspreview'            => "'''Мынау CSS мәтінін тек қарап шығу екенін ұмытпаңыз, ол әлі сақталған жоқ!'''",
'userjspreview'             => "'''Мынау JavaScript қатысушы бағдарламасын тексеру/қарап шығу екенін ұмытпаңыз, ол әлі сақталған жоқ!'''",
'userinvalidcssjstitle'     => "'''Құлақтандыру:''' Бұл «$1» деген безендіру мәнері емес. Қатысушының .css және .js файл атауы кіші әріпппен жазылу тиісті екенін ұмытпаңыз, мысалға {{ns:user}}:Foo/monobook.css дегенді {{ns:user}}:Foo/Monobook.css дегенмен салыстырып қараңыз.",
'updated'                   => '(Жаңартылған)',
'note'                      => '<strong>Аңғартпа:</strong>',
'previewnote'               => '<strong>Мынау тек қарап шығу екенін ұмытпаңыз; түзетулер әлі сақталған жоқ!</strong>',
'previewconflict'           => 'Бұл қарап шығу жоғарыдағы өңдеу аумағындағы мәтінге сақтаған кезіндегі дей ықпал етеді.',
'session_fail_preview'      => '<strong>Ғафу етіңіз! Сессия деректері ысырап қалғандықтан өңдеуіңізді жөндей алмаймыз.
Қайта байқап көріңіз. Егер бұл әлі істемесе, шығуды және қайта кіруді байқап көріңіз.</strong>',
'session_fail_preview_html' => "<strong>Ғафу етіңіз! Сессия деректері ысырап қалғандықтан өңдеуіңізді жөндей алмаймыз.</strong>

''{{SITENAME}} жобасында қам HTML қосылған, JavaScript шабуылдардан қорғану үшін алдын ала қарап шығу жасырылған.''

<strong>Егер бұл өңдеу адал талап болса, қайта байқап көріңіз. Егер бұл әлі істемесе, шығуды және қайта кіруді байқап көріңіз.</strong>",
'token_suffix_mismatch'     => '<strong>Түзетуіңіз тайдырылды, себебі тұтынғышыңыз өңдеу нышанында 
емле таңбаларын кескілеп тастады. Бет мәтіні бүлінбеу үшін түзетуіңіз тайдырылады.
Бұл ғаламторға негізделінген қате толған тіркелуі жоқ прокси-серверді пайдаланған болуы мүмкін.</strong>',
'editing'                   => 'Өңделуде: $1',
'editinguser'               => 'Өңделуде: <b>$1</b> деген қатысушы',
'editingsection'            => 'Өңделуде: $1 (бөлімі)',
'editingcomment'            => 'Өңделуде: $1 (мәндемесі)',
'editconflict'              => 'Өңдеу қақтығысы: $1',
'explainconflict'           => 'Осы бетті сіз өңдей бастағанда басқа біреу бетті өзгерткен.
Жоғарғы аумақта беттің ағымдық мәтіні бар.
Төменгі аумақта сіз өзгерткен мәтіні көрсетіледі.
Өзгертуіңізді ағымдық мәтінге үстеуіңіз жөн.
"Бетті сақта!" түймесіне басқанда
<b>тек</b> жоғарғы аумақтағы мәтін сақталады.<br />',
'yourtext'                  => 'Мәтініңіз',
'storedversion'             => 'Сақталған нұсқасы',
'nonunicodebrowser'         => '<strong>ҚҰЛАҚТАНДЫРУ: Шолғышыңыз Unicode белгілеуіне үйлесімді емес, сондықтан латын емес әріптері бар беттерді өңдеу зіл болу мүмкін. Жұмыс істеуге ықтималдық беру үшін, төменгі өңдеу аумағында ASCII емес әріптер оналтылық санымен көрсетіледі</strong>.',
'editingold'                => '<strong>ҚҰЛАҚТАНДЫРУ: Осы беттің ертерек нұсқасын
өңдеп жатырсыз.
Бұны сақтасаңыз, осы нусқадан соңғы барлық өзгерістер жойылады.</strong>',
'yourdiff'                  => 'Айырмалар',
'copyrightwarning'          => 'Аңғартпа: {{SITENAME}} жобасына берілген барлық үлестер $2 (көбірек ақпарат үшін: $1) құжатына сай деп саналады. Егер жазуыңыздың еркін түзетілуін және ақысыз көпшілікке таратуын қаламасаңыз, мында жарияламауыңыз жөн.<br />
Тағы да, бұл мағлұмат өзіңіз жазғаныңызға, не қоғам қазынасынан немесе сондай ашық қайнарлардан көшірілгеніне бізге уәде бересіз.
<strong>АУТОРЛЫҚ ҚҰҚЫҚПЕН ҚОРҒАУЛЫ МАҒЛҰМАТТЫ РҰҚСАТСЫЗ ЖАРИЯЛАМАҢЫЗ!</strong>',
'copyrightwarning2'         => 'Аңғартпа: {{SITENAME}} жобасына берілген барлық үлестерді басқа үлескерлер түзетуге, өзгертуге, не аластауға мүмкін. Егер жазуыңыздың еркін түзетілуін қаламасаңыз, мында жарияламауыңыз жөн.<br />
Тағы да, бұл мағлұмат өзіңіз жазғаныңызға, не қоғам қазынасынан немесе сондай ашық қайнарлардан көшірілгеніне бізге уәде бересіз
(көбірек ақпарат үшін $1 қужатын қараңыз).
<strong>АУТОРЛЫҚ ҚҰҚЫҚПЕН ҚОРҒАУЛЫ МАҒЛҰМАТТЫ РҰҚСАТСЫЗ ЖАРИЯЛАМАҢЫЗ!</strong>',
'longpagewarning'           => '<strong>ҚҰЛАҚТАНДЫРУ: Бұл беттің мөлшері — $1 KB; кейбір
шолғыштарда бет мөлшері 32 KB жетсе не оны асса өңдеу күрделі болуы мүмкін.
Бетті бірнеше кішкін бөлімдерге бөліп көріңіз.</strong>',
'longpageerror'             => '<strong>ҚАТЕЛІК: Жіберетін мәтініңіздін мөлшері — $1 KB, ең көбі $2 KB
рұқсат етілген мөлшерінен асқан. Бұл сақтай алынбайды.</strong>',
'readonlywarning'           => '<strong>ҚҰЛАҚТАНДЫРУ: Дерекқор жөндету үшін құлыпталған,
сондықтан дәл қазір түзетуіңізді сақтай алмайсыз. Сосын қолдануға үшін мәтәніңізді көшіріп,
өз компүтеріңізде файлға сақтаңыз.</strong>',
'protectedpagewarning'      => '<strong>ҚҰЛАҚТАНДЫРУ: Бұл бет қорғалған. Тек әкімші рұқсаты бар қатысушылар өңдеу жасай алады.</strong>',
'semiprotectedpagewarning'  => "'''Аңғартпа:''' Бет жартылай қорғалған, сондықтан осыны тек тіркелген қатысушылар өңдей алады.",
'cascadeprotectedwarning'   => "'''Құлақтандыру''': Бұл бет құлыпталған, енді тек әкімші құқықтары бар қатысушылар бұны өңдей алады.Бұның себебі: бұл бет «баулы қорғауы» бар келесі {{PLURAL:$1|бетке|беттерге}} кірістірілген:",
'titleprotectedwarning'     => '<strong>ҚҰЛАҚТАНДЫРУ:  Бұл бет құлыпталған, сондықтан тек бірқатар қатысушылар бұны жарата алады.</strong>',
'templatesused'             => 'Бұл бетте қолданылған үлгілер:',
'templatesusedpreview'      => 'Бұны қарап шығуға қолданылған үлгілер:',
'templatesusedsection'      => 'Бұл бөлімде қолданылған үлгілер:',
'template-protected'        => '(қорғалған)',
'template-semiprotected'    => '(жартылай қорғалған)',
'nocreatetitle'             => 'Бетті бастау шектелген',
'nocreatetext'              => '{{SITENAME}} жобасында жаңа бет бастауы шектелген.
Кері қайтып бар бетті өңдеуіңізге болады, немесе [[{{ns:special}}:Userlogin|кіруіңізге не тіркелуіңізге]] болады.',
'nocreate-loggedin'         => '{{SITENAME}} жобасында жаңа бет бастау рұқсатыңыз жоқ.',
'permissionserrors'         => 'Рұқсаттар қателері',
'permissionserrorstext'     => 'Бұны істеуге рұқсатыңыз жоқ, келесі {{PLURAL:$1|себеп|себептер}} бойынша:',
'recreate-deleted-warn'     => "'''Құлақтандыру: Алдында жойылған бетті қайта бастайын деп тұрсыз.'''

Мына бет өңдеуін жалғастыру үшін жарастығын тексеріп шығуыңыз жөн.
Қолайлы болуы үшін бұл беттің жою журналы келтірілген:",

# "Undo" feature
'undo-success' => 'Бұл түзету жоққа шығарылуы мүмкін. Талабыңызды біліп тұрып алдын ала төмендегі салыстыруды тексеріп шығыңыз да, түзетудің жоққа шығаруын бітіру үшін төмендегі өзгерістерді сақтаңыз.',
'undo-failure' => 'Бұл түзету жоққа шығарылмайды, себебі арада қақтығыс жасайтын түзетулер бар.',
'undo-summary' => '[[{{ns:special}}:Contributions/$2|$2]] ([[User_talk:$2|талқылауы]]) істеген нөмір $1 нұсқасын жоққа шығарды',

# Account creation failure
'cantcreateaccounttitle' => 'Тіркелгі жаратылмады',
'cantcreateaccount-text' => "Бұл IP жайдан (<b>$1</b>) тіркелуін [[User:$3|$3]] бұғаттаған.

$3 келтірілген себебі: ''$2''",

# History pages
'viewpagelogs'        => 'Осы бетке қатысты журналдарды қарау',
'nohistory'           => 'Осы беттінің нұсқалар тарихы жоқ.',
'revnotfound'         => 'Нұсқа табылмады',
'revnotfoundtext'     => 'Осы сұранысқан беттің ескі нұсқасы табылған жоқ. Осы бетті ашуға пайдаланған URL жайын қайта тексеріп шығыңыз.',
'loadhist'            => 'Бет тарихы жүктелуде',
'currentrev'          => 'Ағымдық нұсқасы',
'revisionasof'        => '$1 кезіндегі нұсқасы',
'revision-info'       => '$1 кезіндегі $2 жасаған нұсқасы',
'previousrevision'    => '← Ескілеу нұсқасы',
'nextrevision'        => 'Жаңалау нұсқасы →',
'currentrevisionlink' => 'Ағымдық нұсқасы',
'cur'                 => 'ағым.',
'next'                => 'кел.',
'last'                => 'соң.',
'orig'                => 'түпн.',
'page_first'          => 'алғашқысына',
'page_last'           => 'соңғысына',
'histlegend'          => 'Айырмасын бөлектеу: салыстырамын деген нұсқаларды айырып-қосқышпен белгілеп және де <Enter> пернесін басыңыз, немесе астындағы батырманы нұқыңыз.<br />
Шартты белгілер: (ағым.) = ағымдық нұсқамен айырмасы,
(соң.) = алдыңғы нұсқамен айырмасы, ш = шағын түзету',
'deletedrev'          => '[жойылған]',
'histfirst'           => 'Ең алғашқысына',
'histlast'            => 'Ең соңғысына',
'historysize'         => '({{PLURAL:$1|1|$1}} байт)',
'historyempty'        => '(бос)',

# Revision feed
'history-feed-title'          => 'Нұсқа тарихы',
'history-feed-description'    => 'Мына уикидегі бұл беттің нұсқа тарихы',
'history-feed-item-nocomment' => '$2 кезіндегі $1 деген', # user at time
'history-feed-empty'          => 'Сұратылған бет жоқ болды.
Ол мына уикиден жойылған, немесе атауы ауыстырылған.
Осыған қатысты жаңа беттерді [[{{ns:special}}:Search|бұл уикиден іздеуді]] байқап көріңіз.',

# Revision deletion
'rev-deleted-comment'         => '(мәндеме аласталды)',
'rev-deleted-user'            => '(қатысушы аты аласталды)',
'rev-deleted-event'           => '(жазба аласталды)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Осы беттің нұсқасы жария мұрағаттарынан аласталған.
Бұл жайтқа [{{fullurl:{{ns:special}}:Log/delete|page={{FULLPAGENAMEE}}}} жою журналында] егжей-тегжей мәліметтері болуы мүмкін.
</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">
Осы беттің нұсқасы жария мұрағаттарынан аласталған.
{{SITENAME}} әкімшісі боп соны көре аласыз;
[{{fullurl:{{ns:special}}:Log/delete|page={{FULLPAGENAMEE}}}} жою журналында] егжей-тегжей мәлметтері болуы мүмкін.
</div>',
'rev-delundel'                => 'көрсет/жасыр',
'revisiondelete'              => 'Нұсқаларды жою/жоюды болдырмау',
'revdelete-nooldid-title'     => 'Нысана нұсқасы жоқ',
'revdelete-nooldid-text'      => 'Осы әрекетті орындау үшін ақырғы нұсқасынне нұсқаларын енгізбепсіз.',
'revdelete-selected'          => "'''$1:''' дегеннің бөлектенген {{PLURAL:$2|нұсқасы|нұсқалары}}:",
'logdelete-selected'          => "'''$1:''' дегеннің бөлектенген журнал {{PLURAL:$2|оқиғасы|оқиғалары}}:",
'revdelete-text'              => 'Жойылған нұсқалар мен жазбаларды әлі де бет тарихында және журналдарда табуға болады,
бірақ олардың мағлұмат бөлшектері баршаға қатыналмайды.

{{SITENAME}} жобасының басқа әкімшілері жасырын мағлұматқа қатынай алады, және қосымша тиымдар
қойылғанша дейін, осы тілдесу арқылы жоюды болдырмауы мүмкін.',
'revdelete-legend'            => 'Тиымдарды қою:',
'revdelete-hide-text'         => 'Нұсқа мәтінін жасыр',
'revdelete-hide-name'         => 'Әрекет пен мақсатын жасыр',
'revdelete-hide-comment'      => 'Түзету мәндемесін жасыр',
'revdelete-hide-user'         => 'Өңдеуші атын (IP жайын) жасыр',
'revdelete-hide-restricted'   => 'Осы тиымдарды баршаға сияқты әкімшілерге де қолдану',
'revdelete-suppress'          => 'Әкімшілер жасаған мағлұматты басқаларша перделеу',
'revdelete-hide-image'        => 'Файл мағлұматын жасыр',
'revdelete-unsuppress'        => 'Қалпына келтірілген нұсқалардан тиымдарды аластау',
'revdelete-log'               => 'Журнал мәндемесі:',
'revdelete-submit'            => 'Бөлектенген нұсқаға қолдану',
'revdelete-logentry'          => '[[$1]] дегеннің нұсқа көрінісін өзгертті',
'logdelete-logentry'          => '[[$1]] дегеннің жазба көрінісін өзгертті',
'revdelete-logaction'         => '{{PLURAL:$1|1|$1}} нұсқаны $2 күйіне қойды',
'logdelete-logaction'         => '[[$3]] дегенге {{PLURAL:$1|1|$1}} оқиғаны $2 күйіне қойды',
'revdelete-success'           => 'Нұсқа көрінісі сәтті қойылды.',
'logdelete-success'           => 'Жазба көрінісі сәтті қойылды.',

# Oversight log
'oversightlog'    => 'Нұсқа жасыру журналы',
'overlogpagetext' => 'Төменде әкімшілерден жасырылған мағлұматқа ықпал ететін жуықтағы болған жою және бұғаттау
тізімі беріледі. Ағымдағы амалды бұғаттау мен тиым үшін [[{{ns:special}}:Ipblocklist|IP бұғаттау тізімін]] қараңыз.',

# History merging
'mergehistory'                     => 'Беттер тарихын біріктіру',
'mergehistory-header'              => "Бұл бет арқылы бір қайнар беттің нұсқалар тарихын жаңа бетке біріктіруге мүмкіндік береді.
Осы өзгеріс беттің тарихи жалғастырушылығын қоштайтынына көзіңіз жетсін.

'''Ең кемінде қайнар бетінің ағымдық нұсқасы қалу керек.'''",
'mergehistory-box'                 => 'Екі беттің нұсқаларын біріктіру:',
'mergehistory-from'                => 'Қайнар беті:',
'mergehistory-into'                => 'Нысана беті:',
'mergehistory-list'                => 'Біріктірлетін түзету тарихы',
'mergehistory-merge'               => '[[:$1]] дегеннің келесі нұсқалары [[:$2]] дегенге біріктірілуіне мүмкін. Біріктіруге тек енгізілген уақытқа дейін жасалған нұсқаларды айырып-қосқыш бағанды қолданыңыз. Аңғартпа: бағыттау сілтемелерін қолданғанда бұл баған қайта қойылады.',
'mergehistory-go'                  => 'Біріктірлетін түзетулерді көрсет',
'mergehistory-submit'              => 'Нұсқаларды біріктіру',
'mergehistory-empty'               => 'Еш нұсқалар біріктірілмейді',
'mergehistory-success'             => '[[:$1]] дегеннің $3 нұсқасы [[:$2]] дегенге сәтті біріктірілді.',
'mergehistory-fail'                => 'Тарих біріктіруі орындалмады, бет пен уақыт бапталымдарын қайта тексеріп шығыңыз.',
'mergehistory-no-source'           => '$1 деген қайнар беті жоқ.',
'mergehistory-no-destination'      => '$1 деген нысана беті жоқ.',
'mergehistory-invalid-source'      => 'Қайнар бетінде жарамды атау болуы керек.',
'mergehistory-invalid-destination' => 'Нысана бетінде жарамды атау болуы керек.',

# Merge log
'mergelog'           => 'Біріктіру журналы',
'pagemerge-logentry' => '[[$1]] деген [[$2]] дегенге біріктірілді ($3 дейінгі нұсқалары)',
'revertmerge'        => 'Біріктіруді болдырмау',
'mergelogpagetext'   => 'Төменде бір беттің тарихы басқа бетке ең соңғы біріктіру тізімі келтіріледі.',

# Diffs
'history-title'           => '«$1» нұсқа тарихы',
'difference'              => '(Нұсқалар арасындағы айырмашылық)',
'lineno'                  => 'Жол нөмірі $1:',
'compareselectedversions' => 'Бөлектенген нұсқаларды салыстыру',
'editundo'                => 'жоққа шығару',
'diff-multi'              => '(Арадағы {{PLURAL:$1|бір|$1}} нұсқа көрсетілмеген.)',

# Search results
'searchresults'         => 'Іздестіру нәтижелері',
'searchresulttext'      => '{{SITENAME}} жобасында іздестіру туралы көбірек ақпарат үшін, [[{{{{ns:mediawiki}}:helppage}}|{{int:help}}]] қараңыз.',
'searchsubtitle'        => "Іздестіру сұранысыңыз: '''[[:$1]]'''",
'searchsubtitleinvalid' => "Іздестіру сұранысыңыз: '''$1'''",
'noexactmatch'          => "'''Осында «$1» атаулы бет жоқ.''' Бұл бетті өзіңіз [[:$1|бастай аласыз]].",
'noexactmatch-nocreate' => "'''Осында «$1» атаулы бет жоқ.'''",
'titlematches'          => 'Бет атауы сәйкесі',
'notitlematches'        => 'Еш бет атауы сәйкес емес',
'textmatches'           => 'Бет мәтінің сәйкесі',
'notextmatches'         => 'Еш бет мәтіні сәйкес емес',
'prevn'                 => 'алдыңғы $1',
'nextn'                 => 'келесі $1',
'viewprevnext'          => 'Көрсетілуі: ($1) ($2) ($3) жазба',
'showingresults'        => "Төменде нөмір '''$2''' орнынан бастап, жеткенше {{PLURAL:$1|'''1'''|'''$1'''}} нәтиже көрсетілген.",
'showingresultsnum'     => "Төменде нөмір '''$2''' орнынан бастап {{PLURAL:$3|'''1'''|'''$3'''}} нәтиже көрсетілген.",
'nonefound'             => "'''Аңғартпа''': Табу сәтсіз бітуі жиі «болған» және «деген» сияқты
тізімделмейтін жалпы сөздермен іздестіруден болуы мүмкін,
немесе бірден артық іздестіру шарт сөздерін егізгеннен (нәтижелерде тек
барлық шарт сөздер кедессе көрсетіледі) болуы мүмкін.",
'powersearch'           => 'Іздеу',
'powersearchtext'       => 'Мына есім аяларда іздеу:<br />$1<br />$2 Айдатуларды тізімдеу<br />Іздестіру сұранымы: $3 $9',
'searchdisabled'        => '{{SITENAME}} іздеу қызметі өшірілген. Әзірше Google арқылы іздеуге болады. Аңғартпа: {{SITENAME}} мағлұматын тізімідеулері ескірген болуға мүмкін.',

# Preferences page
'preferences'              => 'Баптау',
'mypreferences'            => 'Баптауым',
'prefs-edits'              => 'Түзету саны:',
'prefsnologin'             => 'Кірмегенсіз',
'prefsnologintext'         => 'Баптауыңызды қою үшін [[{{ns:special}}:Userlogin|кіруіңіз]] тиісті.',
'prefsreset'               => 'Баптау арқаудан қайта қойылды.',
'qbsettings'               => 'Мәзір',
'qbsettings-none'          => 'Ешқандай',
'qbsettings-fixedleft'     => 'Солға бекітілген',
'qbsettings-fixedright'    => 'Оңға бекітілген',
'qbsettings-floatingleft'  => 'Солға қалқыған',
'qbsettings-floatingright' => 'Оңға қалқыған',
'changepassword'           => 'Құпия сөзді өзгерту',
'skin'                     => 'Безендіру',
'math'                     => 'Математика',
'dateformat'               => 'Күн-ай пішімі',
'datedefault'              => 'Еш қалаусыз',
'datetime'                 => 'Уақыт',
'math_failure'             => 'Өңдету сәтсіз бітті',
'math_unknown_error'       => 'белгісіз қате',
'math_unknown_function'    => 'белгісіз функция',
'math_lexing_error'        => 'лексика қатесі',
'math_syntax_error'        => 'синтаксис қатесі',
'math_image_error'         => 'PNG аударысы сәтсіз бітті; latex, dvips, gs және convert бағдарламаларының дұрыс орнатуын тексеріп шығыңыз',
'math_bad_tmpdir'          => 'Математиканың уақытша қалтасына жазылмады, не қалта жаратылмады',
'math_bad_output'          => 'Математиканың беріс қалтасына жазылмады, не қалта жаратылмады',
'math_notexvc'             => 'texvc бағдарламасы жоғалтылған; баптау үшін math/README құжатын қараңыз.',
'prefs-personal'           => 'Жеке деректері',
'prefs-rc'                 => 'Жуықтағы өзгерістер',
'prefs-watchlist'          => 'Бақылау',
'prefs-watchlist-days'     => 'Бақылау тізімінде көрсетерін ең көп күндері:',
'prefs-watchlist-edits'    => 'Кеңейтілген бақылау тізімінде көрсетерін ең көп түзетулері:',
'prefs-misc'               => 'Қосымша',
'saveprefs'                => 'Сақта',
'resetprefs'               => 'Қайта қой',
'oldpassword'              => 'Ағымдық құпия сөз:',
'newpassword'              => 'Жаңа құпия сөз:',
'retypenew'                => 'Жаңа құпия сөзді қайталаңыз:',
'textboxsize'              => 'Өңдеу',
'rows'                     => 'Жолдар:',
'columns'                  => 'Бағандар:',
'searchresultshead'        => 'Іздеу',
'resultsperpage'           => 'Бет сайын нәтиже саны:',
'contextlines'             => 'Нәтиже сайын жол саны:',
'contextchars'             => 'Жол сайын әріп саны:',
'stub-threshold'           => '<a href="#" class="stub">Бітеме сілтемесін</a> пішімдеу табалдырығы (байт):',
'recentchangesdays'        => 'Жүықтағы өзгерістердегі көрсетілетін күндер:',
'recentchangescount'       => 'Жуықтағы өзгерістердегі көрсетілетін түзетулер:',
'savedprefs'               => 'Баптауыңыз сақталды.',
'timezonelegend'           => 'Уақыт белдеуі',
'timezonetext'             => 'Жергілікті уақытыңыз бен сервер уақытының (UTC) арасындағы сағат саны.',
'localtime'                => 'Жергілікті уақыт',
'timezoneoffset'           => 'Ығыстыру¹',
'servertime'               => 'Сервер уақыты',
'guesstimezone'            => 'Шолғыштан алып толтыру',
'allowemail'               => 'Басқадан хат қабылдауын қос',
'defaultns'                => 'Мына есім аяларда әдепкіден іздеу:',
'default'                  => 'әдепкі',
'files'                    => 'Файлдар',

# User rights
'userrights-lookup-user'           => 'Қатысушы топтарын реттеу',
'userrights-user-editname'         => 'Қатысушы атын енгізіңіз:',
'editusergroup'                    => 'Қатысушы топтарын өңдеу',
'userrights-editusergroup'         => 'Қатысушы топтарын өңдеу',
'saveusergroups'                   => 'Қатысушы топтарын сақтау',
'userrights-groupsmember'          => 'Мүшелігі:',
'userrights-groupsremovable'       => 'Аласталатын топтар:',
'userrights-groupsavailable'       => 'Жетімді топтар:',
'userrights-groupshelp'            => 'Қатысушыны топқа үстеймін не топтан аластаймын деген топтарды бөлектеңіз. Бөлектенбеген топтар өзгертілімейді. Топтардың бөлектеуін CTRL + Сол жақ нұқумен өшіруіңізге болады.',
'userrights-reason'                => 'Өзгерту себебі:',
'userrights-available-none'        => 'Топ мүшелігін өзгерте алмайсыз.',
'userrights-available-add'         => 'Қатысушыларды мына {{PLURAL:$2|топқа|топтарға}} үстей аласыз: $1.',
'userrights-available-remove'      => 'Қатысушыларды мына {{PLURAL:$2|топтан|топтардан}} аластай аласыз: $1.',
'userrights-available-add-self'    => 'Өзіңізді мына {{PLURAL:$2|топқа|топтарға}} үстей аласыз: $1.',
'userrights-available-remove-self' => 'Өзіңізді мына {{PLURAL:$2|топтан|топтардан}} аластай аласыз: $1.',
'userrights-no-interwiki'          => 'Басқа уикилердегі пайдаланушы құқықтарын өңдеуге рұқсатыңыз жоқ.',
'userrights-nodatabase'            => '$1 дерекқоры жоқ не жергілікті емес.',
'userrights-nologin'               => 'Қатысушы құқықтарын тағайындау үшін әкімші тіркелгісімен [[{{ns:special}}:Userlogin|кіруіңіз]] жөн.',
'userrights-notallowed'            => 'Қатысушы құқықтарын тағайындау үшін тіркелгіңізде рұқсат жоқ.',

# Groups
'group'               => 'Топ:',
'group-autoconfirmed' => 'Өзі құпталғандар',
'group-bot'           => 'Боттар',
'group-sysop'         => 'Әкімшілер',
'group-bureaucrat'    => 'Бітікшілер',
'group-all'           => '(барлығы)',

'group-autoconfirmed-member' => 'өзі құпталған',
'group-bot-member'           => 'бот',
'group-sysop-member'         => 'әкімші',
'group-bureaucrat-member'    => 'бітікші',

'grouppage-autoconfirmed' => '{{ns:project}}:Өзі құпталғандар',
'grouppage-bot'           => '{{ns:project}}:Боттар',
'grouppage-sysop'         => '{{ns:project}}:Әкімшілер',
'grouppage-bureaucrat'    => '{{ns:project}}:Бітікшілер',

# User rights log
'rightslog'      => 'Қатысушы құқықтары журналы',
'rightslogtext'  => 'Бұл қатысушы құқықтарын өзгерту журналы.',
'rightslogentry' => '$1 топ мүшелгін $2 дегеннен $3 дегенге өзгертті',
'rightsnone'     => '(ешқандай)',

# Recent changes
'nchanges'                          => '{{PLURAL:$1|1|$1}} өзгеріс',
'recentchanges'                     => 'Жуықтағы өзгерістер',
'recentchangestext'                 => 'Бұл бетте осы уикидегі болған жуықтағы өзгерістер байқалады.',
'recentchanges-feed-description'    => 'Бұл арнаменен уикидегі ең соңғы өзгерістер қадағаланады.',
'rcnote'                            => "$3 кезіне дейін — төменде соңғы {{PLURAL:$2|күндегі|'''$2''' күндегі}}, соңғы {{PLURAL:$1|'''1'''|'''$1'''}} өзгеріс көрсетілген.",
'rcnotefrom'                        => '<b>$2</b> кезінен бері — төменде өзгерістер <b>$1</b> дейін көрсетілген.',
'rclistfrom'                        => '$1 кезінен бері — жаңа өзгерістерді көрсет.',
'rcshowhideminor'                   => 'Шағын түзетуді $1',
'rcshowhidebots'                    => 'Боттарды $1',
'rcshowhideliu'                     => 'Тіркелгенді $1',
'rcshowhideanons'                   => 'Тіркелгісізді $1',
'rcshowhidepatr'                    => 'Күзеттегі түзетулерді $1',
'rcshowhidemine'                    => 'Түзетуімді $1',
'rclinks'                           => 'Соңғы $2 күнде болған, соңғы $1 өзгерісті көрсет<br />$3',
'diff'                              => 'айырм.',
'hist'                              => 'тар.',
'hide'                              => 'жасыр',
'show'                              => 'көрсет',
'minoreditletter'                   => 'ш',
'newpageletter'                     => 'Ж',
'boteditletter'                     => 'б',
'number_of_watching_users_pageview' => '[бақылаған {{PLURAL:$1|1|$1}} қатысушы]',
'rc_categories'                     => 'Санаттарға шектеу ("|" белгісімен бөліктеңіз)',
'rc_categories_any'                 => 'Қайсыбір',
'newsectionsummary'                 => '/* $1 */ жаңа бөлім',

# Recent changes linked
'recentchangeslinked'          => 'Қатысты өзгерістер',
'recentchangeslinked-title'    => '$1 дегенге қатысты өзгерістер',
'recentchangeslinked-noresult' => 'Сілтелген беттерде келтірілген мерзімде ешқандай өзгеріс болмаған.',
'recentchangeslinked-summary'  => "Бұл арнайы бетте сілтелген беттердегі жуықтағы өзгерістер тізімі беріледі. Бақылау тізіміңіздегі беттер '''жуан''' әрбімен белгіленеді.",

# Upload
'upload'                      => 'Файл қотару',
'uploadbtn'                   => 'Қотар!',
'reupload'                    => 'Қайталап қотару',
'reuploaddesc'                => 'Қотару пішініне оралу.',
'uploadnologin'               => 'Кірмегенсіз',
'uploadnologintext'           => 'Файл қотару үшін [[{{ns:special}}:Userlogin|кіруіңіз]] керек.',
'upload_directory_read_only'  => 'Қотару қалтасына ($1) жазуға веб-серверге рұқсат берілмеген.',
'uploaderror'                 => 'Қотару қатесі',
'uploadtext'                  => "Төмендегі пішін файл қотаруға қолданылады, алдындағы суреттерді қарау үшін не іздеу үшін [[{{ns:special}}:Imagelist|қотарылған файлдар тізіміне]] барыңыз, қотару мен жою тағы да [[{{ns:special}}:Log/upload|қотару журналына]] жазылып алынады.

Суретті бетке кірістіруге, файлға тура сілтеу үшін мына пішіндегі сілтемені қолданыңыз:
'''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:File.jpg]]</nowiki>''',
'''<nowiki>[[</nowiki>{{ns:image}}<nowiki>:File.png|балама мәтін]]</nowiki>''' не
'''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki>'''.",
'upload-permitted'            => 'Рұқсат беріген файл түрлері: $1.',
'upload-preferred'            => 'Ұнамды файл түрлері $1.',
'upload-prohibited'           => 'ұқсат берілмеген файл түрлері: $1.',
'uploadlog'                   => 'қотару журналы',
'uploadlogpage'               => 'Қотару журналы',
'uploadlogpagetext'           => 'Төменде жуықтағы қотарылған файл тізімі.',
'filename'                    => 'Файл аты',
'filedesc'                    => 'Сипаттамасы',
'fileuploadsummary'           => 'Сипаттамасы:',
'filestatus'                  => 'Ауторлық құқықтары күйі',
'filesource'                  => 'Файл қайнары',
'uploadedfiles'               => 'Қотарылған файлдар',
'ignorewarning'               => 'Құлақтандыруға елеме де файлды әрқайсы жолымен сақта.',
'ignorewarnings'              => 'Әрқайсы құлақтандыруларға елеме',
'minlength1'                  => 'Файл атауында ең кемінде бір әріп болуы керек.',
'illegalfilename'             => '«$1» файл атауында бет атауларында рұқсат етілмеген нышандар бар. Файлды қайта атаңыз да бұны жуктеді қайта байқап көріңіз.',
'badfilename'                 => 'Файлдың аты «$1» боп өзгертілді.',
'filetype-badmime'            => '«$1» деген MIME түрі бар файлдарды қотаруға рұқсат етілмейді.',
'filetype-unwanted-type'      => "'''«.$1»''' — күтілмеген файл түрі. Ұнамды файл түрлері: $2.",
'filetype-banned-type'        => "'''«.$1»''' — рұқсатталмаған файл түрі. Рұқсатталған файл түрлері: $2.",
'filetype-missing'            => 'Бұл файлдың («.jpg» сияқты) кеңейтімі жоқ.',
'large-file'                  => 'Файлды $1 мөлшерден аспауына тырысыңыз; бұл файл мөлшері — $2.',
'largefileserver'             => 'Осы файлдың мөлшері сервердің қалауынан асып кеткен.',
'emptyfile'                   => 'Қотарылған файлыңыз бос сияқты. Бұл файл атауында қате болуы мүмкін. Осы файлды шынайы қотарғыңыз келетін тексеріп шығыңыз.',
'fileexists'                  => 'Осылай аталған файл алдақашан бар, егер бұны өзгертуге сеніміңіз жоқ болса <strong><tt>$1</tt></strong> дегенді тексеріп шығыңыз.',
'filepageexists'              => 'Былай аталған бет (сурет емес) алдақашан бар, бұны өзгертуге сеніміңіз болмаса <strong><tt>$1</tt></strong> дегенді тексеріп шығыңыз.',
'fileexists-extension'        => 'Ұқсасты файл атауы бар болды:<br />
Қотарылатын файл атауы: <strong><tt>$1</tt></strong><br />
Бар болған файл атауы: <strong><tt>$2</tt></strong><br />
Басқа атау таңдаңыз.',
'fileexists-thumb'            => "<center>'''Бар болған сурет'''</center>",
'fileexists-thumbnail-yes'    => 'Осы файл — мөлшері кішірітілген сурет <i>(нобай)</i> сияқты. Бұл <strong><tt>$1</tt></strong> деген файлды сынап шығыңыз.<br />
Егер сыналған файл түпнұсқалы мөлшері бар дәлме-дәл сурет болса, қосысмша нобайды қотару керекі жоқ.',
'file-thumbnail-no'           => 'Файл атауы <strong><tt>$1</tt></strong> дегенмен басталады. Бұл — мөлшері кішірітілген сурет <i>(нобай)</i> сияқты.
Егер толық ажыратылымдығы бар суретіңіз болса, соны қотарыңыз, әйтпесе файл атауын өзгертіңіз.',
'fileexists-forbidden'        => 'Осылай аталған файл алдақашан бар. Кері қайтыңыз да, және осы файлды басқа атымен қотарыңыз. [[{{ns:image}}:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Осылай аталған файл ортақ файл арқауында алдақашан бар. Кері қайтыңыз да, осы файлды жаңа атымен қотарыңыз. [[{{ns:image}}:$1|thumb|center|$1]]',
'successfulupload'            => 'Қотару сәтті өтті',
'uploadwarning'               => 'Қотару туралы құлақтандыруы',
'savefile'                    => 'Файлды сақтау',
'uploadedimage'               => '«[[$1]]» файлын қотарды',
'overwroteimage'              => '«[[$1]]» файлын жаңа нұсқасын қотарды',
'uploaddisabled'              => 'Файл қотаруы өшірілген',
'uploaddisabledtext'          => '{{SITENAME}} жобасында файл қотаруы өшірілген.',
'uploadscripted'              => 'Осы файлда, веб шолғышты ағат түсіндікке келтіретің HTML белгілеу, не скрипт коды бар.',
'uploadcorrupt'               => 'Осы файл бүлдірілген, не бұрыс кеңейтімі бар. Файлды тексеріп, қотаруын қайталаңыз.',
'uploadvirus'                 => 'Осы файлда вирус болуы мүмкін! Егжей-тегжей ақпараты: $1',
'sourcefilename'              => 'Қайнардағы файл аты',
'destfilename'                => 'Нысана файл аты',
'watchthisupload'             => 'Осы бетті бақылау',
'filewasdeleted'              => 'Осы атауы бар файл бұрын қотарылған, сосын жойылдырылған. Қайта қотару алдынан $1 дегенді тексеріңіз.',
'upload-wasdeleted'           => "'''Құлақтандыру: Алдында жойылған файлды қотарайын деп тұрсыз.'''

Мына файл қотаруын жалғастыру үшін жарастығын тексеріп шығуыңыз жөн.
Қолайлы болуы үшін бұл файлдың жою журналы келтірілген:",
'filename-bad-prefix'         => 'Қотарайын деген файлыңыздың атауы <strong>«$1» </strong> деп басталады, мынадай сипаттаусыз атауды әдетте сандық камералар өздіктік береді. Файлыңызға сипаттылау атау тандап беріңіз.',

'upload-proto-error'      => 'Бұрыс хаттамалық',
'upload-proto-error-text' => 'Сырттан қотару үшін URL жайлары <code>http://</code> немесе <code>ftp://</code> дегендерден басталу керек.',
'upload-file-error'       => 'Ішкі қате',
'upload-file-error-text'  => 'Серверде уақытша файл жаратылуы ішкі қатесіне ұшырасты. Бұл жүйенің әкімшімен қатынасыңыз.',
'upload-misc-error'       => 'Белгісіз қотару қатесі',
'upload-misc-error-text'  => 'Қотару кезінде белгісіз қатеге ұшырасты. URL жайы жарамды және қатынаулы екенін тексеріп шығыңыз да қайта байқап көріңіз. Егер бұл мәселе әлде де қалса, жүйе әкімшімен қатынасыңыз.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'URL жайы жетілмеді',
'upload-curl-error6-text'  => 'Берілген URL жайы жетілмеді. Қайсы URL жайы дұрыс екенін және торап істе екенін қайталап қатаң тексеріңіз.',
'upload-curl-error28'      => 'Қотаруға берілген уақыт бітті',
'upload-curl-error28-text' => 'Тораптың жауап беруі тым ұзақ уақытқа созылды. Бұл торап істе екенін тексеріп шығыңыз, азғана кідіре тұрыңыз да қайта байқап көріңіз. Талабыңызды қол тиген кезінде қайта байқап көруіңіз мүмкін.',

'license'            => 'Лицензиясы',
'nolicense'          => 'Ештеңе бөлектенбеген',
'license-nopreview'  => '(Қарап шығу қатыналмайды)',
'upload_source_url'  => ' (жарамды, баршаға қатынаулы URL жай)',
'upload_source_file' => ' (компьютеріңіздегі файл)',

# Image list
'imagelist'                 => 'Файл тізімі',
'imagelisttext'             => "Төменде $2 сұрыпталған {{PLURAL:$1|'''1'''|'''$1'''}} файл тізімі.",
'getimagelist'              => 'файл тізімін келтіруде',
'ilsubmit'                  => 'Ізде',
'showlast'                  => 'Соңғы $1 файлды $2 сұрыптап көрсет.',
'byname'                    => 'атауымен',
'bydate'                    => 'күн-айымен',
'bysize'                    => 'мөлшерімен',
'imgdelete'                 => 'жою',
'imgdesc'                   => 'сипп.',
'imgfile'                   => 'файл',
'filehist'                  => 'Файл тарихы',
'filehist-help'             => 'Файлдың қай уақытта қалай көрінетін үшін Күн-ай/Уақыт дегенді нұқыңыз.',
'filehist-deleteall'        => 'барлығын жой',
'filehist-deleteone'        => 'бұны жой',
'filehist-revert'           => 'қайтар',
'filehist-current'          => 'ағымдағы',
'filehist-datetime'         => 'Күн-ай/Уақыт',
'filehist-user'             => 'Қатысушы',
'filehist-dimensions'       => 'Өлшемдері',
'filehist-filesize'         => 'Файл мөлшері',
'filehist-comment'          => 'Мәндемесі',
'imagelinks'                => 'Сілтемелер',
'linkstoimage'              => 'Бұл файлға келесі беттер сілтейді:',
'nolinkstoimage'            => 'Бұл файлға еш бет сілтемейді.',
'sharedupload'              => 'Бұл файл ортақ арқауына қотарылған сондықтан басқа жобаларда қолдануы мүмкін.',
'shareduploadwiki'          => 'Былайғы ақпарат үшін $1 дегенді қараңыз.',
'shareduploadwiki-linktext' => 'файл сипаттамасы беті',
'noimage'                   => 'Мынадай атаулы файл жоқ, $1 мүмкіндігіңіз бар.',
'noimage-linktext'          => 'бұны қотару',
'uploadnewversion-linktext' => 'Бұл файлдың жаңа нұсқасын қотару',
'imagelist_date'            => 'Күн-айы',
'imagelist_name'            => 'Атауы',
'imagelist_user'            => 'Қатысушы',
'imagelist_size'            => 'Мөлшері',
'imagelist_description'     => 'Сипаттамасы',
'imagelist_search_for'      => 'Суретті атауымен іздеу:',

# File reversion
'filerevert'                => '$1 дегенді қайтару',
'filerevert-legend'         => 'Файлды қайтару',
'filerevert-intro'          => '<span class="plainlinks">\'\'\'[[{{ns:media}}:$1|$1]]\'\'\' дегенді [$4 $3, $2 кезіндегі нұсқасына] қайтарудасыз.</span>',
'filerevert-comment'        => 'Мәндемесі:',
'filerevert-defaultcomment' => '$2, $1 кезіндегі нұсқасына қайтарылды',
'filerevert-submit'         => 'Қайтар',
'filerevert-success'        => '<span class="plainlinks">\'\'\'[[{{ns:media}}:$1|$1]]\'\'\' деген [$4 $3, $2 кезіндегі нұсқасына] қайтарылды.</span>',
'filerevert-badversion'     => 'Келтірілген уақыт белгісімен бұл файлдың алдыңғы жергілікті нұсқасы жоқ.',

# File deletion
'filedelete'                  => '$1 дегенді жою',
'filedelete-legend'           => 'Файлды жою',
'filedelete-intro'            => "'''[[{{ns:media}}:$1|$1]]''' дегенді жоюдасыз.",
'filedelete-intro-old'        => '<span class="plainlinks">\'\'\'[[{{ns:media}}:$1|$1]]\'\'\' дегеннің [$4 $3, $2 кезіндегі нұсқасын] жоюдасыз.</span>',
'filedelete-comment'          => 'Жою себебі:',
'filedelete-submit'           => 'Жой',
'filedelete-success'          => "'''$1''' деген жойылды.",
'filedelete-success-old'      => '<span class="plainlinks">\'\'\'[[{{ns:media}}:$1|$1]]\'\'\' дегеннің $3, $2 кезіндегі нұсқасы жойылды.</span>',
'filedelete-nofile'           => "'''$1''' деген {{SITENAME}} жобасында жоқ.",
'filedelete-nofile-old'       => "Келтірілген анықтауыштарымен '''$1''' дегеннің мұрағатталған нұсқасы мында жоқ.",
'filedelete-iscurrent'        => 'Бұл файлдың ең соңғы нұсқасын жою талап еткенсіз. Алдынан ескі нұсқасына қайтарыңыз.',
'filedelete-otherreason'      => 'Басқа/қосымша себеп:',
'filedelete-reason-otherlist' => 'Басқа себеп',
'filedelete-reason-dropdown'  => '
* Жоюдың жалпы себептері
** Ауторлық құқықтарын бұзу
** Қосарыланған файл',

# MIME search
'mimesearch'         => 'Файлды MIME түрімен іздеу',
'mimesearch-summary' => 'Бұл бетте файлдарды MIME түрімен сүзгілеуі қосылған. Кірісі: «мағлұмат түрі»/«түр тарауы», мысалы <tt>image/jpeg</tt>.',
'mimetype'           => 'MIME түрі:',
'download'           => 'жүктеу',

# Unwatched pages
'unwatchedpages' => 'Бақыланылмаған беттер',

# List redirects
'listredirects' => 'Айдату бет тізімі',

# Unused templates
'unusedtemplates'     => 'Пайдаланылмаған үлгілер',
'unusedtemplatestext' => 'Бұл бет басқа бетке кіріcтірілмеген үлгі есім аяысындағы барлық беттерді тізімдейді. Үлгілерді жою алдынан бұның басқа сілтемелерін тексеріп шығуын ұмытпаңыз',
'unusedtemplateswlh'  => 'басқа сілтемелер',

# Random page
'randompage'         => 'Кездейсоқ бет',
'randompage-nopages' => 'Бұл есім аясында беттер жоқ.',

# Random redirect
'randomredirect'         => 'Кездейсоқ айдату',
'randomredirect-nopages' => 'Бұл есім аясында еш айдату жоқ.',

# Statistics
'statistics'             => 'Санақ',
'sitestats'              => '{{SITENAME}} санағы',
'userstats'              => 'Қатысушы санағы',
'sitestatstext'          => "Дерекқорда {{PLURAL:$1|'''1'''|бұлайша '''$1'''}} бет бар.
Бұған «талқылау» беттері, {{SITENAME}} жобасы туралы беттер, ең аз «бітеме»
беттері, айдатулар, тағы да басқа мағлұмат деп танылмайтын беттер кірістірледі.
Соларды есептен шығарғанда, мында мағлұмат {{PLURAL:$2|беті|беттері}} деп саналатын
{{PLURAL:$2|'''1'''|'''$2'''}} бет бар шығар.

Қотарылған {{PLURAL:$8|'''1'''|'''$8'''}} файл сақталады.

{{SITENAME}} орнатылғаннан бері беттер {{PLURAL:$3|'''1'''|бұлайша '''$3'''}} рет қаралған,
және беттер {{PLURAL:$4|'''1'''|'''$4'''}} рет түзетілген.
Бұның нәтижесінде орташа есеппен әрбір бетке '''$5''' рет түзету келеді, және әрбір түзетуге '''$6''' рет қарау келеді.

Ағымдық [http://meta.wikimedia.org/wiki/Help:Job_queue тапсырым кезегі] ұзындылығы: '''$7'''.",
'userstatstext'          => "Мында {{PLURAL:$1|'''1'''|'''$1'''}} [[{{ns:special}}:Listusers|тіркелген қатысушы]] бар, соның ішінде
{{PLURAL:$2|'''1'''|'''$2'''}} (не '''$4 %''') қатысушысында $5 құқықтары бар",
'statistics-mostpopular' => 'Ең көп қаралған беттер',

'disambiguations'      => 'Айрықты беттер',
'disambiguations-text' => "Келесі беттер '''айрықты бетке''' сілтейді. Бұның орнына белгілі тақырыпқа сілтеуі керек.<br />Егер [[{{ns:mediawiki}}:Disambiguationspage]] тізіміндегі үлгі қолданылса, бет айрықты деп саналады.",

'doubleredirects'     => 'Шынжырлы айдатулар',
'doubleredirectstext' => 'Бұл бетте басқа айдату беттерге сілтейтін беттер тізімі беріледі. Әрбір жолақта бірінші және екінші айдатуға сілтемелер бар, сонымен бірге екінші айдату нысанасы бар, әдетте бұл бірінші айдату бағыттайтын «шын» нысана бет атауы болуы керек.',

'brokenredirects'        => 'Еш бетке келтірмейтін айдатулар',
'brokenredirectstext'    => 'Келесі айдатулар жоқ беттерге сілтейді:',
'brokenredirects-edit'   => '(өңдеу)',
'brokenredirects-delete' => '(жою)',

'withoutinterwiki'        => 'Еш тілге сілтeмеген беттер',
'withoutinterwiki-header' => 'Келесі беттер басқа тілдерге сілтемейді:',
'withoutinterwiki-submit' => 'Көрсет',

'fewestrevisions' => 'Ең аз түзетілген беттер',

# Miscellaneous special pages
'nbytes'                  => '{{PLURAL:$1|1|$1}} байт',
'ncategories'             => '{{PLURAL:$1|1|$1}} санат',
'nlinks'                  => '{{PLURAL:$1|1|$1}} сілтеме',
'nmembers'                => '{{PLURAL:$1|1|$1}} буын',
'nrevisions'              => '{{PLURAL:$1|1|$1}} нұсқа',
'nviews'                  => '{{PLURAL:$1|1|$1}} рет қаралған',
'specialpage-empty'       => 'Бұл баянатқа еш нәтиже жоқ.',
'lonelypages'             => 'Еш беттен сілтелмеген беттер',
'lonelypagestext'         => 'Келесі беттерге {{SITENAME}} жобасындағы басқа беттер сілтемейді.',
'uncategorizedpages'      => 'Санатсыз беттер',
'uncategorizedcategories' => 'Санатсыз санаттар',
'uncategorizedimages'     => 'Санатсыз суреттер',
'uncategorizedtemplates'  => 'Санатсыз үлгілер',
'unusedcategories'        => 'Пайдаланылмаған санаттар',
'unusedimages'            => 'Пайдаланылмаған файлдар',
'popularpages'            => 'Ең көп көрілген беттер',
'wantedcategories'        => 'Басталмаған санаттар',
'wantedpages'             => 'Басталмаған беттер',
'mostlinked'              => 'Ең көп сілтелген беттер',
'mostlinkedcategories'    => 'Ең көп пайдаланылған санаттар',
'mostlinkedtemplates'     => 'Ең көп пайдаланылған үлгілер',
'mostcategories'          => 'Ең көп санаты бар беттер',
'mostimages'              => 'Ең көп пайдаланылған суреттер',
'mostrevisions'           => 'Ең көп түзетілген беттер',
'allpages'                => 'Барлық беттер',
'prefixindex'             => 'Атау бастауы тізімі',
'shortpages'              => 'Ең қысқа беттер',
'longpages'               => 'Ең ұзын беттер',
'deadendpages'            => 'Еш бетке сілтемейтін беттер',
'deadendpagestext'        => 'Келесі беттер {{SITENAME}} жобасындағы басқа беттерге сілтемейді.',
'protectedpages'          => 'Қорғалған беттер',
'protectedpagestext'      => 'Келесі беттер өңдеуден немесе жылжытудан қорғалған',
'protectedpagesempty'     => 'Ағымда мынадай бапталымдарымен ешбір бет қорғалмаған',
'protectedtitles'         => 'Қорғалған атаулар',
'protectedtitlestext'     => 'Келесі атаулардың жаратуына рұқсат берілмеген',
'protectedtitlesempty'    => 'Бұл бапталымдармен ағымда еш атаулар қорғалмаған.',
'listusers'               => 'Қатысушы тізімі',
'specialpages'            => 'Арнайы беттер',
'spheading'               => 'Баршаның арнайы беттері',
'restrictedpheading'      => 'Тиымды арнайы беттер',
'newpages'                => 'Ең жаңа беттер',
'newpages-username'       => 'Қатысушы аты:',
'ancientpages'            => 'Ең ескі беттер',
'intl'                    => 'Тіларалық сілтемелер',
'move'                    => 'Жылжыту',
'movethispage'            => 'Бетті жылжыту',
'unusedimagestext'        => '<p>Аңғартпа: Ғаламтордағы басқа тораптар файлдың
URL жайына тікелей сілтеуі мүмкін. Сондықтан, белсенді пайдалануына аңғармай,
осы тізімде қалуы мүмкін.</p>',
'unusedcategoriestext'    => 'Келесі санат беттері бар болып тұр, бірақ оған ешқандай бет, не санат кірмейді.',
'notargettitle'           => 'Нысана жоқ',
'notargettext'            => 'Бұл әрекет орындалатын нысана бетті, не қатысушыны енгізбепсіз.',
'pager-newer-n'           => '{{PLURAL:$1|жаңалау 1|жаңалау $1}}',
'pager-older-n'           => '{{PLURAL:$1|ескілеу 1|ескілеу $1}}',

# Book sources
'booksources'               => 'Кітап қайнарлары',
'booksources-search-legend' => 'Кітап қайнарларын іздеу',
'booksources-go'            => 'Өту',
'booksources-text'          => 'Төменде жаңа және қолданған кітаптар сататынтораптарының сілтемелері тізімделген.
Бұл тораптарда ізделген кітаптар туралы былайғы ақпарат болуға мүмкін.',

'categoriespagetext' => 'Осында уикидегі барлық санаттарының тізімі беріліп тұр.',
'data'               => 'Деректер',
'userrights'         => 'Қатысушылар құқықтарын реттеу',
'groups'             => 'Қатысушы топтары',
'alphaindexline'     => '$1 — $2',
'version'            => 'Жүйе нұсқасы',

# Special:Log
'specialloguserlabel'  => 'Қатысушы:',
'speciallogtitlelabel' => 'Атау:',
'log'                  => 'Журналдар',
'all-logs-page'        => 'Барлық журналдар',
'log-search-legend'    => 'Журналдардан іздеу',
'log-search-submit'    => 'Өт',
'alllogstext'          => '{{SITENAME}} жобасының барлық қатынаулы журналдарын біріктіріп көрсетуі.
Журнал түрін, қатысушы атын, не тиісті бетін бөлектеп, тарылтып қарауыңызға болады.',
'logempty'             => 'Журналда сәйкес даналар жоқ.',
'log-title-wildcard'   => 'Мынадай мәтіннең басталытын атаулардан іздеу',

# Special:Allpages
'nextpage'          => 'Келесі бетке ($1)',
'prevpage'          => 'Алдыңғы бетке ($1)',
'allpagesfrom'      => 'Мына беттен бастап көрсету:',
'allarticles'       => 'Барлық бет тізімі',
'allinnamespace'    => 'Барлық бет ($1 есім аясы)',
'allnotinnamespace' => 'Барлық бет ($1 есім аясынан тыс)',
'allpagesprev'      => 'Алдыңғыға',
'allpagesnext'      => 'Келесіге',
'allpagessubmit'    => 'Өту',
'allpagesprefix'    => 'Мынадан басталған беттерді көрсету:',
'allpagesbadtitle'  => 'Келтірілген бет атауы жарамсыз болған, немесе тіл-аралық не уики-аралық бастауы бар болды. Атауда қолдануға болмайтын нышандар болуы мүмкін.',
'allpages-bad-ns'   => '{{SITENAME}} жобасында «$1» есім аясы жоқ.',

# Special:Listusers
'listusersfrom'      => 'Мына қатысушыдан бастап көрсету:',
'listusers-submit'   => 'Көрсет',
'listusers-noresult' => 'Қатысушы табылған жоқ.',

# E-mail user
'mailnologin'     => 'Еш жіберілетін жай жоқ',
'mailnologintext' => 'Басқа қатысушыға хат жіберу үшін
[[{{ns:special}}:Userlogin|кіруіңіз]] керек, және [[{{ns:special}}:Preferences|баптауыңызда]]
жарамды е-пошта жайы болуы жөн.',
'emailuser'       => 'Қатысушыға хат жазу',
'emailpage'       => 'Қатысушыға хат жіберу',
'emailpagetext'   => 'Егер бұл қатысушы баптауларында жарамды е-пошта
жайын енгізсе, төмендегі пішін арқылы бұған жалғыз е-пошта хатын жіберуге болады.
Қатысушы баптауыңызда енгізген е-пошта жайыңыз
«Кімнен» деген бас жолағында көрінеді, сондықтан
хат алушысы тура жауап бере алады.',
'usermailererror' => 'Mail нысаны қате қайтарды:',
'defemailsubject' => '{{SITENAME}} е-поштасының хаты',
'noemailtitle'    => 'Еш е-пошта жайы жоқ',
'noemailtext'     => 'Бұл қатысушы жарамды Е-пошта жайын енгізбеген,
не басқалардан хат қабылдауын өшірген.',
'emailfrom'       => 'Кімнен',
'emailto'         => 'Кімге',
'emailsubject'    => 'Тақырыбы',
'emailmessage'    => 'Хат',
'emailsend'       => 'Жіберу',
'emailccme'       => 'Хатымдың көшірмесін маған да жібер.',
'emailccsubject'  => '$1 дегенге жіберілген хатыңыздың көшірмесі: $2',
'emailsent'       => 'Хат жіберілді',
'emailsenttext'   => 'Е-пошта хатыңыз жіберілді.',

# Watchlist
'watchlist'            => 'Бақылау тізімі',
'mywatchlist'          => 'Бақылауым',
'watchlistfor'         => "('''$1''' бақылаулары)",
'nowatchlist'          => 'Бақылау тізіміңізде ешбір дана жоқ',
'watchlistanontext'    => 'Бақылау тізіміңіздегі даналарды қарау, не өңдеу үшін $1 керек.',
'watchnologin'         => 'Кірмегенсіз',
'watchnologintext'     => 'Бақылау тізіміңізді өзгерту үшін [[{{ns:special}}:Userlogin|кіруіңіз]] жөн.',
'addedwatch'           => 'Бақылау тізіміне үстелді',
'addedwatchtext'       => "«[[:$1]]» беті [[{{ns:special}}:Watchlist|бақылау тізіміңізге]] үстелді.
Осы беттің және соның талқылау бетінің келешектегі өзгерістері мында тізімделеді.
Сонда беттің атауы табуға жеңілдетіп [[{{ns:special}}:Recentchanges|жуықтағы өзгерістер тізімінде]]
'''жуан әрпімен''' көрсетіледі.

Осы бетті соңынан бақылау тізімнен аластағыңыз келсе «Бақыламау» парағын нұқыңыз.",
'removedwatch'         => 'Бақылау тізіміңізден аласталды',
'removedwatchtext'     => '«[[:$1]]» беті бақылау тізіміңізден аласталды.',
'watch'                => 'Бақылау',
'watchthispage'        => 'Бетті бақылау',
'unwatch'              => 'Бақыламау',
'unwatchthispage'      => 'Бақылауды тоқтату',
'notanarticle'         => 'Мағлұмат беті емес',
'watchnochange'        => 'Көрсетілген мерзімде еш бақыланған дана өңделген жоқ.',
'watchlist-details'    => 'Талқылау беттерін санамағанда {{PLURAL:$1|1|$1}} бет бақланған.',
'wlheader-enotif'      => '* Ескерту хат жіберуі қосылған.',
'wlheader-showupdated' => "* Соңғы келіп-кетуіңізден бері өзгертілген беттерді '''жуан''' қаріпімен көрсет",
'watchmethod-recent'   => 'бақылаулы беттердің жуықтағы өзгерістерін тексеру',
'watchmethod-list'     => 'жуықтағы өзгерістерде бақылаулы беттерді тексеру',
'watchlistcontains'    => 'Бақылау тізіміңізде {{PLURAL:$1|1|$1}} бет бар.',
'iteminvalidname'      => "'$1' данасының жарамсыз атауынан шатақ туды…",
'wlnote'               => "Төменде соңғы {{PLURAL:$2|сағатта|'''$2''' сағатта}} болған, {{PLURAL:$1|жуықтағы өзгеріс|жуықтағы '''$1''' өзгеріс}} көрсетілген.",
'wlshowlast'           => 'Соңғы $1 сағаттағы, $2 күндегі, $3 болған өзгерісті көрсету',
'watchlist-show-bots'  => 'Боттарды көрсет',
'watchlist-hide-bots'  => 'Боттарды жасыр',
'watchlist-show-own'   => 'Түзетуімді көрсет',
'watchlist-hide-own'   => 'Түзетуімді жасыр',
'watchlist-show-minor' => 'Шағын түзетуді көрсет',
'watchlist-hide-minor' => 'Шағын түзетуді жасыр',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Бақылау…',
'unwatching' => 'Бақыламау…',

'enotif_mailer'                => '{{SITENAME}} ескерту хат жіберу қызметі',
'enotif_reset'                 => 'Барлық бет келіп-кетілді деп белгіле',
'enotif_newpagetext'           => 'Мынау жаңа бет.',
'enotif_impersonal_salutation' => '{{SITENAME}} қатысушысы',
'changed'                      => 'өзгертті',
'created'                      => 'жаратты',
'enotif_subject'               => '{{SITENAME}} жобасында $PAGEEDITOR $PAGETITLE атаулы бетті $CHANGEDORCREATED',
'enotif_lastvisited'           => 'Соңғы келіп-кетуіңізден бері болған өзгерістер үшін $1 дегенді қараңыз.',
'enotif_lastdiff'              => 'Осы өзгеріс үшін $1 дегенді қараңыз.',
'enotif_anon_editor'           => 'тіркелгісіз қатысушы $1',
'enotif_body'                  => 'Құрметті $WATCHINGUSERNAME,

{{SITENAME}} жобасының $PAGETITLE атаулы бетті $PAGEEDITDATE кезінде $PAGEEDITOR деген $CHANGEDORCREATED, ағымдық нұсқасын $PAGETITLE_URL жайынан қараңыз.

$NEWPAGE

Өңдеуші сипаттамасы: $PAGESUMMARY $PAGEMINOREDIT

Өңдеушімен қатынасу:
е-пошта: $PAGEEDITOR_EMAIL
уики: $PAGEEDITOR_WIKI

Былайғы өзгерістер болғанда да осы бетке келіп-кетуіңізгенше дейін ешқандай басқа ескерту хаттар жіберілмейді. Сонымен қатар бақылау тізіміңіздегі бет ескертпелік белгісін қайта қойыңыз.

             Сіздің досты {{SITENAME}} ескерту қызметі

----
Бақылау тізіміңіздің баптаулырын өзгерту үшін, мында келіп-кетіңіз:
{{fullurl:{{ns:special}}:Watchlist/edit}}

Сын-пікір беру және былайғы жәрдем алу үшін:
{{fullurl:{{{{ns:mediawiki}}:Helppage}}}}',

# Delete/protect/revert
'deletepage'                  => 'Бетті жою',
'confirm'                     => 'Құптау',
'excontent'                   => "болған мағлұматы: '$1'",
'excontentauthor'             => "болған мағлұматы (тек '[[{{ns:special}}:Contributions/$2|$2]]' үлесі): '$1'",
'exbeforeblank'               => "тазарту алдындағы болған мағлұматы: '$1'",
'exblank'                     => 'бет бос болды',
'delete-confirm'              => '«$1» дегенді жою',
'delete-legend'               => 'Жою',
'historywarning'              => 'Құлақтандыру: Жоюға арналған бетте өз тарихы бар:',
'confirmdeletetext'           => 'Бетті немесе суретті барлық тарихымен бірге дерекқордан әрдайым жойығыңыз келетін сияқты.
Бұны жоюдың зардабын түсініп шын ниеттенгеніңізді, және [[{{{{ns:mediawiki}}:Policy-url}}]] дегенге лайықты деп сенгеніңізді құптаңыз.',
'actioncomplete'              => 'Әрекет бітті',
'deletedtext'                 => '«<nowiki>$1</nowiki>» жойылды. Жуықтағы жоюлар туралы жазбаларын $2 дегеннен қараңыз.',
'deletedarticle'              => '«[[$1]]» бетін жойды',
'dellogpage'                  => 'Жою_журналы',
'dellogpagetext'              => 'Төменде жуықтағы жоюлардың тізімі берілген.',
'deletionlog'                 => 'жою журналы',
'reverted'                    => 'Ертерек нұсқасына қайтарылған',
'deletecomment'               => 'Жоюдың себебі:',
'deleteotherreason'           => 'Басқа/қосымша себеп:',
'deletereasonotherlist'       => 'Басқа себеп',
'deletereason-dropdown'       => '
* Жоюдың жалпы себептері
** Аутордың сұранымы бойынша
** Ауторлық құқықтарын бұзу
** Бұзақылық',
'delete-toobig'               => 'Бұл бетте байтақ өңдеу тарихы бар, $1 нұсқадан астам. Бұндай беттердің жоюы {{SITENAME}} торабын әлдеқалай үзіп тастауына бөгет салу үшін тиымдалған.',
'delete-warning-toobig'       => 'Бұл бетте байтақ өңдеу тарихы бар, $1 нұсқадан астам. Бұның жоюы {{SITENAME}} торабындағы дерекқор әрекеттерді үзіп тастауын мүмкін; бұны абайлап өткізіңіз.',
'rollback'                    => 'Түзетулерді кері қайтару',
'rollback_short'              => 'Кері қайтару',
'rollbacklink'                => 'кері қайтару',
'rollbackfailed'              => 'Кері қайтару сәтсіз бітті',
'cantrollback'                => 'Түзету қайтарылмайды; бұл беттің ауторы тек соңғы үлескер болған.',
'alreadyrolled'               => '[[:$1]] бетінің [[User:$2|$2]] ([[User_talk:$2|талқылауы]])
соңғы түзетуі кері қайтарылмады; басқа біреу бетті алдақашан өңдеген не қайтарған.

Соңғы өңдеуді [[User:$3|$3]] ([[User_talk:$3|талқылауы]]) істеген.',
'editcomment'                 => 'Болған түзету мәндемесі: «<i>$1</i>».', # only shown if there is an edit comment
'revertpage'                  => '[[{{ns:special}}:Contributions/$2|$2]] ([[{{ns:user_talk}}:$2|талқылауы]]) түзетулерінен қайтарған; [[{{ns:user}}:$1|$1]] соңғы нұсқасына өзгертті.', # Additional available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success'            => '$1 түзетулерінен қайтарған; $2 соңғы нұсқасына өзгертті.',
'sessionfailure'              => 'Кіру сессиясында шатақ болған сияқты; сессияға шабуылдаудардан қорғану үшін, осы әрекет тоқтатылды. «Артқа» түймесін басыңыз, және бетті кері жүктеңіз, сосын қайта байқап көріңіз.',
'protectlogpage'              => 'Қорғау_журналы',
'protectlogtext'              => 'Төменде беттердің қорғау/қорғамау тізімі берілген. Ағымдағы қорғау әректтер бар беттер үшін [[{{ns:special}}:Protectedpages|қорғалған бет тізімін]] қараңыз.',
'protectedarticle'            => '«[[$1]]» қорғалды',
'modifiedarticleprotection'   => '«[[$1]]» дегеннің қорғалу деңгейі өзгерді',
'unprotectedarticle'          => '«[[$1]]» қорғалмады',
'protectsub'                  => '(«$1» қорғау деңгейін қою)',
'confirmprotect'              => 'Қорғауды құптау',
'protectcomment'              => 'Мәндемесі:',
'protectexpiry'               => 'Бітетін мерзімі:',
'protect_expiry_invalid'      => 'Бітетін уақыты жарамсыз.',
'protect_expiry_old'          => 'Бітетін уақыты өтіп кеткен.',
'unprotectsub'                => '(«$1» қорғамауда)',
'protect-unchain'             => 'Жылжыту рұқсаттарын беру',
'protect-text'                => '<strong><nowiki>$1</nowiki></strong> бетінің қорғау деңгейін қарап және өзгертіп шыға аласыз.',
'protect-locked-blocked'      => 'Бұғаттауыңыз өшірілгенше дейін қорғау деңгейін өзгерте алмайсыз.
Мына <strong>$1</strong> беттің ағымдық баптаулары:',
'protect-locked-dblock'       => 'Дерекқордың құлыптауы белсенді болғандықтан қорғау деңгейлері өзгертілмейді.
Мына <strong>$1</strong> беттің ағымдық баптаулары:',
'protect-locked-access'       => 'Тіркелгіңізге бет қорғау денгейлерін өзгертуіне рұқсат жоқ.
Мына <strong>$1</strong> беттің ағымдық баптаулары:',
'protect-cascadeon'           => 'Бұл бет ағымда қорғалған, себебі: осы бет баулы қорғауы бар келесі {{PLURAL:$1|бетке|беттерге}} кірістірілген. Бұл беттің қорғау деңгейін өзгерте аласыз, бірақ бұл баулы қорғауға ықпал етпейді.',
'protect-default'             => '(әдепкі)',
'protect-fallback'            => '«$1» рұқсаты керек болды',
'protect-level-autoconfirmed' => 'Тіркелгісіздерге тиым',
'protect-level-sysop'         => 'Тек әкімшілерге рұқсат',
'protect-summary-cascade'     => 'баулы',
'protect-expiring'            => 'бітуі: $1 (UTC)',
'protect-cascade'             => 'Бұл бетке кірістірілген беттерді қорғау (баулы қорғау).',
'protect-cantedit'            => 'Бұл беттің қорғау деңгейін өзгерте алмайсыз, себебі бұны өңдеуге рұқстаңыз жоқ.',
'restriction-type'            => 'Рұқсаты:',
'restriction-level'           => 'Тиым деңгейі:',
'minimum-size'                => 'Ең аз мөлшері',
'maximum-size'                => 'Ең көп мөлшері',
'pagesize'                    => '(байт)',

# Restrictions (nouns)
'restriction-edit'   => 'Өңдеуге',
'restriction-move'   => 'Жылжытуға',
'restriction-create' => 'Жарату',

# Restriction levels
'restriction-level-sysop'         => 'толық қорғалған',
'restriction-level-autoconfirmed' => 'жартылай қорғалған',
'restriction-level-all'           => 'әрқайсы деңгейде',

# Undelete
'undelete'                     => 'Жойылған беттерді қарау',
'undeletepage'                 => 'Жойылған беттерді қарау және қалпына келтіру',
'viewdeletedpage'              => 'Жойылған беттерді қарау',
'undeletepagetext'             => 'Келесі беттер жойылды деп белгіленген, бірақ мағлұматы мұрағатта бар
және қалпына келтіруге мүмкін. Мұрағат мерзім бойынша тазаланып тұруы мүмкін.',
'undeleteextrahelp'            => "Бүкіл бетті қалпына келтіру үшін, барлық шаршыларды құсбелгілерден босатып
'''''Қалпына келтір!''''' батырмасын нұқыңыз. Бөлектеумен қалпына келтіру орындау үшін, келтіремін деген нұсқаларына сәйкес
қабашақтарын белгілеңіз де, және '''''Қалпына келтір!''''' түймесін нұқыңыз. '''''Қайта қой''''' түймесін
нұқығанда мәндеме аумағы тазартады және барлық шаршыларды құсбелгілерден босатады.",
'undeleterevisions'            => '{{PLURAL:$1|1|$1}} нұсқа мұрағатталды',
'undeletehistory'              => 'Егер бет мағлұматын қалпына келтірсеңіз, тарихында барлық нұсқалар да
қайтарылады. Егер жоюдан соң дәл солай атауымен жаңа бет басталса, қалпына келтірілген нұсқалар
тарихтың алдында көрсетіледі. Тағы да файл нұсқаларының қалпына келтіргенде тиымдары жойылатын ұмытпаңыз.',
'undeleterevdel'               => 'Егер беттің үстіңгі нұсқасы жарым-жартылай жойылған болса жою болдырмауы
атқарылмайды. Осындай жағдайларда, ең жаңа жойылған нұсқа белгілеуін немесе жасыруын болдырмаңыз.
Көруіңізге рұқсат етілмеген файл нұсқалары қалпына келтірілмейді.',
'undeletehistorynoadmin'       => 'Бұл бет жойылған. Жою себебі алдындағы өңдеген қатысушылар
егжей-тегжейлерімен бірге төмендегі сипаттамасында көрсетілген.
Осы жойылған нұсқалардың мәтіні тек әкімшілерге қатынаулы.',
'undelete-revision'            => '$2 кезіндегі $1 дегеннің нұсқасы ($3 жойған):',
'undeleterevision-missing'     => 'Жарамсыз не жоғалған нұсқа. Сілтемеңіз жарамсыз болуы мүмкін, не
нұсқа алдақашан қалпына келтірілген немесе мұрағаттан аласталған.',
'undelete-nodiff'              => 'Еш алдыңғы нұсқа табылмады.',
'undeletebtn'                  => 'Қалпына келтір!',
'undeletereset'                => 'Қайта қой',
'undeletecomment'              => 'Мәндемесі:',
'undeletedarticle'             => '«[[$1]]» қалпына келтірілді',
'undeletedrevisions'           => '{{PLURAL:$1|1|$1}} нұсқа қалпына келтірілді',
'undeletedrevisions-files'     => '{{PLURAL:$1|1|$1}} нұсқа және {{PLURAL:$2|1|$2}} файл қалпына келтірілді',
'undeletedfiles'               => '{{PLURAL:$1|1|$1}} файл қалпына келтірілді',
'cannotundelete'               => 'Жою болдырмауы сәтсіз бітті; басқа біреу алғашында беттің жоюдың болдырмауы мүмкін.',
'undeletedpage'                => "<big>'''$1 қалпына келтірілді'''</big>

Жуықтағы жоюлар мен қалпына келтірулер жөнінде [[{{ns:special}}:Log/delete|жою журналын]] қараңыз.",
'undelete-header'              => 'Жуықтағы жойылған беттер жөнінде [[{{ns:special}}:Log/delete|жою журналын]] қараңыз.',
'undelete-search-box'          => 'Жойылған беттерді іздеу',
'undelete-search-prefix'       => 'Мынадан басталған беттерді көрсет:',
'undelete-search-submit'       => 'Іздеу',
'undelete-no-results'          => 'Жою мұрағатында ешқандай сәйкес беттер табылмады.',
'undelete-filename-mismatch'   => '$1 уақыт белгісімен файл нұсқасы жоюды болдырмау атқарылмады: файл аты сәйкессіз',
'undelete-bad-store-key'       => '$1 уақыт белгісімен файл нұсқасы жоюды болдырмау атқарылмады: жоюдың алдынан файл жоқ болған.',
'undelete-cleanup-error'       => '«$1» пайдаланылмаған мұрағатталған файл жою қатесі.',
'undelete-missing-filearchive' => 'Мұрағатталған файл (нөмірі $1) қалпына келтірілмеді, себебі ол дерекқорда жоқ. Бұның жоюын болдырмауы алдақашан болғаны мүмкін.',
'undelete-error-short'         => 'Файл жоюын болдырмау қатесі: $1',
'undelete-error-long'          => 'Файл жоюын болдырмау кезінде мына қателер кездесті:

$1',

# Namespace form on various pages
'namespace'      => 'Есім аясы:',
'invert'         => 'Бөлектеуді керілеу',
'blanknamespace' => '(Негізгі)',

# Contributions
'contributions' => 'Қатысушы үлесі',
'mycontris'     => 'Үлесім',
'contribsub2'   => '$1 ($2) үлесі',
'nocontribs'    => 'Осы іздеу шартына сәйкес өзгерістер табылған жоқ.',
'ucnote'        => 'Төменде осы қатысушы жасаған соңғы <b>$2</b> күндегі, соңғы <b>$1</b> өзгерісі көрсетледі.',
'uclinks'       => 'Соңғы $2 күндегі, соңғы жасалған $1 өзгерісін қарау.',
'uctop'         => ' (үсті)',
'month'         => 'Айдағы (және ертеректен):',
'year'          => 'Жылдағы (және ертеректен):',

'sp-contributions-newbies'     => 'Тек жаңа тіркелгіден жасаған үлестерді көрсет',
'sp-contributions-newbies-sub' => 'Жаңадан тіркелгі жасағандар үшін',
'sp-contributions-blocklog'    => 'Бұғаттау журналы',
'sp-contributions-search'      => 'Үлес үшін іздеу',
'sp-contributions-username'    => 'IP жай не қатысушы аты:',
'sp-contributions-submit'      => 'Ізде',

'sp-newimages-showfrom' => '$1 кезінен бері — жаңа суреттерді көрсет',

# What links here
'whatlinkshere'       => 'Сілтелген беттер',
'whatlinkshere-title' => '$1 дегенге сілтейтін беттер',
'whatlinkshere-page'  => 'Бет:',
'linklistsub'         => '(Сілтемелер тізімі)',
'linkshere'           => "'''[[:$1]]''' дегенге мына беттер сілтейді:",
'nolinkshere'         => "'''[[:$1]]''' дегенге еш бет сілтемейді.",
'nolinkshere-ns'      => "Талғанған есім аясында '''[[:$1]]''' дегенге ешқандай бет сілтемейді.",
'isredirect'          => 'айдату беті',
'istemplate'          => 'кіріктіру',
'whatlinkshere-prev'  => '{{PLURAL:$1|алдыңғы|алдыңғы $1}}',
'whatlinkshere-next'  => '{{PLURAL:$1|келесі|келесі $1}}',
'whatlinkshere-links' => '← сілтемелер',

# Block/unblock
'blockip'                     => 'Қатысушыны бұғаттау',
'blockiptext'                 => 'Төмендегі пішін қатысушының жазу 
рұқсатын белгілі IP жайымен не атауымен бұғаттау үшін қолданылады.
Бұны тек бұзақылықты қақпайлау үшін және де
[[{{{{ns:mediawiki}}:Policy-url}}|ережелер]] бойынша атқаруыңыз жөн.
Төменде тиісті себебін толтырып көрсетіңіз (мысалы, дәйекке бұзақылықпен
өзгерткен беттерді келтіріп).',
'ipaddress'                   => 'IP жайы:',
'ipadressorusername'          => 'IP жайы не аты:',
'ipbexpiry'                   => 'Бітетін мерзімі:',
'ipbreason'                   => 'Себебі:',
'ipbreasonotherlist'          => 'Басқа себеп',
'ipbreason-dropdown'          => '
* Бұғаттаудың жалпы себебтері 
** Жалған мәлімет енгізу 
** Беттердегі мағлұматты аластау 
** Сыртқы тораптар сілтемелерін жаудыру 
** Беттерге мағынасыздық/балдырлау кірістіру 
** Қоқандау/қуғындау мінезқұлық 
** Бірнеше рет тіркеліп қиянаттау 
** Қолайсыз қатысушы атауы',
'ipbanononly'                 => 'Тек тіркелгісіз қатысушыларды бұғаттау',
'ipbcreateaccount'            => 'Тіркелуді қақпайлау',
'ipbemailban'                 => 'Қатысушы е-поштамен хат жіберуін қақпайлау',
'ipbenableautoblock'          => 'Бұл қатысушы соңғы қолданған IP жайы, және кейін өңдеуге байқап көрген әрқайсы IP жайлары өздіктік бұғатталсын',
'ipbsubmit'                   => 'Қатысушыны бұғатта',
'ipbother'                    => 'Басқа мерзімі:',
'ipboptions'                  => '2 сағат:2 hours,1 күн:1 day,3 күн:3 days,1 апта:1 week,2 апта:2 weeks,1 ай:1 month,3 ай:3 months,6 ай:6 months,1 жыл:1 year,мәнгі:infinite', # display1:time1,display2:time2,...
'ipbotheroption'              => 'басқа',
'ipbotherreason'              => 'Басқа/қосымша себеп:',
'ipbhidename'                 => 'Бұғаттау журналындағы, белсенді бұғаттау тізіміндегі, қатысушы тізіміннегі аты/IP жасырылсын',
'badipaddress'                => 'Жарамсыз IP жай',
'blockipsuccesssub'           => 'Бұғаттау сәтті өтті',
'blockipsuccesstext'          => '[[{{ns:special}}:Contributions/$1|$1]] деген бұғатталған.
<br />Бұғаттарды шолып шығу үшін [[{{ns:special}}:Ipblocklist|IP бұғаттау тізімін]] қараңыз.',
'ipb-edit-dropdown'           => 'Бұғаттау себептерін өңдеу',
'ipb-unblock-addr'            => '$1 дегенді бұғаттамау',
'ipb-unblock'                 => 'Қатысушы атын немесе IP жайын бұғаттамау',
'ipb-blocklist-addr'          => '$1 үшін бар бұғаттауларды қарау',
'ipb-blocklist'               => 'Бар бұғаттауларды қарау',
'unblockip'                   => 'Қатысушыны бұғаттамау',
'unblockiptext'               => 'Төмендегі пішінді алдындағы IP жайымен не атауымен бұғатталған қатысушыға жазу қатынауын қалпына келтіріуі үшін қолданыңыз.',
'ipusubmit'                   => 'Осы жайды бұғаттамау',
'unblocked'                   => '[[User:$1|$1]] бұғаттауы өшірілді',
'unblocked-id'                => '$1 деген бұғаттау аласталды',
'ipblocklist'                 => 'Бұғатталған қатысушы / IP жай тізімі',
'ipblocklist-legend'          => 'Бұғатталған қатысушыны табу',
'ipblocklist-username'        => 'Қатысушы аты / IP жай:',
'ipblocklist-submit'          => 'Ізде',
'blocklistline'               => '$1, $2 $3 дегенді бұғаттады ($4)',
'infiniteblock'               => 'мәнгі',
'expiringblock'               => 'бітуі: $1',
'anononlyblock'               => 'тек тіркелгісіздер',
'noautoblockblock'            => 'өздіктік бұғаттау өшірілген',
'createaccountblock'          => 'тіркелу бұғатталған',
'emailblock'                  => 'е-пошта бұғатталған',
'ipblocklist-empty'           => 'Бұғаттау тізімі бос.',
'ipblocklist-no-results'      => 'Сұратылған IP жай не қатысушы аты бұғатталған емес.',
'blocklink'                   => 'бұғаттау',
'unblocklink'                 => 'бұғаттамау',
'contribslink'                => 'үлесі',
'autoblocker'                 => 'IP жайыңызды жуықта «[[User:1|$1]]» пайдаланған, сондықтан өздіктік бұғатталған. $1 бұғаттауы үшін келтірілген себебі: «$2».',
'blocklogpage'                => 'Бұғаттау_журналы',
'blocklogentry'               => '[[$1]] дегенді $2 мерзімге бұғаттады $3',
'blocklogtext'                => 'Бұл қатысушыларды бұғаттау/бұғаттамау әрекеттерінің журналы. Өздіктік
бұғатталған IP жайлар осында тізімделгемеген. Ағымдағы белсенді бұғаттауларын
[[{{ns:special}}:Ipblocklist|IP бұғаттау тізімінен]] қарауға болады.',
'unblocklogentry'             => '«$1» дегеннің бұғаттауын өшірді',
'block-log-flags-anononly'    => 'тек тіркелгісіздер',
'block-log-flags-nocreate'    => 'тіркелу өшірілген',
'block-log-flags-noautoblock' => 'өздіктік бұғаттау өшірілген',
'block-log-flags-noemail'     => 'е-пошта бұғатталған',
'range_block_disabled'        => 'Ауқым бұғаттауларын жасау әкімшілік мүмкіндігі өшірілген.',
'ipb_expiry_invalid'          => 'Бітетін уақыты жарамсыз.',
'ipb_already_blocked'         => '«$1» алдақашан бұғатталған',
'ipb_cant_unblock'            => 'Қателік: IP $1 бұғаттауы табылмады. Оның бұғаттауы алдақашан өшірлген мүмкін.',
'ipb_blocked_as_range'        => 'Қателік: IP $1 тікелей бұғатталмаған және бұғаттауы өшірілмейді. Бірақ, бұл бұғаттауы өшірілуі мүмкін $2 ауқымы бөлігі боп бұғатталған.',
'ip_range_invalid'            => 'IP жай ауқымы жарамсыз.',
'blockme'                     => 'Өздіктік_бұғаттау',
'proxyblocker'                => 'Прокси серверлерді бұғаттауыш',
'proxyblocker-disabled'       => 'Бұл функция өшірілген.',
'proxyblockreason'            => 'IP жайыңыз ашық прокси серверге жататындықтан бұғатталған. Интернет қызметін жабдықтаушыңызбен, не техникалық медеу қызметімен қатынасыңыз, және оларға осы оте күрделі қауыпсіздік шатақ туралы ақпарат беріңіз.',
'proxyblocksuccess'           => 'Бітті.',
'sorbsreason'                 => 'Сіздің IP жайыңыз {{SITENAME}} торабында қолданылған DNSBL қара тізіміндегі ашық прокси-сервер деп табылады.',
'sorbs_create_account_reason' => 'Сіздің IP жайыңыз {{SITENAME}} торабында қолданылған DNSBL қара тізіміндегі ашық прокси-сервер деп табылады. Тіркелгіні жарата алмайсыз.',

# Developer tools
'lockdb'              => 'Дерекқорды құлыптау',
'unlockdb'            => 'Дерекқорды құлыптамау',
'lockdbtext'          => 'Дерекқордын құлыпталуы барлық қатысушылардың
бет өңдеу, баптауын қалау, бақылау тізімін, тағы басқа
дерекқорды өзгертетін мүмкіндіктерін тоқтата тұрады.
Осы мақсатыңызды, және жөндеуіңіз біткенде
дерекқорды ашатыңызды құптаңыз.',
'unlockdbtext'        => 'Дерекқодын ашылуы барлық қатысушылардың бет өңдеу,
баптауын қалау, бақылау тізімін, тағы басқа дерекқорды өзгертетін
мүмкіндіктерін қалпына келтіреді.
Осы мақсатыңызды құптаңыз.',
'lockconfirm'         => 'Иә, мен дерекқорды растан құлыптаймын.',
'unlockconfirm'       => 'Иә, мен дерекқорды растан құлыптамаймын.',
'lockbtn'             => 'Дерекқорды құлыпта',
'unlockbtn'           => 'Дерекқорды құлыптама',
'locknoconfirm'       => 'Құптау белгісін қоймапсыз.',
'lockdbsuccesssub'    => 'Дерекқор құлыптауы сәтті өтті',
'unlockdbsuccesssub'  => 'Дерекқор құлыптауы аласталды',
'lockdbsuccesstext'   => 'Дерекқор құлыпталды.
<br />Жөндеуіңіз біткеннен кейін [[{{ns:special}}:Unlockdb|құлыптауын аластауға]] ұмытпаңыз.',
'unlockdbsuccesstext' => 'Құлыпталған дерекқор сәтті ашылды.',
'lockfilenotwritable' => 'Дерекқор құлыптау файлы жазылмайды. Дерекқорды құлыптау не ашу үшін, веб-сервер файлға жазу рұқсаты болу керек.',
'databasenotlocked'   => 'Дерекқор құлыпталған жоқ.',

# Move page
'movepage'                => 'Бетті жылжыту',
'movepagetext'            => "Төмендегі пішінді қолданып беттерді қайта атайды,
барлық тарихын жаңа атауға жылжытады.
Бұрынғы бет атауы жаңа атауға айдататын бет болады.
Ескі атауына сілтейтін сілтемелер өзгертілмейді; жылжытудан соң
шынжырлы не жарамсыз айдатулар бар-жоғын тексеріп шығыңыз.
Сілтемелер бұрынғы жолдауымен былайғы өтуін тексеруіне
сіз міндетті боласыз.

Аңғартпа: егер мында алдақашан жаңа атауы бар бет болса, және соңғы түзету тарихсыз
бос бет не айдату болғанша дейін, бет '''жылжытылмайды'''.
Осының мағынасы: егер бетті қателікпен қайта атасаңыз,
бұрынғы атауына қайта атауға болады, және бар беттің үстіне
жазуыңызға болмайды.

<b>ҚҰЛАҚТАНДЫРУ!</b>
Бұл көп қаралатын бетке қатаң және кенет өзгеріс жасауға мүмкін;
әрекеттің алдынан осының зардаптарын түсінгеніңізге батыл
болыңыз.",
'movepagetalktext'        => "Келесі себептер '''болғанша''' дейін, талқылау беті бұнымен бірге өздіктік жылжытылады:
* Бос емес талқылау беті жаңа атауда алдақашан болғанда, не
* Төмендегі қабышақта белгіні болдырмағанда.

Осы орайда, қалауыңыз болса, бетті қолдан жылжыта не қоса аласыз.",
'movearticle'             => 'Бетті жылжыту:',
'movenologin'             => 'Жүйеге кірмегенсіз',
'movenologintext'         => 'Бетті жылжыту үшін тіркелген болуыңыз және [[{{ns:special}}:Userlogin|кіруіңіз]] керек.',
'movenotallowed'          => '{{SITENAME}} жобасында беттерді жылжыту руқсатыңыз жоқ.',
'newtitle'                => 'Жаңа атауға:',
'move-watch'              => 'Бұл бетті бақылау',
'movepagebtn'             => 'Бетті жылжыт',
'pagemovedsub'            => 'Жылжыту сәтті аяқталды',
'movepage-moved'          => "<big>'''«$1» деген «$2» дегенге жылжытылды'''</big>", # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'           => 'Осылай аталған бет алдақашан бар, не
таңдаған атауыңыз жарамды емес.
Басқа атау тандаңыз',
'cantmove-titleprotected' => 'Бетті мына орынға жылжыта алмайсыз, себебі осы жаңа атау жаратылуы қорғалған',
'talkexists'              => "'''Беттің өзі сәтті жылжытылды, бірақ талқылау беті бірге жылжытылмады, оның себебі жаңа атаудың талқылау беті алдақашан бар. Бұны қолмен қосыңыз.'''",
'movedto'                 => 'мынаған жылжытылды:',
'movetalk'                => 'Қатысты талқылау бетімен бірге жылжыту',
'talkpagemoved'           => 'Қатысты талқылау беті де жылжытылды.',
'talkpagenotmoved'        => 'Қатысты талқылау беті <strong>жылжытылмады</strong>.',
'1movedto2'               => '«[[$1]]» бетінде айдату қалдырып «[[$2]]» бетіне жылжытты',
'1movedto2_redir'         => '«[[$1]]» бетін «[[$2]]» айдату бетінің үстіне жылжытты',
'movelogpage'             => 'Жылжыту журналы',
'movelogpagetext'         => 'Төменде жылжытылған беттердің тізімі беріліп тұр.',
'movereason'              => 'Себебі:',
'revertmove'              => 'қайтару',
'delete_and_move'         => 'Жою және жылжыту',
'delete_and_move_text'    => '==Жою керек==

Нысана бет «[[$1]]» алдақашан бар. Жылжытуға жол беру үшін жоямыз ба?',
'delete_and_move_confirm' => 'Иә, бұл бетті жой',
'delete_and_move_reason'  => 'Жылжытуға жол беру үшін жойылған',
'selfmove'                => 'Қайнар және нысана атауы бірдей; бет өзіне жылжытылмайды.',
'immobile_namespace'      => 'Қайнар не нысана атауы арнайы түріне жатады; осындай есім аясына және есім аясынан беттер жылжытылмайды.',

# Export
'export'            => 'Беттерді сыртқа беру',
'exporttext'        => 'XML пішіміне қапталған бөлек бет не беттер бумасы
мәтінің және өңдеу тарихын сыртқа бере аласыз. Осыны, басқа уикиге
жүйенің [[{{ns:special}}:Import|сырттан алу бетін]] пайдаланып, алуға болады.

Беттерді сыртқа беру үшін, атауларын төмендегі мәтін аумағына енгізіңіз
(бір жолда бір атау), және де бөлектеңіз: не ағымдық нұсқасын, барлық ескі нұсқалары мен
және тарихы жолдары мен бірге, немесе дәл ағымдық нұсқасын, соңғы өңдеу туралы ақпараты мен бірге.

Соңғы жағдайда сілтемені де, мысалы «{{{{ns:mediawiki}}:Mainpage}}» беті үшін [[{{ns:special}}:Export/{{MediaWiki:Mainpage}}]] қолдануға болады.',
'exportcuronly'     => 'Толық тарихын емес, тек ағымдық нұсқасын кірістіріңіз',
'exportnohistory'   => "----
'''Аңғартпа:''' Өнімділік әсері себептерінен, беттердің толық тарихын бұл пішінмен сыртқа беруі өшірілген.",
'export-submit'     => 'Сыртқа бер',
'export-addcattext' => 'Мына санаттағы беттерді үстеу:',
'export-addcat'     => 'Үсте',
'export-download'   => 'Файл түрінде сақтау',
'export-templates'  => 'Үлгілерді қоса алып',

# Namespace 8 related
'allmessages'               => 'Жүйе хабарлары',
'allmessagesname'           => 'Атауы',
'allmessagesdefault'        => 'Әдепкі мәтіні',
'allmessagescurrent'        => 'Ағымдық мәтіні',
'allmessagestext'           => 'Бұл {{ns:mediawiki}} есім аясында қатынаулы жүйе хабар тізімі.',
'allmessagesnotsupportedDB' => "'''wgUseDatabaseMessages''' өшірілген себебінен '''{{ns:special}}:AllMessages''' беті қолданылмайды.",
'allmessagesfilter'         => 'Хабар атауымен сүзгілеу:',
'allmessagesmodified'       => 'Тек өзгертілгенді көрсет',

# Thumbnails
'thumbnail-more'           => 'Үлкейту',
'filemissing'              => 'Жоғалған файл',
'thumbnail_error'          => 'Нобай жаратылу қатесі: $1',
'djvu_page_error'          => 'DjVu беті мүмкінді аумақтың сыртындда',
'djvu_no_xml'              => 'DjVu файлына XML келтіруге болмайды',
'thumbnail_invalid_params' => 'Нобайдың бапталымдары жарамсыз',
'thumbnail_dest_directory' => 'Нысана қалта жаратылмады',

# Special:Import
'import'                     => 'Беттерді сырттан алу',
'importinterwiki'            => 'Уики-тасымалдап сырттан алу',
'import-interwiki-text'      => 'Сырттан алатын уики жобасын және бет атауын бөлектеңіз.
Нұсқа күн-айы және өңдеуші аттары сақталады.
Барлық уики-тасымалдап сырттан алу әрекеттер [[{{ns:special}}:Log/import|сырттан алу журналына]] жазылып алынады.',
'import-interwiki-history'   => 'Осы беттің барлық тарихи нұсқаларын көшіру',
'import-interwiki-submit'    => 'Сырттан алу',
'import-interwiki-namespace' => 'Мына есім аясына беттерді тасымалдау:',
'importtext'                 => 'Қайнар уикиден «Special:Export» қуралын қолданып, файлды сыртқа беріңіз, дискіңізге сақтаңыз, сосын мында қотарыңыз.',
'importstart'                => 'Беттерді сырттан алуы…',
'import-revision-count'      => '{{PLURAL:$1|1|$1}} нұсқа',
'importnopages'              => 'Сырттан алынатын беттер жоқ.',
'importfailed'               => 'Сырттан алу сәтсіз бітті: $1',
'importunknownsource'        => 'Cырттан алу қайнар түрі танымалсыз',
'importcantopen'             => 'Сырттан алу файлы ашылмайды',
'importbadinterwiki'         => 'Жарамсыз уики-аралық сілтеме',
'importnotext'               => 'Босты, не мәтіні жоқ',
'importsuccess'              => 'Сырттан алуы аяқталды!',
'importhistoryconflict'      => 'Тарихының егес нұсқалары бар (бұл бетті алдында сырттан алынған сияқты)',
'importnosources'            => 'Ешқандай уики-тасымалдап сырттан алу қайнары белгіленмеген, және тарихын тікелей қотаруы өшірілген.',
'importnofile'               => 'Сырттан алынатын файл қотарылған жоқ.',
'importuploaderrorsize'      => 'Сырттан алынатын файлдың қотаруы сәтсіз өтті. Файл мөлшері қотаруға руқсат етілгеннен артық.',
'importuploaderrorpartial'   => 'Сырттан алынатын файлдың қотаруы сәтсіз өтті. Осы файлдың тек бөліктері қотарылды.',
'importuploaderrortemp'      => 'Сырттан алынатын файлдың қотаруы сәтсіз өтті. Уақытша қалта табылмады.',
'import-parse-failure'       => 'Сырттан алғанда XML өндетуі бұзылды',
'import-noarticle'           => 'Сырттан алатын еш бет жоқ!',
'import-nonewrevisions'      => 'Барлық нұсқалары алдында сырттан алынған.',
'xml-error-string'           => '$1 нөмір $2 жолда, баған $3 (байт $4): $5',

# Import log
'importlogpage'                    => 'Сырттан алу журналы',
'importlogpagetext'                => 'Басқа уикилерден өңдеу тарихымен бірге беттерді әкімшілік ретінде сырттан алу.',
'import-logentry-upload'           => 'файл қотаруымен сырттан «[[$1]]» беті алынды',
'import-logentry-upload-detail'    => '{{PLURAL:$1|1|$1}} нұсқа',
'import-logentry-interwiki'        => 'уики арасынан тасымалданған $1',
'import-logentry-interwiki-detail' => '$2 дегеннен {{PLURAL:$1|1|$1}} нұсқа',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Жеке бетім',
'tooltip-pt-anonuserpage'         => 'Осы IP жайдың жеке беті',
'tooltip-pt-mytalk'               => 'Талқылау бетім',
'tooltip-pt-anontalk'             => 'Осы IP жай түзетулерін талқылау',
'tooltip-pt-preferences'          => 'Баптауым',
'tooltip-pt-watchlist'            => 'Өзгерістерін бақылап тұрған беттер тізімім.',
'tooltip-pt-mycontris'            => 'Үлестерімдің тізімі',
'tooltip-pt-login'                => 'Кіруіңізді ұсынамыз, ол міндетті емес.',
'tooltip-pt-anonlogin'            => 'Кіруіңізді ұсынамыз, бірақ, ол міндетті емес.',
'tooltip-pt-logout'               => 'Шығу',
'tooltip-ca-talk'                 => 'Мағлұмат бетті талқылау',
'tooltip-ca-edit'                 => 'Бұл бетті өңдей аласыз. Сақтаудың алдында «Қарап шығу» батырмасын нұқыңыз.',
'tooltip-ca-addsection'           => 'Бұл талқылау бетінде жаңа тарау бастау.',
'tooltip-ca-viewsource'           => 'Бұл бет қорғалған, бірақ, қайнарын қарауға болады.',
'tooltip-ca-history'              => 'Бұл беттін жуықтағы нұсқалары.',
'tooltip-ca-protect'              => 'Бұл бетті қорғау',
'tooltip-ca-delete'               => 'Бұл бетті жою',
'tooltip-ca-undelete'             => 'Бұл беттің жоюдың алдындағы болған түзетулерін қалпына келтіру',
'tooltip-ca-move'                 => 'Бұл бетті жылжыту',
'tooltip-ca-watch'                => 'Бұл бетті бақылау тізіміңізге үстеу',
'tooltip-ca-unwatch'              => 'Бұл бетті бақылау тізіміңізден аластау',
'tooltip-search'                  => '{{SITENAME}} жобасынан іздестіру',
'tooltip-search-go'               => 'Егер дәл осы атауымен болса бетке өтіп кету',
'tooltip-search-fulltext'         => 'Осы мәтіні бар бетті іздеу',
'tooltip-p-logo'                  => 'Басты бетке',
'tooltip-n-mainpage'              => 'Басты бетке келіп-кетіңіз',
'tooltip-n-portal'                => 'Жоба туралы, не істеуіңізге болатын, қайдан табуға болатын туралы',
'tooltip-n-currentevents'         => 'Ағымдағы оқиғаларға қатысты ақпарат',
'tooltip-n-recentchanges'         => 'Осы уикидегі жуықтағы өзгерістер тізімі.',
'tooltip-n-randompage'            => 'Кездейсоқ бетті жүктеу',
'tooltip-n-help'                  => 'Анықтама табу орны.',
'tooltip-n-sitesupport'           => 'Бізге жәрдем етіңіз',
'tooltip-t-whatlinkshere'         => 'Мында сілтеген барлық беттердің тізімі',
'tooltip-t-recentchangeslinked'   => 'Мыннан сілтенген беттердің жуықтағы өзгерістері',
'tooltip-feed-rss'                => 'Бұл беттің RSS арнасы',
'tooltip-feed-atom'               => 'Бұл беттің Atom арнасы',
'tooltip-t-contributions'         => 'Осы қатысушының үлес тізімін қарау',
'tooltip-t-emailuser'             => 'Осы қатысушыға email жіберу',
'tooltip-t-upload'                => 'Сурет не таспа файлдарын қотару',
'tooltip-t-specialpages'          => 'Барлық арнайы беттер тізімі',
'tooltip-t-print'                 => 'Бұл беттің басып шығарышқа арналған нұсқасы',
'tooltip-t-permalink'             => 'Мына беттің осы нұсқасының тұрақты сілтемесі',
'tooltip-ca-nstab-main'           => 'Мағлұмат бетін қарау',
'tooltip-ca-nstab-user'           => 'Қатысушы бетін қарау',
'tooltip-ca-nstab-media'          => 'Таспа бетін қарау',
'tooltip-ca-nstab-special'        => 'Бұл арнайы бет, беттің өзі өңделінбейді.',
'tooltip-ca-nstab-project'        => 'Жоба бетін қарау',
'tooltip-ca-nstab-image'          => 'Сурет бетін қарау',
'tooltip-ca-nstab-mediawiki'      => 'Жүйе хабарын қарау',
'tooltip-ca-nstab-template'       => 'Үлгіні қарау',
'tooltip-ca-nstab-help'           => 'Анықтыма бетін қарау',
'tooltip-ca-nstab-category'       => 'Санат бетін қарау',
'tooltip-minoredit'               => 'Осыны шағын түзету деп белгілеу',
'tooltip-save'                    => 'Жасаған өзгерістеріңізді сақтау',
'tooltip-preview'                 => 'Сақтаудың алдынан жасаған өзгерістеріңізді қарап шығыңыз!',
'tooltip-diff'                    => 'Мәтінге қандай өзгерістерді жасағаныңызды қарау.',
'tooltip-compareselectedversions' => 'Беттің екі бөлектенген нұсқасы айырмасын қарау.',
'tooltip-watch'                   => 'Бұл бетті бақылау тізіміңізге үстеу',
'tooltip-recreate'                => 'Бет жойылғанына қарамастан қайта бастау',
'tooltip-upload'                  => 'Қотаруды бастау',

# Metadata
'nodublincore'      => 'Бұл серверде «Dublin Core RDF» түрі қосымша деректері өшірілген.',
'nocreativecommons' => 'Бұл серверде «Creative Commons RDF» түрі қосымша деректері өшірілген.',
'notacceptable'     => 'Тұтынғышыңыз оқып алу үшін пішімделінген деректерді осы уики сервер жетістіре алмайды.',

# Attribution
'anonymous'        => '{{SITENAME}} тіркелгісіз қатысушы(лары)',
'siteuser'         => '{{SITENAME}} қатысушы $1',
'lastmodifiedatby' => 'Бұл бетті $3 қатысушы соңғы өзгерткен кезі: $2, $1.', # $1 date, $2 time, $3 user
'othercontribs'    => 'Шығарма негізін $1 жазған.',
'others'           => 'басқалар',
'siteusers'        => '{{SITENAME}} қатысушы(лар) $1',
'creditspage'      => 'Бетті жазғандар',
'nocredits'        => 'Бұл бетті жазғандар туралы ақпарат жоқ.',

# Spam protection
'spamprotectiontitle'    => '«Спам»-нан қорғайтын сүзгі',
'spamprotectiontext'     => 'Бұл беттің сақтауын «спам» сүзгісі бұғаттады. Бұның себебі сыртқы торап сілтемесінен болуы мүмкін.',
'spamprotectionmatch'    => 'Келесі «спам» мәтіні сүзгіленген: $1',
'subcategorycount'       => 'Бұл санатта {{PLURAL:$1|бір|$1}} санатша бар.',
'categoryarticlecount'   => 'Бұл санатта {{PLURAL:$1|бір|$1}} бет бар.',
'category-media-count'   => 'Бұл санатта {{PLURAL:$1|бір|$1}} файл бар.',
'listingcontinuesabbrev' => '(жалғ.)',
'spam_reverting'         => '$1 дегенге сілтемесі жоқ соңғы нұсқасына қайтарылды',
'spam_blanking'          => '$1 дегенге сілтемесі бар барлық нұсқалар тазартылды',

# Info page
'infosubtitle'   => 'Бет туралы мәлімет',
'numedits'       => 'Түзету саны (бет): $1',
'numtalkedits'   => 'Түзету саны (талқылау беті): $1',
'numwatchers'    => 'Бақылаушы саны: $1',
'numauthors'     => 'Әртүрлі ауторлар саны (бет): $1',
'numtalkauthors' => 'Әртүрлі аутор саны (талқылау беті): $1',

# Math options
'mw_math_png'    => 'Әрқашан PNG көрсеткіз',
'mw_math_simple' => 'Егер өте қарапайым болса — HTML, әйтпесе PNG',
'mw_math_html'   => 'Егер ықтимал болса — HTML, әйтпесе PNG',
'mw_math_source' => 'Бұны TeX пішімінде қалдыр (мәтіндік шолғыштарға)',
'mw_math_modern' => 'Осы заманғы шолғыштарына ұсынылады',
'mw_math_mathml' => 'Егер ықтимал болса — MathML (сынақтама)',

# Patrolling
'markaspatrolleddiff'                 => 'Күзетте деп белгілеу',
'markaspatrolledtext'                 => 'Осы бетті күзетуде деп белгілеу',
'markedaspatrolled'                   => 'Күзетте деп белгіленді',
'markedaspatrolledtext'               => 'Талғанған нұсқа күзетте деп белгіленді.',
'rcpatroldisabled'                    => 'Жуықтағы өзгерістер Күзеті өшірілген',
'rcpatroldisabledtext'                => 'Жуықтағы өзгерістер Күзеті мүмкіндігі ағымда өшірілген.',
'markedaspatrollederror'              => 'Күзетте деп белгіленбейді',
'markedaspatrollederrortext'          => 'Күзетте деп белгілеу үшін нұсқасын енгізіңіз.',
'markedaspatrollederror-noautopatrol' => 'Өзіңіз жасаған өзгерістеріңізді күзетке қоя алмайсыз.',

# Patrol log
'patrol-log-page' => 'Күзет журналы',
'patrol-log-line' => 'күзеттегі $2 дегеннің $1 нұсқасын белгіледі $3',
'patrol-log-auto' => '(өздіктік)',
'patrol-log-diff' => 'нөмір $1',

# Image deletion
'deletedrevision'                 => 'Мына ескі нұсқасын жойды: $1',
'filedeleteerror-short'           => 'Файл жою қатесі: $1',
'filedeleteerror-long'            => 'Мына файлды жойғанда қателер кездесті:

$1',
'filedelete-missing'              => '«$1» файлы жойылмайды, себебі ол жоқ.',
'filedelete-old-unregistered'     => 'Файлдын келтірілген «$1» нұсқасы дерекқорда жоқ.',
'filedelete-current-unregistered' => 'Келтірілген «$1» файл дерекқорда жоқ.',
'filedelete-archive-read-only'    => '«$1» деген мұрағат қалтасына вебсервер жаза алмайды.',

# Browsing diffs
'previousdiff' => '← Алдыңғы айырм.',
'nextdiff'     => 'Келесі айырм. →',

# Media information
'mediawarning'         => "'''Құлақтандыру''': Бұл файл түрінде қаскүнемді әмірлердің бар болуы ықтимал; бұны жегіп жүйеңізге зиян келтіруіңіз мүмкін.<hr />",
'imagemaxsize'         => 'Сипаттамасы бетіндегі суреттің мөлшерін шектеуі:',
'thumbsize'            => 'Нобай мөлшері:',
'widthheight'          => '$1 × $2',
'widthheightpage'      => '$1 × $2, $3 бет',
'file-info'            => 'Файл мөлшері: $1, MIME түрі: $2',
'file-info-size'       => '($1 × $2 пиксел, файл мөлшері: $3, MIME түрі: $4)',
'file-nohires'         => '<small>Жоғары ажыратылымдығы жетімсіз.</small>',
'svg-long-desc'        => '(SVG файлы, кесімді $1 × $2 пиксел, файл мөлшері: $3)',
'show-big-image'       => 'Жоғары ажыратылымды',
'show-big-image-thumb' => '<small>Қарап шығу мөлшері: $1 × $2 пиксел</small>',

# Special:Newimages
'newimages'    => 'Ең жаңа файлдар қоймасы',
'showhidebots' => '(боттарды $1)',
'noimages'     => 'Көретін ештеңе жоқ.',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'video-dims'     => '$1, $2 × $3',
'seconds-abbrev' => 'с',
'minutes-abbrev' => 'мин',
'hours-abbrev'   => 'сағ',

# Bad image list
'bad_image_list' => 'Пішімі төмендегідей:

Тек тізім даналары (* нышанымен басталытын жолдар) есептеледі. Жолдың бірінші сілтемесі жарамсыз суретке сілтеу керек.
Сол жолдағы кейінгі әрбір сілтемелер ерен болып есептеледі, мысалы жол ішіндегі кездесетін суреті бар беттер.',

# Metadata
'metadata'          => 'Қосымша мәліметтер',
'metadata-help'     => 'Осы файлда қосымша мәліметтер бар. Бәлкім, осы мәліметтер файлды жасап шығару, не сандылау үшін пайдаланған сандық камера, не мәтіналғырдан алынған. Егер осы файл негізгі күйінен өзгертілген болса, кейбір ежелелері өзгертілген фотосуретке лайық болмас.',
'metadata-expand'   => 'Егжей-тегжейін көрсет',
'metadata-collapse' => 'Егжей-тегжейін жасыр',
'metadata-fields'   => 'Осы хабарда тізімделген EXIF қосымша мәліметтер аумақтары,
сурет беті көрсету кезінде қосымша мәліметтер кесте жасырылығанда кірістірледі.
Басқалары әдепкіден жасырылады.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength', # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Ені',
'exif-imagelength'                 => 'Биіктігі',
'exif-bitspersample'               => 'Құраш сайын бит саны',
'exif-compression'                 => 'Қысым сұлбасы',
'exif-photometricinterpretation'   => 'Пиксел қиысуы',
'exif-orientation'                 => 'Мегзеуі',
'exif-samplesperpixel'             => 'Құраш саны',
'exif-planarconfiguration'         => 'Дерек реттеуі',
'exif-ycbcrsubsampling'            => 'Y құрашының C құрашына жарнақтауы',
'exif-ycbcrpositioning'            => 'Y құрашы және C құрашы мекендеуі',
'exif-xresolution'                 => 'Дерелей ажыратылымдығы',
'exif-yresolution'                 => 'Тірелей ажыратылымдығы',
'exif-resolutionunit'              => 'X және Y ажыратылымдықтарығының өлшемі',
'exif-stripoffsets'                => 'Сурет дереректерінің жайғасуы',
'exif-rowsperstrip'                => 'Белдік сайын жол саны',
'exif-stripbytecounts'             => 'Қысымдалған белдік сайын байт саны',
'exif-jpeginterchangeformat'       => 'JPEG SOI дегенге ығысуы',
'exif-jpeginterchangeformatlength' => 'JPEG деректерінің байт саны',
'exif-transferfunction'            => 'Тасымалдау функциясы',
'exif-whitepoint'                  => 'Ақ нүкте түстілігі',
'exif-primarychromaticities'       => 'Алғы шептегі түстіліктері',
'exif-ycbcrcoefficients'           => 'Түс аясын тасымалдау матрицалық еселіктері',
'exif-referenceblackwhite'         => 'Қара және ақ анықтауыш қос колемдері',
'exif-datetime'                    => 'Файлдың өзгертілген күн-айы',
'exif-imagedescription'            => 'Сурет атауы',
'exif-make'                        => 'Камера өндірушісі',
'exif-model'                       => 'Камера үлгісі',
'exif-software'                    => 'Қолданылған бағдарлама',
'exif-artist'                      => 'Жығармашысы',
'exif-copyright'                   => 'Жығармашылық құқықтар иесі',
'exif-exifversion'                 => 'Exif нұсқасы',
'exif-flashpixversion'             => 'Сүйемделінген Flashpix нұсқасы',
'exif-colorspace'                  => 'Түс аясы',
'exif-componentsconfiguration'     => 'Әрқайсы құраш мәні',
'exif-compressedbitsperpixel'      => 'Сурет қысымдау тәртібі',
'exif-pixelydimension'             => 'Суреттің жарамды ені',
'exif-pixelxdimension'             => 'Суреттің жарамды биіктігі',
'exif-makernote'                   => 'Өндірушінің аңғартпалары',
'exif-usercomment'                 => 'Қатысушының мәндемелері',
'exif-relatedsoundfile'            => 'Қатысты дыбыс файлы',
'exif-datetimeoriginal'            => 'Жасалған кезі',
'exif-datetimedigitized'           => 'Сандықтау кезі',
'exif-subsectime'                  => 'Жасалған кезінің секунд бөлшектері',
'exif-subsectimeoriginal'          => 'Түпнұсқа кезінің секунд бөлшектері',
'exif-subsectimedigitized'         => 'Сандықтау кезінің секунд бөлшектері',
'exif-exposuretime'                => 'Ұсталым уақыты',
'exif-exposuretime-format'         => '$1 с ($2)',
'exif-fnumber'                     => 'Саңылау мөлшері',
'exif-exposureprogram'             => 'Ұсталым бағдарламасы',
'exif-spectralsensitivity'         => 'Спектр бойынша сезгіштігі',
'exif-isospeedratings'             => 'ISO жылдамдық жарнақтауы (жарық сезгіштігі)',
'exif-oecf'                        => 'Оптоелектронды түрлету ықпалы',
'exif-shutterspeedvalue'           => 'Жапқыш жылдамдылығы',
'exif-aperturevalue'               => 'Саңылаулық',
'exif-brightnessvalue'             => 'Ашықтық',
'exif-exposurebiasvalue'           => 'Ұсталым өтемі',
'exif-maxaperturevalue'            => 'Барынша саңылау ашуы',
'exif-subjectdistance'             => 'Нысана қашықтығы',
'exif-meteringmode'                => 'Өлшеу тәртібі',
'exif-lightsource'                 => 'Жарық көзі',
'exif-flash'                       => 'Жарқылдағыш',
'exif-focallength'                 => 'Шоғырлау алшақтығы',
'exif-subjectarea'                 => 'Нысана ауқымы',
'exif-flashenergy'                 => 'Жарқылдағыш қарқыны',
'exif-spatialfrequencyresponse'    => 'Кеңістік-жиілік әсершілігі',
'exif-focalplanexresolution'       => 'Х бойынша шоғырлау жайпақтықтың ажыратылымдығы',
'exif-focalplaneyresolution'       => 'Y бойынша шоғырлау жайпақтықтың ажыратылымдығы',
'exif-focalplaneresolutionunit'    => 'Шоғырлау жайпақтықтың ажыратылымдық өлшемі',
'exif-subjectlocation'             => 'Нысана мекендеуі',
'exif-exposureindex'               => 'Ұсталым айқындауы',
'exif-sensingmethod'               => 'Сенсордің өлшеу әдісі',
'exif-filesource'                  => 'Файл қайнары',
'exif-scenetype'                   => 'Сахна түрі',
'exif-cfapattern'                  => 'CFA сүзгі кейіпі',
'exif-customrendered'              => 'Қосымша сурет өңдетуі',
'exif-exposuremode'                => 'Ұсталым тәртібі',
'exif-whitebalance'                => 'Ақ түсінің тендестігі',
'exif-digitalzoomratio'            => 'Сандық ауқымдау жарнақтауы',
'exif-focallengthin35mmfilm'       => '35 mm таспасының шоғырлау алшақтығы',
'exif-scenecapturetype'            => 'Түсірген сахна түрі',
'exif-gaincontrol'                 => 'Сахнаны меңгеру',
'exif-contrast'                    => 'Қарама-қарсылық',
'exif-saturation'                  => 'Қанықтық',
'exif-sharpness'                   => 'Айқындық',
'exif-devicesettingdescription'    => 'Жабдық баптау сипаттамасы',
'exif-subjectdistancerange'        => 'Сахна қашықтығының көлемі',
'exif-imageuniqueid'               => 'Суреттің бірегей нөмірі (ID)',
'exif-gpsversionid'                => 'GPS белгішесінің нұсқасы',
'exif-gpslatituderef'              => 'Солтүстік немесе Оңтүстік бойлығы',
'exif-gpslatitude'                 => 'Бойлығы',
'exif-gpslongituderef'             => 'Шығыс немесе Батыс ендігі',
'exif-gpslongitude'                => 'Ендігі',
'exif-gpsaltituderef'              => 'Биіктік көрсетуі',
'exif-gpsaltitude'                 => 'Биіктік',
'exif-gpstimestamp'                => 'GPS уақыты (атом сағаты)',
'exif-gpssatellites'               => 'Өлшеуге пйдаланылған Жер серіктері',
'exif-gpsstatus'                   => 'Қабылдағыш күйі',
'exif-gpsmeasuremode'              => 'Өлшеу тәртібі',
'exif-gpsdop'                      => 'Өлшеу дәлдігі',
'exif-gpsspeedref'                 => 'Жылдамдылық өлшемі',
'exif-gpsspeed'                    => 'GPS қабылдағыштың жылдамдылығы',
'exif-gpstrackref'                 => 'Қозғалыс бағытын көрсетуі',
'exif-gpstrack'                    => 'Қозғалыс бағыты',
'exif-gpsimgdirectionref'          => 'Сурет бағытын көрсетуі',
'exif-gpsimgdirection'             => 'Сурет бағыты',
'exif-gpsmapdatum'                 => 'Пайдаланылған геодезиялық түсірме деректері',
'exif-gpsdestlatituderef'          => 'Нысана бойлығын көрсетуі',
'exif-gpsdestlatitude'             => 'Нысана бойлығы',
'exif-gpsdestlongituderef'         => 'Нысана ендігін көрсетуі',
'exif-gpsdestlongitude'            => 'Нысана ендігі',
'exif-gpsdestbearingref'           => 'Нысана азимутын көрсетуі',
'exif-gpsdestbearing'              => 'Нысана азимуты',
'exif-gpsdestdistanceref'          => 'Нысана қашықтығын көрсетуі',
'exif-gpsdestdistance'             => 'Нысана қашықтығы',
'exif-gpsprocessingmethod'         => 'GPS өңдету әдісінің атауы',
'exif-gpsareainformation'          => 'GPS аумағының атауы',
'exif-gpsdatestamp'                => 'GPS күн-айы',
'exif-gpsdifferential'             => 'GPS сараланған дұрыстау',

# EXIF attributes
'exif-compression-1' => 'Ұлғайтылған',

'exif-unknowndate' => 'Белгісіз күн-айы',

'exif-orientation-1' => 'Қалыпты', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Дерелей шағылысқан', # 0th row: top; 0th column: right
'exif-orientation-3' => '180° бұрышқа айналған', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Тірелей шағылысқан', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Сағат тілшесіне қарсы 90° бұрышқа айналған және тірелей шағылысқан', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Сағат тілше бойынша 90° бұрышқа айналған', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Сағат тілше бойынша 90° бұрышқа айналған және тірелей шағылысқан', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Сағат тілшесіне қарсы 90° бұрышқа айналған', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'талпақ пішім',
'exif-planarconfiguration-2' => 'тайпақ пішім',

'exif-componentsconfiguration-0' => 'бар болмады',

'exif-exposureprogram-0' => 'Анықталмаған',
'exif-exposureprogram-1' => 'Қолмен',
'exif-exposureprogram-2' => 'Бағдарламалы әдіс (қалыпты)',
'exif-exposureprogram-3' => 'Саңылау басыңқылығы',
'exif-exposureprogram-4' => 'Ысырма басыңқылығы',
'exif-exposureprogram-5' => 'Өнер бағдарламасы (анықтық терендігіне санасқан)',
'exif-exposureprogram-6' => 'Қимыл бағдарламасы (жапқыш шапшандылығына санасқан)',
'exif-exposureprogram-7' => 'Тірелей әдісі (арты шоғырлаусыз таяу түсірмелер)',
'exif-exposureprogram-8' => 'Дерелей әдісі (арты шоғырланған дерелей түсірмелер)',

'exif-subjectdistance-value' => '$1 m',

'exif-meteringmode-0'   => 'Белгісіз',
'exif-meteringmode-1'   => 'Біркелкі',
'exif-meteringmode-2'   => 'Бұлдыр дақ',
'exif-meteringmode-3'   => 'БірДақты',
'exif-meteringmode-4'   => 'КөпДақты',
'exif-meteringmode-5'   => 'Өрнекті',
'exif-meteringmode-6'   => 'Жыртынды',
'exif-meteringmode-255' => 'Басқа',

'exif-lightsource-0'   => 'Белгісіз',
'exif-lightsource-1'   => 'Күн жарығы',
'exif-lightsource-2'   => 'Күнжарықты шам',
'exif-lightsource-3'   => 'Қыздырғышты шам',
'exif-lightsource-4'   => 'Жарқылдағыш',
'exif-lightsource-9'   => 'Ашық күн',
'exif-lightsource-10'  => 'Бұлынғыр күн',
'exif-lightsource-11'  => 'Көленкелі',
'exif-lightsource-12'  => 'Күнжарықты шам (D 5700–7100 K)',
'exif-lightsource-13'  => 'Күнжарықты шам (N 4600–5400 K)',
'exif-lightsource-14'  => 'Күнжарықты шам (W 3900–4500 K)',
'exif-lightsource-15'  => 'Күнжарықты шам (WW 3200–3700 K)',
'exif-lightsource-17'  => 'Қалыпты жарық қайнары A',
'exif-lightsource-18'  => 'Қалыпты жарық қайнары B',
'exif-lightsource-19'  => 'Қалыпты жарық қайнары C',
'exif-lightsource-24'  => 'Студиялық ISO күнжарықты шам',
'exif-lightsource-255' => 'Басқа жарық қайнары',

'exif-focalplaneresolutionunit-2' => 'дюйм',

'exif-sensingmethod-1' => 'Анықталмаған',
'exif-sensingmethod-2' => '1-чипті аумақты түссезгіш',
'exif-sensingmethod-3' => '2-чипті аумақты түссезгіш',
'exif-sensingmethod-4' => '3-чипті аумақты түссезгіш',
'exif-sensingmethod-5' => 'Кезекті аумақты түссезгіш',
'exif-sensingmethod-7' => '3-сызықты түссезгіш',
'exif-sensingmethod-8' => 'Кезекті сызықты түссезгіш',

'exif-scenetype-1' => 'Тікелей түсірілген фотосурет',

'exif-customrendered-0' => 'Қалыпты өңдету',
'exif-customrendered-1' => 'Қосымша өңдету',

'exif-exposuremode-0' => 'Өздіктік ұсталымдау',
'exif-exposuremode-1' => 'Қолмен ұсталымдау',
'exif-exposuremode-2' => 'Өздіктік жарқылдау',

'exif-whitebalance-0' => 'Ақ түсі өздіктік тендестірілген',
'exif-whitebalance-1' => 'Ақ түсі қолмен тендестірілген',

'exif-scenecapturetype-0' => 'Қалыпты',
'exif-scenecapturetype-1' => 'Дерелей',
'exif-scenecapturetype-2' => 'Тірелей',
'exif-scenecapturetype-3' => 'Түнгі сахна',

'exif-gaincontrol-0' => 'Жоқ',
'exif-gaincontrol-1' => 'Төмен зораю',
'exif-gaincontrol-2' => 'Жоғары зораю',
'exif-gaincontrol-3' => 'Төмен баяулау',
'exif-gaincontrol-4' => 'Жоғары баяулау',

'exif-contrast-0' => 'Қалыпты',
'exif-contrast-1' => 'Ұян',
'exif-contrast-2' => 'Тұрпайы',

'exif-saturation-0' => 'Қалыпты',
'exif-saturation-1' => 'Төмен қанықты',
'exif-saturation-2' => 'Жоғары қанықты',

'exif-sharpness-0' => 'Қалыпты',
'exif-sharpness-1' => 'Ұян',
'exif-sharpness-2' => 'Тұрпайы',

'exif-subjectdistancerange-0' => 'Белгісіз',
'exif-subjectdistancerange-1' => 'Таяу түсірілген',
'exif-subjectdistancerange-2' => 'Жақын түсірілген',
'exif-subjectdistancerange-3' => 'Алыс түсірілген',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Солтүстік бойлығы',
'exif-gpslatitude-s' => 'Оңтүстік бойлығы',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Шығыс ендігі',
'exif-gpslongitude-w' => 'Батыс ендігі',

'exif-gpsstatus-a' => 'Өлшеу ұласуда',
'exif-gpsstatus-v' => 'Өлшеу өзара әрекетте',

'exif-gpsmeasuremode-2' => '2-бағыттық өлшем',
'exif-gpsmeasuremode-3' => '3-бағыттық өлшем',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'km/h',
'exif-gpsspeed-m' => 'mil/h',
'exif-gpsspeed-n' => 'knot',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Шын бағыт',
'exif-gpsdirection-m' => 'Магнитты бағыт',

# External editor support
'edit-externally'      => 'Бұл файлды сыртқы құрал/бағдарлама арқылы өңдеу',
'edit-externally-help' => 'Көбірек ақпарат үшін [http://meta.wikimedia.org/wiki/Help:External_editors орнату нұсқауларын] қараңыз.',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'барлығын',
'imagelistall'     => 'барлығы',
'watchlistall2'    => 'барлық',
'namespacesall'    => 'барлығы',
'monthsall'        => 'барлығы',

# E-mail address confirmation
'confirmemail'            => 'Е-пошта жайын құптау',
'confirmemail_noemail'    => '[[{{ns:special}}:Preferences|Қатысушы баптауыңызда]] жарамды е-пошта жайын қоймапсыз.',
'confirmemail_text'       => '{{SITENAME}} е-пошта мүмкіндіктерін пайдалану үшін алдынан е-пошта жайыңыздың
жарамдылығын тексеріп шығуыңыз керек. Өзіңіздің жайыңызға құптау хатын жіберу үшін төмендегі батырманы нұқыңыз.
Хаттың ішінде арнайы коды бар сілтеме кірістірледі; е-пошта жайыңыздың жарамдылығын құптау үшін
сілтемені шолғыштың мекен-жай жолағына енгізіп ашыңыз.',
'confirmemail_pending'    => '<div class="error">
Құптау белгілемеңіз алдақашан хатпен жіберіліпті; егер жуықта
тіркелсеңіз, жаңа белгілемені сұрату алдынан 
хат келуін біршама минөт күте тұрыңыз.
</div>',
'confirmemail_send'       => 'Құптау белгілемесін жіберу',
'confirmemail_sent'       => 'Құптау хаты жіберілді.',
'confirmemail_oncreate'   => 'Құптау белгілемесі е-пошта адресіңізге жіберілді.
Бұл белгілеме кіру үдірісіне керегі жоқ, бірақ е-пошта негізіндегі
уики мүмкіндіктерді қосу үшін бұны жетістіруіңіз керек.',
'confirmemail_sendfailed' => 'Құптау хаты жіберілмеді. Жайды жарамсыз әріптеріне тексеріп шығыңыз.

Пошта жібергіштің қайтарғаны: $1',
'confirmemail_invalid'    => 'Құптау белгілемесі жарамсыз. Белгілеменің мерзімі біткен шығар.',
'confirmemail_needlogin'  => 'Е-пошта жайыңызды құптау үшін $1 керек.',
'confirmemail_success'    => 'Е-пошта жайыңыз құпталды. Енді уикиге кіріп жұмысқа кірісуге болады',
'confirmemail_loggedin'   => 'Е-пошта жайыңыз енді құпталды.',
'confirmemail_error'      => 'Құптауңызды сақтағанда белгісіз қате болды.',
'confirmemail_subject'    => '{{SITENAME}} торабынан е-пошта жайыңызды құптау хаты',
'confirmemail_body'       => "Кейбіреу, $1 деген IP жайынан, өзіңіз болуы мүмкін,
{{SITENAME}} жобасында бұл Е-пошта жайын қолданып «$2» деген тіркелгі жасапты.

Осы тіркелгі шынынан сіздікі екенін құптау үшін, және {{SITENAME}} жобасының
е-пошта мүмкіндіктерін белсендіру үшін, мына сілтемені шолғышпен ашыңыз:

$3

Бұл сіздікі '''емес''' болса, сілтемеге ермеңіз. Құптау белгілемесінің
мерзімі $4 кезінде бітеді.",

# Scary transclusion
'scarytranscludedisabled' => '[Уики-ара кірегуі өшірілген]',
'scarytranscludefailed'   => '[$1 үшін үлгі келтіруі сәтсіз бітті; ғафу етіңіз]',
'scarytranscludetoolong'  => '[URL жайы тым ұзын; ғафу етіңіз]',

# Trackbacks
'trackbackbox'      => '<div id="mw_trackbacks">
Бұл беттің аңыстаулары:<br />
$1
</div>',
'trackbackremove'   => '([$1 Жою])',
'trackbacklink'     => 'Аңыстау',
'trackbackdeleteok' => 'Аңыстау сәтті жойылды.',

# Delete conflict
'deletedwhileediting' => 'Құлақтандыру: Бұл бетті өңдеуіңізді бастағанда, осы бет жойылды!',
'confirmrecreate'     => "Бұл бетті өңдеуіңізді бастағанда [[User:$1|$1]] ([[User_talk:$1|талқылауы]]) осы бетті жойды, келтірген себебі:
: ''$2''
Осы бетті шынынан қайта бастауын құптаңыз.",
'recreate'            => 'Қайта бастау',

'unit-pixel' => ' px',

# HTML dump
'redirectingto' => '[[$1]] бетіне айдатуда…',

# action=purge
'confirm_purge'        => 'Қосалқы қалтадағы осы бетін тазалаймыз ба?

$1',
'confirm_purge_button' => 'Жарайды',

# AJAX search
'searchcontaining' => "''$1'' мағлұматы бар беттерден іздеу.",
'searchnamed'      => "''$1'' атауы бар беттерден іздеу.",
'articletitles'    => "''$1'' деп басталған беттерді",
'hideresults'      => 'Нәтижелерді жасыр',
'useajaxsearch'    => 'AJAX қолданып іздеу',

# Multipage image navigation
'imgmultipageprev' => '← алдыңғы бетке',
'imgmultipagenext' => 'келесі бетке →',
'imgmultigo'       => 'Өт!',
'imgmultigotopre'  => 'Мына бетке өту',

# Table pager
'ascending_abbrev'         => 'өсу',
'descending_abbrev'        => 'кему',
'table_pager_next'         => 'Келесі бетке',
'table_pager_prev'         => 'Алдыңғы бетке',
'table_pager_first'        => 'Алғашқы бетке',
'table_pager_last'         => 'Соңғы бетке',
'table_pager_limit'        => 'Бет сайын $1 дана көрсет',
'table_pager_limit_submit' => 'Өту',
'table_pager_empty'        => 'Еш нәтиже жоқ',

# Auto-summaries
'autosumm-blank'   => 'Беттің барлық мағлұматын аластатты',
'autosumm-replace' => "Бетті '$1' дегенмен алмастырды",
'autoredircomment' => '[[$1]] дегенге айдады',
'autosumm-new'     => 'Жаңа бетте: $1',

# Size units
'size-bytes' => '$1 байт',

# Live preview
'livepreview-loading' => 'Жүктеуде…',
'livepreview-ready'   => 'Жүктеуде… Дайын!',
'livepreview-failed'  => 'Тура қарап шығу сәтсіз! Кәдімгі қарап шығу әдісін байқап көріңіз.',
'livepreview-error'   => 'Қосылу сәтсіз: $1 «$2». Кәдімгі қарап шығу әдісін байқап көріңіз.',

# Friendlier slave lag warnings
'lag-warn-normal' => '$1 секундтан жаңалау өзгерістер бұл тізімде көрсетілмеуі мүмкін.',
'lag-warn-high'   => 'Дерекқор сервері зор кешігуі себебінен, $1 секундтан жаңалау өзгерістер бұл тізімде көрсетілмеуі мүмкін.',

# Watchlist editor
'watchlistedit-numitems'       => 'Бақылау тізіміңізде, талқылау беттерсіз, {{PLURAL:$1|1|$1}} атау бар.',
'watchlistedit-noitems'        => 'Бақылау тізіміңізде еш атау жоқ.',
'watchlistedit-normal-title'   => 'Бақылау тізімді өңдеу',
'watchlistedit-normal-legend'  => 'Бақылау тізімдегі атауларды аластау',
'watchlistedit-normal-explain' => 'Бақылау тізіміңіздегі атаулар төменде көрсетіледі. Атауды аластау үшін, қасындағы қабашақты
белгілеңіз, және Атауларды аластау дегенді нұқыңыз. Тағы да [[{{ns:special}}:Watchlist/raw|қам тізімді өңдей]] аласыз.',
'watchlistedit-normal-submit'  => 'Атауларды аластау',
'watchlistedit-normal-done'    => 'Бақылау тізіміңізден {{PLURAL:$1|1|$1}} атау аласталды:',
'watchlistedit-raw-title'      => 'Қам бақылау тізімді өңдеу',
'watchlistedit-raw-legend'     => 'Қам бақылау тізімді өңдеу',
'watchlistedit-raw-explain'    => 'Бақылау тізіміңіздегі атаулар төменде көрсетіледі, және де тізмге үстеп және
тізмден аластап өңдеуге болады; бір жолда бір атау келеді. Бітіргеннен соң Бақылау тізімді жаңарту дегенді нұқыңыз.
Тағы да [[Special:Watchlist/edit|қалыпты өңдеуішті пайдалана]] аласыз.',
'watchlistedit-raw-titles'     => 'Атаулар:',
'watchlistedit-raw-submit'     => 'Бақылау тізімді жаңарту',
'watchlistedit-raw-done'       => 'Бақылау тізіміңіз жаңартылды.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|1|$1}} атау үстелді:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|1|$1}} атау аласталды:',

# Watchlist editing tools
'watchlisttools-view' => 'Қатысты өзгерістерді қарау',
'watchlisttools-edit' => 'Бақылау тізімді қарау және өңдеу',
'watchlisttools-raw'  => 'Қам бақылау тізімді өңдеу',

# Iranian month names
'iranian-calendar-m1'  => 'пыруардин',
'iranian-calendar-m2'  => 'әрдибешт',
'iranian-calendar-m3'  => 'хырдад',
'iranian-calendar-m4'  => 'тир',
'iranian-calendar-m5'  => 'мырдад',
'iranian-calendar-m6'  => 'шерияр',
'iranian-calendar-m7'  => 'мер',
'iranian-calendar-m8'  => 'абан',
'iranian-calendar-m9'  => 'азар',
'iranian-calendar-m10' => 'ди',
'iranian-calendar-m11' => 'бемін',
'iranian-calendar-m12' => 'аспанд',

# Hebrew month names
'hebrew-calendar-m1'      => 'тішри',
'hebrew-calendar-m2'      => 'xышуан',
'hebrew-calendar-m3'      => 'кіслу',
'hebrew-calendar-m4'      => 'тот',
'hebrew-calendar-m5'      => 'шыбат',
'hebrew-calendar-m6'      => 'адар',
'hebrew-calendar-m6a'     => 'адар',
'hebrew-calendar-m6b'     => 'уадар',
'hebrew-calendar-m7'      => 'нисан',
'hebrew-calendar-m8'      => 'аяр',
'hebrew-calendar-m9'      => 'сиуан',
'hebrew-calendar-m10'     => 'тымоз',
'hebrew-calendar-m11'     => 'аб',
'hebrew-calendar-m12'     => 'айлол',
'hebrew-calendar-m1-gen'  => 'тішридің',
'hebrew-calendar-m2-gen'  => 'хышуандың',
'hebrew-calendar-m3-gen'  => 'кіслудің',
'hebrew-calendar-m4-gen'  => 'тоттың',
'hebrew-calendar-m5-gen'  => 'шыбаттың',
'hebrew-calendar-m6-gen'  => 'адардың',
'hebrew-calendar-m6a-gen' => 'адардың',
'hebrew-calendar-m6b-gen' => 'уадардың',
'hebrew-calendar-m7-gen'  => 'нисанның',
'hebrew-calendar-m8-gen'  => 'аярдың',
'hebrew-calendar-m9-gen'  => 'сиуанның',
'hebrew-calendar-m10-gen' => 'тымоздың',
'hebrew-calendar-m11-gen' => 'абтың',
'hebrew-calendar-m12-gen' => 'айлолдың',

# Core parser functions
'unknown_extension_tag' => 'Танылмаған кеңейтпе белгісі «$1»',

# Special:Filepath
'filepath'         => 'Файл орналасуы ',
'filepath-page'    => 'Файл аты:',
'filepath-submit'  => 'Орналасуын табу ',
'filepath-summary' => 'Бұл арнайы бет файл орналасуы толық жолын қайтарады. Суреттер толық ажыратылымдығымен көрсетіледі, басқа файл түрлеріне қатысты бағдарламасы тура жегіледі.

Файл атауын «{{ns:image}}:» деген бастауышсыз еңгізіңіз.',

);
