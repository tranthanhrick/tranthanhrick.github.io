<?php 
/**
 * The main template file.
 *
 * Used to display the homepage when home.php doesn't exist.
 */
?>
<?php get_header(); ?>
<header class="rg-inner-pg-bx area-inner static-front-img">
	<div>
		<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
		<img src="<?php echo !empty($image)?$image : get_template_directory_uri().'/images/default-gray.png';?>" class="ht-page-header-img" alt="<?php the_title();?>" />
	</div>
	<div class="container">
		<?php the_title( '<h1 class="rg-innerp-title">', '</h1>' ); ?>
		<div class="clearfix"></div>
	</div>
</header><!-- .entry-header -->


<main id="rg-inner-bx" class="area-inner">
	<div class="container">
    <div id="masonry" class="col-md-12 col-sm-12 col-xs-12">
      <?php 
      $current_page = max(1, get_query_var('paged'));
      $lz_fitness_blog_post_count = get_theme_mod('lz_fitness_blog_post_count', 3 );
      $lz_fitness_blog_cat_exclude = get_theme_mod('lz_fitness_blog_categories');
      $lz_fitness_blog_cat_exclude = explode(',', $lz_fitness_blog_cat_exclude);
      $excerpt = get_theme_mod('lz_fitness_blog_categories_settings');
      $args = array(
        'paged'=> $current_page,
        'category__not_in' => $lz_fitness_blog_cat_exclude
      );
      $query = new WP_Query($args);
      if($query -> have_posts()):
        while($query -> have_posts()) : $query -> the_post();
          $lz_fitness_image = wp_get_attachment_image_src(get_post_thumbnail_id() , 'total-blog-thumb');
          $img = (has_post_thumbnail())?esc_url($lz_fitness_image[0]):get_template_directory_uri().'/images/default.png';
          ?>
          <div class="post card-container col-md-12 wow fadeInUp inner-left-blg" data-wow-delay="0.2s">
            <div class="rg-innerblogs">
              <div class="dlab-post-title ">
                <h2 class="post-title"><?php the_title(); ?></h2>
              </div>
              <div class="dlab-post-meta">
                <ul class="d-flex align-items-center">
                  <li class="post-date"> <strong><?php echo get_the_date( 'M j, Y' ); ?></strong></li>
                  <!-- <li class="post-author">By <a href="#"><?php //echo get_the_author(); ?></a> </li> -->
                  <li class="post-comment"><?php echo $my_var = get_comments_number(); ?> Comments</li>
                  <li>Categories: <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="blog-post blog-grid blog-rounded blog-effect1">
              <div class="col-md-3 col-sm-3 col-xs-12 dlab-post-media dlab-img-effect zoom-slow padding0"> 
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo $img; ?>" alt="<?php the_title(); ?>"></a> 
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 dlab-info p-a20">

                  <p><?php 
                  if(has_excerpt()){
                    echo get_the_excerpt();
                  }else{
                    echo lz_fitness_excerpt( get_the_content() , 430 );
                  }
                  ?></p>

                  <div class="col-md-6 col-sm-6 col-xs-8 dlab-post-readmore blog-share text-left padding0"> 
                    <a href="<?php the_permalink(); ?>" title="READ MORE" rel="bookmark" class="btn btn-lg blue pages-btn1"><?php _e('Continue Reading', 'total'); ?>
                    
                  </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 share-btn text-right padding0">
                  <ul class="clearfix">
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="site-button sharp" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>&source=<?php the_title();?>" class="site-button sharp" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/share?url=<?php the_permalink();?>&amp;text=<?php the_title();?>" class="site-button sharp" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li> 
                  </ul>
                </div>
                
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
		
		<div class="clearfix"></div>
		
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="pagingation">
				    <?php lzGetPagination($query);?>
				</div>
			</div>
		</div>
	</div>
</main>
		<?php get_footer(); ?>
