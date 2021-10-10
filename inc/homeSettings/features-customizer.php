<?php  
    $wp_customize->add_section(
        'features_section',
        array(
            'title' => __( 'Our Features Section', 'lz-fitness-premium' ),
            'panel' => 'lz_fitness_premium_home_panel'
        )
    );
   
 $wp_customize->add_setting(
        'features_section_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronewsec(
            $wp_customize,
            'features_section_heading',
            array(
                'settings'      => 'features_section_heading',
                'section'       => 'features_section',
                'label'         => __( 'Glorious Spa Pro', 'Unbox' ),
            )
        )
    );