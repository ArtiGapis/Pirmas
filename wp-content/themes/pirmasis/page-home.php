<?php /*
Template Name: Homepage
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
					<div class="rte">
                        <div id="wrap-page">
                            <div class="post-wrap">
                                <div class="rte">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/bekas1.jpg"></div>
                                        <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/bekas2.jpg"></div>
                                    </div>
		                            <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>