
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Unbox
 */
get_header(); ?>
<div class="clearfix"></div>

<?php
//if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//get_header('shop'); ?>

<div class="single-productpage"> 
	<main id="rg-inner-bx" class="area-inner">
		<div class="container">
			<div id="page">
				<div class="col-md-12">				
					<div class="innerpage-whitebox">
						<article id="content" class="article">
							<div id="content_box" >
								<?php do_action('woocommerce_before_main_content'); ?>
									<?php while ( have_posts() ) : the_post(); ?>
										<?php wc_get_template_part( 'content', 'single-product' ); ?>
									<?php endwhile; // end of the loop. ?>
								<?php //do_action('woocommerce_after_main_content'); ?>
							</div>
						</article>
						<?php /*do_action('woocommerce_sidebar');*/ ?>
						<?php //get_sidebar(); ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #primary -->	
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
