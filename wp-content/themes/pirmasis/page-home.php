<?php /*
Template Name: Homepage
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'main_menu',
		'menu'           => __( 'Main Menu', 'arix' ),
		'depth'          => 2,
		'fallback_cb'    => false,
		'items_wrap'     => '
				<a class="mobile-nav open" href="#nav">
					<svg viewBox="0 0 24 24">
					<rect x="3" y="11" width="18" height="2" />
					<rect x="3" y="16" width="18" height="2" />
					<rect x="3" y="6" width="18" height="2" />
					</svg>
				</a>
				<a class="mobile-nav close" href="#">
					<svg viewBox="0 0 24 24">
					<rect x="11" y="3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -4.9706 12)" width="2" height="18" />
					<rect x="3" y="11" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -4.9706 12)" width="18" height="2" />
					</svg>
				</a>
				<ul id="%1$s" class="%2$s">%3$s</ul>',
	) );
	?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
                <div class="col-md-2">
                    <div >
						<?php get_sidebar(); ?>
                    </div>
                </div>

                <div class="col-md-10 container-white">
					<div class="rte">
                        <div id="wrap-page">
                            <div class="left">

								<?php query_posts(array('post_type' => 'post','orderby' => 'date'));
								if(have_posts()) : while(have_posts()) : the_post(); ?>

									<?php the_post_thumbnail(); ?>
                                    <h3><?php the_title(); ?></h3>
									<?php the_content(); ?>

								<?php endwhile; ?>
								<?php else : ?>

                                    <p>Atsiprašome rezultatų nerasta</p>

								<?php endif; wp_reset_query(); ?>

                            </div>
                        </div>
                    </div>
			</div>
		</div>
	</div>
				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>