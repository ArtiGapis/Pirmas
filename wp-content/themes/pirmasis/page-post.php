<?php /*
Template Name: post
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
                <div class="col-md-8 container-white">
                    <div class="rte">
                        <div id="wrap-page">
                            <div class="post-wrap">
                                <div class="rte">
	                                <?php
	                                global $post;
	                                $args = array( 'posts_per_page' => 3 );
	                                $lastposts = get_posts( $args );
	                                foreach ( $lastposts as $post ) :
		                                setup_postdata( $post ); ?>
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		                                <?php the_content(); ?>
	                                <?php endforeach;
	                                wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div >
			            <?php
			            $i = 0;
			            $args = array( 'post_type' => 'right-menu', 'posts_per_page' => 5 );
			            $loop = new WP_Query( $args );
			            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="right-menu-wraper">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="menu-foto">
							            <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="menu-title">
							            <?php the_title(); ?>
                                    </div>
                                </a>
                            </div>
				            <?php $i++; endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>