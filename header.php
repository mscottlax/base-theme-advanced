<?php

/*
* This is the Header file for the Sebo Marketing base theme
*/

tha_html_before();

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!--

Built with <3 by

   _____ ______ ____   ____        __  __          _____  _  ________ _______ _____ _   _  _____
  / ____|  ____|  _ \ / __ \      |  \/  |   /\   |  __ \| |/ /  ____|__   __|_   _| \ | |/ ____|
 | (___ | |__  | |_) | |  | |     | \  / |  /  \  | |__) | ' /| |__     | |    | | |  \| | |  __
  \___ \|  __| |  _ <| |  | |     | |\/| | / /\ \ |  _  /|  < |  __|    | |    | | | . ` | | |_ |
  ____) | |____| |_) | |__| |     | |  | |/ ____ \| | \ \| . \| |____   | |   _| |_| |\  | |__| |
 |_____/|______|____/ \____/      |_|  |_/_/    \_\_|  \_\_|\_\______|  |_|  |_____|_| \_|\_____|


http://sebomarketing.com

-->

<head>
<?php tha_head_top(); ?>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('') ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php tha_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div id="site-container" class="">
    <?php tha_header_before(); ?>
    <header id="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <div id="header-wrapper" class="container clearfix">
            <?php tha_header_top(); ?>
            <div id="header-left" class="col-md-4">
                <?php
                if(get_field('logo','options')) :
                    $logo = get_field('logo','options');?>
                    <div id="site-logo">
                        <a href="/"><img src="<?php echo $logo['url']; ?>" alt="><?php bloginfo('name');?>" title="><?php bloginfo('name');?>" /></a>
                    </div>
                <?php elseif(is_front_page()) : ?>
                    <h1 id="site-title"><?php bloginfo('name');?></h1>
                <?php else: ?>
                    <h2 id="site-title"><a href="<?php bloginfo('url');?>" ><?php bloginfo('name');?></a></h2>
                <?php endif; ?>
            </div>
            <div id="header-right" class="col-md-8">
                <div id="header-phone" class="offset-top-3">
                <?php $phone = get_field('header_phone','options');
                if($phone) :?>
                    <h2>Call Us Today: <span><?php the_field('header_phone','options'); ?></span></h2>
                <?php endif; ?>
                </div>
            </div>

            <nav id="site-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <div class="menu-button"><span class="dashicons dashicons-menu"></span>Menu</div>
                <div class="menu-mobile-header"><span class="dashicons dashicons-no-alt"></span>Close</div>
                <?php if( has_nav_menu('primary')): ?>
                    <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav-menu'
                    )); ?>
                <?php endif; ?>
            </nav>
            <?php tha_header_bottom(); ?>
        </div>
    </header><!-- end #site-header -->

    <?php tha_header_after(); ?>

    <main id="site-main" class="">
        <div class="container">

        <?php tha_content_before(); ?>

