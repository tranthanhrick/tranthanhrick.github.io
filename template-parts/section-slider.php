<?php  

?>
<?php $showContent = get_theme_mod('slider_section_show_content', 'on'); ?>

<div id="ht-home-slider-section" class="area-inner">
	
	<div class="owl-carousel owl-theme">
		<?php
		$args = array( 'post_type' => 'slider', 'orderby'   => 'id', 'order' => 'DESC', );
		if(!empty($pageId)){
			$args['page_id'] = absint($pageId);

		}
		$text = '';
		$query = new WP_Query($args);
		if($query->have_posts()){
			while($query->have_posts()) : $query->the_post(); 
				$pageLink = '';
				$slider_btn_link = get_post_meta($post->ID,'slider_btn_link',false);
				$sliderBtnTxt = get_post_meta($post->ID,'sliderBtnTxt',false);
				if(!empty($slider_btn_link) && is_array($slider_btn_link)){
					$pageLink = esc_url(get_permalink($slider_btn_link[0]));
				}
				if(!empty($sliderBtnTxt) && is_array($sliderBtnTxt)){
					$pageLinkTxt = $sliderBtnTxt[0];
				}else{
					$pageLinkTxt = 'VIEW PROJECTS';
				}
				?>
				<div class="item">
					<?php 
					if( get_theme_mod('pages_slideopacity',true) ) {
						$pages_slideopacity = 'opacity:'.esc_attr(get_theme_mod('pages_slideopacity')).';';
					}

					?>
					<div class="ht-slide-overlay" style="<?php echo esc_attr($pages_slideopacity); ?>"></div>  
					<?php 
					if(has_post_thumbnail()){
						$total_slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');	
						echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($total_slider_image[0]).'">';
					}
					if($showContent == 'on'){
						?>
						<div class="ht-slide-caption">
							<div class="row">
							<div class="banner-text">
								<h1 id="title-behind">
									<?php 
										if(has_excerpt()){
											echo get_the_excerpt();
										}else{
											echo lz_fitness_excerpt( get_the_content() , 100 );
										}
										?>
								</h1>
								<h1 id="title-the"><?php echo (get_the_title()); ?></h1>
								<h1 id="title-lens"><?php echo (get_the_content()); ?></h1>
									<?php 
							if(!empty($pageLink)){ ?> 
								<div id="btn">
									<a class="btn btn-lg blue slide-btn wow fadeInUp" href="<?php echo $pageLink; ?>">
										<?php echo ($pageLinkTxt); ?>
									</a>
								</div>
							<?php }?>
							</div>
						</div>
			
						</div>
					<?php }?>
				</div>
				<?php
			endwhile;
		}else{ 
			for($i=0;$i<6;$i++){?>
				<div class="item">
					<div class="ht-slide-overlay"></div>
					<?php echo '<img alt="Slider" src="'. esc_html(get_template_directory_uri()) .'/images/slider.jpg">';?>					
					<?php if($showContent == 'on'){?>
						<div class="ht-slide-caption">
						<div class="row">
							<div class="banner-text">
								<h1 id="title-behind">HEADING HERE</h1>
								<h1 id="title-the">Treat <span>Yourself</span></h1>
								<h1 id="title-lens">Vivamus feugiat, lacus eu suscipit mattis tortori aliquam leo, quis laoreet.</h1>
								<div id="btn"><a class="btn btn-lg blue slide-btn wow fadeInUp" href="">
									<?php  _e( 'READ MORE', 'lz-fintess-premium' ); ?>
								</a></div>
							</div>
						</div>
					</div>
				<?php }?>  
			</div>
		<?php }
	}?> 
</div>
	<?php if( get_theme_mod('bouncingicon_button_display','show' ) == 'show') :
								?>	
		<section class="company-heading intro-type" id="parallax-one">
   <div class="container">
      <div class="row product-title-info">
         <div class="col-md-12 ">
         	<?php
         	$slider_bounceTxt = get_theme_mod('slider_bounceTxt', 'aboutspa');
         	?>
            <a class="ct-btn-scroll ct-js-btn-scroll bounce" href="#<?php echo $slider_bounceTxt ?>">  <!-- <img class="img-responsive" alt="Arrow Down Icon" src="<?php //echo get_template_directory_uri(); ?>/images/double-down.png"> --><i class="fa fa-angle-down"></i> </a>
         </div>   
      </div>
   </div>
</section>  
<?php endif ?> 
<script>
	$(document).ready(function() {
		$('div#ht-home-slider-section .owl-carousel').owlCarousel({
			slideSpeed : 1000,
			autoplay: true,
			loop: true,               
			margin: 30,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				600: {
					items:1,
					nav: false
				},
				1000: {
					items:1,
					nav: true,
					loop: false,                   
					margin: 30
				}
			}
		})
	})
</script> 
</div>

	<script>
	$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
</script>
