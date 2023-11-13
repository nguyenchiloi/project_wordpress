<?php
/**
 * Blog Section
 * 
 * @package JobScout
 */

$blog_heading = get_theme_mod( 'blog_section_title', __( 'Latest Articles', 'jobscout' ) );
$sub_title    = get_theme_mod( 'blog_section_subtitle', __( 'We will help you find it. We are your first step to becoming everything you want to be.', 'jobscout' ) );
$blog         = get_option( 'page_for_posts' );
$label        = get_theme_mod( 'blog_view_all', __( 'See More Posts', 'jobscout' ) );
$hide_author  = get_theme_mod( 'ed_post_author', false );
$hide_date    = get_theme_mod( 'ed_post_date', false );
$ed_blog      = get_theme_mod( 'ed_blog', true );

$args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => true
);

$qry = new WP_Query( $args );

if( $ed_blog && ( $blog_heading || $sub_title || $qry->have_posts() ) ){ ?>
<section id="blog-section">
    <div class="container">
        <?php 
            if( $blog_heading ) echo '<h2 class="section-title" style = "padding-bottom: 70px">' . esc_html( 'NEWEST BLOG ENTRIES' ) . '</h2>';
        ?>
        <div class="row">
            <div class="col-md-12 module3">
                <div class="postlist">
                    <div class="post_listing">
                    <?php if( $qry->have_posts() ){ ?>
                <div class="article-wrap" id="pmd3">
                    <?php 
                while( $qry->have_posts() ){
                    $qry->the_post(); ?>
                    <article class="post" id = "md3">
                        <figure class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                            <?php 
                            if( has_post_thumbnail() ){
                                the_post_thumbnail( 'jobscout-blog', array( 'itemprop' => 'image' ) );
                            }else{ 
                                jobscout_fallback_svg_image( 'jobscout-blog' ); 
                            }       
                            ?>
                            </a>
                        </figure>
                        <header class="entry-header" id = "entryhdmd3">
                            <h3 id = "content">
                                <a style="color:black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php 
                                   echo"<p style='margin-bottom:15px;margin-top:15px;font-weight: normal'>$sub_title</p>" ;
                            ?>
                                <button class="readM">Read More</button>
                            </h3>
                        </header>
                    </article>
                    <?php 
                }
                wp_reset_postdata();
                ?>
                </div><!-- .article-wrap -->
                <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php 
}