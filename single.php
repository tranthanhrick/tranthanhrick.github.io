<?php  
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * 
 */
$lz_fitness_lite_single_breadcrumb_section = get_theme_mod('lz_fitness_lite_single_breadcrumb_section', '1');
$lz_fitness_lite_single_tags_section = get_theme_mod('lz_fitness_lite_single_tags_section', '1');
$lz_fitness_lite_authorbox_section = get_theme_mod('lz_fitness_lite_authorbox_section', '1');
$lz_fitness_lite_relatedposts_section = get_theme_mod('lz_fitness_lite_relatedposts_section', '1');

get_header(); ?> 
<header class="rg-inner-pg-bx area-inner">
    <div class="container">
        <?php the_title( '<h1 class="rg-innerp-title">', '</h1>' ); ?>
        <div class="clearfix"></div>
        <div class="dlab-post-meta">
            <ul class="d-flex align-items-center">
              <li class="post-date"> <strong><?php echo get_the_date( 'M j, Y' ); ?></strong></li>
              <!-- <li class="post-author">By <a href="#"><?php //echo get_the_author(); ?></a> </li> -->
              <li class="post-comment"><?php echo $my_var = get_comments_number(); ?> Comments</li>
              <li>Categories: <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></li>
          </ul>
      </div>
  </div>
</header><!-- .entry-header -->
<main id="rg-inner-bx" class="area-inner"> 
    <div class="container">
        <div id="content-box" class="rg-innerpagebx">


            <article class="article">       
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                    <div class="single_post">


                       <!-- Start Content -->
                       <div id="content" class="post-single-content box mark-links">
                        <?php the_content(); ?>

                        <?php if( get_theme_mod('postsocialsshare_button_display','show' ) == 'show') :
                            ?>
                            <div class="socialMedia socialMedia-single-bottom text-right">

                                <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12 share-btn padding0">
                                      <?php if( get_theme_mod('postsocialsshare_button_display','show' ) == 'show') :
                                        ?>
                                        <ul class="clearfix">
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="site-button sharp" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>&source=<?php the_title();?>" class="site-button sharp" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="https://twitter.com/share?url=<?php the_permalink();?>&amp;text=<?php the_title();?>" class="site-button sharp" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            
                                        </ul>
                                    <?php endif ?> 
                                </div>
                            </div>
                        </div>
                    <?php endif ?>   

                    <?php if($lz_fitness_lite_single_tags_section == '1') { ?>
                        <!-- Start Tags -->
                        <div class="tags"><?php the_tags('<span class="tagtext">'.__('Tags','Glorious Spa Pro').':</span>',', ') ?></div>
                        <!-- End Tags -->
                    <?php } ?>
                </div><!-- End Content -->


                <?php if($lz_fitness_lite_authorbox_section == '1') { ?>
                            <!-- Start Author Box 
                            <div class="postauthor">
                                <h4><?php _e('About The Author', 'Glorious Spa Pro'); ?></h4>
                                <?php //if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '85' );  } ?>
                                <h5><?php //the_author(); ?></h5>
                                <p><?php //the_author_meta('description') ?></p>
                            </div>
                            <!-- End Author Box -->
                        <?php }?>  
                        <?php comments_template( '', true ); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </article>
        <!-- End Article -->
        <!-- Start Sidebar -->
        <?php // get_sidebar(); ?>
        <!-- End Sidebar -->
    </div>
</div>
</main>
<?php get_footer(); ?>
