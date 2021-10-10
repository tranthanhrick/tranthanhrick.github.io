<?php 
$wp_customize->add_section(
	'service_section',
	array(
		'title'         => __( 'Services Section', 'Unbox' ),
		'panel'   => 'lz_fitness_premium_home_panel',
	)
);
$wp_customize->add_setting(
	'service_section_disable',
	array(
		'sanitize_callback' => 'lz_fitness_sanitize_text',
		'default' => 'off'
	)
);
$wp_customize->add_control(
	new lz_fitness_Switch_Control(
		$wp_customize,
		'service_section_disable',
		array(
			'settings'      => 'service_section_disable',
			'section'       => 'service_section',
			'label'         => __( 'Disable Section', 'Unbox' ),
			'on_off_label'  => array(
				'on' => __( 'Yes', 'Unbox' ),
				'off' => __( 'No', 'Unbox' )
			)   
		)
	)
); 

lzCustomLable($wp_customize, 'rg_sec_projectsectionpadding', 'service_section', 'Set Section Padding');

$wp_customize->add_setting(
    'sec_servicessectionTpadding',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '5em', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_servicessectionTpadding',
    array(
        'settings'      => 'sec_servicessectionTpadding',
        'section'       => 'service_section',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'Unbox' )
    )
);
$wp_customize->add_setting(
    'sec_servicessectionBpadding',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '5em', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_servicessectionBpadding',
    array(
        'settings'      => 'sec_servicessectionBpadding',
        'section'       => 'service_section',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'Unbox' )
    )
);

backgroundManager($wp_customize, 'service', 'service_section', $color='#ffffff', get_template_directory_uri().'/images/default.png', 'img');
 
lzCustomLable($wp_customize, 'rg_secTtlNdSubttl', 'service_section', 'Section Title & Sub Title');



$wp_customize->add_setting(
	'rg_service_title',
	array(
		'sanitize_callback' => 'lz_fitness_sanitize_text',
		'default'           => __( 'Our <span>Services</span>', 'Unbox' )
	)
);
$wp_customize->add_control(
	'rg_service_title',
	array(
		'settings'      => 'rg_service_title',
		'section'       => 'service_section', 
		'type'          => 'text',
		'label'         => __( 'Section Title', 'Unbox' )
	)
);
addColorPalatOption($wp_customize, 'Service_TColor', 'service_section', 'Section Title color', '#141c4d'); 
addColorPalatOption($wp_customize, 'Service_THColor', 'service_section', 'Section Title Highlight Text color', '#ff735f'); 

addColorPalatOption($wp_customize, 'Service_TBColor', 'service_section', 'Title Border color', '#ff735f'); 


$wp_customize->add_setting(
	'rg_service_sub_title',
	array(
		'sanitize_callback' => 'lz_fitness_sanitize_text',
		'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu pharetra ex. Etiam eget diam ligula. Sed at blandit ante.', 'Unbox' )
	)
);
$wp_customize->add_control(
	'rg_service_sub_title',
	array(
		'settings'      => 'rg_service_sub_title',
		'section'       => 'service_section',
		'type'          => 'textarea',
		'label'         => __( 'Sub Title', 'Unbox' )
	)
);
addColorPalatOption($wp_customize, 'Service_SColor', 'service_section', 'Section Sub Title color', '#484848'); 




$wp_customize->add_setting( 'ser_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'ser_button_display', array( 'label' => 'Button  Display & Text setting', 'section' => 'service_section', 'settings' => 'ser_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Enable button', 'hide' => 'Disable button', ), ) ); 


$wp_customize->add_setting(
    'rg_serviceBtn_btn',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( 'VIEW ALL', 'Unbox' )
    )
);
$wp_customize->add_control(
    'rg_serviceBtn_btn',
    array(
        'settings'      => 'rg_serviceBtn_btn',
        'section'       => 'service_section',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'Unbox' )
    )
);

$wp_customize->add_setting('rg_header_serviceBtnlink',   array('default'=> 'add Button link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('rg_header_serviceBtnlink',
    array(
        'settings'      => 'rg_header_serviceBtnlink',
        'section'       => 'service_section',
        'type'          => 'url',
        'label'         => __( 'Add url here:', 'Unbox' )
    )
);


addColorPalatOption($wp_customize, 'SerBtn_color', 'service_section', 'Button Border color', '#ff745f'); 
addColorPalatOption($wp_customize, 'SerBtnBorder_color', 'service_section', 'Button Text color', '#ff745f'); 
addColorPalatOption($wp_customize, 'SerBtnHover_color', 'service_section', 'Button Hover Text color', '#ffffff'); 
addColorPalatOption($wp_customize, 'SerBtnHoverBorder_color', 'service_section', 'Button Hover Background color', '#ff745f'); 



/*for note text*/
$wp_customize->add_setting('rg_service_sectionnoteser_lbl', array('sanitize_callback'=>'lz_fitness_sanitize_text'));
$wp_customize->add_control(
    new lz_fitness_Info_Text( 
        $wp_customize,
        'rg_service_sectionnoteser_lbl',
        array(
            'settings'      => 'rg_service_sectionnoteser_lbl',
            'section'       => 'service_section',
            'label'         => __( 'Note1:', 'Unbox' ),    
            'description'   => __( 'Just place the shortcode "[UN_SERVICES]" in your page to Show all services in a page', 'Unbox' ),
        )
    )
);
/*for note text*/

/*for note text*/
$wp_customize->add_setting('rg_service_sectionnoteser_lbl1', array('sanitize_callback'=>'lz_fitness_sanitize_text'));
$wp_customize->add_control(
    new lz_fitness_Info_Text( 
        $wp_customize,
        'rg_service_sectionnoteser_lbl1',
        array(
            'settings'      => 'rg_service_sectionnoteser_lbl1',
            'section'       => 'service_section',
            'label'         => __( 'Note2:', 'Unbox' ),    
            'description'   => __( 'Kindly use Services images of same resolution', 'Unbox' ),
        )
    )
);
/*for note text*/ 
$rgServiceSingleChoice[] = 'Select';

$wp_customize->add_setting('rg_service_npp_count',array('sanitize_callback' => 'lz_fitness_sanitize_text','default' => 7));
$wp_customize->add_control(
	'rg_service_npp_count',
	array(
		'settings'      => 'rg_service_npp_count',
		'section'       => 'service_section',
		'type'          => 'select',
		'label'         => __( 'Services to show:', 'Unbox' ),
		'choices'=>array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18)
	)
);

for( $i = 1; $i <= 18; $i++ ){

	$wp_customize->add_setting(
		'rg_service_heading'.$i,
		array(
			'sanitize_callback' => 'lz_fitness_sanitize_text'
		)
	);
	$wp_customize->add_control(
		new lz_fitness_Customize_Heading(
			$wp_customize,
			'rg_service_heading'.$i,
			array(
				'settings'      => 'rg_service_heading'.$i,
				'section'       => 'service_section',
				'label'         => __( 'Service', 'Unbox' ).$i,
			)
		)
	); 
	if(is_array($rgServiceSingleChoice)){
		$wp_customize->add_setting(
			'rg_service_page'.$i,
			array(
				'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control(
			'rg_service_page'.$i,
			array(
				'settings'      => 'rg_service_page'.$i,
				'section'       => 'service_section',
				'type'=> 'select',
				'label'         => __( 'Select service', 'Unbox' ),
				'choices' => $rgServiceSingleChoice,
			)
		);
	}else{
		$wp_customize->add_setting('rg_service_section_lbl'.$i, array('sanitize_callback'=>'lz_fitness_sanitize_text'));
		$wp_customize->add_control(
			new lz_fitness_Info_Text( 
				$wp_customize,
				'rg_service_section_lbl'.$i,
				array(
					'settings'		=> 'rg_service_section_lbl'.$i,
					'section'		=> 'service_section',
					'label'			=> __( 'Note:', 'Unbox' ),	
					'description'	=> __( '<strong>Changes will not reflect unless you select the Servicess</strong> <br/>Please add the Services from "Servicess menu" and then select servicess to show information.', 'Unbox' ),
				)
			)
		);
	}
	}

lzCustomLable($wp_customize, 'set_Op', 'service_section', 'Set Services Title Box Opacity');

$wp_customize->add_setting(
    'sec_BxOp',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '0.4', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_BxOp',
    array(
        'settings'      => 'sec_BxOp',
        'section'       => 'service_section',
        'type'          => 'text',
        'label'         => __( 'Opacity', 'Unbox' )
    )
);

addColorPalatOption($wp_customize, 'Service_MainTColor', 'service_section', 'Service Page Title color', '#ffffff'); 
addColorPalatOption($wp_customize, 'Service_MainTBgColor', 'service_section', 'Service Page Title Background color', '#131d4e'); 


addColorPalatOption($wp_customize, 'Service_MainHoverTColor', 'service_section', 'Service Page Hover Title color', '#fb705d'); 
addColorPalatOption($wp_customize, 'Service_MainHoverTxtColor', 'service_section', 'Service Page Hover Text color', '#ffffff'); 

addColorPalatOption($wp_customize, 'Service_arrColor', 'service_section', 'Service Box Hover Icon color', '#ffffff'); 
addColorPalatOption($wp_customize, 'Service_arrBrsColor', 'service_section', 'Service Box Hover Icon Border color', '#ffffff'); 

addColorPalatOption($wp_customize, 'Service_bxColor', 'service_section', 'Service Box Background color', '#131d4e'); 
addColorPalatOption($wp_customize, 'Service_BoxHBgssColor', 'service_section', 'Service Box Highlight Background color', '#ffffff'); 


 
