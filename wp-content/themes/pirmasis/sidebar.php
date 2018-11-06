<nav class="navbar navbar-default pull-right" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
			<span class="sr-only"><?php _e("Toggle navigation", "itb"); ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class="show-desctop">
		<?php
		$args = array(
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
			'container_id'    => 'main-navigation',
			'menu_class'      => 'nav navbar-nav navbar-left',
			'menu_id'         => '',
			'theme_location' => 'main_navigation'
		);

		wp_nav_menu($args); ?>
	</div>

	<div class="show-mobile">
		<div class="navbar-ex2-collapse collapse mob-men" aria-expanded="false">
			<?php
			$args = array(
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse ',
				'container_id'    => 'cssmenu',
				'menu_class'      => '',
				'menu_id'         => '',
				'theme_location' => 'mobile_navigation'
			);

			wp_nav_menu($args); ?>
		</div>
	</div>
</nav>
