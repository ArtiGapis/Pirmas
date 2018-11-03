<?php /*
Template Name: Homepage
Description: A Page Template for custom page.
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
					<div class="rte">
                        <div id="wrap-page">
                            <div class="post-wrap">
								<?php query_posts(array('post_type' => 'post','orderby' => 'date'));
								if(have_posts()) : while(have_posts()) :the_post();?>


                                    <h3><?php the_title(); ?></h3>
									<?php  the_content();  ?>


								<?php endwhile;?>

								<?php else : ?>

								<?php endif; wp_reset_query();?>
	                            <?php comments_template();?>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>