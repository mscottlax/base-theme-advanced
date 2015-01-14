<?php

/**
 * Sets up the default functionality of the Sebo Base Theme
 */

/**
 * Declare Theme Support
 */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('html5');

// register main navigation
register_nav_menus( array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu'
) );

/**
 * Define Constants
 */
// Directory Constants
define('ROOT_DIR', get_stylesheet_directory());
define('INC_DIR', ROOT_DIR.'/inc');
define('ASSETS_DIR', INC_DIR.'/assets');
define('LIB_DIR', INC_DIR.'/lib');

// URL Constants
define('ROOT_URL', get_stylesheet_directory_uri());
define('INC_URL', ROOT_URL.'/inc');
define('ASSETS_URL', INC_URL.'/assets');
define('LIB_URL', INC_URL.'/lib');

/**
 * Include files
 */

include_once LIB_DIR . '/php/CPT.php';
include_once LIB_DIR . '/php/tha-theme-hooks.php';
include_once LIB_DIR . '/licenses.php';
include_once LIB_DIR . '/activation.php';
include_once LIB_DIR . '/plugins.php';
include_once LIB_DIR . '/acf.php';
include_once LIB_DIR . '/default-pages.php';
include_once LIB_DIR . '/shortcodes.php';
// include_once LIB_DIR . '/layout.php';

/**
 * Adds Styles and Scripts
 */
function base_theme_styles_scripts() {
    $suffix = ( defined( 'SEBO_DEV' ) && true === SEBO_DEV ) ? '' : '-min';
    $gzip = ( defined( 'GZIP_ENABLED' ) && false === GZIP_ENABLED ) ? '' : '.gz';

    wp_enqueue_script( 'base-theme-script', ASSETS_URL . "/js/scripts{$suffix}.js{$gzip}", array('jquery'), SEBO_THEME_VERSION, true );

    wp_enqueue_style('base-theme-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700' );

    wp_enqueue_style('base-theme-style', ASSETS_URL . "/css/style{$suffix}.css{$gzip}" );

    wp_enqueue_style( 'dashicons' );

}
add_action('wp_enqueue_scripts', 'base_theme_styles_scripts');

/**
 * Adds widget areas
 * - sidebar
 */
function base_theme_widget_areas() {

    register_sidebar(array(
        'name' => 'Primary Sidebar',
        'id' => 'primary-sidebar',
        'description' => 'Appears on posts and pages',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}
add_action('widgets_init', 'base_theme_widget_areas');

/**
 * Remove all comments allowed tags
 */
add_filter( 'comment_form_defaults', 'remove_comment_form_allowed_tags' );
function remove_comment_form_allowed_tags( $defaults ) {

    $defaults['comment_notes_after'] = '';
    return $defaults;

}

function darn_you_visual_composer_breaking_all_the_things() {
    echo'<style type="text/css">
    .acf-input-table .row:before,
    .acf-input-table .row:after {
        content: none;
    }
    </style>';
}
add_action('admin_head', 'darn_you_visual_composer_breaking_all_the_things');
