<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package timberscores
 */

$context = timberscores_get_context();

$context['widgets_sidebar_1'] = Timber::get_widgets('sidebar-1');
$context['widgets_sidebar_1_has_widgets'] = is_active_sidebar('sidebar-1');

Timber::render('views/sidebar.twig', $context);

?>