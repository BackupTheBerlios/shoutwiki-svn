<?php
function wfFindFile($url){
$title = Title::makeTitle(NS_IMAGE, $url);
if($title->exists())
return new Image( $title );
else
return false;
}