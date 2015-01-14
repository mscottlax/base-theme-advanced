<?php

/**
 * Handles content for pages for Sebo Base Theme
 */

tha_entry_before();

?>

<div id="page-<?php the_ID();?>" <?php post_class(); ?>>

    <?php tha_entry_top(); ?>

    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

    <footer class="page-footer">
    </footer>

    <?php tha_entry_bottom(); ?>

</div>

<?php tha_entry_after(); ?>
