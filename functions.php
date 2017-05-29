<?php
/*
Theme Name: KochZap WordPress Theme
Author: Ron Nims of Atrmisia Devsign
Author URI: http://www.artdevsign.com/
Description: Theme designed for KochZap App website
Version: 1.0
*/

// Register WP Menus
register_nav_menus(array(
'main-menu' => __( 'Menu 1' ),
));

// Add theme support for post-thumbnails
add_theme_support( 'post-thumbnails' );

// Register WP Sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

?>