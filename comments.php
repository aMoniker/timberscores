<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package timberscores
 */

$context = timberscores_get_context();

$context['post'] = $post = Timber::get_post();

// If the current post is protected by a password and
// the visitor has not yet entered the password we will
// return early without loading the comments.
if (post_password_required($post)) { return; }

$context['page_comments'] = get_option('page_comments');

Timber::render('views/comments.twig', $context);