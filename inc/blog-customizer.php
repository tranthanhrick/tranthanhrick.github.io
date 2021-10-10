<?php
/**
 * Createing a bog pannel for customizer
 *
 *
 */

$lz_fitness_categories = get_categories(array('hide_empty' => 0));
foreach ($lz_fitness_categories as $lz_fitness_category) {
	$lz_fitness_cat[$lz_fitness_category->term_id] = $lz_fitness_category->cat_name;
}

// CREATING A SECTION IN CUSTOMIZER
$wp_customize->add_section(
	'lz_fitness_premium_blog_section',
	array(
		'title' => __( 'Blog Section', 'Unbox' ),
        // 'panel' => 'lz_fitness_premium_home_panel'
		'priority' =>19
	)
);
// ENABLE/DISABLE FEATURED SECTION
$wp_customize->add_setting(
	'lz_fitness_premium_blog_section_disable',
	array(
		'sanitize_callback' => 'lz_fitness_sanitize_text',
	)
);
$wp_customize->add_control(
	new lz_fitness_Switch_Control(
		$wp_customize,
		'lz_fitness_premium_blog_section_disable',
		array(
			'settings'      => 'lz_fitness_premium_blog_section_disable',
			'section'       => 'lz_fitness_premium_blog_section',
			'label'         => __( 'Show Title and description at top', 'Unbox' ),
			'on_off_label'  => array(
				'on' => __( 'Yes', 'Unbox' ),
				'off' => __( 'No', 'Unbox' )
			),
		)
	)
);
$wp_customize->add_setting(
	'lz_fitness_blog_title_heading',
	array(
		'sanitize_callback' => 'lz_fitness_sanitize_text'
	)
);
$wp_customize->add_control(
	new lz_fitness_Customize_Heading(
		$wp_customize,
		'lz_fitness_blog_title_heading',
		array(
			'settings'      => 'lz_fitness_blog_title_heading',
			'section'       => 'lz_fitness_premium_blog_section',
			'label'         => __( 'Blog Title & description', 'Unbox' ),
		)
	)
);
//BLOG PAGE TITLE
$wp_customize->add_setting('lz_fitness_blog_title', array('sanitize_callback' => 'lz_fitness_sanitize_text'));
$wp_customize->add_control('lz_fitness_blog_title', array('settings'=>'lz_fitness_blog_title', 'section'=>'lz_fitness_premium_blog_section','type'=>'text', 'label'=> __('Blog page title', 'Unbox')));
// BLOG PAGE DESCRIPTION
$wp_customize->add_setting('lz_fitness_blog_desc', array('sanitize_callback' => 'lz_fitness_sanitize_text'));
$wp_customize->add_control('lz_fitness_blog_desc', array('settings'=>'lz_fitness_blog_desc', 'section'=>'lz_fitness_premium_blog_section','type'=>'textarea', 'label'=> __('Blog page description', 'Unbox')));
// ADDING THE CATEGORY TO SELECT
$wp_customize->add_setting('lz_fitness_blog_categories', array('sanitize_callback' => 'lz_fitness_sanitize_text'));
$wp_customize->add_control(
	new lz_fitness_Customize_Checkbox_Multiple(
        $wp_customize,
        'lz_fitness_blog_categories',
        array(
            'label' => __('Exclude Category from Blog Posts', 'total'),
            'section' => 'lz_fitness_premium_blog_section',
            'settings' => 'lz_fitness_blog_categories',
            'choices' => $lz_fitness_cat
        )
    )
);



