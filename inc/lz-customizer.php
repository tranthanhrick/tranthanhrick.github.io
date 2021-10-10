<?php
/**
 * 
 *
 * @package Unbox
 */
require "class/customizer-classes.php";
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lz_fitness_lite_customize_register( $wp_customize ) {

    global $wp_registered_sidebars;

    $lz_fitness_categories = get_categories(array('hide_empty' => 0));
    foreach ($lz_fitness_categories as $lz_fitness_category) {
        $lz_fitness_cat[$lz_fitness_category->term_id] = $lz_fitness_category->cat_name;
    }
    
    $lz_fitness_pages = get_pages(array('hide_empty' => 0));
    foreach ($lz_fitness_pages as $lz_fitness_pages_single) {
        $lz_fitness_page_choice[$lz_fitness_pages_single->ID] = $lz_fitness_pages_single->post_title; 
    }

    for ( $i = 1; $i <= 100 ; $i++) { 
        $lz_fitness_percentage[$i] = $i; 
    }

    // $lzFitnessTeams = get_posts(array('hide_empty' => 0, 'post_type'=>'lz_fitness_teams'));
    // foreach ($lzFitnessTeams as $lzFitnessTeamsSingle) {
    //     $lzFitnessTeamsSingleChoice[$lzFitnessTeamsSingle->ID] = $lzFitnessTeamsSingle->post_title; 
    // }
    $rgTestimonialsSingleChoice = getFitnessPostsType('our-testimonials');
  $lzFitnessGallerySingleChoice = getFitnessPostsType('our-gallery');
   //$rgFitnessserviceSingleChoice = getFitnessPostsType('our-service');
     $rgServiceSingleChoice = getFitnessPostsType('our-service');
    $TeamsSingleChoice = getFitnessPostsType('our-team'); 
    $lzFitnessfaqSingleChoice = getFitnessPostsType('lz_faq');
    $lz_fitness_post_count_choice = array(  2 => 2, 4 => 4 ); 

    /*---------------------
    * Theme Options 
    ----------------------*/
    $wp_customize->add_panel( 'panel_id', array(
        'priority'       => 121,
        'capability'     => 'edit_theme_options',
        'title'          => __('Theme Design Options', 'Unbox'),
        'description'    => __('Theme Design Options', 'Unbox'),
    ) ); 

    /********************* HOME PAGE SETTINGS *************************/
    /*---------------------------- START -----------------------------*/
    $wp_customize->add_panel(
        'lz_fitness_premium_home_panel',
        array(
            'title' => __( 'Front Page Sections', 'Unbox' ),
            'priority' => 19
        )
    );
    // echo 'header color'. 
    $headingColor = get_theme_mod('lz_fitness_title_color', '#fe5722');
  include "prothemesetting.php";
include "homeSettings/slider-customizer.php"; 
include "homeSettings/aboutspa-customizer.php"; 
include "homeSettings/services-customizer.php";
include "homeSettings/massage-customizer.php"; 

include "homeSettings/features-customizer.php";
include "homeSettings/gallery-customizer.php";

include "homeSettings/counter-customizer.php";
include "homeSettings/packages-customizer.php";
include "homeSettings/team-customizer.php"; 

include "homeSettings/featuredpro-customizer.php";

include "homeSettings/testimonials-costomizer.php";
include "homeSettings/blog-customizer.php";

include "homeSettings/newsletter-customizer.php"; 

  
    /*---------------------------- END -------------------------------*/
    /********************* HOME PAGE SETTINGS END *************************/

    /******  GENERAL SETTINGS PANEL START *******/
    include "generalSttings/general-section.php";    
    include "generalSttings/font-customizer.php";
    /******  GENERAL SETTINGS PANEL END *******/

    
    /**************************************************/
    /*****                 Info                   *****/
    /**************************************************/
    // $wp_customize->add_section(
    //     'lz_fitness_new',
    //     array(
    //         'title' => __('Help & Contact', 'Unbox'),
    //         'priority' => 0,
    //         'description' => __('
    //          <p><strong>Instruction - Setting up Home Page</strong>
    //          <br/>
    //             1. Create a new page (any title, like Home )<br/>
    //             2. In right column: Page Attributes -> Template: Home Page<br/>
    //             3. Click on Publish<br/>
    //             4. Go to Appearance-> Customize -> General settings -> Static Front Page<br/>
    //             5. Select - A static page<br/>
    //             6. In Front Page, select the page that you created in the step 1<br/>
    //             7. Save changes
    //          <p>
    //          <hr>
    //          <strong>Plugin or WordPress issues?</strong><br>
    //          If you are experiencing issues with plugins, please contact the plugin author. If you are experiencing issues with WordPress functionality then please visit the <a href="https://wordpress.org/support/" target="_blank">WordPress Support Forum</a>.
    //          </p>
    //          <p>
    //          <strong>Theme issues?</strong><br>
    //          If you are having theme related problems then please contact us through our <a href="https://www.unboxthemes.com/contact-us/" target="_blank">contact form</a>, which can be found at <a href="#" target="_blank">#</a>
    //          </p>
    //          <p>
    //          <br>
    //          <a href="#" target="_blank" style="display:block;">
    //          <img src="'.get_bloginfo('template_url').'/images/Resume Design Pro.png">
    //          </a>
    //          </p>
    //          ', 'Glorious Spa') 
    //     )
    // );  

    $wp_customize->add_setting('lz_fitness_options[info]', array(
        'sanitize_callback' => 'lz_fitness_no_sanitize',
        'type' => 'info_control',
        'capability' => 'edit_theme_options',
     )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pro_section', array(
        'section' => 'lz_fitness_new',
        'settings' => 'lz_fitness_options[info]',
        'type' => 'textarea',
        'priority' => 109
        ) )
    );

    // $wp_customize->add_section(
    //     'lz_fitness_prem',
    //     array(
    //         'title' => __('Theme Document', 'Glorious Spa Pro'),
    //         'priority' => 9999,
    //         'description' => __('
    //          <a href="https://www.unboxthemes.com/wp-content/docs/glorious-spa/documentation/" target="_blank" style="display:block;">
    //          <img src="'.get_bloginfo('template_url').'/images/unbox.png">
    //          </a>
    //          ', 'Glorious Spa Pro') 
    //     )
    // ); 

    $wp_customize->add_setting('lz_fitness_prem[info]', array(
        'sanitize_callback' => 'lz_fitness_no_sanitize',
        'type' => 'info_control',
        'capability' => 'edit_theme_options',
    )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'premium_section', array(
        'section' => 'lz_fitness_prem',
        'settings' => 'lz_fitness_prem[info]',
        'type' => 'textarea',
        'priority' => 109
        ))
    );   
    
    function lz_fitness_customizer_stylesheet() {
        wp_enqueue_style( 'lz_fitness-customizer-css', get_template_directory_uri().'/css/css-customizer.css', NULL, NULL, 'all' );
        wp_enqueue_style( 'lz_fitness-customizer2-css', get_template_directory_uri().'/css/customizer-style.css', NULL, NULL, 'all' );
        wp_enqueue_style( 'total-customizer-chosen-style', get_template_directory_uri() .'/css/chosen.css');

    }

    /***************************************************/
    /*****                 Layout                 ****/
    /**************************************************/
    // Blog PAGE  
    // include "blog-customizer.php";
   

}
add_action( 'customize_register', 'lz_fitness_lite_customize_register' );


function lz_fitness_customizer_script() {
    // Endqueue the js of files
    wp_enqueue_script( 'lz_fitness_lite_customizer', get_template_directory_uri(). '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
    wp_enqueue_script( 'lz_fitness_lite_customizer-script', get_template_directory_uri(). '/js/customizer-scripts.js', array( 'customize-preview' ), '201512153', true );
    wp_enqueue_script( 'total-customizer-chosen-script', get_template_directory_uri().' /js/chosen.jquery.js', array("jquery"),'1.4.1', true  );
    // wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.css');   
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.4.0' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Archivo+Narrow|Arimo|Berkshire+Swash|Bitter|Comfortaa|Dancing+Script|Dosis|Droid+Serif|Francois+One|Germania+One|Hammersmith+One|Indie+Flower|Lobster|Muli|Nosifer|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|Pacifico|Questrial|Roboto+Mono|Roboto+Slab|Source+Serif+Pro|Titillium+Web|Work+Sans|Poppins|Roboto' );
}
add_action( 'customize_controls_enqueue_scripts', 'lz_fitness_customizer_script' );

function lz_fitness_no_sanitize(){}


//SANITIZATION FUNCTIONS
function lz_fitness_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function lz_fitness_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function lz_fitness_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

function lz_fitness_sanitize_choices( $input, $setting ) {
    global $wp_customize;

    $control = $wp_customize->get_control( $setting->id );

    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function lz_fitness_sanitize_choices_array( $input, $setting ) {
    global $wp_customize;
    
    if(!empty($input)){
        $input = array_map('absint', $input);
    }

    return $input;
} 

function getFitnessPostsType($type){
    $lzFitnessPostData = null;
    if(!empty($type)){
        $lzFitnessPosts = get_posts(array('hide_empty' => 0, 'post_type'=> $type, 'numberposts' => -1 ));
        foreach ($lzFitnessPosts as $lzFitnessPostsSingle) {
            $lzFitnessPostData[$lzFitnessPostsSingle->ID] = $lzFitnessPostsSingle->post_title; 
        }
    }
    return $lzFitnessPostData;
}
/*
if(! function_exists('lz_fitness_color_output' ) ):
/**
* Set the header background color 
*
function lz_fitness_color_output(){
    ?>
    <style type="text/css">
    #site-header { background-color: <?php echo esc_attr(get_theme_mod( 'top_header_background_color')); ?>; }
</style>
<?php }
add_action( 'wp_head', 'lz_fitness_color_output' );
endif;*/

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lz_fitness_lite_customize_preview_js() {
	wp_enqueue_script( 'lz_fitness_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
    wp_enqueue_script( 'lz_fitness_lite_customizer-script', get_template_directory_uri() . '/js/customizer-scripts.js', array( 'customize-preview' ), '20151215', true );
    wp_enqueue_script( 'total-customizer-chosen-script', get_template_directory_uri() .'/js/chosen.jquery.js', array("jquery"),'1.4.1', true  );
    // wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.css');   
    wp_enqueue_style( 'total-customizer-chosen-style', get_template_directory_uri() .'/css/chosen.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.4.0' );
}
add_action( 'customize_preview_init', 'lz_fitness_lite_customize_preview_js' );

