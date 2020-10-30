<?php

/*
 * File: mod_mijoshop_admin_menu.php
 * File Created: Thursday, 29th October 2020 1:10:34 pm
 * Author: Oscar Lin (oscar@des13.com)
 * Copyright (c) 2020 esangtek
 */

defined('_JEXEC') or die;

require_once(JPATH_ROOT . '/components/com_mijoshop/mijoshop/mijoshop.php');
$opencart = MijoShop::get('opencart');

require_once(__DIR__ . '/generateHtmlStructureHelper.php');
$mijoshopMenuController = new ControllerCommonColumnLeft($opencart->registry);
$helper = new generateHtmlStructureHelper($opencart->registry);

echo $helper->index();

$doc = JFactory::getDocument();
$doc->addStyleSheet(jURI::base(true) . '/modules/mod_mijoshop_admin_menu/css/style.css');

$scripts = JFactory::getDocument()->_scripts;
$scripts = array_keys($scripts);
