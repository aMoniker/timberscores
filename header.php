<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package timberscores
 */

$context = timberscores_get_context();

Timber::render('views/header.twig', $context);

?>