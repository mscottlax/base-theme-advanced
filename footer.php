<?php

/*
* This is the Header file for the Sebo Marketing base theme
*/

?>

        <?php tha_content_after(); ?>

        </div><!-- end #site-main .container -->
    </main><!-- end #site-main -->

    <?php tha_footer_before(); ?>
    <footer id="site-footer">
        <?php tha_footer_top(); ?>
        <div class="container clearfix">
            <div class="footer-left col-md-6">
                Copyright &copy; <?php echo date('Y'); ?>
            </div>
            <div class="footer-right col-md-6">
                <?php if( has_nav_menu('footer')): ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php tha_footer_bottom(); ?>
    </footer><!-- end #site-footer -->
    <?php tha_footer_after(); ?>
</div><!-- end #site-container -->
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>