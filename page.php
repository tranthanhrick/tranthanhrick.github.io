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
 * @package Glorious Spa Pro
 */
get_header(); ?>
<header class="rg-inner-pg-bx area-inner">
    <div>
        <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
        <?php
            if (!empty($image)){
                echo '<img src="'.$image.'" class="ht-page-header-img" />';
            }
        ?>
    </div>
    <div class="container">
        <?php the_title( '<h1 class="rg-innerp-title">', '</h1>' ); ?>
        <div class="clearfix"></div>
    </div>
     <?php if( get_theme_mod('breadcrumb_button_display','show' ) == 'show') :
        ?>
        <div class="breadcrumbbox">
            <div class="container">
                <div class='button'><?php lz_fitness_lite_the_breadcrumb(); ?></div>
                <!--  <?php //lz_fitness_lite_the_breadcrumb(); ?> -->
            </div>
        </div>

    <?php endif ?>    
</header><!-- .entry-header --> 



<main id="rg-inner-bx" class="area-inner">
	<div class="container">
		<div id="content-box" class="rg-innerpagebx">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			<?php endwhile; // End of the loop. ?>
            <div class="clearfix"></div>
		</div><!-- #main -->
		<div class="clearfix"></div>
		
		<div class="pagingation">
    		<?php lzGetPagination($query);?>
		</div>
	</div>
</main><!-- #main -->
<?php get_footer(); ?>
