<?php

/**
 * This file controls the placement of the sidebars on the base theme.
 */

// Add layout body classes
add_filter( 'body_class', 'sidebar_classes' );
function sidebar_classes( $classes ) {
    if(get_field('sidebar_position')) {
        $sidebar_position = get_field('sidebar_position');
    } else {
        $sidebar_position = get_field('sidebar_position', 'options');
    }

    if($sidebar_position == 'left') {
        $classes[] = 'sidebar-content';
    } elseif ($sidebar_position == 'right') {
        $classes[] = 'content-sidebar';
    } else {
        $classes[] = 'full-width';
    }
    // return the $classes array
    return $classes;
}

function sidebar_location() {
    if(get_field('sidebar_position')) {
        $sidebar_position = get_field('sidebar_position');
    } else {
        $sidebar_position = get_field('sidebar_position', 'options');
    }

    if($sidebar_position) {
        //add sidebar in its appropriate place
        add_action('tha_content_after', 'base_theme_sidebar');
    }
}