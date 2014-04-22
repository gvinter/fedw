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

$issue_args = array(
	'post_type' => 'issue',
	'posts_per_page' => 2,
	'post_status' => 'publish'
);
$context['issues'] = Timber::get_posts($issue_args);

// grab last issue
$context['last_issue'] = $context['issues'][1];


if ($context['last_issue']) {
	// remove last issue from issues array
	array_pop($context['issues']);
}

// This is a hack because I haven't fixed the metadata string double-saving into an array
if (is_array($context['issues'][0]->issue_number)) {
	$context['issue_number'] = $context['issues'][0]->issue_number[0];
} else {
	$context['issue_number'] = $context['issues'][0]->issue_number;
}


// Just want to get a posts from the current Issue
$posts_args = array(
	'tag' => 'issue-' . $context['issue_number'],
	'posts_per_page' => 10
);

// get the posts
$issue_posts = Timber::get_posts($posts_args);

// sort posts by category (but really a custom field)
$context['sections'] = sort_posts_by_category($issue_posts);

// error_log(var_export($context['posts'], true));
// echo "<pre>";
// print_r($context['issues']);
// echo "</pre>";

// set template
$templates = array('home.twig');

Timber::render($templates, $context);
