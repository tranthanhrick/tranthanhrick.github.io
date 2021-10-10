<?php 

$wp_customize->add_section(
	'gallery_section',
	array(
		'title'         => __( 'Gallery Section', 'Luzuk' ),
		'panel'   => 'lz_fitness_premium_home_panel',
	)
);
$wp_customize->add_setting(
        'gallery_section_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronewsec(
            $wp_customize,
            'gallery_section_heading',
            array(
                'settings'      => 'gallery_section_heading',
                'section'       => 'gallery_section',
                'label'         => __( 'Glorious Spa Pro', 'Unbox' ),
            )
        )
    );