<?php
/** Hindi (हिन्दी)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = [
	NS_MEDIA            => 'मीडिया',
	NS_SPECIAL          => 'विशेष',
	NS_TALK             => 'वार्ता',
	NS_USER             => 'सदस्य',
	NS_USER_TALK        => 'सदस्य_वार्ता',
	NS_PROJECT_TALK     => '$1_वार्ता',
	NS_FILE             => 'चित्र',
	NS_FILE_TALK        => 'चित्र_वार्ता',
	NS_MEDIAWIKI        => 'मीडियाविकि',
	NS_MEDIAWIKI_TALK   => 'मीडियाविकि_वार्ता',
	NS_TEMPLATE         => 'साँचा',
	NS_TEMPLATE_TALK    => 'साँचा_वार्ता',
	NS_HELP             => 'सहायता',
	NS_HELP_TALK        => 'सहायता_वार्ता',
	NS_CATEGORY         => 'श्रेणी',
	NS_CATEGORY_TALK    => 'श्रेणी_वार्ता',
];

$specialPageAliases = [
	'Activeusers'               => [ 'सक्रिय_सदस्य' ],
	'Allmessages'               => [ 'सभी_सन्देश', 'सभी_संदेश' ],
	'Allpages'                  => [ 'सभी_पृष्ठ', 'सभी_पन्ने' ],
	'Ancientpages'              => [ 'पुराने_पृष्ठ', 'पुराने_पन्ने' ],
	'Badtitle'                  => [ 'खराब_शीर्षक' ],
	'Blankpage'                 => [ 'रिक्त_पृष्ठ', 'खाली_पृष्ठ' ],
	'Block'                     => [ 'अवरोधन', 'आइ_पी_अवरोधन', 'सदस्य_अवरोधन' ],
	'Booksources'               => [ 'पुस्तक_स्रोत', 'किताब_स्रोत' ],
	'BrokenRedirects'           => [ 'टूटे_पुनर्निर्देश', 'टूटे_अनुप्रेष' ],
	'Categories'                => [ 'श्रेणियाँ' ],
	'ChangeEmail'               => [ 'ईमेल_बदलें' ],
	'ChangePassword'            => [ 'कूटशब्द_बदलें' ],
	'ComparePages'              => [ 'पृष्ठ_तुलना' ],
	'Confirmemail'              => [ 'ईमेल_पुष्टि', 'ईमेल_पुष्टि_करें' ],
	'Contributions'             => [ 'योगदान' ],
	'CreateAccount'             => [ 'खाता_बनाएँ', 'खाता_बनायें', 'खाता_खोलें' ],
	'Deadendpages'              => [ 'बन्द_पृष्ठ', 'बन्द_पन्ने' ],
	'DeletedContributions'      => [ 'हटाए_गए_योगदान', 'हटाये_गये_योगदान' ],
	'DoubleRedirects'           => [ 'दुगुने_पुनर्निर्देश', 'दुगुने_अनुप्रेष' ],
	'EditWatchlist'             => [ 'ध्यानसूची_सम्पादन', 'ध्यानसूची_संपादन', 'ध्यानसूची_सम्पादन_करें' ],
	'Emailuser'                 => [ 'ईमेल_करें', 'सदस्य_को_ईमेल_करें' ],
	'ExpandTemplates'           => [ 'साँचे_खोलें', 'साँचे_बढ़ाएँ' ],
	'Export'                    => [ 'निर्यात' ],
	'Fewestrevisions'           => [ 'न्यूनतम_अवतरण', 'कम_सम्पादित_पृष्ठ' ],
	'FileDuplicateSearch'       => [ 'फ़ाइल_प्रति_खोज', 'फाइल_प्रति_खोज', 'संचिका_प्रति_खोज' ],
	'Filepath'                  => [ 'फ़ाइल_पथ', 'फाइल_पथ', 'संचिका_पथ' ],
	'Import'                    => [ 'आयात' ],
	'Invalidateemail'           => [ 'अप्रमाणित_ईमेल', 'अमान्य_ईमेल', 'ईमेल_अमान्य_करें' ],
	'JavaScriptTest'            => [ 'जावा_स्क्रिप्ट_परीक्षा' ],
	'BlockList'                 => [ 'अवरोध_सूची', 'अवरोधित_सदस्य_सूची', 'अवरोधित_आइ_पी_सूची' ],
	'LinkSearch'                => [ 'बाहरी_कड़ी_खोज' ],
	'Listadmins'                => [ 'प्रबन्धक_सूची', 'प्रबंधक_सूची' ],
	'Listbots'                  => [ 'बॉट_सूची', 'बौट_सूची' ],
	'Listfiles'                 => [ 'फ़ाइल_सूची', 'फाइल_सूची' ],
	'Listgrouprights'           => [ 'सदस्य_समूह_अधिकार', 'अधिकार_सूची' ],
	'Listredirects'             => [ 'पुनर्निर्देश_सूची', 'अनुप्रेष_सूची' ],
	'Listusers'                 => [ 'सदस्य_सूची' ],
	'Lockdb'                    => [ 'डाटाबेस_पर_ताला_लगाएँ' ],
	'Log'                       => [ 'लॉग', 'लौग' ],
	'Lonelypages'               => [ 'एकाकी_पृष्ठ', 'अकेले_पृष्ठ' ],
	'Longpages'                 => [ 'लम्बे_पृष्ठ', 'लंबे_पृष्ठ' ],
	'MergeHistory'              => [ 'इतिहास_विलय' ],
	'MIMEsearch'                => [ 'माइम_खोज' ],
	'Mostcategories'            => [ 'सर्वाधिक_श्रेणीकृत', 'सर्वाधिक_श्रेणियाँ' ],
	'Mostimages'                => [ 'सर्वाधिक_प्रयुक्त_फ़ाइलें', 'सर्वाधिक_प्रयुक्त_फाइलें' ],
	'Mostinterwikis'            => [ 'ज़्यादा_इंटेर्विकियाँ' ],
	'Mostlinked'                => [ 'सर्वाधिक_जुड़े_पृष्ठ' ],
	'Mostlinkedcategories'      => [ 'सर्वाधिक_प्रयुक्त_श्रेणियाँ' ],
	'Mostlinkedtemplates'       => [ 'सर्वाधिक_प्रयुक्त_साँचे' ],
	'Mostrevisions'             => [ 'सर्वाधिक_अवतरण', 'अधिकतम_सम्पादित_पृष्ठ', 'अधिकतम_संपादित_पृष्ठ' ],
	'Movepage'                  => [ 'स्थानान्तरण', 'स्थानांतरण', 'नाम_बदलें' ],
	'Mycontributions'           => [ 'मेरे_योगदान', 'मेरा_योगदान' ],
	'Mypage'                    => [ 'मेरा_पृष्ठ', 'मेरा_सदस्य_पृष्ठ' ],
	'Mytalk'                    => [ 'मेरी_वार्ता', 'मेरी_सदस्य_वार्ता' ],
	'Myuploads'                 => [ 'मेरे_अपलोड' ],
	'Newimages'                 => [ 'नई_फ़ाइलें', 'नई_फाइलें', 'नये_चित्र' ],
	'Newpages'                  => [ 'नए_पृष्ठ', 'नए_पन्ने', 'नये_पृष्ठ' ],
	'PasswordReset'             => [ 'कूटशब्द_पुनर्स्थापन' ],
	'PermanentLink'             => [ 'स्थाई_कड़ी', 'स्थायी_कड़ी' ],
	'Preferences'               => [ 'वरीयताएँ' ],
	'Prefixindex'               => [ 'उपसर्ग_अनुसार_पृष्ठ', 'उपसर्ग_खोज', 'उपसर्ग_सूचकांक' ],
	'Protectedpages'            => [ 'सुरक्षित_पृष्ठ' ],
	'Protectedtitles'           => [ 'सुरक्षित_शीर्षक' ],
	'Search'                    => [ 'खोज', 'खोजें' ],
	'Shortpages'                => [ 'छोटे_पृष्ठ', 'छोटे_पन्ने' ],
	'Specialpages'              => [ 'विशेष_पृष्ठ', 'विशेष_पन्ने' ],
	'Tags'                      => [ 'टैग', 'चिप्पियाँ' ],
	'Unblock'                   => [ 'अवरोध_हटाएँ', 'अवरोध_हटायें' ],
	'Uncategorizedcategories'   => [ 'श्रेणीहीन_श्रेणियाँ' ],
	'Uncategorizedimages'       => [ 'श्रेणीहीन_फ़ाइलें', 'श्रेणीहीन_फाइलें' ],
	'Uncategorizedpages'        => [ 'श्रेणीहीन_पृष्ठ', 'श्रेणीहीन_पन्ने' ],
	'Uncategorizedtemplates'    => [ 'श्रेणीहीन_साँचे' ],
	'Undelete'                  => [ 'पुनर्स्थापन' ],
	'Unlockdb'                  => [ 'डाटाबेस_से_ताला_हटाएँ' ],
	'Unusedcategories'          => [ 'अप्रयुक्त_श्रेणियाँ' ],
	'Unusedimages'              => [ 'अप्रयुक्त_फ़ाइलें', 'अप्रयुक्त_फाइलें' ],
	'Unusedtemplates'           => [ 'अप्रयुक्त_साँचे' ],
	'Upload'                    => [ 'अपलोड' ],
	'Userlogin'                 => [ 'लॉगिन', 'लौगिन', 'सत्रारम्भ', 'सत्रारंभ' ],
	'Userlogout'                => [ 'सत्रांत', 'लॉग_आउट', 'लौग_आउट' ],
	'Userrights'                => [ 'सदस्य_अधिकार' ],
	'Version'                   => [ 'संस्करण', 'वर्ज़न', 'वर्जन' ],
	'Wantedcategories'          => [ 'वांछित_श्रेणियाँ' ],
	'Wantedfiles'               => [ 'वांछित_फ़ाइलें', 'वांछित_फाइलें' ],
	'Wantedpages'               => [ 'वांछित_पृष्ठ', 'वांछित_पन्ने' ],
	'Wantedtemplates'           => [ 'वांछित_साँचे' ],
	'Watchlist'                 => [ 'ध्यानसूची' ],
	'Whatlinkshere'             => [ 'कड़ियाँ', 'यहाँ_की_कड़ियाँ', 'यहाँ_क्या_जुड़ता_है' ],
	'Withoutinterwiki'          => [ 'अन्तरविकि_रहित', 'अंतरविकि_रहित' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#पुनर्प्रेषित', '#अनुप्रेषित', '#REDIRECT' ],
	'notoc'                     => [ '0', '__बिना_अनुक्रम__', '__विषय_सूची_हीन__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__गैलरी_नहीं__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__अनुक्रम_दिखाएँ__', '__विषय_सूची_दिखाएँ__', '__विषय_सूची_दिखायें__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__अनुक्रम__', '__विषय_सूची__', '__TOC__' ],
	'noeditsection'             => [ '0', '__अनुभाग_सम्पादन_नहीं__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'वर्तमान_माह', 'वर्तमान_माह2', 'वर्तमान_माह२', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'वर्तमान_माह1', 'वर्तमान_माह१', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'वर्तमान_माह_नाम', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'वर्तमान_माह_सम्बन्ध', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'वर्तमान_माह_संक्षेप', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'वर्तमान_दिन', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'वर्तमान_दिन2', 'वर्तमान_दिन२', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'वर्तमान_दिन_नाम', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'वर्तमान_वर्ष', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'वर्तमान_समय', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'वर्तमान_घंटा', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'स्थानीय_माह', 'स्थानीय_माह2', 'स्थानीय_माह२', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'स्थानीय_माह1', 'स्थानीय_माह१', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'स्थानीय_माह_नाम', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'स्थानीय_माह_सम्बन्ध', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'स्थानीय_माह_संक्षेप', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'स्थानीय_दिन', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'स्थानीय_दिन2', 'स्थानीय_दिन२', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'स्थानीय_दिन_नाम', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'स्थानीय_वर्ष', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'स्थानीय_समय', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'स्थानीय_घंटा', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'पृष्ठ_संख्या', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'लेख_संख्या', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'फ़ाइल_संख्या', 'फाइल_संख्या', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'सदस्य_संख्या', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'सक्रिय_सदस्य_संख्या', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'सम्पादन_संख्या', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'पृष्ठ_नाम', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'पृष्ठ_नाम_कोड', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'नामस्थान', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'नामस्थान_कोड', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'नामस्थान_संख्या', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'चर्चा_स्थान', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'चर्चा_स्थान_कोड', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'सामग्री_स्थान', 'लेख_स्थान', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'सामग्री_स्थान_कोड', 'लेख_स्थान_कोड', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'पूर्ण_पृष्ठ_नाम', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'पूर्ण_पृष्ठ_नाम_कोड', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'उपपृष्ठ_नाम', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'उपपृष्ठ_नाम_कोड', 'SUBPAGENAMEE' ],
	'rootpagename'              => [ '1', 'मूल_पृष्ठ_नाम', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'मूल_पृष्ठ_नाम_कोड', 'ROOTPAGENAMEE' ],
	'basepagename'              => [ '1', 'तल_पृष्ठ_नाम', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'तल_पृष्ठ_नाम_कोड', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'चर्चा_पृष्ठ_नाम', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'चर्चा_पृष्ठ_नाम_कोड', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'सामग्री_पृष्ठ_नाम', 'लेख_पृष्ठ_नाम', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'सामग्री_पृष्ठ_नाम_कोड', 'लेख_पृष्ठ_नाम_कोड', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'सन्देश:', 'संदेश:', 'MSG:' ],
	'subst'                     => [ '0', 'प्रति:', 'SUBST:' ],
	'safesubst'                 => [ '0', 'सुरक्षित_प्रति:', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'सन्देश_नोविकी:', 'संदेश_नोविकी:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'अंगूठाकार', 'अंगूठा', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'अंगूठाकार=$1', 'अंगूठा=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'दाएँ', 'दायें', 'दाएं', 'right' ],
	'img_left'                  => [ '1', 'बाएँ', 'बाएं', 'बायें', 'left' ],
	'img_none'                  => [ '1', 'कोई_नहीं', 'none' ],
	'img_width'                 => [ '1', '$1पिक्सेल', '$1px' ],
	'img_center'                => [ '1', 'केंद्र', 'केन्द्र', 'केन्द्रित', 'केंद्रित', 'center', 'centre' ],
	'img_framed'                => [ '1', 'फ्रेम', 'फ़्रेम', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'फ़्रेमहीन', 'फ्रेमहीन', 'frameless' ],
	'img_lang'                  => [ '1', 'भाषा=$1', 'lang=$1' ],
	'img_page'                  => [ '1', 'पृष्ठ=$1', 'पृष्ठ_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'खड़ी', 'खड़ी=$1', 'खड़ी_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'बॉर्डर', 'किनारा', 'border' ],
	'img_baseline'              => [ '1', 'आधार_रेखा', 'baseline' ],
	'img_sub'                   => [ '1', 'पद', 'sub' ],
	'img_super'                 => [ '1', 'मूर्ध', 'super', 'sup' ],
	'img_top'                   => [ '1', 'शीर्ष', 'top' ],
	'img_text_top'              => [ '1', 'पाठ-शीर्ष', 'text-top' ],
	'img_middle'                => [ '1', 'मध्य', 'middle' ],
	'img_bottom'                => [ '1', 'तल', 'bottom' ],
	'img_text_bottom'           => [ '1', 'पाठ-तल', 'text-bottom' ],
	'img_link'                  => [ '1', 'कड़ी=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'पाठ=$1', 'alt=$1' ],
	'img_class'                 => [ '1', 'वर्ग=$1', 'class=$1' ],
	'int'                       => [ '0', 'विश्व:', 'INT:' ],
	'sitename'                  => [ '1', 'साइट_नाम', 'SITENAME' ],
	'ns'                        => [ '0', 'नामस्थान:', 'NS:' ],
	'nse'                       => [ '0', 'नामस्थान_कोड:', 'NSE:' ],
	'localurl'                  => [ '0', 'स्थानीय_यू_आर_एल:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'स्थानीय_यू_आर_एल_कोड:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'लेख_पथ', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'पृष्ठ_आइ_डी', 'PAGEID' ],
	'server'                    => [ '0', 'सर्वर', 'SERVER' ],
	'servername'                => [ '0', 'सर्वर_नाम', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'स्क्रिप्ट_पथ', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'स्टाइल_पथ', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'व्याकरण:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'लिंग:', 'GENDER:' ],
	'currentweek'               => [ '1', 'वर्तमान_सप्ताह', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'वर्तमान_सप्ताह_का_दिन', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'स्थानीय_सप्ताह', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'स्थानीय_सप्ताह_का_दिन', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'अवतरण_संख्या', 'REVISIONID' ],
	'revisionday'               => [ '1', 'अवतरण_दिन', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'अवतरण_दिन2', 'अवतरण_दिन२', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'अवतरण_माह', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'अवतरण_माह1', 'अवतरण_माह१', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'अवतरण_वर्ष', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'अवतरण_समय', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'अवतरण_सदस्य', 'REVISIONUSER' ],
	'revisionsize'              => [ '1', 'अवतरण_आकार', 'REVISIONSIZE' ],
	'plural'                    => [ '0', 'वचन:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'पूर्ण_यू_आर_एल:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'पूर्ण_यू_आर_एल_कोड:', 'FULLURLE:' ],
	'canonicalurl'              => [ '0', 'मानक_यू_आर_एल:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'मानक_यू_आर_एल_कोड:', 'CANONICALURLE:' ],
	'lcfirst'                   => [ '0', 'छोटे_अक्षर_से_शुरू:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'बड़े_अक्षर_से_शुरू:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'छोटे_अक्षर:', 'LC:' ],
	'uc'                        => [ '0', 'बड़े_अक्षर:', 'UC:' ],
	'raw'                       => [ '0', 'सादा:', 'RAW:' ],
	'displaytitle'              => [ '1', 'दृश्य_शीर्षक', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'उ', 'R' ],
	'nocommafysuffix'           => [ '0', 'वि_नहीं', 'NOSEP' ],
	'newsectionlink'            => [ '1', '__विषय_जोड़ें_कड़ी__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__विषय_जोड़े_कड़ी_रहित__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'वर्तमान_अवतरण', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'यू_आर_एल_कोड:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'ऐंकर_कोड', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'वर्तमान_समय_मुहर', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'स्थानीय_समय_मुहर', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'दिशा_चिन्ह', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#भाषा:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'सामग्री_भाषा', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'नामस्थान_में_पृष्ठ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'प्रबन्धक_संख्या', 'प्रबंधक_संख्या', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'संख्या_रूप', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'बाएँ_जोड़ें', 'बायें_जोड़ें', 'PADLEFT' ],
	'padright'                  => [ '0', 'दाएँ_जोड़ें', 'दायें_जोड़ें', 'PADRIGHT' ],
	'special'                   => [ '0', 'विशेष', 'special' ],
	'speciale'                  => [ '0', 'विशेष_कोड', 'speciale' ],
	'defaultsort'               => [ '1', 'मूल_सॉर्ट:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'फ़ाइल_पथ:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'टैग', 'tag' ],
	'hiddencat'                 => [ '1', '__छुपी_श्रेणी__', '__छिपी_श्रेणी__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'श्रेणी_में_पृष्ठ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'पृष्ठ_आकार', 'PAGESIZE' ],
	'index'                     => [ '1', '__सूचीबद्ध__', '__INDEX__' ],
	'noindex'                   => [ '1', '__असूचीबद्ध__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'समूह_संख्या', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__स्थिर_पुनर्प्रेषण__', '__स्थिर_अनुप्रेषण__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'सुरक्षा_स्तर', 'PROTECTIONLEVEL' ],
	'cascadingsources'          => [ '1', 'सीढ़ी_सुरक्षा_स्रोत', 'CASCADINGSOURCES' ],
	'formatdate'                => [ '0', 'तिथि_रूप', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'पथ', 'PATH' ],
	'url_wiki'                  => [ '0', 'विकी', 'WIKI' ],
	'url_query'                 => [ '0', 'पाठ', 'QUERY' ],
	'defaultsort_noerror'       => [ '0', 'त्रुटि_नहीं', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'बदलें_नहीं', 'noreplace' ],
	'pagesincategory_all'       => [ '0', 'सभी', 'all' ],
	'pagesincategory_pages'     => [ '0', 'पृष्ठ', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'श्रेणियाँ', 'subcats' ],
	'pagesincategory_files'     => [ '0', 'फ़ाइलें', 'फाइलें', 'files' ],
];

$digitTransformTable = [
	'0' => '०', # &#x0966;
	'1' => '१', # &#x0967;
	'2' => '२', # &#x0968;
	'3' => '३', # &#x0969;
	'4' => '४', # &#x096a;
	'5' => '५', # &#x096b;
	'6' => '६', # &#x096c;
	'7' => '७', # &#x096d;
	'8' => '८', # &#x096e;
	'9' => '९', # &#x096f;
];
$linkTrail = "/^([a-z\x{0900}-\x{0963}\x{0966}-\x{A8E0}-\x{A8FF}]+)(.*)$/sDu";

$digitGroupingPattern = "##,##,###";
