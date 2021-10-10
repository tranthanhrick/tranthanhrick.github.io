<?php 
if(get_theme_mod('service_section_disable') != 'on' ){ ?>
	<?php 
		if( get_theme_mod('sec_servicessectionTpadding',true) ) {
			$sec_servicessectionTpadding = 'padding-top:'.esc_attr(get_theme_mod('sec_servicessectionTpadding')).';';
		}
		if( get_theme_mod('sec_servicessectionBpadding',true) ) {
			$sec_servicessectionBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('sec_servicessectionBpadding')).';';
		}

		if( get_theme_mod('sec_BxOp',true) ) {
			$sec_BxOp = 'opacity:'.esc_attr(get_theme_mod('sec_BxOp')).';';
		}
		
		
		?>	

	<div id="rg-service" class="area-inner" style="<?php echo esc_attr($sec_servicessectionTpadding); ?>" "<?php echo esc_attr($sec_servicessectionBpadding); ?>">

				<div class="container">
			<?php
			$rg_service_page_id = get_theme_mod('rg_service_page');	
			$rg_service_title = get_theme_mod('rg_service_title', 'Our <span>Services</span>');
			$rg_service_sub_title = get_theme_mod('rg_service_sub_title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu pharetra ex. Etiam eget diam ligula. Sed at blandit ante.');
			?>
		
				<?php if( $rg_service_title || $rg_service_title){ ?>
				

						<div class="rg-section-tagline">
							<?php if($rg_service_title || $rg_service_title ){ ?>
								<h2 class="rg-section pl-12"><?php echo($rg_service_title); ?></h2>
							<?php } ?>
							<div class="clearfix"></div>
							
						</div>

					
				<?php } ?>

				
				<div class="col-md-8 col-sm-8 col-xs-12 pl-12">
					<?php if($rg_service_sub_title || $rg_service_sub_title ){ ?>
						<p><?php echo($rg_service_sub_title); ?></p>
					<?php } ?>
				</div>
				<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12">
					<?php
					$serviceBtnbutton = get_theme_mod('rg_serviceBtn_btn', 'VIEW ALL'); 
					$serviceBtnlink = get_theme_mod('rg_header_serviceBtnlink', '');
					?>
					<?php if( get_theme_mod('ser_button_display','show' ) == 'show') :
						?>	

						<?php if(!empty($serviceBtnbutton)){ ?>
							<a class="btn btn-lg blue service-btn1" href="<?php echo $serviceBtnlink ?>">
								<?php echo ($serviceBtnbutton );  ?>
							</a>
						<?php }?>
					<?php endif ?>
				</div>
				<div class="clearfix"></div>
				<?php 
				$showStatic = true;
				$cols = get_theme_mod('rg_service_npp_count', 7);
				$cols++;
				switch($cols){
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
				for( $i = 1; $i <= $cols; $i++ ){
					$rg_service_page_id = get_theme_mod('rg_service_page'.$i); 
					$rg_service_page_icon = get_theme_mod('rg_service_page_icon'.$i);
					if($rg_service_page_id){
						$showStatic = false;
						echo serviceShortCode($rg_service_page_id, $isCustomizer=true, $i);
					}
				}
				if($showStatic === true){
					for( $i = 1; $i <= $cols; $i++ ){ ?>
						<div class="<?php echo $colCls;?> rd-pd10 rg-service-bx wow fadeInUp">


							<div class="inner-ser-bx">
								<img class="secondry-bg img-responsive" src="<?php echo esc_url(get_template_directory_uri().'/images/service.jpg');?>" alt="Team" />
								<div class="ser-content">
									<h3 class="post-title">Facial</h3>

									<p class="description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
									</p>
									<ul class="ser_social">
										<li><a href="">~</a></li>
									</ul>
								</div>
								<div class="team-prof" style="<?php echo esc_attr($sec_BxOp); ?>">
									<h3 class="post-title">FACIAL</h3>

								</div>
							</div>
							
						</div>
						<?php 
					}
				} ?>
				<div class="clearfix"></div>
			</div>	
			<!-- <div class="clearfix"></div>
		</div> -->
	</div>
<?php }
