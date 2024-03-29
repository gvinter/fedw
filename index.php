<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */

if (!class_exists('Timber')){
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
}
$context = Timber::get_context();

// error_log(var_export($context, true));

$issue_args = array(
	'post_type' => 'issue',
	'posts_per_page' => 1,
	'post_status' => 'publish'
);
$context['issues'] = Timber::get_posts($issue_args);
$context['foo'] = 'bar';

$templates = array('index.twig');

Timber::render($templates, $context);
