<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
	<body>
	<?php if(is_front_page()) : ?>
	<div class="page-container">
		<div class="container-fluid top-container text-uppercase" style="background-image:url(<?php the_field("background")?>);" alt="background-img" />
   			<a class="bttn2" href="<?php the_field('buttontop'); ?>" title="book now"><?php the_field('buttontop-tekstas'); ?></a>
      		<div class="clearfix"></div>
      	    <div class="row">
   				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
      				<img class="logo" src="<?php the_field('logo')?>" alt="logo-img" />
    			</div>
    			<nav class=" col-xs-9 col-sm-9 col-md-10 col-lg-10 navbar navbar-expand-md navbar-light" style="float: right;">
		         
		          	<button style="z-index: 1;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navi" aria-controls="navi" aria-expanded="false" aria-label="meniu">
		            	<span class="navbar-toggler-icon"></span>
		          	</button>
		          	<?php wp_nav_menu(array(
		         	 'menu' => 'Meniu', 
		         	 'conainer' => false,
		        	 'container_class' => 'collapse navbar-collapse', 
		        	 'container_id' => 'navi',
		       		 'menu_class' => 'navbar-nav mr-auto navbar-right',
		          	)); ?>
		        </nav>
		  	</div>
    <?php else : ?> <div class="page-container" style="background-color: grey;"> 
      					<div class="row">
    						<nav class=" col-xs-9 col-sm-9 col-md-10 col-lg-10 navbar navbar-expand-md navbar-light" style="float: right;">
					          
								<button style="z-index: 1;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navi" aria-controls="navi" aria-expanded="false" aria-label="meniu">
					            <span class="navbar-toggler-icon"></span>
					          	</button>
					          <?php wp_nav_menu(array(
					          'menu' => 'Meniu', 
					          'conainer' => false,
					          'container_class' => 'collapse navbar-collapse', 
					          'container_id' => 'navi',
					          'menu_class' => 'navbar-nav mr-auto navbar-right',
					          )); ?>
					        </nav>
						</div>
   <?php endif; ?>

