<?php /*
Template Name: contact
Description: A Page Template for custom page.
*/
get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="left-wrap">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<div class="col-md-10 container-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <?php echo do_shortcode("[contact-form-7 id=\"134\" title=\"Susisiekti su mumis\"]"); ?>
                            </div>
                            <div class="col-md-8">
	                            <?php the_content(); ?>
                                <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
                                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			                            <?php dynamic_sidebar( 'home_right_1' ); ?>
                                    </div><!-- #primary-sidebar -->
	                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>