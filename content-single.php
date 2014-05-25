<?php
/**
 * @package timberscores
 */

global $timber_template_part_context;
if (!$timber_template_part_context) { // TODO: This is ugly.. need a better way
	$timber_template_part_context = array();
}

$context = array_merge(timberscores_get_context(), $timber_template_part_context);

Timber::render('views/content-single.twig', $context);

?>