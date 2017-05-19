<?php get_header(); ?>
<section id="content">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/koch-bro480txt.jpg" alt="Koch Brothers fiddle" title="Koch Brothers fiddle"/>
            </li>
            <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/planetburn480txt.jpg" alt="While the planet burns" title="While the planet burns"/>
            </li>
            <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clearcut480txt.jpg" alt="California clearcut forest " title="California clearcut forest"/>
            </li>
            <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flint-refinery480txt.jpg" alt="Flint Hills Refinery, North Pole AK" title="Flint Hills Refinery, North Pole AK"/>
            </li>
            <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flooding480txt.jpg" alt="Flooding after severe storms 2010, TN" title="Flooding after severe storms 2010, TN"/>
            </li>
        </ul>
    </div> 

    <!-- Main WP loop -->
    <?php if(have_posts() ) : while(have_posts()) : the_post(); ?>

        <?php the_content() ?>
    <?php endwhile; endif; ?>
    <!-- END Main WP loop -->

    <h2>Latest Koch Stuff</h2>
    <ul>
    <!-- Show last 4 Posts WP loop -->
    <?php rewind_posts(); ?>
    <?php query_posts('showposts=4'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>" type="text/html"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    <!-- END Show Posts WP loop -->   
    </ul>
    <small>front-page.php</small>
    
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>