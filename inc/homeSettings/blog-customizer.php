<?php   
$lz_fitness_categories = get_categories(array('hide_empty' => 0));
foreach ($lz_fitness_categories as $lz_fitness_category) {
	$lz_fitness_cat[$lz_fitness_category->term_id] = $lz_fitness_category->cat_name;
}
/****************************/
// START BLOG SECTION FOR HOME PAGE
/*============BLOG PANEL============*/
$wp_customize->add_section(
	'rg_blog_section',
	array(
		'title' => __( 'Blogs Section', 'Unbox' ),
		'panel' => 'lz_fitness_premium_home_panel',
     	//'priority' => '50',
	)
);
$wp_customize->add_setting(
        'rg_blog_section_heading',
        array(
            'sanitize_callback' => 'lz_fitness_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new unboxthemes_Customize_Pronewsec(
            $wp_customize,
            'rg_blog_section_heading',
            array(
                'settings'      => 'rg_blog_section_heading',
                'section'       => 'rg_blog_section',
                'label'         => __( 'Glorious Spa Pro', 'Unbox' ),
            )
        )
    );
// END BLOG SECTION FOR HOME PAGE
/****************************/
