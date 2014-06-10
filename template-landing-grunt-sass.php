<?php
/**
 * Template Name: Grunt-Sass Landing Page
 *
 * @package WordPress
 * @subpackage FEDW
 * @since FEDW 1.2
 */

if (!class_exists('Timber')){
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
}
$context = Timber::get_context();

// add sidebar
// $context['sidebar'] = Timber::get_sidebar('sidebar.php');

// set template
$templates = array('landing-grunt-sass.twig');

Timber::render($templates, $context);