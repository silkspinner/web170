<?php get_header(); ?>
<section id="content">
    <!-- Main WP loop -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <!-- wrap article are post with id of post-(ID) --> 
        <article id="post-<?php the_ID(); ?>" class="post">
            
            <!-- include linked title --> 
            <h2><?php the_title(); ?></h2>
            
            <!-- include byline -->
            <small class="byline"><?php the_time('D M j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small><br>

            <!-- include featured image -->
            <?php the_post_thumbnail('large'); ?>
            
            <!-- include post content -->
            <?php the_content() ?>
        </article>
    <?php endwhile; endif; ?>
    <!-- END Main WP loop -->
    <small>single.php</small>
    
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>