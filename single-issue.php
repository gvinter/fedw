<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['wp_title'] .= ' - ' . $post->title();
$context['comment_form'] = TimberHelper::get_comment_form();


// echo "<pre>";
// print_r($context['post']->issue_number);
// echo "</pre>";

// This is a hack because I haven't fixed the metadata string double-saving into an array
if (is_array($context['post']->issue_number)) {
	$context['issue_number'] = $context['post']->issue_number[0];
} else {
	$context['issue_number'] = $context['post']->issue_number;
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

// add sidebar
$context['sidebar'] = Timber::get_sidebar('sidebar.php');

Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);

// Single Issue
// if ( is_singular('issue') ) {
	// error_log(var_export($context, true));
// }

// Single Issue / Article