<?php

/**
 * Styles & scripts
 */
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

/**
 * Thumbnail for post
*/
add_theme_support( 'post-thumbnails' );

/**
 * Pagination
 * @param $pages
 */
function draw_pagination($pages){
    if(is_array($pages)){
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul>';
    }
}

/**
 * Language selector
 * @param $items
 * @return string
 */
function add_last_nav_item($items) {
    if(qtrans_getLanguage() == 'ru') :
        $items .= '<li role="menuitem"><a href="' . qtranxf_convertURL('', 'en') . '" role="link" class="relatve lang-link">en</a></li>';
        $items .= '<li role="menuitem"><a href="' . qtranxf_convertURL('', 'ru') . '" role="link" class="active">ru</a></li>';
    endif;
    if(qtrans_getLanguage() == 'en') :
        $items .= '<li role="menuitem"><a href="' . qtranxf_convertURL('', 'ru') . '" role="link" class="relatve lang-link">ru</a></li>';
        $items .= '<li role="menuitem"><a href="' . qtranxf_convertURL('', 'en') . '" role="link" class="active">en</a></li>';
    endif;

    return $items;
}
add_filter('wp_nav_menu_additional_items','add_last_nav_item');