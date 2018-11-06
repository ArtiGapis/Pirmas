<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="UTF-8" />
        <title>
	        <?php the_title(); ?>
        </title>
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php wp_head(); ?>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/itbextra.css" media="screen" />

	</head>


    <body <?php body_class( $class ); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 logo-holder">
                    <a class="logo" href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <div class="col-sm-10">
                    <nav class="navbar navbar-default pull-right" role="navigation">
                        <div class="header-title-post"><marquee behavior="scroll" direction="left"><?php the_title(); ?></marquee></div>
                    </nav>
                </div>
            </div>
        </div>
    </header>







		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		