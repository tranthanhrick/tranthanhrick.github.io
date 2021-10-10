<?php   
$wp_customize->add_section(
    'rg_testimonials_section',
    array(
        'title'         => __( 'Testimonials Section', 'Unbox' ),
        'panel'   => 'lz_fitness_premium_home_panel',
    )
);
$wp_customize->add_setting(
        'rg_testimonials_section_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronewsec(
            $wp_customize,
            'rg_testimonials_section_heading',
            array(
                'settings'      => 'rg_testimonials_section_heading',
                'section'       => 'rg_testimonials_section',
                'label'         => __( 'Glorious Spa Pro', 'Unbox' ),
            )
        )
    );