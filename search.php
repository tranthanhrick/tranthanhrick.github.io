<?php
/**
* The template for displaying search results pages.
*
* @package Glorious Spa Pro
*/

get_header(); ?>
<header class="page-main-header">
	<div>
		<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
		<img src="<?php echo !empty($image)?$image : get_template_directory_uri().'/images/default-gray.png';?>" class="ht-page-header-img" alt="<?php the_title();?>" />
	</div>
	<div class="container">
		<h1 class="ht-main-title"><?php printf( esc_html__( 'Search Results for: %s', 'total' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php do_action( 'total_breadcrumbs' ); ?>
		<div class="clearfix"></div>
	</div>
</header><!-- .entry-header -->
<div class="breadcrumbbox">
	<div class="container">
		<?php lz_fitness_lite_the_breadcrumb(); ?>
	</div>
</div>
<main id="innerpage-box">
	<div class="container">
		<div id="content-box" class="col-md-9 innerpage-whitebox">
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
					?>
				<?php endwhile; ?>
				<?php 
				the_posts_pagination( 
					array(
						'prev_text' => __( 'Prev', 'total' ),
						'next_text' => __( 'Next', 'total' ),
					)
				); 
				?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</div><!-- #main -->
		<div class="col-md-3">
			<?php  get_sidebar(); ?>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="pagingation">
					<?php lzGetPagination($query);?>
				</div>
			</div>
		</div>
	</div>
</main><!-- #primary -->
<?php get_footer();
