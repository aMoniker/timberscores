<?php
/**
 * The Template for displaying all single posts.
 *
 * @package timberscores
 */

$context = timberscores_get_context();

$context['posts'] = Timber::get_posts();
$context['sidebar'] = Timber::get_sidebar();

timberscores_render_page('views/single.twig', $context);

?>