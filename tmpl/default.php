<?php
declare(strict_types = 1);
/**
 * @package   Random Module
 * @version   1.0.0
 * @author    Snoeren Development
 * @copyright Snoeren Development (c) 2020
 * @license   MIT
 */

defined('_JEXEC') or die;

echo sprintf(
    '<div class="random-module%s">%s</div>',
    $moduleClassSuffix,
    $renderer->render($module)
);
