<?php
/**
 * Template Name: Issues
 *
 * @package WordPress
 * @subpackage FEDW
 * @since FEDW 1.1
 */

if (!class_exists('Timber')){
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
}
$context = Timber::get_context();

$issue_args = array(
	'post_type' => 'issue',
	'posts_per_page' => 10,
	'post_status' => 'publish'
);
$context['issues'] = Timber::get_posts($issue_args);

// Just want to get a posts from the most recent Issue
$posts_args = array(
	'tag' => 'Issue ' . $context['issues'][0]->issue_number,
	// 'tag' => 'issue-#',
	'posts_per_page' => 10
);

// get the posts
$issue_posts = Timber::get_posts($posts_args);

// sort posts by category (but really a custom field)
$context['sections'] = sort_posts_by_category($issue_posts);

// Issues page shouldn't show author meta info
$context['author_hide'] = true;

// error_log(var_export($context['posts'], true));
// echo "<pre>";
// print_r($context);
// print_r($issue_posts);
// echo "</pre>";


// set template
$templates = array('issues.twig');

Timber::render($templates, $context);
