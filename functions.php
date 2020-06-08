<?php
// theme support
add_theme_support('html5', array('search-form'));

// enqueue style
function terriblesubs_enqueue_style()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
    wp_enqueue_style('mukta', 'https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700&display=swap');

    wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, null, true);
    wp_enqueue_script('jQuery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', null, null, true);
    wp_enqueue_script('bootstrap');
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', null, null, true);
    wp_enqueue_script('popper');
}
add_action('wp_enqueue_scripts', 'terriblesubs_enqueue_style');

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

// Register nav menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'TerribleSubs' ),
) );