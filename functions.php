<?php

/**
 * Kaksi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Kaksi
 * @since Kaksi 1.0
 */


if (!function_exists('kaksi_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since Kaksi 1.0
     *
     * @return void
     */
    function kaksi_support()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;

add_action('after_setup_theme', 'kaksi_support');

if (!function_exists('kaksi_styles')) :

    /**
     * Enqueue styles.
     *
     * @since Kaksi 1.0
     *
     * @return void
     */
    function kaksi_styles()
    {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get('Version');

        $version_string = is_string($theme_version) ? $theme_version : false;
        wp_register_style(
            'kaksi-style',
            get_template_directory_uri() . '/style.css',
            array(),
            $version_string
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style('kaksi-style');
    }

endif;

add_action('wp_enqueue_scripts', 'kaksi_styles');



// /**
//  *
//  * Enqueue scripts and styles.
//  */
// function kaksi_editor_styles()
// {
//     add_editor_style('/assets/ponyfill.css');

//     // Add the child theme CSS if it exists.
//     if (file_exists(get_stylesheet_directory() . '/assets/theme.css')) {
//         add_editor_style(
//             '/assets/theme.css'
//         );
//     }
// }
// add_action('admin_init', 'kaksi_editor_styles');

// /**
//  *
//  * Enqueue scripts and styles.
//  */
// function kaksi_scripts()
// {
//     wp_enqueue_style('kaksi-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get('Version'));

//     // Add the child theme CSS if it exists.
//     if (file_exists(get_stylesheet_directory() . '/assets/theme.css')) {
//         wp_enqueue_style('kaksi-child-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array('kaksi-ponyfill'), wp_get_theme()->get('Version'));
//     }
// }
// add_action('wp_enqueue_scripts', 'kaksi_scripts');


// // Register two nav menus if Gutenberg is activated (otherwise the __experimentalMenuLocation attribute isn't available)

// if (!function_exists('mytheme_register_nav_menu')) {

//     function mytheme_register_nav_menu()
//     {
//         register_nav_menus(
//             array(
//                 'primary3' => __('Primary Navigation3', 'kaksi'),
//                 'social3'  => __('Social Navigation3', 'kaksi'),
//             )
//         );
//     }
//     add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
// }





// add_filter('should_load_remote_block_patterns', '__return_false');

// add_action('after_setup_theme', function () {
//     remove_theme_support('core-block-patterns');
// });


// function override_page_title()
// {
//     return false;
// }
// add_filter('woocommerce_show_page_title', 'override_page_title');
