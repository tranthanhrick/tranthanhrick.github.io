<?php     
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Glorious Spa Pro
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://use.fontawesome.com/18a9c36ed1.js"></script>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.slim.min.js" crossorigin="anonymous"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"  ></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js" ></script>

	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="main-container">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Resume Design Pro' ); ?></a> -->
		<div id="loading-area"><div class="la-anim-10"></div></div>
		<!-- header -->
		<header class="site-header header-transparent header mo-left header-seo">
			<!-- main header -->

			<div class="col-md-12 col-sm-8 col-xs-8"> 
				
				<?php 
		if( get_theme_mod('sec_completeheadersectionTmargin',true) ) {
			$sec_completeheadersectionTmargin = 'margin-top:'.esc_attr(get_theme_mod('sec_completeheadersectionTmargin')).';';
		}
		if( get_theme_mod('sec_completeheadersectionBmargin',true) ) {
			$sec_completeheadersectionBmargin = 'margin-bottom:'.esc_attr(get_theme_mod('sec_completeheadersectionBmargin')).';';
		}
		if( get_theme_mod('sec_completeheadersectionLmargin',true) ) {
			$sec_completeheadersectionLmargin = 'margin-left:'.esc_attr(get_theme_mod('sec_completeheadersectionLmargin')).';';
		}
		if( get_theme_mod('sec_completeheadersectionRmargin',true) ) {
			$sec_completeheadersectionRmargin = 'margin-right:'.esc_attr(get_theme_mod('sec_completeheadersectionRmargin')).';';
		}
		?>		
				<div class="logobox" style="<?php echo esc_attr($sec_completeheadersectionTmargin); ?>" "<?php echo esc_attr($sec_completeheadersectionBmargin); ?>" "<?php echo esc_attr($sec_completeheadersectionLmargin); ?>" "<?php echo esc_attr($sec_completeheadersectionRmargin); ?>">
					
					<?php 
					if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
						the_custom_logo();
				else : 
					if ( is_front_page() ) : ?>
						<h1 class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>
					<?php endif; ?>
					<!-- .site-branding -->
				</div>
				<p class="ht-site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="main-tagline"><?php bloginfo( 'description' ); ?></a></p> 
			</div>

			<div class="col-sm-4 col-xs-4 sticky-header main-bar-wraper navbar-expand-lg">
				<div class="main-bar clearfix ">
					<div class="col-md-offset-2 top-bar-head">

						<!-- nav toggle button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- main nav -->


						<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">

							<ul class="nav navbar-nav ">	
								<?php 
								wp_nav_menu( array( 
									'theme_location' => 'primary', 
									'container_class' => 'ht-menu clearfix' ,
									'menu_class' => 'ht-clearfix wow',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								) ); 
								?>
							</ul>

							<div class="clearfix"></div>
							<?php
							$facebook = get_theme_mod('rd_lbl_header_fb', '//facebook.com/');
							$twitter = get_theme_mod('rd_lbl_header_tw', '//twitter.com/');
							$linkdin = get_theme_mod('rd_lbl_header_linkdin', 'https://in.linkedin.com/');
							?>
							<ul class="list-inline m-a0">
								<?php if(!empty($facebook)){ ?>
									<li><a href="<?php echo $facebook ?>" class="site-button facebook circle " target="_blank"><i class="fa fa-facebook"></i></a></li>
								<?php }?>

								<?php if(!empty($twitter)){ ?>
									<li><a href="<?php echo $twitter ?>" class="site-button twitter circle " target="_blank"><i class="fa fa-twitter"></i></a></li>
								<?php }?>

								<?php if(!empty($linkdin)){ ?>
									<li><a href="<?php echo $linkdin ?>" class="site-button linkdin circle " target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<?php }?>

							</ul>



						</div>

					</div>
				</div>
			</div>
			<!-- main header END -->
			<div class="clearfix"></div>

		</header><!-- #masthead -->

	</div>
	<div class="content-wrapper">
