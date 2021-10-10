<?php
$wp_customize->add_section(
    'feature_products_section',
    array(
        'title' => __( 'Our Products Section', 'Luzuk' ), 
        'panel' => 'lz_fitness_premium_home_panel'
    )
);
$wp_customize->add_setting(
        'feature_products_section_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronewsec(
            $wp_customize,
            'feature_products_section_heading',
            array(
                'settings'      => 'feature_products_section_heading',
                'section'       => 'feature_products_section',
                'label'         => __( 'Glorious Spa Pro', 'Unbox' ),
            )
        )
    );