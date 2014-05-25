<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package timberscores
 */

$context = timberscores_get_context();

Timber::render('views/footer.twig', $context);

?>