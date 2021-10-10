<?php 

// /HOME PAGE SECTION CHANGE SEQUENCE SETTINGS IN CUSTOMIZER
$wp_customize->add_section(
	'unboxthemes_protheme_settings',
	array(
		'title' => __( 'Premium Theme Setting', 'luzuk-premium' ),
        // 'panel' => 'luzuk_premium_home_panel'
		'priority' =>21
	)
);

$wp_customize->add_setting(
        'protheme_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronew(
            $wp_customize,
            'protheme_heading',
            array(
                'settings'      => 'protheme_heading',
                'section'       => 'unboxthemes_protheme_settings',
                'label'         => __( 'Glorious Spa Pro', 'Unbox' ),
            )
        )
    );

$wp_customize->add_setting(
        'protheme_headingdoc',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronewdoc(
            $wp_customize,
            'protheme_headingdoc',
            array(
                'settings'      => 'protheme_headingdoc',
                'section'       => 'unboxthemes_protheme_settings',
                'label'         => __( 'Theme Document', 'Unbox' ),
            )
        )
    );