<?php get_header(); ?>
        <section>
        <!-- <section class="section02"> -->
            <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post();
                        get_template_part('content');        
                    endwhile;
                endif;
            ?>
        </section>
    </main>
    <?php if(!(is_page('inquiry') || is_page('about') || is_page('staff'))): ?>
         <?php // if(is_front_page()): ?> 
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>