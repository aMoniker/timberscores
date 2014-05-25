<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package timberscores
 */

$context = timberscores_get_context();

$context['posts'] = Timber::get_posts();

timberscores_render_page('views/search.twig', $context);

?>