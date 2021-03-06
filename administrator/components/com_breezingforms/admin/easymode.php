<?php
/**
* BreezingForms - A Joomla Forms Application
* @version 1.8
* @package BreezingForms
* @copyright (C) 2008-2011 by Markus Bopp
* @license Released under the terms of the GNU General Public License
**/
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

require_once($ff_admpath.'/admin/easymode.html.php');
require_once($ff_admpath.'/admin/easymode.class.php');
require_once($ff_admpath.'/libraries/Zend/Json/Decoder.php');
require_once($ff_admpath.'/libraries/Zend/Json/Encoder.php');

require_once(JPATH_SITE.'/administrator/components/com_breezingforms/libraries/crosstec/classes/BFBase.php');


$easyMode = new EasyMode();

if($easyMode->getUserBrowser() == 'firefox' || $easyMode->getUserBrowser() == 'chrome' || $easyMode->getUserBrowser() == 'safari'){

	$page          = JRequest::getInt('page', 1);
	$form          = JRequest::getInt('form', 0);
	$nameTitle     = $easyMode->getFormNameTitle($form);
	$formName      = '';
	$formTitle     = '';
	$pages         = $easyMode->getNumFormPages($form);
	
	if($nameTitle == null){
		$formName = 'EasyForm_'.mt_rand(0, mt_getrandmax());
		$formTitle = $formName;
	} else {
		$formName      = $nameTitle->name;
		$formTitle     = $nameTitle->title;
	}
	
	switch($task){
	
		case 'save':
			$templateCode  = JRequest::getVar('templateCode', '');
			$areas         = JRequest::getVar('areas', '');
			$pages         = JRequest::getVar('pages', 1);
			
			$formId = $easyMode->save(
							$form, 
							$formName, 
							$formTitle,
							array(), 
							BFBase::decode($templateCode), 
							Zend_Json::decode(BFBase::decode($areas)),
							$pages
						);
				
                        
                        // CONTENTBUILDER
                        jimport('joomla.filesystem.file');
                        jimport('joomla.filesystem.folder');

                        if(JFile::exists(JPATH_SITE . DS . 'administrator' . DS . 'components' . DS . 'com_contentbuilder' . DS . 'classes' . DS . 'contentbuilder.php'))
                        {
                            require_once(JPATH_SITE . DS . 'administrator' . DS . 'components' . DS . 'com_contentbuilder' . DS . 'classes' . DS . 'contentbuilder.php');
                            $cbForm = contentbuilder::getForm('com_breezingforms', $formId);
                            $db = JFactory::getDBO();
                            $db->setQuery("Select id From #__contentbuilder_forms Where `type` = 'com_breezingforms' And `reference_id` = " . intval($formId));
                            jimport('joomla.version');
                            $version = new JVersion();
                            if(version_compare($version->getShortVersion(), '3.0', '>=')){
                                $cbForms = $db->loadColumn();
                            }else{
                                $cbForms = $db->loadResultArray();
                            }
                            if(is_object($cbForm) && count($cbForms)){
                                require_once(JPATH_SITE . DS . 'administrator' . DS . 'components' . DS . 'com_contentbuilder' . DS . 'tables' . DS . 'elements.php');
                                foreach($cbForms As $dataId){
                                    contentbuilder::synchElements($dataId, $cbForm);
                                    $elements_table = new TableElements($db);
                                    $elements_table->reorder('form_id='.$dataId);
                                }
                            }
                        }
                        // CONTENTBUILDER END
                        
			echo EasyModeHtml::showApplication(
					$formId, 
					$formName,
					$easyMode->getTemplateCode($formId),
					$easyMode->getCallbackParams($formId),
					$easyMode->getElementScripts(),
					$pages,
					$page
			);
			break;
			
		default:
			echo EasyModeHtml::showApplication(
				$form, 
				$formName,
				$easyMode->getTemplateCode(JRequest::getInt('form', 0)), 
				$easyMode->getCallbackParams(JRequest::getInt('form', 0)),
				$easyMode->getElementScripts(),
				$pages,
				$page
			);
	}

} else {

	echo 'The easy mode is currently supporting Chrome and Firefox (3 and newer) only. 
	<br/>
	<br/>
	What can you do?
	<br/>
	<br/>
	1. Download and install Firefox from <a href="http://mozilla.org" target="_blank">here</a>
	<br/>
	or download Google Chrome from <a href="http://www.google.com/chrome" target="_blank">here</a><br/>
	<br/>
	Chrome is usually a lot faster than Firefox < 3.5, so you might this give a shot.
	<br/>
	2. Use Firefox Portable from <a href="http://portableapps.com/apps/internet/firefox_portable" target="_blank">here</a> if you somehow are not allowed to install Firefox on your machine 
	<br/>
	3. Use the standard form creator from <a href="javascript:history.go(-1)">previous page</a>
	';
}