<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package timberscores
 */

$context = timberscores_get_context();

$context['posts'] = Timber::get_posts();
$context['sidebar'] = Timber::get_sidebar();

timberscores_render_page('views/page.twig', $context);