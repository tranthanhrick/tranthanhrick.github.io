<?php  

$lzGoogleFonts = getFonts(true);

$wp_customize->add_section(
	'lz_fitness_premium_general_section',
	array(
		'title' => __( 'Font Setting', 'Unbox' ),
		'panel' => 'lz_fitness_general_panel'
	)
);

$wp_customize->add_setting(
	'lz_fitness_general_headeing_font',
	array(
		'sanitize_callback'=> 'absint',
		'default' => '24'
	)
);
$wp_customize->add_control(
	new lz_fitness_Font_Chooser(
		$wp_customize,
		'lz_fitness_general_headeing_font',
		array(
			'settings'=> 'lz_fitness_general_headeing_font',
			'section' => 'lz_fitness_premium_general_section',
			'label'=>__('Heading Fonts/Title Fonts', 'Unbox'),
			'choices'=>$lzGoogleFonts
		)
	)
);

$wp_customize->add_setting(
	'lz_fitness_general_text_font',
	array(
		'sanitize_callback'=> 'absint',
		'default' => '24'
	)
);
$wp_customize->add_control(
	new lz_fitness_Font_Chooser(
		$wp_customize,
		'lz_fitness_general_text_font',
		array(
			'settings'=> 'lz_fitness_general_text_font',
			'section' => 'lz_fitness_premium_general_section',
			'label'=>__('Body/Text Font', 'Unbox'),
			'choices'=>$lzGoogleFonts
		)
	)
);


$wp_customize->add_setting(
	'lz_fitness_general_boldtext_font',
	array(
		'sanitize_callback'=> 'absint',
		'default' => '14'
	)
);
$wp_customize->add_control(
	new lz_fitness_Font_Chooser(
		$wp_customize,
		'lz_fitness_general_boldtext_font',
		array(
			'settings'=> 'lz_fitness_general_boldtext_font',
			'section' => 'lz_fitness_premium_general_section',
			'label'=>__('Section Headings/ Shortcodes Pages Headings Font', 'Unbox'),
			'choices'=>$lzGoogleFonts
		)
	)
);
