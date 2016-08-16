<?php

function arak_scripts(){
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/src/css/main.css' );
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/dist/src/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script('carousel', get_template_directory_uri() . '/dist/src/js/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/src/js/main.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'arak_scripts' );

/**
 * Add SVG capabilities
 */
function wpcontent_svg_mime_type( $mimes = array() ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );