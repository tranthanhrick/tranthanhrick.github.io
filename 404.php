<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Unbox
 */

get_header(); ?>
<header class="page-main-header">
	<div>
		<?php // $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
		<img src="<?php echo get_template_directory_uri().'/images/default-gray.png';?>" class="ht-page-header-img" alt="<?php the_title();?>" />
	</div>
	<div class="ht-container">
		<h1 class="ht-main-title"><?php esc_html_e( '404 Error', 'total' ); ?></h1>
		<?php do_action( 'total_breadcrumbs' ); ?>
	</div>
</header><!-- .entry-header -->
<div class="ht-container">
	<div class="oops-text"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'total' ); ?></div>
	<span class="error-404"><?php esc_html_e( '404', 'total' ); ?></span>
</div>
<?php get_footer(); ?>