<?php
/**
 * The file for including custom widget file
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mediall
 */

if (file_exists(dirname(__FILE__) . '/widgets/about-widget.php')) {
    require_once(dirname(__FILE__) . '/widgets/about-widget.php');
}
