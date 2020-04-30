<?php
declare(strict_types = 1);

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

JLoader::register('RandomModuleModel', __DIR__ . '/model.php');

// Retrieve the module list.
$modules = (array) $params->get('modules', []);
if (in_array('all', $modules)) {
    $modules = (new RandomModuleModel)->getAll();
}

if (!count($modules)) {
    return;
}

// Pick a random module.
$module = $modules[mt_rand(0, count($modules) - 1)];

$moduleClassSuffix = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_COMPAT, 'UTF-8');

require ModuleHelper::getLayoutPath('mod_randommodule', $params->get('layout', 'horizontal'));
