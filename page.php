<?php

/*
 * This is the Index file for the Sebo Marketing base theme
 */

get_header();
?>

    <section id="site-content" role="main">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', 'page'); ?>
    <?php endwhile; ?>
    </section><!-- end #site-content -->

<?php


get_footer();
