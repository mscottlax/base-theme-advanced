<?php

/*
 * This is the single file for the Sebo Marketing base theme
 */

?>
    <?php tha_sidebars_before(); ?>
    <?php if(is_active_sidebar('primary-sidebar')): ?>
        <div id="sidebar" class="widget-area" role="complementary">
            <?php tha_sidebar_top(); ?>
            <?php dynamic_sidebar('primary-sidebar'); ?>
            <?php tha_sidebar_bottom(); ?>
        </div>
    <?php endif; ?>
    <?php tha_sidebars_after(); ?>