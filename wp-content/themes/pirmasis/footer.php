		<?php wp_footer();?>
        <div class="owl-carousel owl-theme">
			<?php
			$i = 0;
			$args = array( 'post_type' => 'logo', 'posts_per_page' => 9999 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div >
                    <?php the_post_thumbnail(); ?>
                </div>

				<?php $i++; endwhile; wp_reset_postdata("icon-list"); ?>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-text-wraper">© 2018 Arturas, Inc.</div>
                    </div>
                </div>
            </div>
        </footer>
	</body>
</html>