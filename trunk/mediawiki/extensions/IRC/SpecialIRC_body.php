<?php
class IRC extends IncludableSpecialPage {

		public function __construct() {
				parent::__construct('IRC');
        }

        public function execute( $par ) {
                global $wgOut, $wgUser, $wgTitle;
				wfLoadExtensionMessages( 'IRC' );
                $this->setHeaders();

                // Get IrcNickname of the user; use MediaWiki username otherwise
                If ($wgUser->IsLoggedIn()) {
                        $ircNick = $wgUser->getName();
                } else {
                        $ircNick = "Guest";
                }

                // get IRC nickname from userpage
                $userpage = $wgUser->getUserPage();
                $tmpArticle = new Article(Title::newFromText($userpage->getPrefixedText().'/IrcNick'));
                $content = $tmpArticle->fetchContent(0,false,false);
                if (trim($content," ")) $ircNick = $content;

                //make nickname irc-safe
                $illegalChars = array(".", "_", "/", "\\", "#", "*", "+", "~", "!");
                $ircNick = str_replace($illegalChars, "", $ircNick);

                // if nickname is still empty use default
                if ($ircNick == "") $ircNick = "Guest???";

                // load settings (can be overridden with Mediawiki:IrcXyz pages)
                $ircCodebase = wfMsg('irc-codebase');        // http://yourdomain/IRC
                $ircArchive = wfMsg('irc-archive');          // irc.jar,pixx.jar
                $ircCabinets = wfMsg('irc-cabinets');        // irc.cab,securedirc.cab,pixx.cab
                $ircLangExt = wfMsg('irc-langext');          // txt
                $ircServer = wfMsg('irc-server');            // irc.yourfavourite.net
                $ircServerPort = wfMsg('irc-serverport');    // 6667
                $ircJoinChannel = wfMsg('irc-joinchannel');  // #yourChannel
                $ircWidth = wfMsg('irc-width');              // 640
                $ircHeight = wfMsg('irc-height');            // 400
                $ircAltNick = wfMsg('irc-altnick');          // Guest???
				$ircQuitMsg = wfMsg('irc-quitmsg');			// Quit message
				$ircRealName = wfMsg('irc-realname');		// Real name that's show on /whois queries
				$ircNoJava = wfMsg('irc-nojava');			// Title of the Java not enabled error
				$ircJavaNotEnabled = wfMsg('irc-javanotenabled'); // If the user hasn't got Java or it's not turned on, display this error instead

                // If page was called with a parameter join that channel
                if ($par) $ircJoinChannel = "#".$par;

                $ircApplet = '<applet codebase="'.$ircCodebase.'" code="IRCApplet.class" archive="'.$ircArchive.'" width="'.$ircWidth.'" height="'.$ircHeight.'">'."\n";
                if ($ircCabinets) $ircApplett .= '<param name="CABINETS" value="'.$ircCabinets.'">'."\n";

                $ircApplet .= '<param name="nick" value="'.$ircNick.'">
                        <param name="alternatenick" value="'.$ircAltNick.'">
                        <param name="userid" value="wikichat">
                        <param name="name" value="'.$ircRealName.'">
                        <param name="host" value="'.$ircServer.'">
                        <param name="port" value="'.$ircServerPort.'">
                        <param name="gui" value="pixx">

                        <param name="quitmessage" value="'.$ircQuitMsg.'">
                        <param name="asl" value="true">
                        <param name="useinfo" value="true">'."\n";
                if ($ircJoinChannel) $ircApplet .= '<param name="Command1" value="/join '.$ircJoinChannel.'">'."\n";
                if ($ircLangExt) {
                        $ircApplet .= '<param name="pixx:lngextension" value="'.$ircLangExt.'">
                        <param name="lngextension" value="'.$ircLangExt.'">'."\n";
                }
                $ircApplet .= '<param name="languageencoding" value="UnicodeLittle">'."\n";
                $ircApplet .= '<param name="style:bitmapsmileys" value="true">
                        <param name="style:smiley1" value=":) img/sourire.gif">
                        <param name="style:smiley2" value=":-) img/sourire.gif">
                        <param name="style:smiley3" value=":-D img/content.gif">
                        <param name="style:smiley4" value=":d img/content.gif">
                        <param name="style:smiley5" value=":-O img/OH-2.gif">
                        <param name="style:smiley6" value=":o img/OH-1.gif">
                        <param name="style:smiley7" value=":-P img/langue.gif">
                        <param name="style:smiley8" value=":p img/langue.gif">
                        <param name="style:smiley9" value=";-) img/clin-oeuil.gif">
                        <param name="style:smiley10" value=";) img/clin-oeuil.gif">
                        <param name="style:smiley11" value=":-( img/triste.gif">
                        <param name="style:smiley12" value=":( img/triste.gif">
                        <param name="style:smiley13" value=":-| img/OH-3.gif">
                        <param name="style:smiley14" value=":| img/OH-3.gif">
                        <param name="style:smiley15" value=":\'( img/pleure.gif">
                        <param name="style:smiley16" value=":$ img/rouge.gif">
                        <param name="style:smiley17" value=":-$ img/rouge.gif">
                        <param name="style:smiley18" value="(H) img/cool.gif">
                        <param name="style:smiley19" value="(h) img/cool.gif">
                        <param name="style:smiley20" value=":-@ img/enerve1.gif">
                        <param name="style:smiley21" value=":@ img/enerve2.gif">
                        <param name="style:smiley22" value=":-S img/roll-eyes.gif">
                        <param name="style:smiley23" value=":s img/roll-eyes.gif">
                        <param name="style:floatingasl" value="true">

                        <param name="pixx:timestamp" value="true">
                        <param name="pixx:highlight" value="true">
                        <param name="pixx:highlightnick" value="true">
                        <param name="pixx:nickfield" value="true">
                        <param name="pixx:styleselector" value="true">
                        <param name="pixx:setfontonstyle" value="true">

                        <h1>'.$ircNoJava.'</h1>
                        <p>'.$ircJavaNotEnabled.'</p>
                        </applet>';
				//$wgOut->addHTML("<!--".$ircApplet."-->"); // for debugging
                $wgOut->addHTML($ircApplet);
        }
}