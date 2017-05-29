    <!-- START RIGHT COL -->
    <aside id="sidebar">
        <!-- WP submenu -->
        <div id="sub-navigation" class="widget">
             <!-- if post is front page, list pages -->
            <?php if (is_page()): ?>
                <!-- if post is page, list pages -->
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
            <?php else: ?>

                <!-- if post is not page, list categories -->
                <h2 class="sub-navigation-title">KochZap News</h2>
                <ul class="sub-navigation-items">
                    <?php wp_list_categories(array('title_li' => __(''))); ?>
                </ul>
            <?php endif; ?>
        </div>
        <!-- END WP generated submenu -

        <!-- WP pull quote -->
        <div id="quote" class="widget">
            <?php if (get_post_meta($post->ID, 'QuoteText', true)) : ?>
                <blockquote class="quote">
                    "<?php echo get_post_meta($post->ID, 'QuoteText', true); ?>"
                    <div class="author"><small><?php echo get_post_meta($post->ID, 'QuoteAuthor', true); ?></small></div>
                </blockquote>

            <?php endif; ?>
            
        </div>
        <!-- END WP pull quote -->
        
        <!-- WP Dynamic Sidebar -->
        <?php dynamic_sidebar(1); ?>
        <!-- END WP Dynamic Sidebar -->
        
    </aside>
    <!-- END RIGHT COL -->
