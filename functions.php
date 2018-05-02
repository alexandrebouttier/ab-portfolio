<?php 


// Chargement des scripts

function lgmac_scripts(){
    wp_enqueue_style('lgmac_bulma', get_template_directory_uri() . '/css/bulma.min.css', array(), '1.0.0' ,'all');
    wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bulma'), '1.0.0' ,'all');
}

add_action('wp_enqueue_scripts','lgmac_scripts');