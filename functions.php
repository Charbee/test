<?php
function load_css(){
    //wp_enqueue_style('slyle-css', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
}
function load_js(){
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js');
}
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');
?>