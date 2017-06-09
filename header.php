<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php get_seo_title_tag(); ?></title>

    <!-- Meta Info -->
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
                                                                                                    
    <!-- Style Sheets --> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/nav.css" />
    <link href="https://fonts.googleapis.com/css?family=BenchNine:700|Source+Sans+Pro|Russo+One" rel="stylesheet">

    <!-- Script Files -->
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/0B8E04BA-BDE1-5A4E-A290-376E02A0CF12/main.js" charset="UTF-8">
    </script>

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

