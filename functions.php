<?php

/**
 *
 * Enqueue scripts and styles.
 */
function kaksi_editor_styles()
{
    add_editor_style('/assets/ponyfill.css');

    // Add the child theme CSS if it exists.
    if (file_exists(get_stylesheet_directory() . '/assets/theme.css')) {
        add_editor_style(
            '/assets/theme.css'
        );
    }
}
add_action('admin_init', 'kaksi_editor_styles');

/**
 *
 * Enqueue scripts and styles.
 */
function kaksi_scripts()
{
    wp_enqueue_style('kaksi-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get('Version'));

    // Add the child theme CSS if it exists.
    if (file_exists(get_stylesheet_directory() . '/assets/theme.css')) {
        wp_enqueue_style('kaksi-child-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array('kaksi-ponyfill'), wp_get_theme()->get('Version'));
    }
}
add_action('wp_enqueue_scripts', 'kaksi_scripts');


add_filter('should_load_remote_block_patterns', '__return_false');

add_action('after_setup_theme', function () {
    remove_theme_support('core-block-patterns');
});


function override_page_title()
{
    return false;
}
add_filter('woocommerce_show_page_title', 'override_page_title');
