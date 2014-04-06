<?php
/**
 * The Home template file
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

// echo "<pre>";
// print_r($context);
// echo "</pre>";

$issue_args = array(
	'post_type' => 'issue',
	'posts_per_page' => 1,
	'post_status' => 'publish'
);
$context['issues'] = Timber::get_posts($issue_args);

// error_log(var_export($context['issues'][0]->issue_number, true));

// Just want to get a posts from the most recent Issue
$posts_args = array(
	// 'tag' => 'Issue ' . $context['issues'][0]->issue_number
	'tag' => 'issue-1'
);

// get the posts
$issue_posts = Timber::get_posts($posts_args);

// sort posts by category (but really a custom field)
$context['sections'] = sort_posts_by_category($issue_posts);
 
// error_log(var_export($context['posts'], true));
// echo "<pre>";
// print_r($context['posts']);
// echo "</pre>";

$templates = array('home.twig');

Timber::render($templates, $context);
