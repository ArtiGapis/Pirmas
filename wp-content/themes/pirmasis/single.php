<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>


	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
                <div class="col-md-2">
                    <div class="left-wrap">
						<?php get_sidebar(); ?>
                    </div>
                </div>
                <div class="col-md-10 container-white">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <h1><?php the_title(); ?></h1>

                            <?php
			                // Start the loop.
			                while ( have_posts() ) : the_post();
				                // Include the single post content template.
				                the_content();
				                // If comments are open or we have at least one comment, load up the comment template.
				                if ( comments_open() || get_comments_number() ) {
					                comments_template();
				                }
				                // End of the loop.
			                endwhile;
			                ?>
                        </main><!-- .site-main -->
                    </div><!-- .content-area -->
                </div>
			</div>
		</div>
	</div>


<?php
get_footer();?>