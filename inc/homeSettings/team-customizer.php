<?php   
$wp_customize->add_section(
	'team_section',
	array(
		'title'         => __( 'Team Section', 'lz-fitness-premium' ),
		'panel'   => 'lz_fitness_premium_home_panel',
	)
);

$wp_customize->add_setting(
        'team_section_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronewsec(
            $wp_customize,
            'team_section_heading',
            array(
                'settings'      => 'team_section_heading',
                'section'       => 'team_section',
                'label'         => __( 'Glorious Spa Pro', 'Unbox' ),
            )
        )
    );