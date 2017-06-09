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

// Add theme support for page excerpts
add_post_type_support( 'page', 'excerpt' );

// Register WP Sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

// Return Customized SEO friendly title
function get_seo_title_tag() {
    
    global $post;
    
    // select text for the start of title based on 
    if ( is_front_page() ) {
        // use site tagline as title for the front page
        bloginfo('description');
    } elseif ( is_page() || is_single() ) {
        // use title of page or posting for title
        the_title();
    } else {
        // use site tagline as title for everything else
        bloginfo('description');
    }
    
    // if page has parent, append parent's title
    if ( $post->post_parent ) {
        echo ' | ';
        echo get_the_title( $post->post_parent );        
    }
    
    // append the site name
    echo ' | ';
    bloginfo('name');
    
    // append the location
    echo ' | Seattle, WA';
}

// build flexslider HTML from "attached" images
function build_flexslider() {
    
    global $post;
    
    //get array of attached images
    $attachments = get_children(array('post_parent' => $post->ID,
                                      'order' => 'ASC',
                                      'orderby' => 'menu_order',
                                      'post_type' => 'attachment',
                                      'post_mime_type' => 'image', ));
    
    // if there are attachments, wrap them in flexslider html
    if ($attachments) {
        
        echo '<div class="flexslider">';    // open div
        echo '<ul class="slides">';         // open list
        
        foreach ($attachments as $att_id => $attachment ) {
            
            echo '<li>';    // open list item 
            echo wp_get_attachment_image( $att_id, 'large' );   // add attached image
            
                echo '<p>';     // open paragraph
                echo get_post_field( 'post_excerpt', $attachment->ID ); // add image caption
                echo '</p>';    // close paragraph
            
            echo '</li>';   // close list item 
            
        }
        
        echo '</ul>';   // close list
        echo '</div>';  // close div
        
    }    // END if there are attachments
    
}   // END build flexslider 

?>