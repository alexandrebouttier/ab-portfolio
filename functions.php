<?php


// Chargement des scripts

function lgmac_scripts()
{
    wp_enqueue_style('lgmac_bulma', get_template_directory_uri() . '/css/bulma.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bulma'), '1.0.0', 'all');
    wp_enqueue_script('lgmac_particle', get_template_directory_uri() . '/js/particles.min.js', array(), '1.0.0', true);
   
    wp_enqueue_script('lgmac_jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lgmac_script', get_template_directory_uri() . '/js/app.js', array('lgmac_jquery'), '1.0.0', true);
   
}

add_action('wp_enqueue_scripts', 'lgmac_scripts');


require_once('navwalker.php');
register_nav_menus(array(
    'primary' => __('Primary Menu', 'menuname'),
));

function lgmac_setup()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'lgmac_setup' ,'lgmac_admin_script');