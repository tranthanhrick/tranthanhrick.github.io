<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Unbox
 */

if ( ! function_exists( 'lz_fitness_lite_post_navigation' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function lz_fitness_lite_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	// $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	// $next     = get_adjacent_post( false, '', false );

	// if ( ! $next && ! $previous ) {
	// 	return;
	// }
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<!--Start Pagination-->
        <?php $lz_fitness_lite_nav_type = get_theme_mod('lz_fitness_lite_pagination_type','1');
        if (!empty($lz_fitness_lite_nav_type)) {
			$lz_fitness_lite_pagination = get_the_posts_pagination( array(
			    'mid_size' => 2,
			    'prev_text' => '<i class="publishable-icon icon-angle-left"></i>' ,
			    'next_text' => '<i class="publishable-icon icon-angle-right"></i>',
			) );
			echo $lz_fitness_lite_pagination;
        } else { ?>
			<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'Resume Design Pro' ); ?></h2>
			<div class="pagination nav-links">
				<?php if ( get_next_posts_link() ) : ?>
					<div class="nav-previous"><?php next_posts_link( '<i class="publishable-icon icon-angle-left"></i>'.__( ' Older posts', 'Resume Design Pro' ) ); ?></div>
				<?php endif; ?>

				<?php if ( get_previous_posts_link() ) : ?>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts ', 'Resume Design Pro' ).' <i class="publishable-icon icon-angle-right"></i>' ); ?></div>
				<?php endif; ?>
			</div>
		<?php } ?>
	</nav><!--End Pagination-->
	<?php
}
endif;

if ( ! function_exists( 'lz_fitness_lite_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function lz_fitness_lite_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'Resume Design Pro' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'Resume Design Pro' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'lz_fitness_lite_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function lz_fitness_lite_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( ', ' );
		if ( $categories_list && lz_fitness_lite_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'Resume Design Pro' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', ', ');
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'Resume Design Pro' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'Resume Design Pro' ), esc_html__( '1 Comment', 'Resume Design Pro' ), esc_html__( '% Comments', 'Resume Design Pro' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'Resume Design Pro' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function lz_fitness_lite_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'lz_fitness_lite_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'lz_fitness_lite_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so lz_fitness_lite_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so lz_fitness_lite_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in lz_fitness_lite_categorized_blog.
 */
function lz_fitness_lite_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'lz_fitness_lite_categories' );
}
add_action( 'edit_category', 'lz_fitness_lite_category_transient_flusher' );
add_action( 'save_post',     'lz_fitness_lite_category_transient_flusher' );
