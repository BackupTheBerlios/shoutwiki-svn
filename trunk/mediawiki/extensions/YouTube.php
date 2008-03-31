<?php
/**
 * YouTube parser extension - adds <youtube> tag
 * @author Jack Phoenix <wikia.jack@gmail.com>
 * @copyright © 2008 Jack Phoenix
 */
if(!defined('MEDIAWIKI')) {
        echo("This file is an extension to the MediaWiki software and is not a valid access point");
        die(1);
}

$wgExtensionFunctions[] = 'wfYouTube';
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'YouTube',
		'version' => '1.0',
        'description' => 'Embeds YouTube videos',
        'author' => 'Jack Phoenix',
        'url' => 'http://www.shoutwiki.com'
);

function wfYouTube() {
        global $wgParser;
        $wgParser->setHook('youtube', 'renderYouTube');
}

# The callback function for converting the input text to HTML output
function renderYouTube($input, $argv) {

		$width  = isset($argv['width']) ? $argv['width']  : 425;
		$height = isset($argv['height'])? $argv['height'] : 350;
	 
        $output='<object width="'.htmlspecialchars($width).'" height="'.htmlspecialchars($height).'">'
                .'<param name="movie" value="http://www.youtube.com/v/'.htmlspecialchars($input).'">'
                .'</param><param name="wmode" value="transparent"></param>'
                .'<embed src="http://www.youtube.com/v/'.htmlspecialchars($input)
                .'" type="application/x-shockwave-flash" wmode="transparent" width="'.htmlspecialchars($width)
                .'" height="'.htmlspecialchars($height).'"></embed></object>';
 
        return $output;
}