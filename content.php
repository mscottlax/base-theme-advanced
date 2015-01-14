<?php

/**
 * Handles content for Sebo Base Theme
 */
tha_entry_before();

?>

    <article id="post-<?php the_ID();?>" <?php post_class(); ?>>

        <?php tha_entry_top(); ?>

        <header class="entry-header">
            <?php if(is_singular()) :?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php else: ?>
            <a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
            <?php endif; ?>
            <p class="entry-meta"><time class="entry-time" itemprop="datePublished" datetime="<?php echo get_post_time('Y-m-d H:i:s', true); ?>"><?php the_time('F j, Y'); ?></time> by <span class="entry-author"><a href="<?php the_author_link(); ?> " class="entry-author-link"><span class="entry-author-name"><?php the_author(); ?></span></a></span> <span class="entry-comments-link"><a href="<?php comments_link(); ?>"><?php comments_number( 'No Comments', '1 Comments', '% Comments' ); ?></a></span></p>
        </header>

        <div class="entry-content">
        <?php if(is_singular()) :?>
            <?php the_content(); ?>
        <?php else: ?>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="readmore">Read more</a>
        <?php endif; ?>
        </div>

        <footer class="entry-footer">
        <p class="entry-info">
            <span class="entry-categories">Categories: <?php echo get_the_category_list(', '); ?></span>
            <span class="entry-tags">Tags: <?php echo get_the_tag_list('',', ','</p>'); ?></span>
        </p>
        </footer>

        <?php tha_entry_bottom(); ?>

    </article>

<?php tha_entry_after(); ?>