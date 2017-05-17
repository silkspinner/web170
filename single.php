<?php get_header(); ?>
<section id="content">
    <!-- Main WP loop -->
    <?php if(have_posts() ) : while(have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content() ?>
    <?php endwhile; endif; ?>
    <!-- END Main WP loop -->
    <small>single.php</small>
    
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>