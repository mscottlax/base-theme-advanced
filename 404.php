<?php

/*
 * This is the 404 file for the Sebo Marketing base theme
 */

get_header(); ?>

        <section id="site-content" role="main">
            <div id="page-<?php the_ID();?>" <?php post_class(); ?>>

                <header class="entry-header">
                    <h1 class="entry-title">404 Error</h1>
                </header>

                <div class="page-content">
                    You have navigated to a page that does not exist.
                </div>
            </div>
        </section><!-- end #site-content -->

<?php

get_footer();
