<?php
declare(strict_types = 1);

use Joomla\CMS\HTML\HTMLHelper;

defined('_JEXEC') or die;

echo sprintf(
    '<div class="randommodule%s">%s</div>',
    $moduleClassSuffix,
    HTMLHelper::_('content.prepare', '{loadmoduleid ' . $module . '}')
);
