<?php 
/*
    |== DaliaOmar Theme Functions File ==|
    This file have all the hooks and actions to the theme, Please be carful when editing it.
    Author: Picturate.Me[https://picturate.me]
*/
function daliaomar_files(){
    wp_enqueue_script ( 'jquery' );
    wp_enqueue_style('dalia_bootstrap_css' , get_template_directory_uri().'/assets/css/bootstrap.min.css' , [] , date('ymds'));
    wp_enqueue_style('dalia_main_app_css' , get_template_directory_uri().'/assets/css/app.css' , [] , date('ymds'));
    wp_enqueue_style('dalia_main_animate_css' , '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' , [] , date('ymds'));
    wp_enqueue_script('dalia_bootstrap_js' , get_template_directory_uri().'/assets/js/bootstrap.js' , [] , date('ymds'));
    wp_enqueue_script('dalia_fontawesome_js' , get_template_directory_uri().'/assets/js/fontawesome.js' , [] , date('ymds'));
    wp_enqueue_script('dalia_wow_js' , get_template_directory_uri().'/assets/js/wow.min.js' , [] , date('ymds'));
}
add_action('wp_enqueue_scripts','daliaomar_files');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
