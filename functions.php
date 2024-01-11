<?php 
/*
Functions. Va chiamato sempre così il file, altrimenti non viene riconosciuto.
*/

    function tema_ied_enqueue_script_and_styles() {
    // Includo foglio di stile principale.
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all' );
    wp_enqueue_script ( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), wp_get_theme()->get('Version'), true );
    }

    add_action('wp_enqueue_scripts', 'tema_ied_enqueue_script_and_styles');
?>
