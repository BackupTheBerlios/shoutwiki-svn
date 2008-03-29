<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php $this->text('pagetitle') ?></title>
<?php $this->head(); ?>
</head>
<body>
<table class="header"><tr><td id="logo">
<a href="<?php echo htmlspecialchars($this->data['nav_urls']['mainpage']['href'])?>"><img src="<?php /* GET LONG LOGO URL */ $img = wfFindFile( "WikiLong.png" ); if($img){ echo $img->getUrl(); } else{ $this->text('stylepath'); echo "/wolfbane/wiki.png"; } ?>"  style="border: 0px solid;" title="<?php echo $wgSitename; ?>" /></a>
</td><td id="gad">
<?php $this->gAd(); ?>
</td><td id="usert">
<div id="user">
<?php if($wgUser->isAnon()){ ?>
<?php echo "<a class='login' href='". $this->data['personal_urls']['anonlogin']['href'] ."'>" . $this->data['personal_urls']['anonlogin']['text'] . "</a>"; ?>
<?php } else{ ?>
<table class="user"><tr><td>
<a href="<?php $t = Title::makeTitle( NS_IMAGE,  "UserAvatar-".$wgUser->getName().".png"); echo $t->getFullURL(); ?>"><img style="max-height: 50px;" src="<?php /* GET AVI URL */ $img = wfFindFile( "UserAvatar-".$wgUser->getName().".png" ); if($img){ echo $img->getUrl(); } else{ $this->text('stylepath'); echo "/wolfbane/noavi.png"; } ?>" title="<?php wfMsg("Caption"); ?>" /></a>
</td><td>
<a href="<?php $t = Title::makeTitle( NS_USER, $wgUser->getName() ); echo $t->getFullURL(); ?>" ><?php echo $wgUser->getName() ?></a><br />
<?php if($this->data['newtalk'] ) { ?><div class="usermessage"><?php $this->html('newtalk')  ?></div><?php } else{ ?><br /><?php } ?>
<?php foreach($this->data['personal_urls'] as $key => $item) { ?>
<div style="display: inline" id="pt-<?php echo Sanitizer::escapeId($key) ?>"<?php
if ($item['active']) { ?> class="active"<?php } ?>><a href="<?php
echo htmlspecialchars($item['href']) ?>"<?php
if(!empty($item['class'])) { ?> class="<?php
echo htmlspecialchars($item['class']) ?>"<?php } ?>><?php
echo $this->getUserOut($key, $item['text']) ?></a></div>
<?php	} ?>
</td></tr></table>
<?php } ?>
</div>
</td></tr>
</table>
<table class="header nav2" cellspacing="0"><tr>
<td class="l nav"><img src="<?php $this->text('stylepath'); ?>/wolfbane/leftnavleft.png" /></td>
<td class="nav1"><ul class="nav0"><?php foreach ($this->data['sidebar'] as $bar => $cont) { ?>
<li class="i" id='p-<?php echo Sanitizer::escapeId($bar) ?>'>
<?php $out = wfMsg( $bar ); if (wfEmptyMsg($bar, $out)) echo $bar; else echo $out; ?>
<ul class="pop">
<?php foreach($cont as $key => $val) { ?>
<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="<?php echo Sanitizer::escapeId($val['id']) ?>"<?php
if ( $val['active'] ) { ?> class="active" <?php }
?>><a style="color: white;" href="<?php echo htmlspecialchars($val['href']) ?>"><?php echo htmlspecialchars($val['text']) ?></a></li>
<?php } ?></ul></li>
<?php } ?>
<?php if( $this->data['language_urls'] ) { ?>
<li class="i tright"><img src="<?php $this->text('stylepath'); ?>/wolfbane/gb.png" alt="<?php $this->msg('otherlanguages') ?>" />
<ul class="pop">
<?php foreach($this->data['language_urls'] as $langlink) { ?>
<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" class="<?php echo htmlspecialchars($langlink['class'])?>"><?php
?><a href="<?php echo htmlspecialchars($langlink['href']) ?>"><?php echo $langlink['text'] ?></a></li>
<?php } ?>
</ul>
</li>
<?php } ?>
<li class="i tright" style="width: 16px;float:right;"><img src="<?php $this->text('stylepath'); ?>/wolfbane/config.png" alt="<?php $this->msg('toolbox') ?>" />
<ul class="pop">
<?php $this->toolbox() ?>
</ul>
</li>
<li class="i" style="padding-top: 2px;float:right;height:30px;">
<img src="<?php $this->text('stylepath'); ?>/wolfbane/search.png" alt="<?php $this->msg('search') ?>" />
<form action="<?php $this->text('searchaction') ?>" id="searchform">
<!--<ul class="pop"><li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;">-->
<input id="searchInput" name="search" type="text"
<?php 	if( isset( $this->data['search'] ) ) {
?> value="<?php $this->text('search') ?>"<?php } ?> /><!--<br />-->
<input type='submit' name="go" class="searchButton" id="searchGoButton"	value="<?php $this->msg('searcharticle') ?>" />&nbsp;
<input type='submit' name="fulltext" class="searchButton" id="mw-searchButton" value="<?php $this->msg('searchbutton') ?>" />
</form>
<!--</li></ul>-->
</li>
</ul>
</li></ul></td>
<td class="l"><img src="<?php $this->text('stylepath'); ?>/wolfbane/leftnavright.png" /></td>
<td class="l nav"><img src="<?php $this->text('stylepath'); ?>/wolfbane/rightnavleft.png" /></td>
<td id="tools">
<?php foreach($this->data['content_actions'] as $key => $tab) { ?>
<div style="display: inline;" id="contact-<?php echo Sanitizer::escapeId($key) ?>"<?php
if($tab['class']) { ?> class="<?php echo htmlspecialchars($tab['class']) ?>"<?php }
 ?>><a href="<?php echo htmlspecialchars($tab['href']) ?>"><?php
	 echo $this->getTabOut(/*Sanitizer::escapeId(*/$key, $tab['text']) ?></a></div>
	<?php			 } ?>
</td>
<td class="l" id="nav"><img src="<?php $this->text('stylepath'); ?>/wolfbane/rightnavright.png" /></td>
</tr></table>
<?php if($this->data['sitenotice']) { ?><div id="siteNotice"><?php $this->html('sitenotice') ?><?php } ?></div>
<h1 class="firstHeading"><?php $this->data['displaytitle']!=""?$this->html('title'):$this->text('title') ?></h1>
<h3 id="siteSub"><?php $this->msg('tagline') ?></h3>
<?php if($this->data['undelete']) { ?><div id="contentSub2"><?php     $this->html('undelete') ?></div><?php } ?>
<div id="body">
<?php $this->html('bodytext') ?>
</div>
<?php if($this->data['catlinks']) { ?><div id="catlinks"><?php       $this->html('catlinks') ?></div><?php } ?>
<ul id="footer">
<li><a href="http://mediawiki.org"><img class="tleft" src="<?php $this->text('stylepath'); ?>/common/images/poweredby_mediawiki_88x31.png" /></a></li>
<?php
		$footerlinks = array(
			'lastmod', 'viewcount', 'numberofwatchingusers', 'credits', 'copyright',
			'privacy', 'about', 'disclaimer', 'tagline',
		);
		foreach( $footerlinks as $aLink ) {
			if( isset( $this->data[$aLink] ) && $this->data[$aLink] ) {
?>				<li id="<?php echo$aLink?>"><?php $this->html($aLink) ?></li>
<?php 		}
		}
?>
<li style="width: 100%; border: 1px solid #AAA;display: block; padding: 2px; background: rgb(200, 200, 200); margin: 2px;clear: left;">
<a href="http://www.wikia.com/wiki/User:Stinkfly">Style by Stinkfly</a>
</li>
</ul>
</body>
</html> 
