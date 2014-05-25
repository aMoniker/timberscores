<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package timberscores
 */

$context = timberscores_get_context();

$context['posts'] = Timber::get_posts();
$context['sidebar'] = Timber::get_sidebar();

timberscores_render_page('views/archive.twig', $context);