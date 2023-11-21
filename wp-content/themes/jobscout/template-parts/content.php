<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */
$sub_title    = get_theme_mod('blog_section_subtitle', __('We will help you find it. We are your first step to becoming everything you want to be.', 'jobscout'));
?>
<div class="col-md-6">
    <article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/Blog">
        <div class="row">
        <div class="col-md-6">
                <div class="item img-blog">
                    <?php echo get_the_post_thumbnail(); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item data-blog">
                    <h5 class="title-blog"><?php echo the_title(); ?></h5>
                    <p class="exc-blog">
                        <?php echo "<p style='font-size: .9em;'>$sub_title</p>" ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="readm text-decoration-none"
                        style="color: orangered !important; ">Readmore</a>
                </div>
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>