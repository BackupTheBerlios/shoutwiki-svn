<?php

/*
 * Created on Dec 01, 2007
 *
 * API for MediaWiki 1.8+
 *
 * Copyright (C) 2007 Yuri Astrakhan <Firstname><Lastname>@gmail.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

if (!defined('MEDIAWIKI')) {
	// Eclipse helper - will be ignored in production
	require_once ("ApiBase.php");
}

/**
 * @addtogroup API
 */
class ApiParse extends ApiBase {

	public function __construct($main, $action) {
		parent :: __construct($main, $action);
	}

	public function execute() {
		// Get parameters
		$params = $this->extractRequestParams();
		$text = $params['text'];
		$title = $params['title'];
		$page = $params['page'];
		if(!is_null($page) && (!is_null($text) || $title != "API"))
			$this->dieUsage("The page parameter cannot be used together with the text and title parameters", 'params');
		$prop = array_flip($params['prop']);
		
		global $wgParser, $wgUser;
		if(!is_null($page)) {
			$titleObj = Title::newFromText($page);
			if(!$titleObj)
				$this->dieUsageMsg(array('missingtitle', $page));

			// Try the parser cache first
			$articleObj = new Article($titleObj);
			$pcache =& ParserCache::singleton();
			$p_result = $pcache->get($articleObj, $wgUser);
			if(!$p_result) {
				$p_result = $wgParser->parse($articleObj->getContent(), $titleObj, new ParserOptions());
				global $wgUseParserCache;
				if($wgUseParserCache)
					$pcache->save($p_result, $articleObj, $wgUser);
			}
		} else {
			$titleObj = Title::newFromText($title);
			if(!$titleObj)
				$titleObj = Title::newFromText("API");
			$p_result = $wgParser->parse($text, $titleObj, new ParserOptions());
		}

		// Return result
		$result = $this->getResult();
		$result_array = array();
		if(isset($prop['text'])) {
			$result_array['text'] = array();
			$result->setContent($result_array['text'], $p_result->getText());
		}
		if(isset($prop['langlinks']))
			$result_array['langlinks'] = $this->formatLangLinks($p_result->getLanguageLinks());
		if(isset($prop['categories']))
			$result_array['categories'] = $this->formatCategoryLinks($p_result->getCategories());
		if(isset($prop['links']))
			$result_array['links'] = $this->formatLinks($p_result->getLinks());
		if(isset($prop['templates']))
			$result_array['templates'] = $this->formatLinks($p_result->getTemplates());
		if(isset($prop['images']))
			$result_array['images'] = array_keys($p_result->getImages());
		if(isset($prop['externallinks']))
			$result_array['externallinks'] = array_keys($p_result->getExternalLinks());
		if(isset($prop['sections']))
			$result_array['sections'] = $p_result->getSections();

		$result_mapping = array(
			'langlinks' => 'll',
			'categories' => 'cl',
			'links' => 'pl',
			'templates' => 'tl',
			'images' => 'img',
			'externallinks' => 'el',
			'sections' => 's',
		);
		$this->setIndexedTagNames( $result_array, $result_mapping );
		$result->addValue( null, $this->getModuleName(), $result_array );
	}
	
	private function formatLangLinks( $links ) {
		$result = array();
		foreach( $links as $link ) {
			$entry = array();
			$bits = split( ':', $link, 2 );
			$entry['lang'] = $bits[0];
			$this->getResult()->setContent( $entry, $bits[1] );
			$result[] = $entry;
		}
		return $result;
	}
	
	private function formatCategoryLinks( $links ) {
		$result = array();
		foreach( $links as $link => $sortkey ) {
			$entry = array();
			$entry['sortkey'] = $sortkey;
			$this->getResult()->setContent( $entry, $link );
			$result[] = $entry;
		}
		return $result;
	}
	
	private function formatLinks( $links ) {
		$result = array();
		foreach( $links as $ns => $nslinks ) {
			foreach( $nslinks as $title => $id ) {
				$entry = array();
				$entry['ns'] = $ns;
				$this->getResult()->setContent( $entry, Title::makeTitle( $ns, $title )->getFullText() );
				if( $id != 0 )
					$entry['exists'] = '';
				$result[] = $entry;
			}
		}
		return $result;
	}
	
	private function setIndexedTagNames( &$array, $mapping ) {
		foreach( $mapping as $key => $name ) {
			if( isset( $array[$key] ) )
				$this->getResult()->setIndexedTagName( $array[$key], $name );
		}
	}

	public function getAllowedParams() {
		return array (
			'title' => array( 
				ApiBase :: PARAM_DFLT => 'API',
			),
			'text' => null,
			'page' => null,
			'prop' => array(
				ApiBase :: PARAM_DFLT => 'text|langlinks|categories|links|templates|images|externallinks|sections',
				ApiBase :: PARAM_ISMULTI => true,
				ApiBase :: PARAM_TYPE => array(
					'text',
					'langlinks',
					'categories',
					'links',
					'templates',
					'images',
					'externallinks',
					'sections'
				)
			)
		);
	}

	public function getParamDescription() {
		return array (
			'text' => 'Wikitext to parse',
			'title' => 'Title of page the text belongs to',
			'page' => 'Parse the content of this page. Cannot be used together with text and title',
			'prop' => array('Which pieces of information to get.',
					'NOTE: Section tree is only generated if there are more than 4 sections, or if the __TOC__ keyword is present'
			),
		);
	}

	public function getDescription() {
		return 'This module parses wikitext and returns parser output';
	}

	protected function getExamples() {
		return array (
			'api.php?action=parse&text={{Project:Sandbox}}'
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id: ApiParse.php 30262 2008-01-29 14:47:27Z catrope $';
	}
}

