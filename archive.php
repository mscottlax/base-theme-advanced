<?php

/*
* This is the Archive file for the Sebo Marketing base theme
*/
get_header(); ?>

    <section id="site-content" role="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'index'); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <!-- nothing here -->
    <?php endif; ?>
    <?php if (!is_singular()) : ?>
        <?php get_template_part('pagination'); ?>
    <?php endif; ?>
    </section><!-- end #site-content -->

<?php

get_footer();

