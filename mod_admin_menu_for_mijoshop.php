<?php

/**
 * @title        Admin Menu for MijoShop
 * @copyright    Copyright (C) 2020 Esangtek, All rights reserved.
 * @license      GNU General Public License version 3 or later.
 * @author url   https://des13.com/
 * @developers   Oscar Lin
 */

defined('_JEXEC') or die;

require_once(JPATH_ROOT . '/components/com_mijoshop/mijoshop/mijoshop.php');
$opencart = MijoShop::get('opencart');

require_once(__DIR__ . '/generateHtmlStructureHelper.php');
$mijoshopMenuController = new ControllerCommonColumnLeft($opencart->registry);
$helper = new generateHtmlStructureHelper($opencart->registry);

echo $helper->index();

$doc = JFactory::getDocument();
$doc->addStyleSheet(jURI::base(true) . '/modules/mod_admin_menu_for_mijoshop/css/style.css');

$scripts = JFactory::getDocument()->_scripts;
$scripts = array_keys($scripts);
