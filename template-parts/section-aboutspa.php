<?php
if(get_theme_mod('rg_spa_section_disable') != 'on' ){
	?>
	<?php 
	if( get_theme_mod('sec_aboutspasectionTpadding',true) ) {
		$sec_aboutspasectionTpadding = 'padding-top:'.esc_attr(get_theme_mod('sec_aboutspasectionTpadding')).';';
	}
	if( get_theme_mod('sec_aboutspasectionBpadding',true) ) {
		$sec_aboutspasectionBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('sec_aboutspasectionBpadding')).';';
	}
	?>
	<div id="aboutspa" class="area-inner" style="<?php echo esc_attr($sec_aboutspasectionTpadding); ?>" "<?php echo esc_attr($sec_aboutspasectionBpadding); ?>">
		<div class="container">
			<?php
			$rg_myspa_page_id = get_theme_mod('rg_myspa_page');
			$rg_myspa_title = get_theme_mod('rg_myspa_title', 'About <span>Us</span>');
			$rg_myspa_subheading = get_theme_mod('rg_myspa_subheading', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu pharetra ex. Etiam eget diam ligula. Sed at blandit ante. Vivamus feugiat, lacus eu suscipit mattis, tortor mi aliquam leo quis laoree. '); 

			?>
			<div class="col-md-4 col-sm-12 single-right-bx wow fadeInLeft">

				<?php if( $rg_myspa_title || $rg_myspa_title){ ?>
					<div class="row">

						<div class="rg-section-tagline">
							<?php if($rg_myspa_title || $rg_myspa_title ){ ?>
								<h2 class="rg-section"><?php echo($rg_myspa_title); ?></h2>
							<?php } ?>
							<div class="clearfix"></div>
						</div>

					</div>
				<?php } ?>

				<div class="clearfix"></div>
				<div class="rg-aboutspa-bx-subtag">
					<?php 
					if(!empty($rg_myspa_subheading))	{
						echo ($rg_myspa_subheading);
					} ?>
				</div>



				<?php
				$showStatic = true;
				for( $i = 1; $i < 11; $i++ ){
					$rg_myspa_page_id = get_theme_mod('rg_myspa_page_title'.$i); 
					if(!empty($rg_myspa_page_id)){
						$showStatic = false;
						break;
					}
				}
				?>

				<div class="aboutspa-post-wrap">
					<?php
					$cols = get_theme_mod('rg_myspa_npp_count', 2);
					$cols++;
					// echo '$cold: '.$cols;
					switch($cols){
						case 1:
						$colCls = 'col-md-12 col-sm-12';
						break;
						default: 
						$colCls = 'col-md-12 col-sm-12';
						break;
					}
					$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
					?>
					<div class="row aboutspa-post-boxes">
						<?php
						for( $i = 1; $i <= $cols; $i++ ){
							if($showStatic === false){

								$rg_myspa_page_title = get_theme_mod('rg_myspa_page_title'.$i, 'Fitness Instructor');
								$rg_myspa_page_id = get_theme_mod('rg_myspa_page'.$i); 
								// $rg_myspa_page_icon = get_theme_mod('rg_myspa_page_icon'.$i);
								if($rg_myspa_page_title){

									?>
									<div class="<?php echo $colCls;?> pd-0">
									
																<div class="about-area-data">
																	<li><?php echo $rg_myspa_page_title; ?></li>

																</div>
															

									<div class="clearfix"></div>
								</div>
								<?php
							}
						}else{?>
							<div class="<?php echo $colCls;?> pd-0">
								
														<div class="about-area-data">
															<li>
																Fitness Instructor
															</li>
														</div>
													

											

							<div class="clearfix"></div>
						</div>
					<?php }

				}?>
				<div class="clearfix"></div>
			</div>
		</div>

		<?php
		$rg_myspaBtnbutton = get_theme_mod('rg_rg_myspaBtn_btn', 'READ MORE'); 
		$rg_myspaBtnlink = get_theme_mod('rg_header_rg_myspaBtnlink', '');

		?>
		<?php if( get_theme_mod('rg_myspaBtn1_button_display','show' ) == 'show') :
			?>	

			<?php if(!empty($rg_myspaBtnbutton)){ ?>
				<a class="btn btn-lg blue AboutSpa-btn1" href="<?php echo $rg_myspaBtnlink ?>">
					<?php echo ($rg_myspaBtnbutton );  ?>
				</a>
			<?php }?> 
		<?php endif ?>
	</div>



	<div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 post-img wow fadeInRight">
		<div class="col-md-6 col-sm-6 col-xs-6 spa-anim">

			<?php 
			$rg_myspa_image = get_theme_mod('rg_myspa_image');
			if(!empty($rg_myspa_image)){
				echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($rg_myspa_image).'" class="img-responsive" />';
			}else{
				echo '<img alt="Aboutspa Us" src="'.get_template_directory_uri().'/images/bgimg.png" class="img-responsive aboutspabox-img" />';
			}
			?>

		</div>

		<div class="aboutspa-inner-img">

			<?php 
			$rg_myspa1_image = get_theme_mod('rg_myspa1_image');
			if(!empty($rg_myspa1_image)){
				echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($rg_myspa1_image).'" class="img-responsive" />';
			}else{
				echo '<img alt="Aboutspa Us" src="'.get_template_directory_uri().'/images/aboutspa.png" class="img-responsive aboutspabox-img" />';
			}
			?>

		</div>
	</div>
</div>
</div>
<?php } 