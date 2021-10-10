<?php 

$wp_customize->add_panel(
	'lz_fitness_general_panel',
	array(
		'priority' => 19,
		'title' => __('Basic Configuration', 'Unbox')
	)
);
//STATIC FRONT PAGE
$wp_customize->add_section( 'static_front_page', array(
	'title' => __( 'Set Front Page', 'Unbox' ),
	'panel' => 'lz_fitness_general_panel',
	'description' => __( 'Your theme supports a static front page.', 'Unbox'),
) );
//BACKGROUND IMAGE
$wp_customize->add_section( 'background_image', array(
	'title' => __( 'Set Background Image', 'Unbox' ),
	'panel' => 'lz_fitness_general_panel',
) );
//TITLE AND TAGLINE SETTINGS
$wp_customize->add_section( 'title_tagline', array(
	'title' => __( 'Site Logo/Title/Tagline', 'Unbox' ),
	'panel' => 'lz_fitness_general_panel',
) );
addColorPalatOption($wp_customize, 'rd_lbl_header_headmaintaglinecompleteColor', 'title_tagline', 'Site tagline color', '#ffffff');
$wp_customize->add_setting(
    'pages_logoTopsetmaxwidth',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '100', 'Unbox' )
    )
);
$wp_customize->add_control(
    'pages_logoTopsetmaxwidth',
    array(
        'settings'      => 'pages_logoTopsetmaxwidth',
        'section'       => 'title_tagline',
        'type'          => 'text',
        'label'         => __( 'Set Logo Max Width', 'Unbox' )
    )
);
//Header IMAGE
$wp_customize->add_section( 'header_image', array(
	'title' => __( 'Set Header Image', 'Unbox' ),
	'panel' => 'lz_fitness_general_panel',
) );
 
//HEADER SETTINGS
$wp_customize->add_section(
	'rg_header_settings',
	array(
		'title' => __( 'Manage Header', 'Unbox' ),
		'panel' => 'lz_fitness_general_panel',
	)
);

$sectionHeader = 'rg_header_settings';


lzCustomLable($wp_customize, 'rg_sec_mainheadersectioncommargin', 'rg_header_settings', 'Set logo margin');

$wp_customize->add_setting(
    'sec_completeheadersectionTmargin',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '0px', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_completeheadersectionTmargin',
    array(
        'settings'      => 'sec_completeheadersectionTmargin',
        'section'       => 'rg_header_settings',
        'type'          => 'text',
        'label'         => __( 'Top Margin', 'Unbox' )
    )
);
$wp_customize->add_setting(
    'sec_completeheadersectionBmargin',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '0px', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_completeheadersectionBmargin',
    array(
        'settings'      => 'sec_completeheadersectionBmargin',
        'section'       => 'rg_header_settings',
        'type'          => 'text',
        'label'         => __( 'Bottom Margin', 'Unbox' )
    )
);

$wp_customize->add_setting(
    'sec_completeheadersectionLmargin',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '0px', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_completeheadersectionLmargin',
    array(
        'settings'      => 'sec_completeheadersectionLmargin',
        'section'       => 'rg_header_settings',
        'type'          => 'text',
        'label'         => __( 'Left Margin', 'Unbox' )
    )
);
$wp_customize->add_setting(
    'sec_completeheadersectionRmargin',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '0px', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_completeheadersectionRmargin',
    array(
        'settings'      => 'sec_completeheadersectionRmargin',
        'section'       => 'rg_header_settings',
        'type'          => 'text',
        'label'         => __( 'Right Margin', 'Unbox' )
    )
);




addColorPalatOption($wp_customize, 'rd_lbl_header_bottomheaderbgssColor', 'rg_header_settings', 'Header background color', '#131d4e');
addColorPalatOption($wp_customize, 'rg_header_topmenusColor', 'rg_header_settings', 'Menus color', '#959ab0');
addColorPalatOption($wp_customize, 'rg_header_topmenushoverColor', 'rg_header_settings', 'Menus hover color', '#ffffff'); 
addColorPalatOption($wp_customize, 'rg_header_activeheademenusColor', 'rg_header_settings', 'Active menu color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_header_topmenusborderColor', 'rg_header_settings', 'Menus border color', '#959ab0');
addColorPalatOption($wp_customize, 'rg_header_topmenusHoverborderColor', 'rg_header_settings', 'Menus Hover & Active Menu border color', '#f96f5d');


addColorPalatOption($wp_customize, 'rg_header_topmenusiconColor', 'rg_header_settings', 'Sub menu icon color', '#959ab0');
addColorPalatOption($wp_customize, 'rg_header_topmenusiconhoverColor', 'rg_header_settings', 'Sub menu icon hover color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_header_topsubmenusColor', 'rg_header_settings', 'Sub menus color', '#959ab0');
addColorPalatOption($wp_customize, 'rg_header_topsubmenushvrColor', 'rg_header_settings', 'Sub menus hover color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_header_activesubmenuColor', 'rg_header_settings', 'Current sub menu color', '#ffffff');

addColorPalatOption($wp_customize, 'rg_header_topsubmenusbackbgssColor', 'rg_header_settings', 'Sub menus background color', '#131d4e');

$wp_customize->add_setting('rd_lblsocialtxt', array('sanitize_callback'=>'lz_fitness_sanitize_text'));
$wp_customize->add_control(
	new lz_fitness_Info_Text( 
		$wp_customize,
		'rd_lblsocialtxt',
		array(
			'settings'		=> 'rd_lblsocialtxt',
			'section'		=> 'rg_header_settings',
			'label'			=> __( '', 'Unbox' ),	
			'description'	=> __( 'Add social media links:', 'Unbox' ),
		)
	)
);

// FACEBOOK  
$wp_customize->add_setting('rd_lbl_header_fb',	array('default'=> 'https://facebook.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('rd_lbl_header_fb',
	array(
		'settings'      => 'rd_lbl_header_fb',
		'section'       => 'rg_header_settings',
		'type'          => 'url',
		'label'         => __( 'add link for facebook', 'Unbox' )
	)
);
addColorPalatOption($wp_customize, 'rd_lbl_facebooksocialscColor', 'rg_header_settings', 'Select Icon color', '#ffffff');
addColorPalatOption($wp_customize, 'rd_lbl_FacebooksocialschvrColor', 'rg_header_settings', 'Select Icon hover color', '#131d4e');

// TWITTER
$wp_customize->add_setting('rd_lbl_header_tw', array('default'=> 'https://twitter.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('rd_lbl_header_tw',
	array(
		'settings'      => 'rd_lbl_header_tw',
		'section'       => 'rg_header_settings',
		'type'          => 'url',
		'label'         => __( 'add link for twitter', 'Unbox' )
	)
);
addColorPalatOption($wp_customize, 'rd_lbl_socialscColor', 'rg_header_settings', 'Select Icon color', '#ffffff');
addColorPalatOption($wp_customize, 'rd_lbl_TwittersocialscColor', 'rg_header_settings', 'Select Icon hover color', '#131d4e');

// Linkedin
$wp_customize->add_setting('rd_lbl_header_linkdin', array('default' => 'https://in.linkedin.com/', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('rd_lbl_header_linkdin',
	array(
		'settings'      => 'rd_lbl_header_linkdin',
		'section'       => 'rg_header_settings',
		'type'          => 'url',
		'label'         => __( 'add link for linkedin', 'Unbox' )
	)
); 

addColorPalatOption($wp_customize, 'rd_lbl_linkedinsocialscColor', 'rg_header_settings', 'Select Icon color', '#ffffff');
addColorPalatOption($wp_customize, 'rd_lbl_LinkedinsocialschvrsColor', 'rg_header_settings', 'Select Icon hover color', '#131d4e');

lzCustomLable($wp_customize, 'other_c', 'rg_header_settings', 'Set Other Colors:');

addColorPalatOption($wp_customize, 'rd_lbl_facebooksocialsIconBgscColor', 'rg_header_settings', 'Select Icon Background color', '#fb705d');
addColorPalatOption($wp_customize, 'rd_lbl_facebooksocialsIconHcColor', 'rg_header_settings', 'Select Icon Hover Background color', '#ffffff');


$wp_customize->add_setting('rg_header_colorsfortabandmobview', array('sanitize_callback'=>'lz_fitness_sanitize_text'));
$wp_customize->add_control(
	new lz_fitness_Info_Text( 
		$wp_customize,
		'rg_header_colorsfortabandmobview',
		array(
			'settings'		=> 'rg_header_colorsfortabandmobview',
			'section'		=> 'rg_header_settings',
			'label'			=> __( '', 'Unbox' ),	
			'description'	=> __( 'Set colors fot tablet & mobile View:', 'Unbox' ),
		)
	)
);
addColorPalatOption($wp_customize, 'rd_lbl_respnavtoggbarbgssColor', 'rg_header_settings', 'Toggole bar color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_lbl_respnavbsbgssColor', 'rg_header_settings', 'Navigation box background color', '#131d4e');


//COLOR SETTINGS
$wp_customize->add_section( 'colors', array(
	'title' => __( 'Theme Primary & Secondary Colors' , 'Unbox'),
	'panel' => 'lz_fitness_general_panel',
) );
//theme primary color
addColorPalatOption($wp_customize, 'lz_fitness_template_color', 'colors', 'Theme Primary Color', '#fb705d');
//theme Secondary color
addColorPalatOption($wp_customize, 'theme_secondary_color', 'colors', 'Theme Secondary Color', '#131d4e');

$wp_customize->add_section(
	'rg_postpagedate_settings',
	array(
		'title' => __( 'Breadcrumb Settings', 'Unbox' ),
		'panel' => 'lz_fitness_general_panel',
	)
);


//for breadcrumb to show & hide button
lzCustomLable($wp_customize, 'rg_allpagesbreadshnhidisplay', 'rg_postpagedate_settings', 'Breadcrumb Display:');

$wp_customize->add_setting( 'breadcrumb_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'breadcrumb_button_display', array( 'label' => '', 'section' => 'rg_postpagedate_settings', 'settings' => 'breadcrumb_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show Breadcrumb', 'hide' => 'Hide Breadcrumb', ), ) ); 

addColorPalatOption($wp_customize, 'rg_breadcrumb_hmiconColor', 'rg_postpagedate_settings', 'Home Icon & Parent Page Color', '#ff735f');
addColorPalatOption($wp_customize, 'rg_breadcrumb_hmiconhvrsColor', 'rg_postpagedate_settings', 'Home Icon & Parent Page Hover Color', '#131d4e');

addColorPalatOption($wp_customize, 'rg_breadcrumb_hmarrowColor', 'rg_postpagedate_settings', 'arrow Color', '#131d4e');
addColorPalatOption($wp_customize, 'rg_breadcrumb_hmattlColor', 'rg_postpagedate_settings', 'Current Page Color', '#131d4e');

addColorPalatOption($wp_customize, 'rg_breadcrumb_hmattlbreadbrssColor', 'rg_postpagedate_settings', 'Border Color', '#f1f1f1');



//FOOTER COPYRIGHT SETTINGS 
$wp_customize->add_section(
	'rg_footer_copyright_settings',
	array(
		'title' => __( 'Footer Settings', 'Unbox' ),
		'panel' => 'lz_fitness_general_panel',
	)
);


lzCustomLable($wp_customize, 'rg_sec_footersectionpadding', 'rg_footer_copyright_settings', 'Set Footer Padding');

$wp_customize->add_setting(
    'sec_footersectionTpadding',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '40px', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_footersectionTpadding',
    array(
        'settings'      => 'sec_footersectionTpadding',
        'section'       => 'rg_footer_copyright_settings',
        'type'          => 'text',
        'label'         => __( 'Top Padding', 'Unbox' )
    )
);
$wp_customize->add_setting(
    'sec_footersectionBpadding',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '20px', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_footersectionBpadding',
    array(
        'settings'      => 'sec_footersectionBpadding',
        'section'       => 'rg_footer_copyright_settings',
        'type'          => 'text',
        'label'         => __( 'Bottom Padding', 'Unbox' )
    )
);


backgroundManager($wp_customize, 'footer', 'rg_footer_copyright_settings', $color='#ffffff', get_template_directory_uri().'/images/footerop9.jpg', 'color');


lzCustomLable($wp_customize, 'rg_sec_footeroverlayBgsColor', 'rg_footer_copyright_settings', 'Set Overlay Opacity & Overlay Background Color:');
 
$wp_customize->add_setting(
    'sec_footeroverlayOpColor',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( '0.9', 'Unbox' )
    )
);
$wp_customize->add_control(
    'sec_footeroverlayOpColor',
    array(
        'settings'      => 'sec_footeroverlayOpColor',
        'section'       => 'rg_footer_copyright_settings',
        'type'          => 'text',
        'label'         => __( 'Opacity', 'Unbox' )
    )
);
addColorPalatOption($wp_customize, 'rg_footer_FooterOverlayBgsColor', 'rg_footer_copyright_settings', 'Set Footer Overlay Background Color', '#131d4e');

 


$wp_customize->add_setting(
    'rg_footer_title',
    array(
        'sanitize_callback' => 'lz_fitness_sanitize_text',
        'default'           => __( 'Follow Us', 'Unbox' )
    )
);
$wp_customize->add_control(
    'rg_footer_title',
    array(
        'settings'      => 'rg_footer_title',
        'section'       => 'rg_footer_copyright_settings',
        'type'          => 'textarea',
        'label'         => __( 'Socials Tagline', 'Unbox' )
    )
);
addColorPalatOption($wp_customize, 'rg_footer_widgetsBottomfooterhightextColor', 'rg_footer_copyright_settings', 'Social Tagline Color', '#ff735f');

$wp_customize->add_setting('rd_footerlblsocialtxt', array('sanitize_callback'=>'lz_fitness_sanitize_text'));
$wp_customize->add_control(
    new lz_fitness_Info_Text( 
        $wp_customize,
        'rd_footerlblsocialtxt',
        array(
            'settings'      => 'rd_footerlblsocialtxt',
            'section'       => 'rg_footer_copyright_settings',
            'label'         => __( '', 'Unbox' ),   
            'description'   => __( 'Add social media links:', 'Unbox' ),
        )
    )
);

// FACEBOOK  
$wp_customize->add_setting('footer_fb',  array('default'=> 'https://facebook.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('footer_fb',
    array(
        'settings'      => 'footer_fb',
        'section'       => 'rg_footer_copyright_settings',
        'type'          => 'url',
        'label'         => __( 'add link for facebook', 'Unbox' )
    )
);

// TWITTER
$wp_customize->add_setting('footer_tw', array('default'=> 'https://twitter.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('footer_tw',
    array(
        'settings'      => 'footer_tw',
        'section'       => 'rg_footer_copyright_settings',
        'type'          => 'url',
        'label'         => __( 'add link for twitter', 'Unbox' )
    )
);

// Linkedin
$wp_customize->add_setting('footer_linkedin', array('default' => 'https://in.linkedin.com/', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('footer_linkedin',
    array(
        'settings'      => 'footer_linkedin',
        'section'       => 'rg_footer_copyright_settings',
        'type'          => 'url',
        'label'         => __( 'add link for linkedin', 'Unbox' )
    )
); 
//colors
addColorPalatOption($wp_customize, 'rg_footer_widgetsSocialIconsColor', 'rg_footer_copyright_settings', 'Footer Social Icons Color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_footer_widgetsSocialIconsBorderColor', 'rg_footer_copyright_settings', 'Footer Social Icons Border Color', '#ffffff');

addColorPalatOption($wp_customize, 'rg_footer_widgetsborderColor', 'rg_footer_copyright_settings', 'Footer Border Color', '#394067');
addColorPalatOption($wp_customize, 'rg_footer_widgetsTitle', 'rg_footer_copyright_settings', 'Footer Title Color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_footer_widgetmenubrssc', 'rg_footer_copyright_settings', 'Footer Title Border Color', '#ff735f');
addColorPalatOption($wp_customize, 'rg_footer_widgetsText', 'rg_footer_copyright_settings', 'Footer Text Color', '#c5c7d9');
addColorPalatOption($wp_customize, 'rg_footer_widgetsmenusText', 'rg_footer_copyright_settings', 'Footer Menus Color', '#c5c7d9');
addColorPalatOption($wp_customize, 'rg_footer_widgetsactivemenu', 'rg_footer_copyright_settings', 'Footer Active Menu Color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_footer_widgetsactivehvrsmenu', 'rg_footer_copyright_settings', 'Footer Menu Hover Color', '#ffffff');

addColorPalatOption($wp_customize, 'rg_footer_widgetsIconsColor', 'rg_footer_copyright_settings', 'Footer Icons Color', '#ff735f');


addColorPalatOption($wp_customize, 'rg_footer_widgetsFrmTxtlabelsColor', 'rg_footer_copyright_settings', 'Form Labels Color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_footer_widgetsFrmTxtColor', 'rg_footer_copyright_settings', 'Form Text & Placeholder Text Color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_footer_widgetsFrmbrssColor', 'rg_footer_copyright_settings', 'Form Fields Border Color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_footer_widgetsBtntxtColor', 'rg_footer_copyright_settings', 'Form Button Text Color', '#ff735f');
addColorPalatOption($wp_customize, 'rg_footer_widgetsBtntxtBgssColor', 'rg_footer_copyright_settings', 'Form Button Background Color', '#ffffff');
addColorPalatOption($wp_customize, 'rg_footer_widgetsDateColor', 'rg_footer_copyright_settings', 'Date Text Color', '#ffffff');

addColorPalatOption($wp_customize, 'rg_footer_widgetscatarchbgssColor', 'rg_footer_copyright_settings', 'Dropdown background Color', '#ffffff'); 

addColorPalatOption($wp_customize, 'rg_footer_widgetsBottomfootertextColor', 'rg_footer_copyright_settings', 'Bottom Footer Text Color', '#c5c7d9');

