<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */
?>



<?php

/* Add theme suppports */

function dt_theme_support () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
}

add_action ('after_setup_theme','dt_theme_support');


/*Register menus */

function dt_menus () {
    
    $locations = array(
           'primary'=>"Primary Menu" ,
           'footer'=>"Footer Menu"
    );

    register_nav_menus($locations);
}

add_action ('init', 'dt_menus');


/* Register custom style */

function dt_register_styles() {
        
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('mytheme_sytle', get_template_directory_uri()."/style.css", array('mytheme_sytle_bootstrap'), $version,'all');
    wp_enqueue_style('mytheme_sytle_font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0','all');
    wp_enqueue_style('mytheme_sytle_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all');

}

add_action('wp_enqueue_scripts','dt_register_styles');

/* Register custom scripts */

function dt_register_scripts() {

    wp_enqueue_script('mytheme_script_js', get_template_directory_uri()."/js/main.js", array(), '1.0',true);
    wp_enqueue_script('mytheme_script_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1',true);
    wp_enqueue_script('mytheme_script_popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0',true);
    wp_enqueue_script('mytheme_script_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1',true);
    
}

add_action('wp_enqueue_scripts','dt_register_scripts');


/* Register widget areas */


function dt_widget_areas() {

    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=> '',
            'before_widget'=>'',
            'after_widget'=>''
        ),
        array(
            'name'=>'Sidebar Area',
            'id'=>'sidebar-1',
            'description'=>'Sidebar Widget Area',
        )
        );
}

add_action ('widgets_init','dt_widget_areas');


?>
