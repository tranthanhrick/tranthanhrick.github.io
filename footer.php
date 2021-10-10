<?php   
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Unbox
 */

?>

<footer id="rg-footer" class="area-inner"> 
	<div class="footer-overlay"></div>
	<?php if(is_active_sidebar('lz-fitness-footer1') || is_active_sidebar('lz-fitness-footer2') || is_active_sidebar('lz-fitness-footer3') || is_active_sidebar('lz-fitness-footer4')){ ?>
		
		<?php 
		if( get_theme_mod('sec_footersectionTpadding',true) ) {
			$sec_footersectionTpadding = 'padding-top:'.esc_attr(get_theme_mod('sec_footersectionTpadding')).';';
		}
		if( get_theme_mod('sec_footersectionBpadding',true) ) {
			$sec_footersectionBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('sec_footersectionBpadding')).';';
		}
		if( get_theme_mod('sec_footersectionLpadding',true) ) {
			$sec_footersectionLpadding = 'padding-left:'.esc_attr(get_theme_mod('sec_footersectionLpadding')).';';
		}
		if( get_theme_mod('sec_footersectionRpadding',true) ) {
			$sec_footersectionRpadding = 'padding-right:'.esc_attr(get_theme_mod('sec_footersectionRpadding')).';';
		}
		?>	
 <div class="social-profile-icons text-center">
					<?php
						$facebook = get_theme_mod('footer_fb', '//facebook.com/');
						$twitter = get_theme_mod('footer_tw', '//twitter.com/');
						$linkedin = get_theme_mod('footer_linkedin', 'https://www.linkedin.com/');

						$rg_footer_title = get_theme_mod('rg_footer_title', 'Follow Us');
						?>
						<h2><?php echo($rg_footer_title); ?></h2>
					<ul class="text-center">
						<?php if(!empty($facebook)){ ?>
								<li><a href="<?php echo $facebook ?>" class="site-button facebook circle " target="_blank"><i class="fa fa-facebook"></i></a></li>
							<?php }?>
						<?php if(!empty($twitter)){ ?>
								<li><a href="<?php echo $twitter ?>" class="site-button twitter circle " target="_blank"><i class="fa fa-twitter"></i></a></li>
							<?php }?>
							
							<?php if(!empty($linkedin)){ ?>
								<li><a href="<?php echo $linkedin ?>" class="site-button linkedin circle " target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<?php }?>
					</ul>
				</div>

		<div id="rg-main-footer" style="<?php echo esc_attr($sec_footersectionTpadding); ?>" "<?php echo esc_attr($sec_footersectionBpadding); ?>" "<?php echo esc_attr($sec_footersectionLpadding); ?>" "<?php echo esc_attr($sec_footersectionRpadding); ?>">
			
			<div class="container"> 
				
				<div class="rg-footer-bx1">
					<div class="col-md-5 col-sm-12 rg-footer-bx2">
						
							<?php if(is_active_sidebar('lz-fitness-footer1')): 
								dynamic_sidebar('lz-fitness-footer1');
							endif;
							?>	
						
					</div>	
				<!-- 	<div class="col-md-8 col-sm-8 rg-footer-bx3"> -->
						<div class="col-md-2 col-sm-12 rg-footer-bx4 rg-menu-bx">
							<?php if(is_active_sidebar('lz-fitness-footer2')): 
								dynamic_sidebar('lz-fitness-footer2');
							endif;
							?>	
						</div>
						
						<div class="col-md-2 col-sm-12 rg-footer-bx5">
							<div class="rg-footer-bx4">
								<?php if(is_active_sidebar('lz-fitness-footer3')): 
									dynamic_sidebar('lz-fitness-footer3');
								endif;
								?>	
							</div>
						</div>
						<div class="col-md-3 col-sm-12 rg-footer-bx5">
							<div class="rg-footer-bx4">
								<?php if(is_active_sidebar('lz-fitness-footer4')): 
									dynamic_sidebar('lz-fitness-footer4');
								endif;
								?>	
							</div>
						</div>
					<!-- </div>		 -->		
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<?php } ?>
	<div id="gt-footer-bottom">
		<?php
		$footercopyright = get_theme_mod('rg_footer_copyrighttext', 'Copyright © Spa Wordpress Themes - Unbox Themes');
		
		$footercopyright1 = get_theme_mod('rg_footer_copyrighttext1', 'Terms & Condition');
		$footercopyrightlink = get_theme_mod('rg_footer_copyrightlink', '');


		$footercopyright2 = get_theme_mod('rg_footer_pri1', 'Privacy');
		
		?>
		<div class="container">
			<?php if($footercopyright){ ?>
				<div class="col-md-12 col-sm-12 ht-site-info text-left">
					<!-- 	<?php //lz_fitness_lite_copyrights_credit();?> -->
					Copyright © <a href="https://www.unboxthemes.com/wp-themes/spa-wordpress-premium-theme/">Spa Wordpress Themes </a> - Unbox Themes
				</div><!-- #site-info -->
			<?php } ?>
			
		</div>
	</div>
</footer><!-- #colophon -->
<script type="text/javascript">
	if(jQuery(window).width() >= 1170){
		new WOW().init();
	}
</script>
<script>
	$(window).scroll(function() {
		var height = $(window).scrollTop();
		if (height > 100) {
			$('#back2Top').fadeIn();
		} else {
			$('#back2Top').fadeOut();
		}
	});
	$(document).ready(function() {
		$("#back2Top").click(function(event) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});

	});
</script>
<?php wp_footer(); ?>
<a id="back2Top" title="Back to top" href="#"> &#10148; </a>
</body>
</html>
