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
	</head>

    <body <?php body_class( $class ); ?>>
    <header class="header-wraper">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 logo-holder">
                    <a class="logo" href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo/logo.png" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <div class="col-sm-10">
                    <nav class="header-runing-text">
                        <div class="run"><marquee behavior="scroll" direction="left">Telekomunikacija – informacijos perdavimas tolimais atstumais. Nuotoliniu būdu siunčiamai informacijai priimti naudojami tokie prietaisai kaip telefonas, radijo imtuvas, televizorius, kompiuteris. Informacija gali būti perduodama įvairių dažnių radijo bangomis arba laidais sklindančiais elektromagnetiniais impulsais.</marquee></div>
                    </nav>
                </div>
            </div>
        </div>
    </header>







		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		