<?php
// The WereWiki custom skin!
if( !defined( 'MEDIAWIKI' ) )
	die( 401 );
class Skinwolfbane extends SkinTemplate {
	/** Using monobook. */
	function initPage( &$out ) {
		SkinTemplate::initPage( $out );
		$this->skinname  = 'wolfbane';
		$this->stylename = 'wolfbane';
		$this->template  = 'wolfbane';
	}
}

//replacement wkFindFile function for 1.10
global $IP;
if(!function_exists("wfFindFile")){
 require("$IP/skins/wolfbane/wikiFunction.php");
}

class wolfbane extends QuickTemplate{
	var $cactions, $useri;
	function gAd(){
		// Output Google Ad Code
		echo "";
	}
	function execute(){
		global $wgUser, $wgSitename, $IP;
		$this->cactions = parse_ini_file("$IP/skins/wolfbane/cactions.ini");
		$this->useri = parse_ini_file("$IP/skins/wolfbane/user.ini");
		include "$IP/skins/wolfbane/index.php";
	}
	// helper function to change text to images for monobook's cactions (article, edit etc..)
	// now done via wolfbane/cactions.ini
	function getTabOut($id, $backup){
		global $wgStylePath;
		$dir = "$wgStylePath/wolfbane";
		if($this->cactions[$id])
			return "<img title='$backup' src='$dir/".$this->cactions[$id]."' />";
		else
			return $backup;
	}
	// helper function to change text to images for user actions
	// now done via wolfbane/user.ini
	function getUserOut($id, $backup){
		global $wgStylePath;
		$dir = "$wgStylePath/wolfbane";
		if(strlen($this->useri[$id]) > 0)
			return "<img style='border: 0px solid !important;' title='$backup' src='$dir/".$this->useri[$id]."' />";
		elseif($this->useri[$id] == "")
			return "";
		else
			return $backup;
	}
	function head(){
?><style type="text/css" media="screen,projection">/*<![CDATA[*/
	@import "<?php $this->text('stylepath') ?>/common/shared.css?<?php echo $GLOBALS['wgStyleVersion'] ?>";
	@import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/main.css?<?php echo $GLOBALS['wgStyleVersion'] ?>";
/*]]>*/</style>
<link rel="stylesheet" type="text/css" <?php if(empty($this->data['printable']) ) { ?>media="print"<?php } ?> href="<?php $this->text('stylepath') ?>/wolfbane/print.css?<?php echo $GLOBALS['wgStyleVersion'] ?>" />
<link rel="stylesheet" type="text/css" media="handheld" href="<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/handheld.css?<?php echo $GLOBALS['wgStyleVersion'] ?>" />
<?php print Skin::makeGlobalVariablesScript( $this->data ); ?>
<script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('stylepath' ) ?>/common/wikibits.js?<?php echo $GLOBALS['wgStyleVersion'] ?>"><!-- wikibits js --></script>
<?php	if($this->data['jsvarurl'  ]) { ?>
<script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('jsvarurl'  ) ?>"><!-- site js --></script>
<script type="<?php $this->text('jsmimetype') ?>">
var watcht = "<?php echo $this->getTabOut("watch", $this->data['content_actions']['watch']['text']); ?>";
var uwatcht = "<?php echo $this->getTabOut("unwatch", $this->data['content_actions']['unwatch']['text']); ?>";
</script>
<script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('stylepath') ?>/wolfbane/ajax-watch.js"></script>
<?php	} ?>
<?php	if($this->data['pagecss'   ]) { ?>
	<style type="text/css"><?php $this->html('pagecss'   ) ?></style>
<?php	}
	if($this->data['usercss'   ]) { ?>
	<style type="text/css"><?php $this->html('usercss'   ) ?></style>
<?php	}
	if($this->data['userjs'    ]) { ?>
	<script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('userjs' ) ?>"></script>
<?php	}
	if($this->data['userjsprev']) { ?>
	<script type="<?php $this->text('jsmimetype') ?>"><?php $this->html('userjsprev') ?></script>
<?php	}
	if($this->data['trackbackhtml']) print $this->data['trackbackhtml']; ?>
<!-- Head Scripts -->
<?php $this->html('headscripts') ?><?php
	}
	function toolbox(){
		if($this->data['notspecialpage']) { ?>
				<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="t-whatlinkshere"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['whatlinkshere']['href'])
				?>"><?php $this->msg('whatlinkshere') ?></a></li>
<?php
			if( $this->data['nav_urls']['recentchangeslinked'] ) { ?>
				<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="t-recentchangeslinked"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['recentchangeslinked']['href'])
				?>"><?php $this->msg('recentchangeslinked') ?></a></li>
<?php 		}
		}
		if(isset($this->data['nav_urls']['trackbacklink'])) { ?>
			<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="t-trackbacklink"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['trackbacklink']['href'])
				?>"><?php $this->msg('trackbacklink') ?></a></li>
<?php 	}
		if($this->data['feeds']) { ?>
			<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="feedlinks"><?php foreach($this->data['feeds'] as $key => $feed) {
					?><span id="feed-<?php echo Sanitizer::escapeId($key) ?>"><a href="<?php
					echo htmlspecialchars($feed['href']) ?>"><?php echo htmlspecialchars($feed['text'])?></a>&nbsp;</span>
					<?php } ?></li><?php
		}

		foreach( array('contributions', 'blockip', 'emailuser', 'upload', 'specialpages') as $special ) {

			if($this->data['nav_urls'][$special]) {
				?><li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="t-<?php echo $special ?>"><a href="<?php echo htmlspecialchars($this->data['nav_urls'][$special]['href'])
				?>"><?php $this->msg($special) ?></a></li>
<?php		}
		}

		if(!empty($this->data['nav_urls']['print']['href'])) { ?>
				<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="t-print"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['print']['href'])
				?>"><?php $this->msg('printableversion') ?></a></li><?php
		}

		if(!empty($this->data['nav_urls']['permalink']['href'])) { ?>
				<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="t-permalink"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['permalink']['href'])
				?>"><?php $this->msg('permalink') ?></a></li><?php
		} elseif ($this->data['nav_urls']['permalink']['href'] === '') { ?>
				<li style="background: rgb(300, 300, 100); width: 200px; list-style-type: none; margin: 0px;" id="t-ispermalink"><?php $this->msg('permalink') ?></li><?php
		}

		wfRunHooks( 'MonoBookTemplateToolboxEnd', array( &$this ) );

	}
}