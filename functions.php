<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/johndoe.css', false,'1.1','all');
   wp_enqueue_style( 'first');
   wp_register_style('icons', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css', false,'1.1','all');
   wp_enqueue_style( 'icons');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('j-query', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'j-query');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/johndoe.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('js-script', get_template_directory_uri() . '/assets/vendors/isotope/isotope.pkgd.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('map', get_template_directory_uri() . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'map');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootsrap');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support ( 'menus' ) ;
