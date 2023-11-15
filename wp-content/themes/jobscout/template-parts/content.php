<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */
?>
<div class="col-md-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/Blog">
        <div class="row">
            <div class="col-md-6">
                <?php echo get_the_post_thumbnail(); ?>
            </div>
            <div class="col-md-6">
                <?php echo the_title(); ?>
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>