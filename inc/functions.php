<?php


    function serviceShortCode($pageId = null, $isCustomizer = false, $i = null) {

      ob_start();

      $args = array('post_type' => 'our-service');
      if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
      }
      $args['posts_per_page'] = -1;
      $colCls = '';
    // if($isCustomizer == true){
      $cols = get_theme_mod('rg_service_npp_count',7);  
      ++$cols;
      switch ($cols) {
       case 1:
       $colCls = 'col-md-12 col-sm-12';
       break;
       case 2:
       $colCls = 'col-md-6 col-sm-6';
       break;
       case 3:
       case 5:
       case 6: 
       case 9: 
       case 15:
       $colCls = 'col-md-4 col-sm-6';
       break;
       case 4: 
       case 7: 
       case 8: 
       case 10:
       case 11:
       case 12:
       case 13:
       case 14:
       case 16:
       case 17:
       case 18:                                
       $colCls = 'col-md-3 col-sm-6';
       break;
       default: 
       $colCls = 'col-md-3 col-sm-6';
       break;
     }
    // }
     $text = '';
     $query = new WP_Query($args);
     if ($query->have_posts()):
      $postN = 0;

      while ($query->have_posts()) : $query->the_post();
        $lz_fitness_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-project-thumb');
        $post = get_post();


        ?>
        
        <div class="<?php echo $colCls;?>  rd-pd10 rg-service-bx wow fadeInUp">

          <div class="inner-ser-bx">
           <?php
           if (has_post_thumbnail()) {
            $image_url = $lz_fitness_image[0];
          } else {
            $image_url = get_template_directory_uri() . '/images/project.jpg';
          }
          ?>                                                          
          <img class="secondry-bg img-responsive" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />

          <div class="ser-content">
            <h3 class="post-title"><?php the_title(); ?></h3>

            <p class="description">
              <?php 
              if(has_excerpt()){
                echo get_the_excerpt();
              }else{
                echo lz_fitness_excerpt( get_the_content() , 100 );
              }
              ?>
            </p>
            <ul class="ser_social">
              <li><a href="<?php echo esc_url(get_permalink()); ?>">~</a></li>
            </ul>
          </div>
          <div class="team-prof">
            <h3 class="post-title"><?php the_title(); ?></h3>

          </div>
        </div>

        
      </div> 
   

    <?php
  endwhile;
  $text = ob_get_contents();
  ob_clean();
endif;
wp_reset_postdata();
return $text;
}
