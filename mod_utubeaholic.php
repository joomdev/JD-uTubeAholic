<?php
/*-------------------------------------------------------------------------------
# JD uTubeAholic module for Joomla 3.x v1.0.1
# -------------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
--------------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
JHtml::_('bootstrap.framework');
// Import the file / foldersystem
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');
$LiveSite = JURI::base();
$document = JFactory::getDocument();
$modbase = JURI::base(true).'/modules/mod_utubeaholic/';
$document->addScript ($modbase.'js/jquery.spidochetube.js');
$document->addStyleSheet($modbase.'css/minimal.css');
$moduleID = $module->id;
require JModuleHelper::getLayoutPath('mod_utubeaholic','default',$params);
?>