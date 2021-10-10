<?php 
    $wp_customize->add_section(
        'rg_spa_section',
        array(
            'title' => __( 'About Spa Section', 'Unbox' ),
            'panel' => 'lz_fitness_premium_home_panel'
        )
    );
    $wp_customize->add_setting(
        'rg_spa_section_disable',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text',
        )
    );
    $wp_customize->add_control(
        new lz_fitness_Switch_Control(
            $wp_customize,
            'rg_spa_section_disable',
            array(
                'settings'      => 'rg_spa_section_disable',
                'section'       => 'rg_spa_section',
                'label'         => __( 'Disable Section', 'Unbox' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'Unbox' ),
                    'off' => __( 'No', 'Unbox' )
                ),
            )
        )
    );
backgroundManager($wp_customize, 'aboutspa', 'rg_spa_section', $color='#ffffff', get_template_directory_uri().'/images/default.png', 'img');




lzCustomLable($wp_customize, 'aboutspa_padding', 'rg_spa_section', 'Set Section Padding:');

$wp_customize->add_setting(
    'sec_aboutspasectionTpadding',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '6em', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_aboutspasectionTpadding',
    array(
        'settings'      => 'sec_aboutspasectionTpadding',
        'section'       => 'rg_spa_section',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'Unbox' )
    )
);
$wp_customize->add_setting(
    'sec_aboutspasectionBpadding',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '6em', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_aboutspasectionBpadding',
    array(
        'settings'      => 'sec_aboutspasectionBpadding',
        'section'       => 'rg_spa_section',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'Unbox' )
    )
);



$wp_customize->add_setting(
        'rg_aboutspa_title_subheading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new lz_fitness_Customize_Heading(
            $wp_customize,
            'rg_aboutspa_title_subheading',
            array(
                'settings'      => 'rg_aboutspa_title_subheading',
                'section'       => 'rg_spa_section',
                'label'         => __( 'Section Title, Section Text', 'Unbox' ),
            )
        )
    );    


    $wp_customize->add_setting(
        'rg_myspa_title',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text',
            'default'           => __( 'About <span>Us</span>', 'Unbox' )
        )
    );
    $wp_customize->add_control(
        'rg_myspa_title',
        array(
            'settings'      => 'rg_myspa_title',
            'section'       => 'rg_spa_section',
            'type'          => 'text',
            'label'         => __( 'Section Title', 'Unbox' )
        )
    );



addColorPalatOption($wp_customize, 'AboutSpa_TColor', 'rg_spa_section', 'Section Title color', '#141c4d'); 
addColorPalatOption($wp_customize, 'AboutSpa_THColor', 'rg_spa_section', 'Section Title Highlight Text color', '#ff735f'); 

addColorPalatOption($wp_customize, 'AboutSpa_TBColor', 'rg_spa_section', 'Title Border color', '#ff735f'); 



    $wp_customize->add_setting(
        'rg_myspa_subheading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text',
            'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu pharetra ex. Etiam eget diam ligula. Sed at blandit ante. Vivamus feugiat, lacus eu suscipit mattis, tortor mi aliquam leo quis laoree.', 'Unbox' )
        )
    );
    $wp_customize->add_control(
        'rg_myspa_subheading',
        array(
            'settings'      => 'rg_myspa_subheading',
            'section'       => 'rg_spa_section',
            'type'          => 'textarea',
            'label'         => __( 'Section Text', 'Unbox' )
        )
    );


addColorPalatOption($wp_customize, 'AboutSpa_TxtColor', 'rg_spa_section', 'Section Title color', '#545454'); 


$wp_customize->add_setting('rg_myspa_npp_count_heading',array('sanitize_callback' => 'lz_fitness_sanitize_text'));
$wp_customize->add_control(
    new lz_fitness_Customize_Heading(
        $wp_customize,
        'rg_myspa_npp_count_heading',
        array(
            'settings'      => 'rg_myspa_npp_count_heading',
            'section'       => 'rg_spa_section',
            'label'         => __( 'Number Of Lists to Show', 'Unbox' ),
        )
    )
);    
$wp_customize->add_setting('rg_myspa_npp_count',array('sanitize_callback' => 'lz_fitness_sanitize_text','default' => 2));
$wp_customize->add_control(
    'rg_myspa_npp_count',
    array(
        'settings'      => 'rg_myspa_npp_count',
        'section'       => 'rg_spa_section',
        'type'          => 'select',
        'label'         => __( 'Number of Lists to Show', 'Unbox' ),
        'choices'=>array(1,2,3,4,5,6,7,8,9,10,11,12)
    )
);




for( $i = 1; $i <= 12; $i++ ){
    $wp_customize->add_setting(
        'rg_myspa_header'.$i,
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new lz_fitness_Customize_Heading(
            $wp_customize,
            'rg_myspa_header'.$i,
            array(
                'settings'      => 'rg_myspa_header'.$i,
                'section'       => 'rg_spa_section',
                'label'         => __( 'List ', 'Unbox' ).$i
            )
        )
    );

    //  $wp_customize->add_setting(
    //     'rg_myspa_page_icon'.$i,
    //     array(
    //         'default'           => 'fa fa-pagelines',
    //         'sanitize_callback' => 'lz_fitness_sanitize_text'
    //     )
    // );        
    // $wp_customize->add_control(
    //     new lz_fitness_Fontawesome_Icon_Chooser(
    //         $wp_customize,
    //         'rg_myspa_page_icon'.$i,
    //         array(
    //             'settings'      => 'rg_myspa_page_icon'.$i,
    //             'section'       => 'rg_spa_section',
    //             'type'          => 'icon',
    //             'label'         => __( 'FontAwesome Icon', 'Unbox' ),
    //         )
    //     )
    // );

lzAddElement($wp_customize, 'rg_myspa_page_title'.$i, 'rg_spa_section', $type = 'text', $label="Title", $callback ='lz_fitness_sanitize_text', $default='Fitness Instructor');

}

addColorPalatOption($wp_customize, 'AboutSpa_ListColor', 'rg_spa_section', 'List Text color', '#151d4b'); 

addColorPalatOption($wp_customize, 'AboutSpaListHoverIcon_color', 'rg_spa_section', 'List Icon color', '#ff745f'); 
addColorPalatOption($wp_customize, 'AboutSpaListHoverIcBrs_color', 'rg_spa_section', 'List Icon Border color', '#151d4b'); 



$wp_customize->add_setting( 'rg_myspaBtn1_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); $wp_customize->add_control( 'rg_myspaBtn1_button_display', array( 'label' => 'Button Display & Text setting', 'section' => 'rg_spa_section', 'settings' => 'rg_myspaBtn1_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Enable button', 'hide' => 'Disable button', ), ) ); 


$wp_customize->add_setting(
    'rg_rg_myspaBtn_btn',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( 'READ MORE', 'Unbox' )
    )
);
$wp_customize->add_control(
    'rg_rg_myspaBtn_btn',
    array(
        'settings'      => 'rg_rg_myspaBtn_btn',
        'section'       => 'rg_spa_section',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'Unbox' )
    )
);

$wp_customize->add_setting('rg_header_rg_myspaBtnlink',   array('default'=> 'add Button link here', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('rg_header_rg_myspaBtnlink',
    array(
        'settings'      => 'rg_header_rg_myspaBtnlink',
        'section'       => 'rg_spa_section',
        'type'          => 'url',
        'label'         => __( 'Add url here:', 'Unbox' )
    )
);
addColorPalatOption($wp_customize, 'AboutSpaBtnBorder_color', 'rg_spa_section', 'Button Text color', '#ff745f'); 

addColorPalatOption($wp_customize, 'AboutSpaBtn_color', 'rg_spa_section', 'Button Border color', '#ff745f'); 
addColorPalatOption($wp_customize, 'AboutSpaBtnHover_color', 'rg_spa_section', 'Button Hover Text color', '#ffffff'); 
addColorPalatOption($wp_customize, 'AboutSpaBtnHoverBorder_color', 'rg_spa_section', 'Button Hover Background color', '#ff745f'); 



 $wp_customize->add_setting(
        'rg_myspa1_image_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new lz_fitness_Customize_Heading(
            $wp_customize,
            'rg_myspa1_image_heading',
            array(
                'settings'      => 'rg_myspa1_image_heading',
                'section'       => 'rg_spa_section',
                'label'         => __( 'Right Image', 'Unbox' ),
            )
        )
    );

      $wp_customize->add_setting(
        'rg_myspa1_image',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'rg_myspa1_image',
            array(
                'section' => 'rg_spa_section',
                'settings' => 'rg_myspa1_image',
                'description' => __('Recommended Image Size: 500X600px', 'Unbox')
            )
        )
    );


addColorPalatOption($wp_customize, 'AboutSpaImgBorder_color', 'rg_spa_section', 'Image Border color', '#ff745f'); 




$wp_customize->add_setting(
        'rg_myspa_image_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new lz_fitness_Customize_Heading(
            $wp_customize,
            'rg_myspa_image_heading',
            array(
                'settings'      => 'rg_myspa_image_heading',
                'section'       => 'rg_spa_section',
                'label'         => __( 'Background Image of Right Image', 'Unbox' ),
            )
        )
    );

      $wp_customize->add_setting(
        'rg_myspa_image',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'rg_myspa_image',
            array(
                'section' => 'rg_spa_section',
                'settings' => 'rg_myspa_image',
                'description' => __('Recommended Image Size: 500X600px', 'Unbox')
            )
        )
    );