<?php 
/*
    |== DaliaOmar Theme Functions File ==|
    This file have all the hooks and actions to the theme, Please be carful when editing it.
    Author: Picturate.Me[https://picturate.me]
*/
function daliaomar_files(){
    wp_enqueue_style('dalia_bootstrap_css' , '//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' , [] , date('ymds'));
    wp_enqueue_style('dalia_main_app_css' , get_template_directory_uri().'/assets/css/app.css' , [] , date('ymds'));
    wp_enqueue_script('dalia_bootstrap_js' , '//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' , [] , date('ymds'));
    wp_enqueue_script('dalia_fontawesome_js' , '//kit.fontawesome.com/aa028fd33c.js"' , [] , date('ymds'));
}
add_action('wp_enqueue_scripts','daliaomar_files');
