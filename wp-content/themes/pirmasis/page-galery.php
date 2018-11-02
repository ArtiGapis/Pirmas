<?php /*
Template Name: galery
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div >
						<?php get_sidebar(); ?>
					</div>
				</div>
                <div class="col-md-10 container-white">
                    <h1><?php the_title(); ?></h1>
                    <div class="rte">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>
		</div>
	</div>
				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>