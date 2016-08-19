<?php
/**
 * Empty Joomla Component
 *
 * @copyright  Copyright (C) 2016 Michael Babker. All rights reserved.
 * @license    GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('Empty');
$controller->execute(JFactory::getApplication()->input->get('task', '', 'cmd'));
$controller->redirect();
