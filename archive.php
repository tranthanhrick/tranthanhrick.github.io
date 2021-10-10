<?php  
/**
 * The template for displaying archive pages.
 *
 * Used for displaying archive-type pages. These views can be further customized by
 * creating a separate template for each one.
 *
 * - author.php (Author archive)
 * - category.php (Category archive)
 * - date.php (Date archive)
 * - tag.php (Tag archive)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php get_header(); ?>
<header class="rg-inner-pg-bx area-inner"> 

	<div class="container">
		<?php the_archive_title( '<h1 class="rg-innerp-title">', '</h1>' ); ?>
		<div class="clearfix"></div>
	</div>
   
</header><!-- .entry-header -->

<main id="rg-inner-bx" class="area-inner">
	<div class="container">
		 <div id="masonry" class="col-md-12">
					<div class="post card-container col-md-12 wow fadeInUp inner-left-blg" data-wow-delay="0.2s">
						
				<?php if ( have_posts() ) :
					$lz_fitness_lite_full_posts = get_theme_mod('lz_fitness_lite_full_posts');
					while ( have_posts() ) : the_post();
						lz_fitness_lite_archive_post();
					endwhile;
					lz_fitness_lite_post_navigation();
				endif; ?>
					
				</div>
					
		</div> 
		
		<div class="clearfix"></div>
		
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- <div class="pagingation">
				    <?php //lzGetPagination($query);?>
				</div> -->
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
