<?php

function DH_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'DH_resources');

//register navigations
register_nav_menus(array(

    'primary' => __('Main Menu'),
    'footer_nav' => __('Footer Menu'),

));

//removing native margin spacing
add_filter( 'show_admin_bar', '__return_false' );

// Version CSS file in a theme
wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

// Removes <p> tags in content
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// Allow SVG upload
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

?>
