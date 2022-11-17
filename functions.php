<?php

/* Add theme suppports */

function mt_theme_support () {
    /* Theme suppport Title */
    add_theme_support('title-tag');
    /* Theme suppport Custom Logo */
    add_theme_support('custom-logo');
    /* Theme suppport Thumbnail Post Image */
    add_theme_support('post-thumbnails');
}

add_action ('after_theme_setup','mt_theme_support');


/*Register menus */

function mt_menus () {
    
    $locations = array(
           'primary'=>"Primary Menu" ,
           'footer'=>"Footer Menu"
    );

    register_nav_menus($locations);
}

add_action ('init', 'mt_menus');


/* Register custom style */

function mt_register_styles() {
        
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('mytheme_sytle', get_template_directory_uri()."/style.css", array('mytheme_sytle_bootstrap'), $version,'all');
    wp_enqueue_style('mytheme_sytle_font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0','all');
    wp_enqueue_style('mytheme_sytle_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all');

}

add_action('wp_enqueue_scripts','mt_register_styles');

/* Register custom scripts */

function mt_register_scripts() {

    wp_enqueue_script('mytheme_script_js', get_template_directory_uri()."/assets/js/main.js", array(), '1.0',true);
    wp_enqueue_script('mytheme_script_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1',true);
    wp_enqueue_script('mytheme_script_popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0',true);
    wp_enqueue_script('mytheme_script_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1',true);
    
}

add_action('wp_enqueue_scripts','mt_register_scripts');


/* Register custom post types */


?>
