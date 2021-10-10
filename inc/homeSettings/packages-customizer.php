<?php 
$wp_customize->add_section('pricing_area',array('title' => __( 'Packages Section', 'Unbox' ),'panel' => 'lz_fitness_premium_home_panel'));
$wp_customize->add_setting(
        'pricing_area_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronewsec(
            $wp_customize,
            'pricing_area_heading',
            array(
                'settings'      => 'pricing_area_heading',
                'section'       => 'pricing_area',
                'label'         => __( 'Glorious Spa Pro', 'Unbox' ),
            )
        )
    );