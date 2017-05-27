<?php get_header(); ?>
<section id="content">
    <!-- Main WP Index/Blogloop -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="post-excerpt">
            <!-- include linked title --> 
            <h2><?php the_title(); ?></h2>
            <!-- Construct byline information -->
            <small class="byline"><?php the_time('D M j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small><br>

            <!-- include linked thumbnail image -->    
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>

            <!-- use the excerpt as a tease -->    
            <?php the_excerpt(); ?>
            <!-- include a Read More link -->
            <span class="readmore"><a href="<?php the_permalink(); ?>">Read More >></a></span>
        </article>
    <?php endwhile; endif; ?>
    <!-- END Main WP loop -->
    <small>index.php</small>
    
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>