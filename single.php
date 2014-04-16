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

// Just want to get a posts from the current Issue
$posts_args = array(
	'tag' => 'issue-' . $context['post']->issue_number,
	'posts_per_page' => 10
);

// get the posts
$issue_posts = Timber::get_posts($posts_args);

// sort posts by category (but really a custom field)
$context['sections'] = sort_posts_by_category($issue_posts);

Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);

// Single Issue
// if ( is_singular('issue') ) {
	// error_log(var_export($context, true));
// }


// Single Post / Article
