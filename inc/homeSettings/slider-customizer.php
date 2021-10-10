<?php  

$lzFitnessSliderSingleChoice = getFitnessPostsType('slider');

$wp_customize->add_section(
	'slider_section',
	array(
		'title' => __( 'Slider Section', 'Unbox' ),
        'panel' => 'lz_fitness_premium_home_panel',
		'priority' =>18
	)
);

// show content in slider
$wp_customize->add_setting(
	'slider_section_show_content',
	array(
		'sanitize_callback' => 'lz_fitness_sanitize_text',
	)
);
$wp_customize->add_control(
	new lz_fitness_Switch_Control(
		$wp_customize,
		'slider_section_show_content',
		array(
			'settings'      => 'slider_section_show_content',
			'section'       => 'slider_section',
			'label'         => __( 'Hide Title and description on slider', 'Unbox' ),
			'on_off_label'  => array(
				'on' => __( 'No', 'Unbox' ),
				'off' => __( 'Yes', 'Unbox' )
			),
		)
	)
);

$wp_customize->add_setting('slider_section_lbl', array('sanitize_callback'=>'lz_fitness_sanitize_text'));
$wp_customize->add_control(
	new lz_fitness_Info_Text( 
		$wp_customize,
		'slider_section_lbl',
		array(
			'settings'		=> 'slider_section_lbl',
			'section'		=> 'slider_section',
			'label'			=> __( 'Note:', 'Unbox' ),	
			'description'	=> __( 'The Page featured image works as a slider banner and the title & content work as a slider caption. And you can add this from the Slider menu. <br/> Recommended Image Size: 1900X600', 'Unbox' ),
		)
	)
);


addColorPalatOption($wp_customize, 'slider_BoxBorderColor', 'slider_section', 'Slider Border Color', '#ff725e');

lzCustomLable($wp_customize, 'slider_OverlayOpacity', 'slider_section', 'Set slider overlay opacity & slider overlay Background color:');
$wp_customize->add_setting(
	'pages_slideopacity',
	array(
		'sanitize_callback' => 'lz_fitness_sanitize_text',
		'default'           => __( '0.6', 'Unbox' )
	)
);
$wp_customize->add_control(
	'pages_slideopacity',
	array(
		'settings'      => 'pages_slideopacity',
		'section'       => 'slider_section',
		'type'          => 'text',
		'label'         => __( 'Add Opacity Here:', 'Unbox' )
	)
);
addColorPalatOption($wp_customize, 'slider_overlaybgsColor', 'slider_section', 'Slider Overlay Background Color', '#131d4e');


lzCustomLable($wp_customize, 'Slider_TitleSubBtn_Color', 'slider_section', 'Set Slider Title, Subtitle & Button Colors:');


addColorPalatOption($wp_customize, 'slider_SubtitleColor', 'slider_section', 'Slider Sub Title Color', '#fff');
addColorPalatOption($wp_customize, 'slider_TitleColor', 'slider_section', 'Slider Title Color', '#fff');
addColorPalatOption($wp_customize, 'slider_TitleHighliteColor', 'slider_section', 'Slider Title Highlight Text Color', '#ff725e');

addColorPalatOption($wp_customize, 'slider_ContentColor', 'slider_section', 'Slider Content Color', '#fff');

addColorPalatOption($wp_customize, 'slider_buttontextColor', 'slider_section', 'Slider Button Text Color', '#fff');
addColorPalatOption($wp_customize, 'slider_buttontexthoverColor', 'slider_section', 'Slider Button Text Hover Color', '#ff725e');
addColorPalatOption($wp_customize, 'slider_buttonborderColor', 'slider_section', 'Slider Button Border Color', '#ffffff');
 addColorPalatOption($wp_customize, 'slider_buttonbghoverColor', 'slider_section', 'Slider Button Hover  Background Color', '#ffffff');


$wp_customize->add_setting( 'bouncingicon_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'bouncingicon_button_display', array( 'label' => 'Bouncing Arrow Display', 'section' => 'slider_section', 'settings' => 'bouncingicon_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Bouncing Arrow', 'hide' => 'Hide Bouncing Arrow', ), ) ); 

 $wp_customize->add_setting(
        'slider_bounceTxt',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text',
            'default'           => __( 'aboutspa', 'unbox' )
        )
    );
    $wp_customize->add_control(
        'slider_bounceTxt',
        array(
            'settings'      => 'slider_bounceTxt',
            'section'       => 'slider_section',
            'type'          => 'text',
            'label'         => __( 'Add Section Id For Bouncing Arrow:', 'unbox' )
        )
    );


 addColorPalatOption($wp_customize, 'slider_BouncingArrowColor', 'slider_section', 'Bouncing Arrow Color', '#131d4e');
  addColorPalatOption($wp_customize, 'slider_BouncingArrowHvrsColor', 'slider_section', 'Bouncing Arrow Hover Color', '#ffffff');

 addColorPalatOption($wp_customize, 'slider_BouncingArrowBgssColor', 'slider_section', 'Bouncing Arrow Background Color', '#ffffff');


lzCustomLable($wp_customize, 'Slider_BounceArr_Color', 'slider_section', 'Set Bouncing Arrow Hover Background Color/Image');

backgroundManager($wp_customize, 'slider_b', 'slider_section', $color='#ffffff', get_template_directory_uri().'/images/prelaoder-logo.png', 'color');



addColorPalatOption($wp_customize, 'slider_prevandnxtbuttonColor', 'slider_section', 'Slider Prev & Next Button Color', '#151c50');
addColorPalatOption($wp_customize, 'slider_prevandnxtbuttonHoversColor', 'slider_section', 'Slider Prev & Next Button Hover Color', '#ffffff'); 

addColorPalatOption($wp_customize, 'slider_slidebtnbgsColor', 'slider_section', 'Slider Prev & Next Button Background Color', '#ffffff');


lzCustomLable($wp_customize, 'Slider_prenxtbtnhvrs_Color', 'slider_section', 'Set Slider Prev & Next Button Hover Background Color/Image');

backgroundManager($wp_customize, 'slider', 'slider_section', $color='#ffffff', get_template_directory_uri().'/images/prelaoder-logo.png', 'color');