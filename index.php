<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> | Seattle</title>

    <!-- Meta Info -->
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />

    <!-- Style Sheets --> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/nav.css" />
    <link href="https://fonts.googleapis.com/css?family=BenchNine:700|Source+Sans+Pro|Russo+One" rel="stylesheet">
    
    <!-- Script Files -->
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/0B8E04BA-BDE1-5A4E-A290-376E02A0CF12/main.js" charset="UTF-8"></script><script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/AC724F90-7C82-0A4F-A5A8-A575BA78ACB0/main.js" charset="UTF-8"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>

    <script type="text/javascript">
      $(window).load(function() {
        $(".flexslider").flexslider({
          slideshowSpeed: 5000
        });
      });
    </script>
    
    <!-- WordPress header hook for styles and scripts-->
    <?php wp_head(); ?>
</head>
    
<!-- body tag includes WordPress body hook -->    
<body <?php body_class(); ?>>
<header>

    <div class="logo"><a href="index.php"><img  src="<?php bloginfo('template_directory'); ?>/images/kz-logo48.png" alt="KochZap Logo" title="KochZap Logo"/></a></div>
    
    <!-- WP main menu -->
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'cssmenu', ) ); ?>

</header>
    
<div id="wrapper"> <!-- Begin wrapper -->

    <section id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
        <?php the_content(''); // get page or posting written content ?>
        <?php endwhile; endif; // end the loop ?>
    </section>
    
    <!-- START RIGHT COL -->
    <aside id="sidebar">
        <!-- WP submenu -->
        <div id="sub-navigation" class="widget">
             <!-- if post is page, list pages -->
            <?php if (is_page()): ?>
                <h2 class="sub-navigation-title">
                <?php echo get_the_title($post->post_parent); ?></h2>
                <ul class="sub-navigation-items">
                <!-- if post parent exists, list siblings, else list children -->
                <?php  if ($post->post_parent) { 
                    wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
                } else {
                    wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
                } ?>
                </ul>
            <?php endif; ?>

             <!-- if post is not page, list categories -->
            <?php if (!(is_page())): ?>
                <h2 class="sub-navigation-title">KochZap News</h2>
                <ul class="sub-navigation-items">
                    <?php wp_list_categories(array('title_li' => __(''))); ?>
                </ul>
            <?php endif; ?>
        </div>
        <!-- END WP generated submenu -->
    </aside>
    <!-- END RIGHT COL -->
    
</div>  <!-- END wrapper -->
    
    <footer>
        <small>&copy; 2015 - 2016, Artemisia Devsign, All Rights Reserved, <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ 
        <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small>
    </footer>

    <script> 
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });
    </script>
    
    <!-- WordPress footer hook for scripts -->
    <?php wp_footer(); ?>
    
</body>
</html>