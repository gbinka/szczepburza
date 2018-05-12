<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>


<style>
	#header-logo
	{
		background-color: #203581;
		padding: 0px !important;
		margin: 0px !important;
	}
	.szczepburza
	{
		font-size: 80px;
		letter-spacing: 3px;
		text-align: center;
	}
	
	/* telefon i mniejsze */
	@media all and (max-width:767.99px) 
	{.szczepburza{display: none;}}
</style>




<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="ancient-browser-alert">You are using an <:>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
		<![endif]-->
		
		
		
		
		
		<div class="container page-container">
			<?php do_action('before'); ?> 
			<header role="banner">
				<center>
					<div id="header-logo">
						
			
							
								
					</div>
				</center>
				</div><!--.site-branding-->
				
				<div class="row main-navigation">
					<div class="col-md-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
									<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="collapse navbar-collapse navbar-primary-collapse">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
								<?php dynamic_sidebar('navbar-right'); ?> 
							</div><!--.navbar-collapse-->
						</nav>
					</div>
				</div><!--.main-navigation-->
			</header>
			
			
			<div id="content" class="row row-with-vspace site-content">
