<?php
declare(strict_types = 1);

/**
 * @package   SD Random Module
 * @version   1.1.0
 * @author    Snoeren Development
 * @copyright Snoeren Development (c) 2020
 * @license   GNU/GPLv3
 */

defined('_JEXEC') or die;

echo sprintf(
    '<div class="sd-random-module%s">%s</div>',
    $moduleClassSuffix,
    $renderer->render($module)
);
