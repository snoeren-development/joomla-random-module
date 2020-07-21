<?php
declare(strict_types = 1);

/**
 * @package   SD Random Module
 * @version   1.1.0
 * @author    Snoeren Development
 * @copyright Snoeren Development (c) 2020
 * @license   GNU/GPLv3
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

// Pick a random module from the given position.
$modules = ModuleHelper::getModules($params->get('position'));
if (!($total = count($modules))) {
    return;
}
$module = $modules[mt_rand(0, $total - 1)];

// Setup the renderer class.
$document = Factory::getDocument();
$renderer = $document->loadRenderer('module');

// Retrieve parameters and render the module.
$moduleClassSuffix = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_COMPAT, 'UTF-8');
require ModuleHelper::getLayoutPath('mod_sdrandommodule', $params->get('layout', 'default'));
