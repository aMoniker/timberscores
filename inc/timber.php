<?php

function timberscores_get_context() {
    $cache = wp_cache_get('context', 'timberscores');
    if ($cache) { return $cache; }

    $context = Timber::get_context();

    // set your own $context variables here when you want them to
    // be available in all twig templates

    TimberHelper::function_wrapper('timber_get_template_part');

    wp_cache_set('context', $context, 'timberscores');
    return $context;
}

function timberscores_render_page($view, $context = array()) {
    get_header();
    Timber::render($view, $context);
    get_footer();
}

// TODO: Should Timber have a function for get_template_part ?
function timber_get_template_part($slug, $name = null, $context = array()) {
    do_action("get_template_part_{$slug}", $slug, $name);
    $context = apply_filters("timber_get_template_part_{$slug}", $context, $slug, $name);

    $templates = array();
    $name = (string) $name;

    if ($name !== '') {
        $templates[] = "{$slug}-{$name}.php";
    }

    $templates[] = "{$slug}.php";

    global $timber_template_part_context;
    $timber_template_part_context = $context;

    locate_template($templates, true, false);
}

?>