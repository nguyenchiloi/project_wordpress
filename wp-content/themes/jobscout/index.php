<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<style>
body {
    background-color: lightskyblue !important;
}

.img-thumb {
    width: 100px;
    height: 100px;
}

.item {
	width: 100% !important;
	height: 100% !important;
}
</style>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */

get_header(); ?>

<div id="primary" class="content-area">

    <?php 
        /**
         * Before Posts hook
        */
        do_action( 'jobscout_before_posts_content' );
        ?>

    <main id="main" class="site-main">

	<h1 class="text-center">NEWEST BLOG ENTRIES</h1>
        <div class="row">
            <?php
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish'
			);
		  
		  	$query = new WP_Query($args);
		if ($query->have_posts() ) :
			while ($query->have_posts() ) :$query->the_post();
			?>
            <div class="col-md-6 bg-white">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <h5><?php echo the_title(); ?></h5>
                            <p>
                                <?php echo the_excerpt(); ?>
                            </p>
                            <a href="<?php get_permalink(); ?>" class="readm" style="color: orangered !important;">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>

        <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    </main><!-- #main -->

    <?php
        /**
         * After Posts hook
         * @hooked jobscout_navigation - 15
        */
        do_action( 'jobscout_after_posts_content' );
        ?>

</div><!-- #primary -->

<?php
get_sidebar();
get_footer();