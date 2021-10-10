<?php     
/**
 * @package Unbox
 */

function total_dymanic_styles(){
    global $post;
    $primColor = get_theme_mod( 'lz_fitness_template_color', '#fb705d' );
    $navigationboxColor = get_theme_mod( 'lz_fitness_header_bgsclrfrresponsiveColor', '#2e2e2e' );
    $navigationrespnavbsbgssColor = get_theme_mod( 'rg_lbl_respnavbsbgssColor', '#131d4e' );
    $color_rgba = totalColourBrightness($primColor, 0.3);
    $darker_color = totalColourBrightness($primColor, -0.5);
    $header_image = get_header_image();
    $headeingFontRow = get_theme_mod('lz_fitness_general_headeing_font', '24');
    $textFontRow = get_theme_mod('lz_fitness_general_text_font', '24');
    $textboldtextFontRow = get_theme_mod('lz_fitness_general_boldtext_font', '14');

    $header = get_theme_mod('header_textcolor', '#666666'); //header color

    $Storysectionstudentimg = get_theme_mod('sec_storystudentimgTpadding', '34em');
    $AboutscrollarrPosition = get_theme_mod('sec_scrollarrstudentimgTposition', '110px');

    $headerinnerpageheading = get_theme_mod('pages_innerpageheading', '35px');
    $headerinnerpageheading2 = get_theme_mod('pages_innerpageheading2', '20px');
    $headerinnerpageheading3 = get_theme_mod('pages_innerpageheading3', '19px');
    $headerinnerpageheading4 = get_theme_mod('pages_innerpageheading4', '18px');
    $headerinnerpageheading5 = get_theme_mod('pages_innerpageheading5', '13px');
    $headerinnerpageheading6 = get_theme_mod('pages_innerpageheading6', '10px');


    $aboutsectionTpadding = get_theme_mod('sec_aboutsectionTpadding', '8em');
    $aboutsectionBpadding = get_theme_mod('sec_aboutsectionBpadding', '8em');




    $servicesectionTpadding = get_theme_mod('sec_servicessectionTpadding', '5em');
    $servicesectionBpadding = get_theme_mod('sec_servicessectionBpadding', '5em');

    $serviceBxOp = get_theme_mod('sec_BxOp', '0.4');

    $serviceBxOverOp = get_theme_mod('sec_BxOveOp', '0.8');


    $aboutspasectionTpadding = get_theme_mod('sec_aboutspasectionTpadding', '6em');
    $aboutspasectionBpadding = get_theme_mod('sec_aboutspasectionBpadding', '6em');

    $GalleryspasectionTpadding = get_theme_mod('sec_gallerysectionTpadding', '7em');
    $GalleryspasectionBpadding = get_theme_mod('sec_gallerysectionBpadding', '7em');

    $GallerygalleryImgHvrOverlayOp = get_theme_mod('sec_galleryImgHvrOverlayOp', '0.8');

    $FeaturessectionTpadding = get_theme_mod('sec_FeaturessectionTpadding', '6em');
    $FeaturessectionBpadding = get_theme_mod('sec_FeaturessectionBpadding', '6em');

    $teamsectionsectionTpadding = get_theme_mod('sec_teamsectionTpadding', '2em');
    $teamsectionsectionBpadding = get_theme_mod('sec_teamsectionBpadding', '2em');


    $FeaturessectionOverlayOpacity = get_theme_mod('sec_FeaturessectionOverlayOpacity', '0.9');

 $countersectionmainTpadding = get_theme_mod('sec_countersectionmainTpadding', '2em');
    $countersectionmainBpadding = get_theme_mod('sec_countersectionmainBpadding', '2em');

 $featureproductsectionTpadding = get_theme_mod('featureproductsection_toppadding', '2em');
    $featureproductsectionBpadding = get_theme_mod('featureproductsection_bottompadding', '2em');

$pricingsectionmainTpadding = get_theme_mod('pricing_areaTpadding', '6em');
    $pricingsectionmainBpadding = get_theme_mod('pricing_areaBpadding', '5em');
    $pricingsectionplanboxoverlayop = get_theme_mod('pricing_areaplanboxoverlayop', '0.8');

    $storysectionTpadding = get_theme_mod('sec_storysectionTpadding', '6em');
    $storysectionBpadding = get_theme_mod('sec_storysectionBpadding', '6em');
    $storysectionLpadding = get_theme_mod('sec_storysectionLpadding', '0em');
    $storysectionRpadding = get_theme_mod('sec_storysectionRpadding', '0em');

    $countersectionTpadding = get_theme_mod('sec_countersectionTpadding', '8em');
    $countersectionBpadding = get_theme_mod('sec_countersectionBpadding', '5em');
    $countersectionLpadding = get_theme_mod('sec_countersectionLpadding', '0em');
    $countersectionRpadding = get_theme_mod('sec_countersectionRpadding', '10em');
    $counterOverlay = get_theme_mod('sec_counterOverlay', '0.1');



    $testimonialsectionTpadding = get_theme_mod('sec_testimonialsectionTpadding', '3em');
    $testimonialsectionBpadding = get_theme_mod('sec_testimonialsectionBpadding', '2em');
   


    $blogsectionTpadding = get_theme_mod('sec_blogsectionTpadding', '0em');
    $blogsectionBpadding = get_theme_mod('sec_blogsectionBpadding', '3em');


    $newslettersectionTpadding = get_theme_mod('sec_newslettersectionTpadding', '5em');
    $newslettersectionBpadding = get_theme_mod('sec_newslettersectionBpadding', '5em');


    $footersectionTpadding = get_theme_mod('sec_footersectionTpadding', '40px');
    $footersectionBpadding = get_theme_mod('sec_footersectionBpadding', '20px');

    $footeroverlayOpColor = get_theme_mod('sec_footeroverlayOpColor', '0.9');
   


    $HeaderCompsectionTmargin = get_theme_mod('sec_completeheadersectionTmargin', '0px');
    $HeaderCompsectionBmargin = get_theme_mod('sec_completeheadersectionBmargin', '0px');
    $HeaderCompsectionLmargin = get_theme_mod('sec_completeheadersectionLmargin', '0px');
    $HeaderCompsectionRmargin = get_theme_mod('sec_completeheadersectionRmargin', '0px');

    $headerlogoTopsetmaxwidth = get_theme_mod('pages_logoTopsetmaxwidth', '100');

//for slider opacity

    $slidersecslideopacity = get_theme_mod('pages_slideopacity', '0.6');

    $headingFont = getFonts(false, (int)$headeingFontRow);
    $textFont = getFonts(false, (int)$textFontRow);
    $textboldtextFont = getFonts(false, (int)$textboldtextFontRow);
    //$textmainsubheadingFont = getFonts(false, (int)$textmainsubheadingFontRow);

    $custom_css = '';

    $custom_css = "*, h1#title-lens, h1#title-lens span, h1#title-lens small, h1#title-lens strong, h1#title-lens b, h1#title-lens big, h1#title-lens sub, h1#title-lens sup {font-family: $textFont;}
    div#testimonials h2.rg-section,
    div#testimonials h2.rg-section span,
    div#testimonials h2.rg-section small,
    div#testimonials h2.rg-section strong,
    div#testimonials h2.rg-section b,
    div#testimonials h2.rg-section big,
    div#testimonials h2.rg-section sub,
    div#testimonials h2.rg-section sup,
    div#testimonials .carousel-control span,
    h2.rg-section,
    h2.rg-section span,
    h2.rg-section small,
    h2.rg-section strong,
    h2.rg-section b,
    h2.rg-section big,
    h2.rg-section sub,
    h2.rg-section sup,
    h1#title-the,
    h1#title-the span,
    h1#title-the small,
    h1#title-the strong,
    h1#title-the b,
    h1#title-the big,
    h1#title-the sub,
    h1#title-the sup,
    div#rg-service .inner-ser-bx .ser-content .post-title,
    div#rg-service .inner-ser-bx .ser-content .post-title span,
    div#rg-service .inner-ser-bx .ser-content .post-title small,
    div#rg-service .inner-ser-bx .ser-content .post-title strong,
    div#rg-service .inner-ser-bx .ser-content .post-title b,
    div#rg-service .inner-ser-bx .ser-content .post-title big,
    div#rg-service .inner-ser-bx .ser-content .post-title sub,
    div#rg-service .inner-ser-bx .ser-content .post-title sup,
    main#rg-inner-bx .person-detail h3,
    main#rg-inner-bx .person-detail h3 span,
    main#rg-inner-bx .person-detail h3 small,
    main#rg-inner-bx .person-detail h3 strong,
    main#rg-inner-bx .person-detail h3 b,
    main#rg-inner-bx .person-detail h3 big,
    main#rg-inner-bx .person-detail h3 sub,
    main#rg-inner-bx .person-detail h3 sup,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title span,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title small,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title strong,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title b,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title big,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title sub,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title sup,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title span,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title small,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title strong,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title b,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title big,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title sub,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title sup,
    main#rg-inner-bx .team-name h4,
    main#rg-inner-bx .team-name h4 span,
    main#rg-inner-bx .team-name h4 small,
    main#rg-inner-bx .team-name h4 strong,
    main#rg-inner-bx .team-name h4 b,
    main#rg-inner-bx .team-name h4 big,
    main#rg-inner-bx .team-name h4 sub,
    main#rg-inner-bx .team-name h4 sup,
    div#newsletter h2.rg-news-ttl,
    div#newsletter h2.rg-news-ttl span,
    div#newsletter h2.rg-news-ttl small,
    div#newsletter h2.rg-news-ttl strong,
    div#newsletter h2.rg-news-ttl b,
    div#newsletter h2.rg-news-ttl big,
    div#newsletter h2.rg-news-ttl sub,
    div#newsletter h2.rg-news-ttl sup,
    footer#rg-footer .social-profile-icons.text-center h2,
    footer#rg-footer .social-profile-icons.text-center h2 span,
    footer#rg-footer .social-profile-icons.text-center h2 small,
    footer#rg-footer .social-profile-icons.text-center h2 strong,
    footer#rg-footer .social-profile-icons.text-center h2 b,
    footer#rg-footer .social-profile-icons.text-center h2 big,
    footer#rg-footer .social-profile-icons.text-center h2 sub,
    footer#rg-footer .social-profile-icons.text-center h2 sup,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title span,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title small,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title strong,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title b,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title big,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title sub,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title sup,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title span,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title small,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title strong,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title b,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title big,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title sub,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title sup{font-family: $textboldtextFont;}

    main#rg-inner-bx h3.title,
    main#rg-inner-bx h3.title span,
    main#rg-inner-bx h3.title small,
    main#rg-inner-bx h3.title strong,
    main#rg-inner-bx h3.title b,
    main#rg-inner-bx h3.title big,
    main#rg-inner-bx h3.title sub,
    main#rg-inner-bx h3.title sup,
    main#rg-inner-bx .rg-innerser-bx .rg-ser-num,
    main#rg-inner-bx .rg-inner-gall-bx1 h3,
    main#rg-inner-bx .rg-inner-gall-bx1 h3 span,
    main#rg-inner-bx .rg-inner-gall-bx1 h3 small,
    main#rg-inner-bx .rg-inner-gall-bx1 h3 strong,
    main#rg-inner-bx .rg-inner-gall-bx1 h3 b,
    main#rg-inner-bx .rg-inner-gall-bx1 h3 big,
    main#rg-inner-bx .rg-inner-gall-bx1 h3 sub,
    main#rg-inner-bx .rg-inner-gall-bx1 h3 sup,
    main#rg-inner-bx .rg-innerprojects-title h3,
    main#rg-inner-bx .rg-innerprojects-title h3 span,
    main#rg-inner-bx .rg-innerprojects-title h3 small,
    main#rg-inner-bx .rg-innerprojects-title h3 strong,
    main#rg-inner-bx .rg-innerprojects-title h3 b,
    main#rg-inner-bx .rg-innerprojects-title h3 big,
    main#rg-inner-bx .rg-innerprojects-title h3 sub,
    main#rg-inner-bx .rg-innerprojects-title h3 sup,
    
    #rg-inner-bx #content-box .teamdesbox h3 a,
    #rg-inner-bx #content-box .teamdesbox h3 a small,
    #rg-inner-bx #content-box .teamdesbox h3 a strong,
    #rg-inner-bx #content-box .teamdesbox h3 a span,
    #rg-inner-bx #content-box .teamdesbox h3 a b,
    #rg-inner-bx #content-box .teamdesbox h3 a big,
    #rg-inner-bx #content-box .teamdesbox h3 a sub,
    #rg-inner-bx #content-box .teamdesbox h3 a sup,
  
    footer#rg-footer h4.widget-title,
    div#rg-sitemap .rg-post-cat li.categories,
    main#rg-inner-bx div#sidebars h3.widget-title,
    h1.rg-innerp-title,
    main#rg-inner-bx h4.widget-title,
    .single-productpage .ht-main-title,
    main#rg-inner-bx h2,
    main#rg-inner-bx h1.rg-frm-tagline.text-center,
    main#rg-inner-bx h1.rg-frm-tagline.text-center span,
    main#rg-inner-bx h1.rg-frm-tagline.text-center small,
    main#rg-inner-bx h1.rg-frm-tagline.text-center strong,
    main#rg-inner-bx h1.rg-frm-tagline.text-center b,
    main#rg-inner-bx h1.rg-frm-tagline.text-center big,
    main#rg-inner-bx h1.rg-frm-tagline.text-center sub,
    main#rg-inner-bx h1.rg-frm-tagline.text-center sup,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center span,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center small,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center strong,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center b,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center big,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center sub,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center sup,
    h2.woocommerce-loop-product__title,
    h2.woocommerce-loop-product__title span,
    h2.woocommerce-loop-product__title small,
    h2.woocommerce-loop-product__title strong,
    h2.woocommerce-loop-product__title b,
    h2.woocommerce-loop-product__title big,
    h2.woocommerce-loop-product__title sub,
    h2.woocommerce-loop-product__title sup,
    h2.woocommerce-Reviews-title span,
    h2.woocommerce-Reviews-title small,
    h2.woocommerce-Reviews-title strong,
    h2.woocommerce-Reviews-title b,
    h2.woocommerce-Reviews-title big,
    h2.woocommerce-Reviews-title sub,
    h2.woocommerce-Reviews-title sup,
    h1.product_title.entry-title,
    h1.product_title.entry-title span,
    h1.product_title.entry-title small,
    h1.product_title.entry-title strong,
    h1.product_title.entry-title b,
    h1.product_title.entry-title big,
    h1.product_title.entry-title sub,
    h1.product_title.entry-title sup,
    div#masonry .dlab-post-title .post-title,
    div#masonry .dlab-post-title .post-title span,
    div#masonry .dlab-post-title .post-title small,
    div#masonry .dlab-post-title .post-title strong,
    div#masonry .dlab-post-title .post-title b,
    div#masonry .dlab-post-title .post-title big,
    div#masonry .dlab-post-title .post-title sub,
    div#masonry .dlab-post-title .post-title sup,
    h1.rg-innerp-title,
    h1.rg-innerp-title span,
    h1.rg-innerp-title small,
    h1.rg-innerp-title strong,
    h1.rg-innerp-title b,
    h1.rg-innerp-title big,
    h1.rg-innerp-title sub,
    h1.rg-innerp-title sup,


    div#counter h4.counter-box-title.count,
    div#counter h4.counter-box-title.count span,
    div#counter h4.counter-box-title.count small,
    div#counter h4.counter-box-title.count strong,
    div#counter h4.counter-box-title.count b,
    div#counter h4.counter-box-title.count big,
    div#counter h4.counter-box-title.count sub,
    div#counter h4.counter-box-title.count sup,
    div#rg-service .inner-ser-bx .team-prof .post-title,
    div#rg-service .inner-ser-bx .team-prof .post-title span,
    div#rg-service .inner-ser-bx .team-prof .post-title small,
    div#rg-service .inner-ser-bx .team-prof .post-title strong,
    div#rg-service .inner-ser-bx .team-prof .post-title b,
    div#rg-service .inner-ser-bx .team-prof .post-title big,
    div#rg-service .inner-ser-bx .team-prof .post-title sub,
    div#rg-service .inner-ser-bx .team-prof .post-title sup,
    div#packages .menu-type-content h3 span,
    div#packages .menu-type-content h3 small,
    div#packages .menu-type-content h3 strong,
    div#packages .menu-type-content h3 b,
    div#packages .menu-type-content h3 big,
    div#packages .menu-type-content h3 sub,
    div#packages .menu-type-content h3 sup,
    div#packages .menu-type-content h3,
    section#ht-team-section h4,
    section#ht-team-section h4 span,
    section#ht-team-section h4 small,
    section#ht-team-section h4 strong,
    section#ht-team-section h4 b,
    section#ht-team-section h4 big,
    section#ht-team-section h4 sub,
    section#ht-team-section h4 sup,
    div#blogs .news-desc h4,
    div#blogs .news-desc h4 span,
    div#blogs .news-desc h4 small,
    div#blogs .news-desc h4 strong,
    div#blogs .news-desc h4 b,
    div#blogs .news-desc h4 big,
    div#blogs .news-desc h4 sub,
    div#blogs .news-desc h4 sup
    {font-family: $headingFont; }

    header.site-header { background: url('$header_image'); background-repeat: no-repeat; background-size: cover;}
        #ht-masthead, .ht-site-description a, .page-template-home-template .ht-main-navigation .menu-item > a, .ht-main-navigation a, .ht-main-navigation ul ul a {color: #{$header};}
    .page-template-home-template .ht-main-navigation .current_page_item > a {color: #fff;}
    li.current_page_item > a {color: #ffffff;}


    div#about{padding-top: $aboutsectionTpadding;} 
    div#about{padding-bottom: $aboutsectionBpadding;}
   

    div#rg-service{padding-top: $servicesectionTpadding;} 
    div#rg-service{padding-bottom: $servicesectionBpadding;}
    div#rg-service .inner-ser-bx .team-prof{opacity: $serviceBxOp;}

    main#rg-inner-bx .work-box-img::before{opacity: $serviceBxOverOp;}
    
    div#aboutspa{padding-top: $aboutspasectionTpadding;} 
    div#aboutspa{padding-bottom: $aboutspasectionBpadding;}

     section#gallery{padding-top: $GalleryspasectionTpadding;} 
    section#gallery{padding-bottom: $GalleryspasectionBpadding;}

#gallery .spa-gall:hover:after, 
#gallery .spa-gall.hover:after{opacity: $GallerygalleryImgHvrOverlayOp;}

    section#features-section{padding-top: $FeaturessectionTpadding;} 
   section#features-section{padding-bottom: $FeaturessectionBpadding;}

   section#features-section .overlay{opacity: $FeaturessectionOverlayOpacity;}

 section#ht-team-section{padding-top: $teamsectionsectionTpadding;} 
   section#ht-team-section{padding-bottom: $teamsectionsectionBpadding;}


    div#rg-story .lightbox{padding-top: $storysectionTpadding;} 
    div#rg-story .lightbox{padding-bottom: $storysectionBpadding;}
    div#rg-story .lightbox{padding-left: $storysectionLpadding;}
    div#rg-story .lightbox{padding-right: $storysectionRpadding;}


    div#counter .rg-counter{padding-top: $countersectionTpadding;} 
    div#counter .rg-counter{padding-bottom: $countersectionBpadding;}
    div#counter .rg-counter{padding-left: $countersectionLpadding;}
    div#counter .rg-counter{padding-right: $countersectionRpadding;}
    div#counter .rg-counter .rg-counter-overlay{opacity: $counterOverlay;}

     div#counter{padding-top: $countersectionmainTpadding;} 
    div#counter{padding-bottom: $countersectionmainBpadding;}

    section#featured-product-section{padding-top: $featureproductsectionTpadding;} 
    section#featured-product-section{padding-bottom: $featureproductsectionBpadding;}

 div#packages{padding-top: $pricingsectionmainTpadding;} 
    div#packages{padding-bottom: $pricingsectionmainBpadding;}

    div#packages .menu-type-content{opacity: $pricingsectionplanboxoverlayop;}

    div#testimonials{padding-top: $testimonialsectionTpadding;} 
    div#testimonials{padding-bottom: $testimonialsectionBpadding;}
    

    div#blogs .rg-blog-bx1{padding-top: $blogsectionTpadding;} 
    div#blogs .rg-blog-bx1{padding-bottom: $blogsectionBpadding;}
   

    div#newsletter{padding-top: $newslettersectionTpadding;} 
    div#newsletter{padding-bottom: $newslettersectionBpadding;}
    


    .logobox{margin-top: $HeaderCompsectionTmargin;} 
    .logobox{margin-bottom: $HeaderCompsectionBmargin;}
    .logobox{margin-left: $HeaderCompsectionLmargin;}
    .logobox{margin-right: $HeaderCompsectionRmargin;}

    .ht-slide-overlay{opacity: $slidersecslideopacity;}
.logobox img{max-width: $headerlogoTopsetmaxwidth%;}

    footer#rg-footer div#rg-main-footer{padding-top: $footersectionTpadding;} 
    footer#rg-footer div#rg-main-footer{padding-bottom: $footersectionBpadding;}

    footer#rg-footer .footer-overlay{opacity: $footeroverlayOpColor;}


    body.page-template-default main#rg-inner-bx h1, .ht-main-title,
    #ht-contactus-wrap h1,
    .single-productpage .ht-main-title,
    h1.product_title.entry-title,
    main#rg-inner-bx h1.rg-contact-frm-titl.text-center,
    main#rg-inner-bx h1.rg-frm-tagline.text-center,
    h1.rg-innerp-title{font-size: $headerinnerpageheading;}
    body.page-template-default main#rg-inner-bx h2,
    main#rg-inner-bx h2,
    .woocommerce #reviews #comments h2, 
    .woocommerce-page #reviews #comments h2,
    main#rg-inner-bx h2.woocommerce-loop-product__title,
    div#rg-sitemap .rg-post-cat li.categories{font-size: $headerinnerpageheading2;}
    body.page-template-default main#innerpage-box h3,
    main#rg-inner-bx div#content-box .teamdesbox h3,
    div#sitemap-box h3,
    .woocommerce-billing-fields h3,
    h3#ship-to-different-address,
    #rg-inner-bx .rg-faq-det.padding0 h3.faq-title,
    main#rg-inner-bx .rg-inner-gall-bx1 h3,
    main#rg-inner-bx .rg-innerprojects-title h3,
    main#rg-inner-bx .rg-innerser-bx h3.title,
    div#sidebars h3.widget-title,
    main#rg-inner-bx h3,
    h3#reply-title,
    main#rg-inner-bx .person-detail h3,
    main#rg-inner-bx .rg-innerpage-testbx .testimonial .title,
    #rg-inner-bx .inner-ser-bx .team-prof .post-title,
    #rg-inner-bx .inner-ser-bx .ser-content .post-title{font-size: $headerinnerpageheading3;}

    body.page-template-default main#rg-inner-bx h4,
    div#commentsAdd h4,
    main#rg-inner-bx h4.widget-title{font-size: $headerinnerpageheading4;}
    body.page-template-default main#rg-inner-bx h5{font-size: $headerinnerpageheading5;}
    body.page-template-default main#rg-inner-bx h6,
    div#blog-box.innerpage-whitebox h6{font-size: $headerinnerpageheading6;}


    div#rg-story .rg-resume-img img{top: $Storysectionstudentimg;}
    div#about .ct-btn-scroll {bottom: $AboutscrollarrPosition;}
    ";

    $custom_css .= "
    button,
    input[type='button'],
    input[type='reset'],
    input[type='submit'],
    .widget-area .widget-title:after,
    h3#reply-title:after,
    h3.comments-title:after,
    .nav-previous a,
    .nav-next a,
    .pagination .page-numbers,    
    .ht-progress-bar-length,


    .ht-service-post-wrap:after,
    .ht-service-icon,
    .ht-counter:after,
    .ht-counter:before,
    .ht-testimonial-wrap .bx-wrapper .bx-controls-direction a,
    .ht-cta-buttons a.ht-cta-button1,
    .ht-cta-buttons a.ht-cta-button2:hover,
    #ht-back-top:hover,
    .entry-readmore a,
    .woocommerce #respond input#submit, 
    .woocommerce a.button, 
    .woocommerce button.button, 
    .woocommerce input.button,
    .woocommerce ul.products li.product:hover .button,
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt,
    .woocommerce nav.woocommerce-pagination ul li a, 
    .woocommerce nav.woocommerce-pagination ul li span,
    .woocommerce span.onsale,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
    .woocommerce #respond input#submit.disabled, 
    .woocommerce #respond input#submit:disabled, 
    .woocommerce #respond input#submit:disabled[disabled], 
    .woocommerce a.button.disabled, .woocommerce a.button:disabled, 
    .woocommerce a.button:disabled[disabled], 
    .woocommerce button.button.disabled, 
    .woocommerce button.button:disabled, 
    .woocommerce button.button:disabled[disabled], 
    .woocommerce input.button.disabled, 
    .woocommerce input.button:disabled, 
    .woocommerce input.button:disabled[disabled],
    .woocommerce #respond input#submit.alt.disabled, 
    .woocommerce #respond input#submit.alt.disabled:hover, 
    .woocommerce #respond input#submit.alt:disabled, 
    .woocommerce #respond input#submit.alt:disabled:hover, 
    .woocommerce #respond input#submit.alt:disabled[disabled], 
    .woocommerce #respond input#submit.alt:disabled[disabled]:hover, 
    .woocommerce a.button.alt.disabled, 
    .woocommerce a.button.alt.disabled:hover, 
    .woocommerce a.button.alt:disabled, 
    .woocommerce a.button.alt:disabled:hover, 
    .woocommerce a.button.alt:disabled[disabled], 
    .woocommerce a.button.alt:disabled[disabled]:hover, 
    .woocommerce button.button.alt.disabled, 
    .woocommerce button.button.alt.disabled:hover, 
    .woocommerce button.button.alt:disabled, 
    .woocommerce button.button.alt:disabled:hover, 
    .woocommerce button.button.alt:disabled[disabled], 
    .woocommerce button.button.alt:disabled[disabled]:hover, 
    .woocommerce input.button.alt.disabled, 
    .woocommerce input.button.alt.disabled:hover, 
    .woocommerce input.button.alt:disabled, 
    .woocommerce input.button.alt:disabled:hover, 
    .woocommerce input.button.alt:disabled[disabled], 
    .woocommerce input.button.alt:disabled[disabled]:hover,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
    .woocommerce-MyAccount-navigation-link a,
    #ht-princing-post-section .ht-princing-icon,
    .ht-princing-icon,      
    .readmore a,
    #ht-contactus-wrap .contact-page-form,
    .contact-mapbox iframe,
    #content-box ol li:before,
    .ht-slide-cap-descmore a,
    .days-time-day,
    .lz-facility-text ul li i,
    .facility-icon,
    #blog-box .blog-read-more a,
    .pagingation .current,
    .ht-appintment-member-wrap:after,
    #blog-box .ht-blog-date,
    #commentsAdd input[type='submit'],
    section#inner-blog-section .readMore:hover,
    .woocommerce ul.products li.product .button,
    .woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover,
    div#masonry .share-btn ul li a.site-button:hover,
    .ht-main-navigation ul ul,
    .pagingation a:hover,
    .pagination .page-numbers.current, 
    .pagination a.page-numbers:hover,
    div#masonry a.site-button.left-btn:hover

    {
        background:{$primColor};
    }

    
    .ht-post-info .entry-date span.ht-day,
    .entry-categories .fa,
    .widget-area a:hover,
    .comment-list a:hover,
    .no-comments,
    .ht-site-title a,
    .woocommerce .woocommerce-breadcrumb a:hover,
    #total-breadcrumbs a:hover,
    .ht-featured-link a,
    .ht-portfolio-cat-name-list .fa,
    .ht-portfolio-cat-name:hover, 
    .ht-portfolio-cat-name.active,
    .ht-portfolio-caption a,
    .ht-team-detail,
    .ht-counter-icon,
    .woocommerce div.product p.price, 
    .woocommerce div.product span.price,
    .woocommerce .product_meta a:hover,
    .woocommerce-error:before, 
    .woocommerce-info:before, 
    .woocommerce-message:before,
    .featured-post:after,
    .featured-post:before,
    .featured-link a,
    .breadcrumbbox a,
    #ht-colophon .social-profile-icons a:hover,
    footer#ht-colophon ul li a:hover,
    .ht-footer .textwidget .fa,
    h6.secondry-text,
    #ht-about-us-section ul li:before,
    .pluses.text-right i.fa.fa-plus,
    .ht-section-tagline.lz-newslatter-text b,
    #content-box ul li:before,
    .offtimebox h4.offtime-text,
    #ht-masthead .header-social-links span:hover,
    #ht-masthead ul.header-menu-links li.mailto a:hover,
    .ht-slider-highlighttext,
    .edit-link a,
    .inner-blog-post .socialMedia a:hover,
    #comments a, 
    #commentsAdd a,
    #content-box a,
    #content-box a i:hover,
    #respond .stars span a,
    #content-box .socialMedia a:hover,
    .post-date-publishable i,
    .woocommerce .star-rating span,
    .woocommerce div.product .woocommerce-product-rating a,
    #content-box .socialbxsinglepost:hover a i,
    section#inner-blog-section h2.title small,
    section#inner-blog-section h2.title a,
    div#secondary li.current_page_item > a,
    div#secondary .social-profile-icons ul li i,
    div#rg-sitemap li.current_page_item > a,
    div#content-box .single_post .share-btn ul li a.site-button i,
    th.woocommerce-product-attributes-item__label,
    .lz-fitness-time div:nth-child(8) div.days-time-day
    {
        color:{$primColor};
    }

    .ht-featured-link a,
    .ht-counter,
    .ht-testimonial-wrap .bx-wrapper img,
    .ht-blog-post,
    #ht-colophon,
    .woocommerce ul.products li.product:hover, 
    .woocommerce-page ul.products li.product:hover,
    .woocommerce #respond input#submit, 
    .woocommerce a.button, 
    .woocommerce button.button, 
    .woocommerce input.button,
    .woocommerce ul.products li.product:hover .button,
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt,
    .woocommerce div.product .woocommerce-tabs ul.tabs,
    .woocommerce #respond input#submit.alt.disabled, 
    .woocommerce #respond input#submit.alt.disabled:hover, 
    .woocommerce #respond input#submit.alt:disabled, 
    .woocommerce #respond input#submit.alt:disabled:hover, 
    .woocommerce #respond input#submit.alt:disabled[disabled], 
    .woocommerce #respond input#submit.alt:disabled[disabled]:hover, 
    .woocommerce a.button.alt.disabled, 
    .woocommerce a.button.alt.disabled:hover, 
    .woocommerce a.button.alt:disabled, 
    .woocommerce a.button.alt:disabled:hover, 
    .woocommerce a.button.alt:disabled[disabled], 
    .woocommerce a.button.alt:disabled[disabled]:hover, 
    .woocommerce button.button.alt.disabled, 
    .woocommerce button.button.alt.disabled:hover, 
    .woocommerce button.button.alt:disabled, 
    .woocommerce button.button.alt:disabled:hover, 
    .woocommerce button.button.alt:disabled[disabled], 
    .woocommerce button.button.alt:disabled[disabled]:hover, 
    .woocommerce input.button.alt.disabled, 
    .woocommerce input.button.alt.disabled:hover, 
    .woocommerce input.button.alt:disabled, 
    .woocommerce input.button.alt:disabled:hover, 
    .woocommerce input.button.alt:disabled[disabled], 
    .woocommerce input.button.alt:disabled[disabled]:hover,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle
    .page-template-home-template .ht-main-navigation li:hover > a,
    .home.blog .ht-main-navigation li:hover > a,
    .page-template-home-template .ht-main-navigation .current > a,
    .home.blog .ht-main-navigation .current > a,
    .featured-post:before,
    #blog-box .blog-read-more a,
    main#innerpage-box .page-testimonial-box:hover,
    .woocommerce ul.products li.product:hover, .woocommerce-page ul.products li.product:hover, 
    main#innerpage-box .page-testimonial-box:hover .team-thumb img,
     #ht-masthead .header-social-links span:hover,
    .woocommerce ul.products li.product .button,
    div#masonry a.site-button.left-btn:hover,
    .pagingation,
    .archive.category .nav-links,
    .newsletter-form-box input[type='email']
    {
        border-color: {$primColor};
    }

    #ht-masthead,
    .woocommerce-error, 
    .woocommerce-info, 
    .woocommerce-message{
        border-top-color: {$primColor};
    }

    .nav-next a:after{
        border-left-color: {$primColor};
    }

    .nav-previous a:after{
        border-right-color: {$primColor};
    }

    .ht-active .ht-service-icon{
        box-shadow: 0px 0px 0px 2px #FFF, 0px 0px 0px 4px {$primColor};
    }

    .woocommerce ul.products li.product .onsale:after{
        border-color: transparent transparent {$darker_color} {$darker_color};
    }

    .woocommerce span.onsale:after{
        border-color: transparent {$darker_color} {$darker_color} transparent
    }


    @media screen and (max-width: 991px){
       div#navbarNavDropdown{
        background:{$navigationrespnavbsbgssColor}
    }
}";


    // heading text colour 
$headingColor = get_theme_mod('lz_fitness_title_color', '#fe5722');
$custom_css .= '.title-color{color:'.$headingColor.';}';

    // START SECONDARY COLOR CSS
$secondary = get_theme_mod('theme_secondary_color', '#131d4e');
$custom_css .='
.secondry-bg,
   #blog-box .blog-read-more a:hover,
   #commentsAdd input[type="submit"]:hover,
input[type="button"]:hover, 
input[type="reset"]:hover, 
input[type="submit"]:hover,
.socialMedia a,
section#inner-blog-section .readMore,
div#sitemap-box h3,
.woocommerce ul.products li.product .button:hover,
.woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page div.product .woocommerce-tabs ul.tabs li, section#inner-blog-section h2.title,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
div#content-box .wc-proceed-to-checkout a:hover,
.woocommerce #payment #place_order:hover, 
.woocommerce-page #payment #place_order:hover,
.woocommerce div.product form.cart .button:hover,
div#content-box .single_post .share-btn ul li a.site-button:hover,
.pagingation a,
.pagination .page-numbers,
#rg-inner-bx .blue.pages-btn1:before,
table thead th{
    background-color:'.$secondary.'
}    
    #blog-box .blog-read-more a:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.socialMedia a:hover,
.woocommerce ul.products li.product .button:hover,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
div#content-box .wc-proceed-to-checkout a:hover,
.woocommerce #payment #place_order:hover, 
.woocommerce-page #payment #place_order:hover 
{border-color: '.$secondary.';}

main#innerpage-box #blog-box h2, 
main#innerpage-box #blog-box h2 small,
div#secondary .social-profile-icons ul li i:hover,
#rg-inner-bx .blue.pages-btn1 {color:'.$secondary.';}   
.woocommerce-MyAccount-navigation-link.is-active a {color:'.$secondary.' !important;}    


.product_list_widget .amount,
.product_list_widget del .amount,
.woocommerce ul.products li.product .total-product-title-wrap small,
.total-product-title-wrap,
.woocommerce div.product .product_title small,
.woocommerce div.product .product_title,
div#content-box p a:hover,
div#content-box .woocommerce-info a:hover,
div#content-box header.woocommerce-Address-title.title a:hover,
section#inner-blog-section h2.title:hover small,
.woocommerce .widget_rating_filter ul li a:hover span,
.woocommerce .star-rating:hover, 
.woocommerce-page .star-rating:hover span,
main#innerpage-box h2.woocommerce-loop-product__title small,
main#innerpage-box h2.woocommerce-loop-product__title,
div#masonry .share-btn ul li a.site-button,
.woocommerce .star-rating::before,
.single-productpage .price .amount
{color: '.$secondary.';}

';
    // ENDS SECONDARY COLOR CSS



// counter section
if(get_theme_mod('unbox_counter_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('rg_counter_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/counter22.png';

    $custom_css .= 'div#counter .rg-counter {background-image: url("'.$img.'");background-size: cover; background-attachment: fixed;}';
}else{
    $color = get_theme_mod('rg_counter_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#counter .rg-counter{background-color: '.$color.';}';
    }
}


// gall
// counter section
if(get_theme_mod('unbox_gallery_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_gallery_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/counterbg1.jpg';

    $custom_css .= 'section#gallery {background-image: url("'.$img.'");background-size: cover; background-attachment: fixed;}';
}else{
    $color = get_theme_mod('rg_gallery_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'section#gallery{background-color: '.$color.';}';
    }
}

// for imgbx
if(get_theme_mod('unbox_counter_imgbx_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_counter_imgbx_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/counterbg1.jpg';

    $custom_css .= 'div#counter {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_counter_imgbx_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#counter {background-color: '.$color.';}';
    }
}
    // add colors
$CounterSectionoverlaybgsColor = get_theme_mod('rg_counter_overlaybgsColor', '#fe735e');
$CountericonColor = get_theme_mod('rg_counter_icon_color', '#121e4e');
$CountericonbgsColor = get_theme_mod('rg_counter_icon_bgsColor', '#ffffff');
$CountericonhvrsColor = get_theme_mod('rg_counter_iconhvrs_color', '#ffffff');
$CountericonbgshvrsColor = get_theme_mod('rg_counter_icon_bgshvrsColor', '#ff7261');
$CountericonbrssshvrsColor = get_theme_mod('rg_counter_icon_brssshvrsColor', '#ffffff');
$CountercountsColor = get_theme_mod('rg_counter_icon_countsColor', '#ff7261');
$CountercountsttlColor = get_theme_mod('rg_counter_icon_countsttlColor', '#121c4d');

$CounterleftimgBorderColor = get_theme_mod('rg_counter_leftimgBorderColor', '#ffffff');
$CounterleftimgBorderHvrsColor = get_theme_mod('rg_counter_leftimgBorderHvrsColor', '#ff7261');


$custom_css .= 'div#counter .rg-counter .rg-counter-overlay{background-color: '.$CounterSectionoverlaybgsColor.';}
div#counter .wpb_counter_box .icon-wrap{color: '.$CountericonColor.';}
div#counter .wpb_counter_box .icon-wrap{background-color: '.$CountericonbgsColor.';}
div#counter .wpb_counter_box:hover .icon-wrap i.fa{color: '.$CountericonhvrsColor.';}
div#counter .wpb_counter_box .icon-wrap:before{background-color: '.$CountericonbgshvrsColor.';}
div#counter .wpb_counter_box .icon-wrap:before{border-color: '.$CountericonbrssshvrsColor.';}
div#counter h4.counter-box-title.count, 
div#counter h4.counter-box-title.count small{color: '.$CountercountsColor.';}
div#counter .counter-box-text{color: '.$CountercountsttlColor.';}
div#counter .count-img{border-color: '.$CounterleftimgBorderColor.';}
div#counter .count-img figcaption{background-color: '.$CounterleftimgBorderHvrsColor.';}';

// team
if(get_theme_mod('unbox_team_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_team_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/counterbg1.jpg';

    $custom_css .= 'section#ht-team-section {background-image: url("'.$img.'");background-size: cover; background-attachment: fixed;}';
}else{
    $color = get_theme_mod('rg_team_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'section#ht-team-section{background-color: '.$color.';}';
    }
}
// colors
$TeamTitleColor = get_theme_mod('team_sectionttlColor', '#141c4d');
$TeamsectionttlhghtxtColor = get_theme_mod('team_sectionttlhghtxtColor', '#ff735f');
$TeamsectionttlbrssColor = get_theme_mod('team_sectionttlbrssColor', '#ff735f');
$TeamsectionSubTColor = get_theme_mod('team_sectionSubTColor', '#484848');
$TeamsectionboxBgssColor = get_theme_mod('team_boxBgss', '#fae3dd');
$TeamsectionteamimgbrsColor = get_theme_mod('team_teamimgbrsColor', '#f46e5d');
$TeamsectionNameTxtColor = get_theme_mod('team_teammemnameTxtColor', '#121e50');
$TeamsectionDesignationColor = get_theme_mod('team_teammemnamDesinationtxtColor', '#f46e5d');

$teamSocialsColor = get_theme_mod('team_teamSocialsColor', '#141c4d');
$TeamteamSocialsBorderColor = get_theme_mod('team_teamSocialsBorderColor', '#141c4d');
$teamSocialsHoverColor = get_theme_mod('team_teamSocialsHoverColor', '#ffffff');

$SocialsHoverBgssColor = get_theme_mod('team_teamSocialsHoverBgssColor', '#141c4d');

$SocialsPrevNxtBtnColor = get_theme_mod('team_PrevNxtBtnColor', '#ffffff');
$SocialsPrevNxtBtnBgssBgssColor = get_theme_mod('team_PrevNxtBtnBgssColor', '#f46e5d');

$SocialsPrevNxtBtnHvrColor = get_theme_mod('team_PrevNxtBtnHvrColor', '#ffffff');
$SocialsPrevNxtBtnBgssHvrsColor = get_theme_mod('team_PrevNxtBtnBgssHvrsColor', '#141c4d');


$custom_css .= 'section#ht-team-section h2.rg-section,
section#ht-team-section h2.rg-section small{color: '.$TeamTitleColor.';}
section#ht-team-section h2.rg-section span{color: '.$TeamsectionttlhghtxtColor.';}
section#ht-team-section h2.rg-section:after{border-color: '.$TeamsectionttlbrssColor.';}
section#ht-team-section .sub{color: '.$TeamsectionSubTColor.';}

section#ht-team-section .inner-team{background-color: '.$TeamsectionboxBgssColor.';}
section#ht-team-section .inner-team:hover .rg_single_image.bt-circle figure a > svg{stroke: '.$TeamsectionteamimgbrsColor.';}
section#ht-team-section h4, section#ht-team-section h4 small{color: '.$TeamsectionNameTxtColor.';}
section#ht-team-section cite{color: '.$TeamsectionDesignationColor.';}

section#ht-team-section ul li a .icon{color: '.$teamSocialsColor.';}
section#ht-team-section ul li a{border-color: '.$TeamteamSocialsBorderColor.';}
section#ht-team-section ul li a:hover .icon{color: '.$teamSocialsHoverColor.';}
section#ht-team-section ul li a:before{background-color: '.$SocialsHoverBgssColor.';}

section#ht-team-section .owl-carousel .owl-nav button.owl-prev:before,
section#ht-team-section .owl-carousel .owl-nav button.owl-next:before{color: '.$SocialsPrevNxtBtnColor.';}
section#ht-team-section .owl-carousel .owl-nav button.owl-prev:before,
section#ht-team-section .owl-carousel .owl-nav button.owl-next:before{background-color: '.$SocialsPrevNxtBtnBgssBgssColor.';}

section#ht-team-section .owl-carousel .owl-nav button.owl-prev:hover:before,
section#ht-team-section .owl-carousel .owl-nav button.owl-next:hover:before{color: '.$SocialsPrevNxtBtnHvrColor.';}

section#ht-team-section .owl-carousel .owl-nav button.owl-prev:hover:before,
section#ht-team-section .owl-carousel .owl-nav button.owl-next:hover:before{background-color: '.$SocialsPrevNxtBtnBgssHvrsColor.';}';

// Team Shortcode
$TeaminnerpageboxBgssColor = get_theme_mod('innerpageteam_boxBgss', '#fae3dd');
$TeaminnerpageteamimgbrsColor = get_theme_mod('innerpageteam_teamimgbrsColor', '#f46e5d');
$TeaminnerpageNameTxtColor = get_theme_mod('innerpageteam_teammemnameTxtColor', '#121e50');
$TeaminnerpageDesignationColor = get_theme_mod('innerpageteam_teammemnamDesinationtxtColor', '#f46e5d');

$teaminnerpageSocialsColor = get_theme_mod('innerpageteam_teamSocialsColor', '#141c4d');
$TeaminnerpageSocialsBorderColor = get_theme_mod('innerpageteam_teamSocialsBorderColor', '#141c4d');
$teaminnerpageSocialsHoverColor = get_theme_mod('innerpageteam_teamSocialsHoverColor', '#ffffff');

$innerpageSocialsHoverBgssColor = get_theme_mod('innerpageteam_teamSocialsHoverBgssColor', '#141c4d');

$custom_css .= 'main#rg-inner-bx .inner-team{background-color: '.$TeaminnerpageboxBgssColor.';}
main#rg-inner-bx .inner-team:hover .rg_single_image.bt-circle figure a > svg{stroke: '.$TeaminnerpageteamimgbrsColor.';}
body.page-template-default main#rg-inner-bx .team-name h4,
body.page-template-default main#rg-inner-bx .team-name h4 small{color: '.$TeaminnerpageNameTxtColor.';}
main#rg-inner-bx cite{color: '.$TeaminnerpageDesignationColor.';}

main#rg-inner-bx .inner-team ul li a .icon{color: '.$teaminnerpageSocialsColor.';}
main#rg-inner-bx .inner-team ul li a{border-color: '.$TeaminnerpageSocialsBorderColor.';}
main#rg-inner-bx .inner-team ul li a:hover .icon{color: '.$teaminnerpageSocialsHoverColor.';}
main#rg-inner-bx .inner-team ul li a:before{background-color: '.$innerpageSocialsHoverBgssColor.';}';


// Slider Section

if(get_theme_mod('unbox_slider_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('rg_slider_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/prelaoder-logo.png';

    $custom_css .= 'div#ht-home-slider-section .owl-carousel .owl-nav button.owl-next:hover:before,
    div#ht-home-slider-section .owl-carousel .owl-nav button.owl-prev:hover:before {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_slider_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#ht-home-slider-section .owl-carousel .owl-nav button.owl-next:hover:before,
        div#ht-home-slider-section .owl-carousel .owl-nav button.owl-prev:hover:before {background-color: '.$color.';}';
    }
}

// For Bouncing Arrow

if(get_theme_mod('unbox_slider_b_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('rg_slider_b_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/prelaoder-logo.png';

    $custom_css .= 'div#ht-home-slider-section i.fa.fa-angle-down:hover {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_slider_b_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#ht-home-slider-section i.fa:hover{background-color: '.$color.';}';
    }
}


$SliderBoxBorderColor = get_theme_mod('slider_BoxBorderColor', '#ff725e');
$SliderOverlayColor = get_theme_mod('slider_overlaybgsColor', '#131d4e');
$SliderSubtitleColor = get_theme_mod('slider_SubtitleColor', '#ffffff');
$SliderTitleColor = get_theme_mod('slider_TitleColor', '#ffffff');
$SliderTitleHighliteColor = get_theme_mod('slider_TitleHighliteColor', '#ff725e');
$SliderContentColor = get_theme_mod('slider_ContentColor', '#ffffff');

$SliderbuttontextColor = get_theme_mod('slider_buttontextColor', '#ffffff');
$SliderbuttontexthoverColor = get_theme_mod('slider_buttontexthoverColor', '#ff725e');
$SliderbuttonborderColor = get_theme_mod('slider_buttonborderColor', '#ffffff');
$SliderbuttonbghoverColor = get_theme_mod('slider_buttonbghoverColor', '#ffffff');

$SliderBouncingArrowColor = get_theme_mod('slider_BouncingArrowColor', '#131d4e');

$SliderBouncingArrowHoverColor = get_theme_mod('slider_BouncingArrowHvrsColor', '#ffffff');

$SliderBouncingArrowBgssColor = get_theme_mod('slider_BouncingArrowBgssColor', '#ffffff');
//$SliderBouncingArrowHvrsBgssColor = get_theme_mod('slider_BouncingArrowHvrsBgssColor', '#ff725e');

$SliderprevandnxtbuttonbgColor = get_theme_mod('slider_prevandnxtbuttonColor', '#151c50');
$SliderslidebtnbgsColor = get_theme_mod('slider_slidebtnbgsColor', '#ffffff');

$SliderprevandnxtbuttonHoversColor = get_theme_mod('slider_prevandnxtbuttonHoversColor', '#ffffff');

$custom_css .= 'div#ht-home-slider-section .owl-carousel .owl-stage-outer{border-color: '.$SliderBoxBorderColor.';}
.ht-slide-overlay{background-color: '.$SliderOverlayColor.';}
h1#title-behind,
h1#title-behind small{color: '.$SliderSubtitleColor.';}
h1#title-the,
h1#title-the small{color: '.$SliderTitleColor.';}
h1#title-the span{color: '.$SliderTitleHighliteColor.';}
h1#title-lens,
h1#title-lens small{color: '.$SliderContentColor.';}

div#ht-home-slider-section .slide-btn{color: '.$SliderbuttontextColor.';}
div#ht-home-slider-section .slide-btn:hover{color: '.$SliderbuttontexthoverColor.';}
div#ht-home-slider-section .slide-btn{border-color: '.$SliderbuttonborderColor.';}
div#ht-home-slider-section .slide-btn:before{background-color: '.$SliderbuttonbghoverColor.';}

div#ht-home-slider-section i.fa{color: '.$SliderBouncingArrowColor.';}

div#ht-home-slider-section i.fa{background-color: '.$SliderBouncingArrowBgssColor.';}

div#ht-home-slider-section .owl-carousel .owl-nav button.owl-prev:before,
div#ht-home-slider-section .owl-carousel .owl-nav button.owl-next:before{color: '.$SliderprevandnxtbuttonbgColor.';}

div#ht-home-slider-section .owl-carousel .owl-nav button.owl-prev:before,
div#ht-home-slider-section .owl-carousel .owl-nav button.owl-next:before{background-color: '.$SliderslidebtnbgsColor.';}
div#ht-home-slider-section i.fa:hover{color: '.$SliderBouncingArrowHoverColor.';}

div#ht-home-slider-section .owl-carousel .owl-nav button.owl-prev:hover:before,
div#ht-home-slider-section .owl-carousel .owl-nav button.owl-next:hover:before{color: '.$SliderprevandnxtbuttonHoversColor.';}';

// for features section
if(get_theme_mod('unbox_features_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('rg_features_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/facjpgop11.jpg';

    $custom_css .= 'section#features-section {background-image: url("'.$img.'");background-size: cover; background-attachment: fixed;}';
}else{
    $color = get_theme_mod('rg_features_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'section#features-section {background-color: '.$color.';} .about-post{border-color:'.$color.';}';
    }
}
// COLORS

$Features_SectionTColor = get_theme_mod('Features_Title_Color', '#ffffff');
$Features_SectionHighlightTColor = get_theme_mod('Feature_HighlightT_Color', '#fb705d');
$Features_SectionTBColor = get_theme_mod('Features_Tb_Color', '#ffffff');

$Features_IconColor = get_theme_mod('Features_Icon_Color', '#fb705d');
$Features_PTitleColor = get_theme_mod('Features_PTitle_Color', '#ffffff');
$Features_PtxtColor = get_theme_mod('Features_PTxt_Color', '#ffffff');
$Features_BoxBgColor = get_theme_mod('Features_BoxBg_Color', '#363f68');

$Features_BoxBrsColor = get_theme_mod('Features_BoxBrs_Color', '#ffffff');

$FeaturesBtnColor = get_theme_mod('FeaturesBtn_color', '#ff735f');
$FeaturesBtnBorderColor = get_theme_mod('FeaturesBtnBorder_color', '#ff735f');
$FeaturesBtnHoverColor = get_theme_mod('FeaturesBtnHover_color', '#ffffff');
$FeaturesBtnHoverBorderColor = get_theme_mod('FeaturesBtnHoverBorder_color', '#ff735f');

$Features_IconBrsColor = get_theme_mod('Features_IconBrs_Color', '#fb705d');
$Features_IconIndicColor = get_theme_mod('Features_IconIndic_Color', '#fb705d');

$Features_overlaybgssColor = get_theme_mod('features_overlaybgss_Color', '#363f68');
$Features_IcbrsssColor = get_theme_mod('Features_brsss_Color', '#727794');

$custom_css .= 'section#features-section h2.rg-section,
section#features-section h2.rg-section small{color: '.$Features_SectionTColor.';}
section#features-section h2.rg-section span{color: '.$Features_SectionHighlightTColor.';}
section#features-section h2.rg-section:after{border-color: '.$Features_SectionTBColor.';}

section#features-section .wpb_theme_custom_element.wpb_featured_box.bt-featured-box .vc-custom-inner-wrap .featured-box-alignment .icon-wrap .type-image i.fa{color: '.$Features_IconColor.';}
section#features-section .wpb_theme_custom_element.wpb_featured_box .vc-custom-inner-wrap .featured-box-alignment .entry-box-wrap .featured-box-title a,
section#features-section .wpb_theme_custom_element.wpb_featured_box .vc-custom-inner-wrap .featured-box-alignment .entry-box-wrap .featured-box-title a small{color: '.$Features_PTitleColor.';}
section#features-section .wpb_theme_custom_element.wpb_featured_box .vc-custom-inner-wrap .featured-box-alignment .entry-box-wrap .featured-box-text{color: '.$Features_PtxtColor.';}

.vc_column-inner{background-color: '.$Features_BoxBgColor.';}
.vc_column-inner{border-color: '.$Features_BoxBrsColor.';}

section#features-section .blue.features-btn1{color: '.$FeaturesBtnBorderColor.';}
section#features-section .blue.features-btn1{border-color: '.$FeaturesBtnColor.';}
section#features-section .btn.features-btn1:hover{color: '.$FeaturesBtnHoverColor.';}
section#features-section .blue.features-btn1:before{background-color: '.$FeaturesBtnHoverBorderColor.';}

section#features-section #bt-circle:after{background-color: '.$Features_IconIndicColor.';}
section#features-section .wpb_theme_custom_element.wpb_featured_box.bt-featured-box .vc-custom-inner-wrap .featured-box-alignment .icon-wrap .type-image:before{border-color: '.$Features_IconBrsColor.';}

section#features-section .overlay{background-color: '.$Features_overlaybgssColor.';}

section#features-section .wpb_theme_custom_element.wpb_featured_box .vc-custom-inner-wrap .featured-box-alignment .entry-box-wrap .featured-box-title{border-color: '.$Features_IcbrsssColor.';}';

// services section
if(get_theme_mod('unbox_service_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_service_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'div#rg-service {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_service_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#rg-service {background-color: '.$color.';} .about-post{border-color:'.$color.';}';
    }
}


// About SSpa
if(get_theme_mod('unbox_aboutspa_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_aboutspa_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'div#aboutspa {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_aboutspa_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#aboutspa {background-color: '.$color.';} .about-post{border-color:'.$color.';}';
    }
}
//
$AboutSpaSecTColor = get_theme_mod('AboutSpa_TColor', '#141c4d');
$AboutSpaSecThColor = get_theme_mod('AboutSpa_THColor', '#ff735f');
$AboutSpaSecTbColor = get_theme_mod('AboutSpa_TBColor', '#ff735f');
$AboutSpaSecTxtColor = get_theme_mod('AboutSpa_TxtColor', '#545454');
$AboutSpaListColor = get_theme_mod('AboutSpa_ListColor', '#151d4b');


$AboutSpaBtnColor = get_theme_mod('AboutSpaBtn_color', '#ff735f');
$AboutSpaBtnBorderColor = get_theme_mod('AboutSpaBtnBorder_color', '#ff735f');
$AboutSpaBtnHoverColor = get_theme_mod('AboutSpaBtnHover_color', '#ffffff');
$AboutSpaBtnHoverBorderColor = get_theme_mod('AboutSpaBtnHoverBorder_color', '#ff735f');

$AboutSpaImgBorderColor = get_theme_mod('AboutSpaImgBorder_color', '#ff735f');

$AboutSpaListHoverIconColor = get_theme_mod('AboutSpaListHoverIcon_color', '#ff735f');
$AboutSpaListHoverIcBrsColor = get_theme_mod('AboutSpaListHoverIcBrs_color', '#ff735f');

$custom_css .= 'div#aboutspa h2.rg-section,
div#aboutspa h2.rg-section small{color: '.$AboutSpaSecTColor.';}
div#aboutspa h2.rg-section span{color: '.$AboutSpaSecThColor.';}
#aboutspa h2.rg-section:after{border-color: '.$AboutSpaSecTbColor.';}
div#aboutspa .rg-aboutspa-bx-subtag{color: '.$AboutSpaSecTxtColor.';}
div#aboutspa h4.inner-area-title,
div#aboutspa h4.inner-area-title small{color: '.$AboutSpaListColor.';}

div#aboutspa .blue.AboutSpa-btn1{color: '.$AboutSpaBtnBorderColor.';}
div#aboutspa .blue.AboutSpa-btn1{border-color: '.$AboutSpaBtnColor.';}
div#aboutspa .btn.AboutSpa-btn1:hover{color: '.$AboutSpaBtnHoverColor.';}
div#aboutspa .blue.AboutSpa-btn1:before{background-color: '.$AboutSpaBtnHoverBorderColor.';}

div#aboutspa .post-img:after{background-color: '.$AboutSpaImgBorderColor.';}

div#aboutspa .wpb_theme_custom_element.wpb_featured_box.bt-featured-box .vc-custom-inner-wrap .featured-box-alignment .icon-wrap .type-image:before{border-color: '.$AboutSpaListHoverIcBrsColor.';}
div#aboutspa #bt-circle:after{background-color: '.$AboutSpaListHoverIcBrsColor.';}
div#aboutspa .wpb_theme_custom_element.wpb_featured_box.bt-featured-box .vc-custom-inner-wrap .featured-box-alignment .icon-wrap .type-image i.fa{color: '.$AboutSpaListHoverIconColor.';}';


//packages
if(get_theme_mod('unbox_packages_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_packages_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'div#packages {background-image: url("'.$img.'");background-size: cover; background-attachment: fixed;}';
}else{
    $color = get_theme_mod('rg_packages_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#packages{background-color: '.$color.';}';
    }
}

// ADD COLORS
$PricingSectionHTColor = get_theme_mod('pricingarea_SectionHColor', '#141c4d');
$PricingSectionHightColor = get_theme_mod('pricingarea_SectionHightColor', '#fb705d');
$PricingSectionHBColor = get_theme_mod('pricingarea_SectionHBColor', '#fb705d');
$PricingSectionSubttlColor = get_theme_mod('pricingarea_SubttlColor', '#484848');
$PricingPlanNameColor = get_theme_mod('packagearea_PlanNameColor', '#ffffff');

$PricingBtnColor = get_theme_mod('packageBtn1Text_color', '#ffffff');
$PricingBtnBorderColor = get_theme_mod('packageBtn1Border_color', '#ffffff');
$PricingBtnHoverColor = get_theme_mod('packageBtn1Hover_color', '#ffffff');
$PricingBtnHoverBorderColor = get_theme_mod('packageBtn1HoverBorder_color', '#fb705d');

$PricingPlanBoxOverlayColor = get_theme_mod('pricingarea_PlanBoxOverlayColor', '#141c4d');

$PricingPlanPlanNamePriceColor = get_theme_mod('packagearea_PlanNamePriceColor', '#ffffff');
$PricingPlanNamePriceBgColor = get_theme_mod('packagearea_PlanNamePriceBgColor', '#fb705d');

$custom_css .= 'div#packages h2.rg-section,
div#packages h2.rg-section small{color: '.$PricingSectionHTColor.';}
div#packages h2.rg-section span{color: '.$PricingSectionHightColor.';}
div#packages h2.rg-section:after{border-color: '.$PricingSectionHBColor.';}
div#packages .sub{color: '.$PricingSectionSubttlColor.';}
div#packages .menu-type-content h3,
div#packages .menu-type-content h3 small{color: '.$PricingPlanNameColor.';}
div#packages .blue.package-btn1{color: '.$PricingBtnColor.';}
div#packages .blue.package-btn1{border-color: '.$PricingBtnBorderColor.';}
div#packages .btn.package-btn1:hover{color: '.$PricingBtnHoverColor.';}
div#packages .blue.package-btn1:before{background-color: '.$PricingBtnHoverBorderColor.';}
div#packages .menu-type-content,
div#packages .menu-type-item:hover .menu-type-content,
div#packages .menu-type-item{background-color: '.$PricingPlanBoxOverlayColor.';}
div#packages .prc{color: '.$PricingPlanPlanNamePriceColor.';}
div#packages .prc{background-color: '.$PricingPlanNamePriceBgColor.';}';


// add colors
$ServicesSecTColor = get_theme_mod('Service_TColor', '#141c4d');
$ServicesSectTHColor = get_theme_mod('Service_THColor', '#fb705d');
$ServicesSecTBColor = get_theme_mod('Service_TBColor', '#fb705d');
$ServicesSecSubTBColor = get_theme_mod('Service_SColor', '#484848');

$ServicesMainTColor = get_theme_mod('Service_MainTColor', '#ffffff');
$ServicesMainTBgColor = get_theme_mod('Service_MainTBgColor', '#141c4d');

$ServicesMainHoverTColor = get_theme_mod('Service_MainHoverTColor', '#fb705d');
$ServicesMainHoverTxtColor = get_theme_mod('Service_MainHoverTxtColor', '#ffffff');

$ServicesarrColor = get_theme_mod('Service_arrColor', '#ffffff');
$ServicesarrbrsColor = get_theme_mod('Service_arrBrsColor', '#ffffff');

$ServicesbxColor = get_theme_mod('Service_bxColor', '#141c4d');

$ServicesBoxHBgsHColor = get_theme_mod('Service_BoxHBgssColor', '#ffffff');

$SerBtnColor = get_theme_mod('SerBtn_color', '#ff735f');
$SerBtnBorderColor = get_theme_mod('SerBtnBorder_color', '#ff735f');
$SerBtnHoverColor = get_theme_mod('SerBtnHover_color', '#ffffff');
$SerBtnHoverBorderColor = get_theme_mod('SerBtnHoverBorder_color', '#ff735f');

$custom_css .= 'div#rg-service h2.rg-section,
div#rg-service h2.rg-section small{color: '.$ServicesSecTColor.';}
div#rg-service h2.rg-section span{color: '.$ServicesSectTHColor.';}
div#rg-service h2.rg-section:after{border-color: '.$ServicesSecTBColor.';}
div#rg-service p{color: '.$ServicesSecSubTBColor.';}
div#rg-service .inner-ser-bx .team-prof .post-title,
div#rg-service .inner-ser-bx .team-prof .post-title small{color: '.$ServicesMainTColor.';}
div#rg-service .inner-ser-bx .team-prof{background-color: '.$ServicesMainTBgColor.';}
div#rg-service .inner-ser-bx .ser-content .post-title,
div#rg-service .inner-ser-bx .ser-content .post-title small{color: '.$ServicesMainHoverTColor.';}
div#rg-service .inner-ser-bx .description{color: '.$ServicesMainHoverTxtColor.';}
div#rg-service .inner-ser-bx .ser_social li a{color: '.$ServicesarrColor.';}
div#rg-service .inner-ser-bx .ser_social li a{border-color: '.$ServicesarrbrsColor.';}
div#rg-service .inner-ser-bx .ser-content{background-color: '.$ServicesbxColor.';}
div#rg-service .inner-ser-bx .ser-content:after{border-color: '.$ServicesbxColor.';}

div#rg-service .blue.service-btn1{color: '.$SerBtnBorderColor.';}
div#rg-service .blue.service-btn1{border-color: '.$SerBtnColor.';}
div#rg-service .btn.service-btn1:hover{color: '.$SerBtnHoverColor.';}
div#rg-service .blue.service-btn1:before{background-color: '.$SerBtnHoverBorderColor.';}

div#rg-service .inner-ser-bx .ser-content:after{background-color: '.$ServicesBoxHBgsHColor.';}';

// blogs 
if(get_theme_mod('unbox_blog_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('rg_blog_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/blog.png';

    $custom_css .= 'div#blogs .right-blog-img {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_blog_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#blogs .right-blog-img {background-color: '.$color.';} .about-post{border-color:'.$color.';}';
    }
}
//
if(get_theme_mod('unbox_blogmain_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_blogmain_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'div#blogs {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_blogmain_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#blogs {background-color: '.$color.';}';
    }
}
    // addcolors
$BlogsectionttlColor = get_theme_mod('rg_blog_sectionttlColor', '#131d4e');
$BlogsectionlightttlColor = get_theme_mod('rg_blog_sectionlightttlColor', '#fb705d');
$BlogsectionttldarkbrssColor = get_theme_mod('rg_blog_sectionttldarkbrssColor', '#fb705d');

$BlogsectionMainPostTitleColor = get_theme_mod('rg_blog_MainPostTitleColor', '#141d4e');
$BlogsectionMainPostCommentIconColor = get_theme_mod('rg_blog_MainPostCommentIconColor', '#ff735f');
$BlogsectionMainPostCommentTextColor = get_theme_mod('rg_blog_MainPostCommentTextColor', '#7e7e7e');
$BlogsectionMainPostTextColor = get_theme_mod('rg_blog_MainPostTextColor', '#4d4d4d');



$BlogmainBtn1Color = get_theme_mod('BlogmainBtn_color', '#ff745f');
$BlogmainBtn1BorderColor = get_theme_mod('BlogmainBtnBorder_color', '#ff745f');
$BlogmainBtn1HoverColor = get_theme_mod('BlogmainBtnHover_color', '#ffffff');
$BlogmainBtn1HoverBorderColor = get_theme_mod('BlogmainBtnHoverBorder_color', '#ff745f');

$BlogmainMainPostDateTxtColor = get_theme_mod('rg_blog_MainPostDateTxtColor', '#ffffff');
$BlogmainMainPostDTBColor = get_theme_mod('rg_blog_MainPostDTBColor', '#ff745f');

$BlogmainposthvrAuthCatColor = get_theme_mod('rg_blog_posthvrAuthCatColor', '#ffffff');
$BlogmainposthvrAuthCathvrColor = get_theme_mod('rg_blog_posthvrAuthCathvrColor', '#141d4e');


$BlogmainpostviewallbtntextrColor = get_theme_mod('viewallbtntext_color', '#121d4e');
$BlogmainviewallbtntextbrssColor = get_theme_mod('viewallbtntextbrss_color', '#efeff1');
$BlogmainviewallbtntextbgssColor = get_theme_mod('viewallbtntextbgss_color', '#ffffff');


$BlogmainhvrspostviewallbtntextrColor = get_theme_mod('viewallbtntexthvrs_color', '#ffffff');
$BlogmainhvrsviewallbtntextbrssColor = get_theme_mod('viewallbtntextbrsshvrs_color', '#ffffff');
$BlogmainhvrsviewallbtntextbgssColor = get_theme_mod('viewallbtntextbgsshvrss_color', '#121d4e');

$custom_css .= 'div#blogs h2.rg-section, div#blogs h2.rg-section small{color: '.$BlogsectionttlColor.';}
div#blogs h2.rg-section span{color: '.$BlogsectionlightttlColor.';}
div#blogs h2.rg-section:after{border-color: '.$BlogsectionttldarkbrssColor.';}
div#blogs .news-desc h4,
div#blogs .news-desc h4 small{color: '.$BlogsectionMainPostTitleColor.';}
div#blogs i.fa.fa-comment{color: '.$BlogsectionMainPostCommentIconColor.';}
div#blogs .news-desc .post-meta{color: '.$BlogsectionMainPostCommentTextColor.';}
div#blogs .rg-blog-bx1 p{color: '.$BlogsectionMainPostTextColor.';}

div#blogs .blue.blog-btn1{color: '.$BlogmainBtn1BorderColor.';}
div#blogs .blue.blog-btn1{border-color: '.$BlogmainBtn1Color.';}
div#blogs .btn.blog-btn1:hover{color: '.$BlogmainBtn1HoverColor.';}
div#blogs .blue.blog-btn1:before{background-color: '.$BlogmainBtn1HoverBorderColor.';}

div#blogs .blg-date{color: '.$BlogmainMainPostDateTxtColor.';}
div#blogs .blg-date{background-color: '.$BlogmainMainPostDTBColor.';}

div#blogs .overlay-author, 
div#blogs .overlay-author a,
div#blogs .news-thumb span a{color: '.$BlogmainposthvrAuthCatColor.';}

div#blogs .news-thumb span,
div#blogs .overlay-author{background-color: '.$BlogmainposthvrAuthCathvrColor.';}

div#blogs .txt-blg{background-color: '.$BlogmainviewallbtntextbgssColor.';}
div#blogs .blg-txt{border-color: '.$BlogmainviewallbtntextbrssColor.';}
div#blogs .blg-txt a{color: '.$BlogmainpostviewallbtntextrColor.';}

div#blogs .txt-blg:hover{background-color: '.$BlogmainhvrsviewallbtntextbgssColor.';}
div#blogs .txt-blg:hover .blg-txt{border-color: '.$BlogmainhvrsviewallbtntextbrssColor.';}
div#blogs .txt-blg:hover .blg-txt a{color: '.$BlogmainhvrspostviewallbtntextrColor.';}';

// about

if(get_theme_mod('unbox_about_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_about_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'div#about {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_about_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#about {background-color: '.$color.';} .about-post{border-color:'.$color.';}';
    }
}
$aboutoverlayimgColor = get_theme_mod('rg_aboutoverlayimgColor', '#ff735f');
$abouttaglineColor = get_theme_mod('rg_abouttaglineColor', '#141c4d');
$abouttextbrssColor = get_theme_mod('rg_abouttaglineBrsColor', '#ff735f');
$abouttextColor = get_theme_mod('rg_abouttextColor', '#484647'); 

$MassageBtnColor = get_theme_mod('MassageBtn_color', '#ff735f');
$MassageBtnBorderColor = get_theme_mod('MassageBtnBorder_color', '#ff735f');
$MassageBtnHoverColor = get_theme_mod('MassageBtnHover_color', '#ffffff');
$MassageBtnHoverBorderColor = get_theme_mod('MassageBtnHoverBorder_color', '#ff735f');


$MassageBtn1Color = get_theme_mod('MassageBtn1_color', '#121c4d');
$MassageBtn1BorderColor = get_theme_mod('MassageBtn1Border_color', '#121c4d');
$MassageBtn1HoverColor = get_theme_mod('MassageBtn1Hover_color', '#ffffff');
$MassageBtn1HoverBorderColor = get_theme_mod('MassageBtn1HoverBorder_color', '#121c4d');

$custom_css .= 'div#about .post-img:after{background-color: '.$aboutoverlayimgColor.';}
div#about h2.rg-section, 
div#about h2.rg-section small{color: '.$abouttaglineColor.';}
div#about h2.rg-section:after{border-color: '.$abouttextbrssColor.';}
div#about .rg-about-bx-subtag{color: '.$abouttextColor.';}

div#about .blue.massage-btn1{color: '.$MassageBtnBorderColor.';}
div#about .blue.massage-btn1{border-color: '.$MassageBtnColor.';}
div#about .btn.massage-btn1:hover{color: '.$MassageBtnHoverColor.';}
div#about .blue.massage-btn1:before{background-color: '.$MassageBtnHoverBorderColor.';}


div#about .blue.massage-btn2{color: '.$MassageBtn1BorderColor.';}
div#about .blue.massage-btn2{border-color: '.$MassageBtn1Color.';}
div#about .btn.massage-btn2:hover{color: '.$MassageBtn1HoverColor.';}
div#about .blue.massage-btn2:before{background-color: '.$MassageBtn1HoverBorderColor.';}';


//Gallery Section
$Gallery_ImageBorderColor = get_theme_mod('Gallery_ImageBordercolor', '#131d4e');
$Gallery_ImageIconColor = get_theme_mod('Gallery_ImageIconcolor', '#ffffff');
$Gallery_ImageIconBackgroundColor = get_theme_mod('Gallery_ImageIconBackgroundcolor', '#131d4e');
$Gallery_ImageIconHoverBackgroundColor = get_theme_mod('Gallery_ImageIconHoverBackgroundcolor', '#fb705d');


$Gallery_SectionTitleColor = get_theme_mod('Gallery_SectionTitlecolor', '#131d4e');
$Gallery_SectionTHColor = get_theme_mod('Gallery_SectionTHcolor', '#fb705d');
$Gallery_SectTborderColor = get_theme_mod('Gallery_SectTBordercolor', '#fb705d');

$Gallery_SectionSubTitleColor = get_theme_mod('Gallery_SectionSubTitlecolor', '#484848');

$custom_css .= '#gallery .spa-gall i{color: '.$Gallery_ImageIconColor.';}
#gallery .spa-gall:after{background-color: '.$Gallery_ImageIconBackgroundColor.';}
#gallery .spa-gall:hover i, #gallery .spa-gall.hover i{background-color: '.$Gallery_ImageIconHoverBackgroundColor.';}
#gallery .spa-gall{border-color: '.$Gallery_ImageBorderColor.';}

#gallery h2.rg-section,
#gallery h2.rg-section small{color: '.$Gallery_SectionTitleColor.';}
#gallery h2.rg-section span{color: '.$Gallery_SectionTHColor.';}
#gallery h2.rg-section:after{border-color: '.$Gallery_SectTborderColor.';}

#gallery p.sub{color: '.$Gallery_SectionSubTitleColor.';}';


// pricing
if(get_theme_mod('unbox_pricing_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_pricing_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'div#Pricing {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_pricing_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#Pricing {background-color: '.$color.';} .about-post{border-color:'.$color.';}';
    }
}
// add colors
$PricingSectiontitleColor = get_theme_mod('Pricingplan_titleColor', '#2f2f2f');
$PricingSectiontitlelightbrsColor = get_theme_mod('Pricingplan_titlelightbrsColor', '#c8c8c9');
$PricingSectiontitledarklbrsColor = get_theme_mod('Pricingplan_titledarklbrsColor', '#8544e0');
$PricingSectionsubtitleColor = get_theme_mod('Pricingplan_subtitleColor', '#949494');
$PricingTtlColor = get_theme_mod('Pricingplan_PricingTtlColor', '#2f2f2f');
$PricingTPricetxt = get_theme_mod('Pricingplan_PricingTPricetxtColor', '#8544de');
$PricingTHeading = get_theme_mod('Pricingplan_PricingTHeadingColor', '#8544de');
$PricingTContent = get_theme_mod('Pricingplan_PricingTContentColor', '#868686');
$PricingTContentbrssColor = get_theme_mod('Pricingplan_PricingTContentbrssColor', '#e3e3e3');
$PricingButtonTxtColor = get_theme_mod('Pricingplan_ButtonTxtColor', '#8544de');
$PricingButtonTxtBrssColor = get_theme_mod('Pricingplan_ButtonTxtBrssColor', '#8544de');
$PricingTablebgColor = get_theme_mod('Pricingplan_PricingTablebgColor', '#ffffff');
$PricingTableButtonhvrarrowColor = get_theme_mod('Pricingplan_ButtonhvrarrowColor', '#ffffff');
$PricingTableButtonhvrbgssColor = get_theme_mod('Pricingplan_ButtonhvrbgssColor', '#8544de');
$PricingTContenthvrbgssColor = get_theme_mod('Pricingplan_PricingTContenthvrbgssColor', '#f1f1f1');

$custom_css .= 'div#Pricing h2.rg-section, div#Pricing h2.rg-section small{color: '.$PricingSectiontitleColor.';}
div#Pricing .dlab-separator[class*="style-"]:after, 
div#Pricing .dlab-separator[class*="style-"]:before{background-color: '.$PricingSectiontitlelightbrsColor.';}
div#Pricing .dlab-separator.text-primary.style-icon{border-bottom-color: '.$PricingSectiontitledarklbrsColor.';}
div#Pricing .rg-subheading{color: '.$PricingSectionsubtitleColor.';}
div#Pricing h3.plan-title, div#Pricing h3.plan-title small{color: '.$PricingTtlColor.';}
div#Pricing .plan-cost{color: '.$PricingTPricetxt.';}
div#Pricing .plan-starts{color: '.$PricingTHeading.';}
div#Pricing .rg-table-content ul li{color: '.$PricingTContent.';}
div#Pricing .rg-table-content ul li{border-top-color: '.$PricingTContentbrssColor.';}
div#Pricing .rg-table-content ul li:last-child{border-bottom-color: '.$PricingTContentbrssColor.';}
div#Pricing .btn span{color: '.$PricingButtonTxtColor.';}
div#Pricing .btn{border-color: '.$PricingButtonTxtBrssColor.';}
div#Pricing .rg-pricingTable .plan{background-color: '.$PricingTablebgColor.';}
div#Pricing .btn:before{background-color: '.$PricingTableButtonhvrbgssColor.';}
div#Pricing .btn:before{color: '.$PricingTableButtonhvrarrowColor.';}
div#Pricing .rg-table-content ul li:hover{background-color: '.$PricingTContenthvrbgssColor.';} ';


// Testimonials

if(get_theme_mod('unbox_testimonials_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_testimonials_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'div#testimonials {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_testimonials_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#testimonials {background-color: '.$color.';}';
    }
}
// product
if(get_theme_mod('unbox_featuredpro_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_featuredpro_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'section#featured-product-section {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_featuredpro_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'section#featured-product-section {background-color: '.$color.';}';
    }
}

// add colors
$featuredproHeadingColor = get_theme_mod('rg_featured_ProductTitleColor', '#141c4d');
$featuredproCartColor = get_theme_mod('rg_featured_CartIconolor', '#ff735f');
$featuredproProductBxColor = get_theme_mod('rg_featured_ProductBxBorderColor', '#141c4d');
$featuredproProductSubTitleColor = get_theme_mod('rg_featured_ProductSubTitleColor', '#484848');

$featuredproProductSecTitleColor = get_theme_mod('rg_featured_SecTitleColor', '#141c4d');
$featuredproProductSecTitleHTColor = get_theme_mod('rg_featured_SecTitleHTColor', '#ff735f');
$featuredproProductSubTitleBrsColor = get_theme_mod('rg_featured_SecTitleHBColor', '#ff735f');


$featuredproCartIconHoverColor = get_theme_mod('rg_featured_CartIconHoverolor', '#ffffff');
$featuredproCartIconHoverbgssColor = get_theme_mod('rg_featured_CartIconHoverBgssolor', '#ff735f');

$featuredproPriceTextColor = get_theme_mod('rg_featured_PriceTextColor', '#ffffff');
$featuredproPriceTextBxBgssColor = get_theme_mod('rg_featured_PriceTextBxBgssColor', '#ff735f');

$featuredProductBxHvrBgssColor = get_theme_mod('rg_featured_ProductBxHvrBgssColor', '#ffffff');

$custom_css .= 'section#featured-product-section .product-grid .title a,
section#featured-product-section .product-grid .title a small,
section#featured-product-section .product-grid .title a:hover{color: '.$featuredproHeadingColor.';}
section#featured-product-section .product-grid a.button.product_type_simple .fa{color: '.$featuredproCartColor.';}
section#featured-product-section .product-grid {border-color: '.$featuredproProductBxColor.';}
section#featured-product-section .sub{color: '.$featuredproProductSubTitleColor.';}
section#featured-product-section h2.rg-section,
section#featured-product-section h2.rg-section small{color: '.$featuredproProductSecTitleColor.';}
section#featured-product-section h2.rg-section span{color: '.$featuredproProductSecTitleHTColor.';}
section#featured-product-section h2.rg-section:after{border-color: '.$featuredproProductSubTitleBrsColor.';}
section#featured-product-section .product-grid:hover a.button.product_type_simple{background-color: '.$featuredproCartIconHoverbgssColor.';}

section#featured-product-section .product-grid a.button.product_type_simple:before, section#featured-product-section .product-grid a.button.product_type_simple:after{color: '.$featuredproCartIconHoverColor.';}
section#featured-product-section .product-grid .product-discount-label, section#featured-product-section .product-grid .product-quick-view,
section#featured-product-section .product-grid .product-discount-label ins{color: '.$featuredproPriceTextColor.';}
section#featured-product-section .product-grid .product-discount-label, 
section#featured-product-section .product-grid .product-quick-view,
section#featured-product-section .product-grid .product-discount-label ins{background-color: '.$featuredproPriceTextBxBgssColor.';}

section#featured-product-section .product-grid:hover .product-content{background-color: '.$featuredProductBxHvrBgssColor.';}';


// add colors
$TestimonialsSectionHeadingColor = get_theme_mod('rg_testimonials_HeadingColor', '#141c4d');
$TestimonialsSectionHeadinglightbrss = get_theme_mod('rg_testimonials_highlightColor', '#ff735f');
$TestimonialsHeadingBorderColor = get_theme_mod('rg_testimonials_HeadingBorderColor', '#ff735f');

$TestimonialsimagehvrbrsColor = get_theme_mod('rg_testimonials_imagehvrbrsColor', '#ff735f');
$TestimonialscontentColor = get_theme_mod('rg_testimonials_contentColor', '#474747');
$TestimonialsqiconColor = get_theme_mod('rg_testimonials_qiconColor', '#f3f2f7');
$TestimonialsprevnxtColor = get_theme_mod('rg_testimonials_prevnxtColor', '#afb5c5');
$TestimonialsprevnxthvrColor = get_theme_mod('rg_testimonials_prevnxthvrColor', '#ff735f');
$TestimonialsprevnxtHvrTxtColor = get_theme_mod('rg_testimonials_prevnxtHvrTxtColor', '#131d4e');

$TestimonialsIndicatorsColor = get_theme_mod('rg_testimonials_IndicatorsColor', '#cbcdd9');
$TestimonialsIndicatorsHoverColor = get_theme_mod('rg_testimonials_IndicatorsHoverColor', '#131d50');

$custom_css .= 'div#testimonials h2.rg-section, 
div#testimonials h2.rg-section small{color: '.$TestimonialsSectionHeadingColor.';}
div#testimonials h2.rg-section strong{color: '.$TestimonialsSectionHeadinglightbrss.';}
div#testimonials i.fa.fa-quote-left{color: '.$TestimonialsqiconColor.';}
div#testimonials p{color: '.$TestimonialscontentColor.';}
div#testimonials h2.rg-section:after{border-color: '.$TestimonialsHeadingBorderColor.';}
div#testimonials .rg_single_image.bt-circle figure a:hover > svg{stroke: '.$TestimonialsimagehvrbrsColor.';}
div#testimonials #quote-carousel .carousel-control i.fa{color: '.$TestimonialsprevnxtColor.';}
div#testimonials #quote-carousel .carousel-control i.fa.fa-angle-left:hover,
div#testimonials #quote-carousel .carousel-control i.fa.fa-angle-right:hover{color: '.$TestimonialsprevnxthvrColor.';}

div#testimonials #quote-carousel .carousel-control,
div#testimonials #quote-carousel .carousel-control{color: '.$TestimonialsprevnxtHvrTxtColor.';}

div#testimonials .carousel-indicators li{background-color: '.$TestimonialsIndicatorsColor.';}
div#testimonials .carousel-indicators li{border-color: '.$TestimonialsIndicatorsColor.';}
div#testimonials #quote-carousel .carousel-indicators .active{background-color: '.$TestimonialsIndicatorsHoverColor.';}
div#testimonials #quote-carousel .carousel-indicators .active{border-color: '.$TestimonialsIndicatorsHoverColor.';}';


// newsletter section
if(get_theme_mod('unbox_newsletter_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('rg_newsletter_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/newletterbg.jpg';

    $custom_css .= 'div#newsletter {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_newsletter_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'div#newsletter {background-color: '.$color.';} .about-post{border-color:'.$color.';}';
    }
}

$NewsletterSectionTitleColor = get_theme_mod('rg_newsletterTitle', '#ffffff');
$NewsletterSectionFormTextColor = get_theme_mod('rg_newsletterFormTextColor', '#868684');
$NewsletterSectionFormTextbrssColor = get_theme_mod('rg_newsletterFormTextbrssColor', '#ffffff');
$NewsletterSectionFormButtonArrowsColor = get_theme_mod('rg_newsletterFormButtonArrowColor', '#ffffff');
$NewsletterSectionFormButtonArrowbgssColor = get_theme_mod('rg_newsletterFormButtonArrowbgssColor', '#131d4e');
$NewsletterSectionFormlabelsColor = get_theme_mod('rg_newsletterFormlabelsColor', '#ffffff');

$NewsletternewslettercompsectionoverlaycColor = get_theme_mod('rg_newslettercompsectionoverlaycColor', '#1f1f1f');

$newsletterTitleBorderColor = get_theme_mod('rg_newsletterTitleBorderC', '#ffffff');
$newsletternewsletterSubTC = get_theme_mod('rg_newsletterSubTC', '#ffffff');

$custom_css .= 'div#newsletter h2.rg-news-ttl, div#newsletter h2.rg-news-ttl small{color: '.$NewsletterSectionTitleColor.';}
div#newsletter input[type="text"], 
div#newsletter input[type="email"], 
div#newsletter input[type="url"], 
div#newsletter input[type="password"], 
div#newsletter input[type="search"], 
div#newsletter input[type="number"], 
div#newsletter input[type="tel"], 
div#newsletter input[type="range"], 
div#newsletter input[type="date"], 
div#newsletter input[type="month"], 
div#newsletter input[type="week"], 
div#newsletter input[type="time"], 
div#newsletter input[type="datetime"], 
div#newsletter input[type="datetime-local"], 
div#newsletter input[type="color"], 
div#newsletter textarea,
div#newsletter input[type="text"]::placeholder, 
div#newsletter input[type="email"]::placeholder, 
div#newsletter input[type="url"]::placeholder, 
div#newsletter input[type="password"]::placeholder, 
div#newsletter input[type="search"]::placeholder, 
div#newsletter input[type="number"]::placeholder, 
div#newsletter input[type="tel"]::placeholder, 
div#newsletter input[type="range"]::placeholder, 
div#newsletter input[type="date"]::placeholder, 
div#newsletter input[type="month"]::placeholder, 
div#newsletter input[type="week"]::placeholder, 
div#newsletter input[type="time"]::placeholder, 
div#newsletter input[type="datetime"]::placeholder, 
div#newsletter input[type="datetime-local"]::placeholder, 
div#newsletter input[type="color"]::placeholder, 
div#newsletter textarea::placeholder,
div#newsletter select{color: '.$NewsletterSectionFormTextColor.';}
div#newsletter input[type="text"], 
div#newsletter input[type="email"], 
div#newsletter input[type="url"], 
div#newsletter input[type="password"], 
div#newsletter input[type="search"], 
div#newsletter input[type="number"], 
div#newsletter input[type="tel"], 
div#newsletter input[type="range"], 
div#newsletter input[type="date"], 
div#newsletter input[type="month"], 
div#newsletter input[type="week"], 
div#newsletter input[type="time"], 
div#newsletter input[type="datetime"], 
div#newsletter input[type="datetime-local"], 
div#newsletter input[type="color"], 
div#newsletter textarea,
div#newsletter select{background-color: '.$NewsletterSectionFormTextbrssColor.';}
div#newsletter input[type="submit"]{color: '.$NewsletterSectionFormButtonArrowsColor.';}
div#newsletter input[type="submit"]{background-color: '.$NewsletterSectionFormButtonArrowbgssColor.';}
div#newsletter label,
div#newsletter div.wpcf7 input[type="file"],
div#newsletter p{color: '.$NewsletterSectionFormlabelsColor.';}
div#newsletter .overlay{background-color: '.$NewsletternewslettercompsectionoverlaycColor.';}
div#newsletter h2.rg-section:after{border-color: '.$newsletterTitleBorderColor.';}
div#newsletter p{color: '.$newsletternewsletterSubTC.';}';

 // header menus 
$HeadertopmenusColorColor = get_theme_mod('rg_header_topmenusColor', '#959ab0');
$HeadertopmenushoverColorColor = get_theme_mod('rg_header_topmenushoverColor', '#ffffff');
$navigationresactiveheademenusColor = get_theme_mod( 'rg_header_activeheademenusColor', '#ffffff' );
$navigationtopmenusborderColor = get_theme_mod( 'rg_header_topmenusborderColor', '#959ab0' );
$navigationtopmenusHoverborderColor = get_theme_mod( 'rg_header_topmenusHoverborderColor', '#f96f5d' );



//$HeadertopsubmenusbackgroundColor = get_theme_mod('rg_header_topsubmenusbackgroundColor', '#f2f1f0');
$navigationtopmenusiconColor = get_theme_mod( 'rg_header_topmenusiconColor', '#959ab0' );
$navigationtopmenusiconhoverColor = get_theme_mod( 'rg_header_topmenusiconhoverColor', '#ffffff' );
$HeadertopsubmenusColor = get_theme_mod('rg_header_topsubmenusColor', '#9f9e9f');
$HeadertopsubmenushvrColor = get_theme_mod('rg_header_topsubmenushvrColor', '#ffffff');
$HeaderactivesubmenuColor = get_theme_mod('rg_header_activesubmenuColor', '#ffffff');
$HeadersocialscColor = get_theme_mod('rd_lbl_socialscColor', '#ffffff');
$HeaderTwittersocialscColor = get_theme_mod('rd_lbl_TwittersocialscColor', '#131d4e');
$HeaderfacebooksocialscColor = get_theme_mod('rd_lbl_facebooksocialscColor', '#ffffff');
$HeaderFacebooksocialshvrscColor = get_theme_mod('rd_lbl_FacebooksocialschvrColor', '#131d4e');
$HeaderinstagramsocialscColor = get_theme_mod('rd_lbl_instagramsocialscColor', '#a9a9a9');
$HeaderInstasocialscColor = get_theme_mod('rd_lbl_InstasocialscColor', '#f91e32');
$HederlinkedinsocialscColor = get_theme_mod( 'rd_lbl_linkedinsocialscColor', '#ffffff' );
$HeaderLinkedinsocialschvrsColor = get_theme_mod( 'rd_lbl_LinkedinsocialschvrsColor', '#131d4e' );
$HeaderbottomheaderbgssColor = get_theme_mod('rd_lbl_header_bottomheaderbgssColor', '#131d4e');
$navigationrespnavtoggbarbgssColor = get_theme_mod( 'rd_lbl_respnavtoggbarbgssColor', '#ffffff' );

$navigationtopsubmenusbackbgssColor = get_theme_mod( 'rg_header_topsubmenusbackbgssColor', '#131d4e' );
$navigationtopheadmaintaglinecompleteColor = get_theme_mod( 'rd_lbl_header_headmaintaglinecompleteColor', '#ffffff' );

$custom_css .= 'ul.nav.navbar-nav li a{color: '.$HeadertopmenusColorColor.';}
header.site-header ul.sub-menu li a{color: '.$HeadertopsubmenusColor.';}
header.site-header ul.sub-menu li a:hover{color: '.$HeadertopsubmenushvrColor.';}
ul.nav.navbar-nav li a:hover,
div#navbarNavDropdown li.current_page_item a:hover, .current_page_item > a:hover{color: '.$HeadertopmenushoverColorColor.';}
div#navbarNavDropdown ul.sub-menu li.current_page_item a, ul.sub-menu .current_page_item > a{color: '.$HeaderactivesubmenuColor.';}
header.site-header li .site-button.circle i.fa.fa-twitter{color: '.$HeadersocialscColor.';}
header.site-header li:hover .site-button.circle i.fa.fa-twitter{color: '.$HeaderTwittersocialscColor.';}
header.site-header li .site-button.circle i.fa.fa-facebook{color: '.$HeaderfacebooksocialscColor.';}
header.site-header li:hover .site-button.circle i.fa.fa-facebook{color: '.$HeaderFacebooksocialshvrscColor.';}
header.site-header li:hover .site-button.circle i.fa.fa-instagram{color: '.$HeaderInstasocialscColor.';}
header.site-header li .site-button.circle i.fa.fa-instagram{color: '.$HeaderinstagramsocialscColor.';}
header.site-header{background-color: '.$HeaderbottomheaderbgssColor.';}
.header-seo.header-transparent .navbar-toggler span{background-color: '.$navigationrespnavtoggbarbgssColor.';}
div#navbarNavDropdown li.current_page_item a, .current_page_item > a{color: '.$navigationresactiveheademenusColor.';}
.header.site-header ul.sub-menu li a:before{color: '.$navigationtopmenusiconColor.';}
.header.site-header ul.sub-menu li:hover a:before{color: '.$navigationtopmenusiconhoverColor.';}
ul.nav.navbar-nav li:before{border-color: '.$navigationtopmenusborderColor.';}
header.site-header li .site-button.circle i.fa.fa-linkedin{color: '.$HederlinkedinsocialscColor.';}
header.site-header li:hover .site-button.circle i.fa.fa-linkedin{color: '.$HeaderLinkedinsocialschvrsColor.';}
ul.sub-menu{background-color: '.$navigationtopsubmenusbackbgssColor.';}
header.site-header a.main-tagline {color: '.$navigationtopheadmaintaglinecompleteColor.';}

ul.nav.navbar-nav li:hover:before,
div#navbarNavDropdown li.current_page_item:before, 
div#navbarNavDropdown .current_page_item:before{border-color: '.$navigationtopmenusHoverborderColor.';}';


$HeaderfacebooksocialsIconBgColor = get_theme_mod( 'rd_lbl_facebooksocialsIconBgscColor', '#fb705d' );
$HeaderfacebooksocialsIconHColor = get_theme_mod( 'rd_lbl_facebooksocialsIconHcColor', '#ffffff' );
$custom_css .= 'header.site-header .list-inline > li{background-color: '.$HeaderfacebooksocialsIconBgColor.';}
header.site-header .list-inline > li:hover{background-color: '.$HeaderfacebooksocialsIconHColor.';}';


// footer
if(get_theme_mod('unbox_footer_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('rg_footer_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/footerop9.jpg';

    $custom_css .= 'footer#rg-footer {background-image: url("'.$img.'");background-size: cover;}';
}else{
    $color = get_theme_mod('rg_footer_bg_color', '#ffffff');
    if('#ffffff' != $color){
        $custom_css .= 'footer#rg-footer {background-color: '.$color.';} .about-post{border-color:'.$color.';}';
    }
}
// add colors

$Footer_widgetsTitleColor = get_theme_mod('rg_footer_widgetsTitle', '#fff');
$Footer_widgetsTextColor = get_theme_mod('rg_footer_widgetsText', '#c5c7d9');
$Footer_widgetsmenusColor = get_theme_mod('rg_footer_widgetsmenusText', '#c5c7d9');
$Footer_widgetsactivemenuColor = get_theme_mod('rg_footer_widgetsactivemenu', '#ffffff');
$Footer_widgetsactivehvrsmenuColor = get_theme_mod('rg_footer_widgetsactivehvrsmenu', '#ffffff');
$Footer_widgetsborderColor = get_theme_mod('rg_footer_widgetsborderColor', '#394067');

$Footer_widgetmenubrsscColor = get_theme_mod('rg_footer_widgetmenubrssc', '#ff735f');
$Footer_widgetsIconsColor = get_theme_mod('rg_footer_widgetsIconsColor', '#ff735f');
$Footer_widgetsSocialIconsColor = get_theme_mod('rg_footer_widgetsSocialIconsColor', '#ffffff');
$Footer_widgetsSocialIconsBorderColor = get_theme_mod('rg_footer_widgetsSocialIconsBorderColor', '#d5d6df');
$Footer_widgetsBottomfootertextColor = get_theme_mod('rg_footer_widgetsBottomfootertextColor', '#a9afc5');
$Footer_widgetsBottomfooterhightextColor = get_theme_mod('rg_footer_widgetsBottomfooterhightextColor', '#ff735f');
$Footer_widgetsFrmTxtColor = get_theme_mod('rg_footer_widgetsFrmTxtColor', '#ffffff');
$Footer_widgetsFrmbrssColor = get_theme_mod('rg_footer_widgetsFrmbrssColor', '#ffffff');
$Footer_widgetsBtntxtColor = get_theme_mod('rg_footer_widgetsBtntxtColor', '#ff735f');
$Footer_widgetsBtntxtBgssColor = get_theme_mod('rg_footer_widgetsBtntxtBgssColor', '#ffffff');
$Footer_widgetsFrmTxtlabelsColor = get_theme_mod('rg_footer_widgetsFrmTxtlabelsColor', '#ffffff');
$Footer_widgetsDateColor = get_theme_mod('rg_footer_widgetsDateColor', '#ffffff');
$Footer_widgetscatarchbgssColor = get_theme_mod('rg_footer_widgetscatarchbgssColor', '#ffffff');
$Footer_FooterOverlayBgsColor = get_theme_mod('rg_footer_FooterOverlayBgsColor', '#131d4e');

$custom_css .= 'footer#rg-footer h4.widget-title,
footer#rg-footer .widget_calendar table thead tr th {color: '.$Footer_widgetsTitleColor.';}
footer#rg-footer p,
footer#rg-footer .widget_calendar table tbody td,
footer#rg-footer caption,
footer#rg-footer .widget li,
footer#rg-footer div#calendar_wrap a{color: '.$Footer_widgetsTextColor.';}
footer#rg-footer li.menu-item a,
footer#rg-footer .widget.widget_recent_entries ul li a,
footer#rg-footer ul#recentcomments li a,
footer#rg-footer .widget.widget_pages ul li a,
footer#rg-footer .widget.widget_meta ul li a,
footer#rg-footer .widget.widget_archive ul li a,
footer#rg-footer .tagcloud a,
footer#rg-footer .widget.widget_categories ul li a,
footer#rg-footer ul.product-categories li a{color: '.$Footer_widgetsmenusColor.';}
footer#rg-footer li.menu-item a:hover,
footer#rg-footer .widget.widget_recent_entries ul li a:hover,
footer#rg-footer ul#recentcomments li a:hover,
footer#rg-footer .widget.widget_pages ul li a:hover,
footer#rg-footer .widget.widget_meta ul li a:hover,
footer#rg-footer .widget.widget_archive ul li a:hover,
footer#rg-footer .tagcloud a:hover,
footer#rg-footer .widget.widget_categories ul li a:hover,
footer#rg-footer ul.product-categories li a:hover{color: '.$Footer_widgetsactivehvrsmenuColor.';}
footer#rg-footer li.current_page_item > a,
footer#rg-footer .widget_calendar table tbody td#today a{color: '.$Footer_widgetsactivemenuColor.';}
footer#rg-footer .rg-menu-bx,
footer#rg-footer .widget_calendar table tbody td,
footer#rg-footer div#rg-main-footer{border-color: '.$Footer_widgetsborderColor.';}


footer#rg-footer h4.widget-title:after{border-color: '.$Footer_widgetmenubrsscColor.';}

footer#rg-footer i.fa{color: '.$Footer_widgetsIconsColor.';}
footer#rg-footer .social-profile-icons ul li a i{color: '.$Footer_widgetsSocialIconsColor.';}
footer#rg-footer .social-profile-icons ul li{border-color: '.$Footer_widgetsSocialIconsBorderColor.';}
footer#rg-footer div#gt-footer-bottom .ht-site-info.text-left, 
footer#rg-footer div#gt-footer-bottom .text-right li a,
footer#rg-footer div#gt-footer-bottom .text-right li:nth-child(2):before{color: '.$Footer_widgetsBottomfootertextColor.';}
footer#rg-footer .social-profile-icons.text-center h2,
footer#rg-footer .social-profile-icons.text-center h2 small{color: '.$Footer_widgetsBottomfooterhightextColor.';}
footer#rg-footer input[type="text"], 
footer#rg-footer input[type="email"], 
footer#rg-footer input[type="url"], 
footer#rg-footer input[type="password"], 
footer#rg-footer input[type="search"], 
footer#rg-footer input[type="number"], 
footer#rg-footer input[type="tel"], 
footer#rg-footer input[type="range"], 
footer#rg-footer input[type="date"], 
footer#rg-footer input[type="month"], 
footer#rg-footer input[type="week"], 
footer#rg-footer input[type="time"], 
footer#rg-footer input[type="datetime"], 
footer#rg-footer input[type="datetime-local"], 
footer#rg-footer input[type="color"], 
footer#rg-footer textarea, 
footer#rg-footer select,
footer#rg-footer input[type="text"]::placeholder, 
footer#rg-footer input[type="email"]::placeholder, 
footer#rg-footer input[type="url"]::placeholder, 
footer#rg-footer input[type="password"]::placeholder, 
footer#rg-footer input[type="search"]::placeholder, 
footer#rg-footer input[type="number"]::placeholder, 
footer#rg-footer input[type="tel"]::placeholder, 
footer#rg-footer input[type="range"]::placeholder, 
footer#rg-footer input[type="date"]::placeholder, 
footer#rg-footer input[type="month"]::placeholder, 
footer#rg-footer input[type="week"]::placeholder, 
footer#rg-footer input[type="time"]::placeholder, 
footer#rg-footer input[type="datetime"]::placeholder, 
footer#rg-footer input[type="datetime-local"]::placeholder, 
footer#rg-footer input[type="color"]::placeholder, 
footer#rg-footer textarea::placeholder, 
footer#rg-footer select,
footer#rg-footer .select2-container--default .select2-selection--single .select2-selection__placeholder{color: '.$Footer_widgetsFrmTxtColor.';}
footer#rg-footer input[type="text"], 
footer#rg-footer input[type="email"], 
footer#rg-footer input[type="url"], 
footer#rg-footer input[type="password"], 
footer#rg-footer input[type="search"], 
footer#rg-footer input[type="number"], 
footer#rg-footer input[type="tel"], 
footer#rg-footer input[type="range"], 
footer#rg-footer input[type="date"], 
footer#rg-footer input[type="month"], 
footer#rg-footer input[type="week"], 
footer#rg-footer input[type="time"], 
footer#rg-footer input[type="datetime"], 
footer#rg-footer input[type="datetime-local"], 
footer#rg-footer input[type="color"], 
footer#rg-footer textarea, 
footer#rg-footer select,
footer#rg-footer .select2-container--default .select2-selection--single{border-color: '.$Footer_widgetsFrmbrssColor.';}
footer#rg-footer input[type="submit"]{color: '.$Footer_widgetsBtntxtColor.';}
footer#rg-footer input[type="submit"]{background-color: '.$Footer_widgetsBtntxtBgssColor.';}
footer#rg-footer label,
footer#rg-footer form p{color: '.$Footer_widgetsFrmTxtlabelsColor.';}
footer#rg-footer div.wpcf7 input[type="file"]{color: '.$Footer_widgetsFrmTxtlabelsColor.';}
footer#rg-footer span.post-date{color: '.$Footer_widgetsDateColor.';}
footer#rg-footer .widget.widget_archive select option,
footer#rg-footer .widget.widget_categories select option{background-color: '.$Footer_widgetscatarchbgssColor.';}
footer#rg-footer .footer-overlay{background-color: '.$Footer_FooterOverlayBgsColor.';}';


// Services Shortcode
$InnerServicesMainTColor = get_theme_mod('InnerService_MainTColor', '#ffffff');
$InnerServicesMainTBgColor = get_theme_mod('InnerService_MainTBgColor', '#141c4d');

$InnerServicesMainHoverTColor = get_theme_mod('InnerService_MainHoverTColor', '#fb705d');
$InnerServicesMainHoverTxtColor = get_theme_mod('InnerService_MainHoverTxtColor', '#ffffff');

$InnerServicesarrColor = get_theme_mod('InnerService_arrColor', '#ffffff');
$InnerServicesarrbrsColor = get_theme_mod('InnerService_arrBrsColor', '#ffffff');

$InnerServicesbxColor = get_theme_mod('InnerService_bxColor', '#141c4d');

$InnerServicesBoxHBgsHColor = get_theme_mod('InnerService_BoxHBgssColor', '#ffffff');

$custom_css .= '#rg-inner-bx .inner-ser-bx .team-prof .post-title,
#rg-inner-bx .inner-ser-bx .team-prof .post-title small{color: '.$InnerServicesMainTColor.';}
#rg-inner-bx .inner-ser-bx .team-prof{background-color: '.$InnerServicesMainTBgColor.';}
#rg-inner-bx .inner-ser-bx .ser-content .post-title,
#rg-inner-bx .inner-ser-bx .ser-content .post-title small{color: '.$InnerServicesMainHoverTColor.';}
#rg-inner-bx .inner-ser-bx .description{color: '.$InnerServicesMainHoverTxtColor.';}
#rg-inner-bx .inner-ser-bx .ser_social li a{color: '.$InnerServicesarrColor.';}
#rg-inner-bx .inner-ser-bx .ser_social li a{border-color: '.$InnerServicesarrbrsColor.';}
#rg-inner-bx .inner-ser-bx .ser-content{background-color: '.$InnerServicesbxColor.';}
#rg-inner-bx .inner-ser-bx .ser-content:after{border-color: '.$InnerServicesbxColor.';}
#rg-inner-bx .inner-ser-bx .ser-content:after{background-color: '.$InnerServicesBoxHBgsHColor.';}';


//Gallery shortcode
$InnerGalleryTitleColor = get_theme_mod('rg_innerPageGalleryTitleC', '#ffffff');
$InnerGalleryOverlayColor = get_theme_mod('rg_innerPageGalleryOverlayC', '#000000');
$InnerGalleryIconColor = get_theme_mod('rg_innerPageGalleryIconC', '#8644e2');
$InnerGalleryIconbgssColor = get_theme_mod('rg_innerPageGalleryIconbgssC', '#ffffff');
$InnerGalleryIconborderColor = get_theme_mod('rg_innerPageGalleryIconborderC', '#dedddd');
$InnerGalleryIconborderhoverColor = get_theme_mod('rg_innerPageGalleryIconborderhoverC', '#8644e2');

$custom_css .= 'main#rg-inner-bx .rg-inner-gall-bx1 h3,
main#rg-inner-bx .rg-inner-gall-bx1 h3 small {color: '.$InnerGalleryTitleColor.';}
main#rg-inner-bx .rg-inner-gall-bx1 i{color: '.$InnerGalleryIconColor.';}
main#rg-inner-bx .rg-inner-gall-bx1 i:after{background-color: '.$InnerGalleryIconbgssColor.';}
main#rg-inner-bx .rg-inner-gall-bx1 i:after{border-color: '.$InnerGalleryIconborderColor.';}
main#rg-inner-bx .rg-inner-gall-bx1:after{border-bottom-color: '.$InnerGalleryOverlayColor.';}
main#rg-inner-bx .rg-inner-gall-bx1:after{border-right-color: '.$InnerGalleryOverlayColor.';}
main#rg-inner-bx .rg-inner-gall-bx1 i:after{border-bottom-color: '.$InnerGalleryIconborderhoverColor.';}
main#rg-inner-bx .rg-inner-gall-bx1 i:after{border-right-color: '.$InnerGalleryIconborderhoverColor.';}';

// projects shortcode
$innerPageProjectsimagehvrBgssColor = get_theme_mod('rg_innerPageProjectsimagehvrBgssColor', '#8644e2');
$innerPageProjectsimagehvrTextColor = get_theme_mod('rg_innerPageProjectsimagehvrTextColor', '#ffffff');
$innerPageProjectsimagehvrTitleColor = get_theme_mod('rg_innerPageProjectsTitleColor', '#ffffff');
$innerPageProjectsTitleBgssColor = get_theme_mod('rg_innerPageProjectsTitleBgssColor', '#8644e2');
$innerPageProjectsButtonColor = get_theme_mod('rg_innerPageProjectsButtonColor', '#ffffff');
$innerPageProjectsButtonBgssColor = get_theme_mod('rg_innerPageProjectsButtonBgssColor', '#8644e2');
$innerPageProjectsButtonBrssColor = get_theme_mod('rg_innerPageProjectsButtonBrssColor', '#ffffff');

$custom_css .= 'main#rg-inner-bx .rg-projects .projects-content-bx1 {background-color: '.$innerPageProjectsimagehvrBgssColor.';}
main#rg-inner-bx .rg-projects .description{color: '.$innerPageProjectsimagehvrTextColor.';}
main#rg-inner-bx .rg-innerprojects-title h3, 
main#rg-inner-bx .rg-innerprojects-title h3 small{color: '.$innerPageProjectsimagehvrTitleColor.';}
main#rg-inner-bx .rg-innerprojects-title{background-color: '.$innerPageProjectsTitleBgssColor.';}
main#rg-inner-bx .rg-innerprojects-icon i{color: '.$innerPageProjectsButtonColor.';}
main#rg-inner-bx .rg-innerprojects-icon{background-color: '.$innerPageProjectsButtonBgssColor.';}
main#rg-inner-bx .rg-innerprojects-icon{border-left-color: '.$innerPageProjectsButtonBrssColor.';}';

// Faq Shortcode
$innerPageFaqIconColor = get_theme_mod('rg_innerPageFaqIconColor', '#ffffff');
$innerPageFaqIconBgssColor = get_theme_mod('rg_innerPageFaqIconBgssColor', '#131d4e');

$innerPageFaqQuesColor = get_theme_mod('rg_innerPageFaqQuesColor', '#121212');
$innerPageFaqQuesBrsColor = get_theme_mod('rg_innerPageFaqQuesBrsColor', '#131d4e');

$innerPageFaqAnsColor = get_theme_mod('rg_innerPageFaqAnsColor', '#ffffff');
$innerPageFaqAnsbgssColor = get_theme_mod('rg_innerPageFaqAnsBgssColor', '#131d4e');

$innerPageFaqAnsbrssColor = get_theme_mod('rg_innerPageAnsbxbrssColor', '#ffffff');

$custom_css .= 'div#content-box .rg-faq-det button.accordion:before {color: '.$innerPageFaqIconColor.';}
div#content-box .rg-faq-det button.accordion:before {background-color: '.$innerPageFaqIconBgssColor.';}
#rg-inner-bx .rg-faq-det.padding0 h3.faq-title,
#rg-inner-bx .rg-faq-det.padding0 h3.faq-title small{color: '.$innerPageFaqQuesColor.';}
div#content-box .rg-faq-det button.accordion{border-color: '.$innerPageFaqQuesBrsColor.';}
div#content-box .rg-faq-det.padding0 p{color: '.$innerPageFaqAnsColor.';}
div#content-box .rg-faq-det div.panel{background-color: '.$innerPageFaqAnsbgssColor.';}
div#content-box .rg-faq-det.padding0 p{border-color: '.$innerPageFaqAnsbrssColor.';}';


// Testimonials Shortcode
$innerPageTestimonialsbrssColor = get_theme_mod('rg_innerTestimonialsbrssColor', '#131d4e');
$innerPageTestimonialsclientnametxtColor = get_theme_mod('rg_innerTestimonialsclientnametxtColor', '#131d4e');

$innerPageTestimonialsDesignationtxtColor = get_theme_mod('rg_innerTestimonialsDesignationtxtColor', '#fd7461');
$innerPageTestimonialsContenttxtColor = get_theme_mod('rg_innerTestimonialsContenttxtColor', '#121212');

$custom_css .= 'main#rg-inner-bx .rg-innerpage-testbx .testimonial .pic{border-color: '.$innerPageTestimonialsbrssColor.';}
main#rg-inner-bx .rg-innerpage-testbx .testimonial:after{border-bottom-color: '.$innerPageTestimonialsbrssColor.';}
main#rg-inner-bx .rg-innerpage-testbx .testimonial{border-left-color: '.$innerPageTestimonialsbrssColor.';}
main#rg-inner-bx .rg-innerpage-testbx .testimonial .title,
main#rg-inner-bx .rg-innerpage-testbx .testimonial .title small{color: '.$innerPageTestimonialsclientnametxtColor.';}
main#rg-inner-bx .rg-innerpage-testbx .testimonial .post{color: '.$innerPageTestimonialsDesignationtxtColor.';}
main#rg-inner-bx .rg-innerpage-testbx .testimonial .description{color: '.$innerPageTestimonialsContenttxtColor.';}';


       //Inner page title color
$innertitleColor = get_theme_mod('rg_template_innerpage_titlecolor', '#ffffff');
$innertitlebgColor = get_theme_mod('rg_template_innerpage_bgcolor', '#131d4e');
$innerPageBoxtitlehmiconColor = get_theme_mod('rg_breadcrumb_hmiconColor', '#ff735f');
$innerPageBoxhmarrowColor = get_theme_mod('rg_breadcrumb_hmarrowColor', '#131d4e');
$innerPageBoxhmattlColor = get_theme_mod('rg_breadcrumb_hmattlColor', '#131d4e');
$innerPageBoxhmiconhvrsColor = get_theme_mod('rg_breadcrumb_hmiconhvrsColor', '#131d4e');
$innerPageBoxbreadbrssColor = get_theme_mod('rg_breadcrumb_hmattlbreadbrssColor', '#f1f1f1');

$NavofthemebackttoparrColor = get_theme_mod('rg_template_innerpage_backttoparrcbgcolor', '#fb705d');
$NavofthemebackttoparrcbghvrColor = get_theme_mod('rg_template_innerpage_backttoparrcbghvrcolor', '#131d4e');

$innerpagemainsectionboxallttlscColor = get_theme_mod('rg_template_innerpagemainsectionboxallttlsc_color', '#131d4e');


$innerpagesidebarallhvrsslinkstxtshvrcColor = get_theme_mod('rg_template_innerpagesidebarallhvrsslinkstxtshvrc_color', '#ffffff');


$custom_css .= '.single-productpage .ht-main-title,
.ht-main-title small {color: '.$innertitleColor.';}
.single-productpage .ht-main-title {background-color: '.$innertitlebgColor.';}
.breadcrumbbox a{color: '.$innerPageBoxtitlehmiconColor.';}
.breadcrumbbox span i.fa.fa-angle-right{color: '.$innerPageBoxhmarrowColor.';}
.breadcrumbbox span.treeEnd{color: '.$innerPageBoxhmattlColor.';}
.breadcrumbbox a:hover{color: '.$innerPageBoxhmiconhvrsColor.';}
header.rg-inner-pg-bx{border-color: '.$innerPageBoxbreadbrssColor.';}
    #back2Top{color: '.$NavofthemebackttoparrColor.';}
    #back2Top:hover{color: '.$NavofthemebackttoparrcbghvrColor.';}
h1.rg-innerp-title,
h1.rg-innerp-title small{color: '.$innerpagemainsectionboxallttlscColor.';}
div#masonry a.site-button.left-btn:hover,
div#masonry .share-btn ul li a.site-button:hover,
.woocommerce ul.products li.product .onsale,
.woocommerce span.onsale, .woocommerce-page span.onsale,
.woocommerce table thead th,
    #commentsAdd input[type="submit"],
div#content-box .single_post .share-btn ul li a.site-button:hover i,
#rg-inner-bx .blue.pages-btn1:hover,
div#content-box .single_post .share-btn ul li:hover a.site-button i,
div#comments input[type="submit"]{color: '.$innerpagesidebarallhvrsslinkstxtshvrcColor.';}
.woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button,
.woocommerce div.product .woocommerce-tabs ul.tabs li a,
.woocommerce #review_form #respond .form-submit input{color: '.$innerpagesidebarallhvrsslinkstxtshvrcColor.' !important;}';


$headerinnerpagemaininnerpagemainsectionboxsectionboxColor = get_theme_mod('rg_template_innerpagemainsectionbox_color', '#ffffff');
$innerpagemainsectioninnerpagemainsectionboxheading1 = get_theme_mod('rg_template_innerpagemainsectionboxheading1_color', '#131d4e');
$innerpagemainsectioninnerpagemainsectionboxheading2 = get_theme_mod('rg_template_innerpagemainsectionboxheading2_color', '#131d4e');
$innerpagemainsectioninnerpagemainsectionboxheading3 = get_theme_mod('rg_template_innerpagemainsectionboxheading3_color', '#131d4e');
$innerpagemainsectioninnerpagemainsectionboxheading4 = get_theme_mod('rg_template_innerpagemainsectionboxheading4_color', '#131d4e');
$innerpagemainsectioninnerpagemainsectionboxheading5 = get_theme_mod('rg_template_innerpagemainsectionboxheading5_color', '#131d4e');
$innerpagemainsectioninnerpagemainsectionboxheading6 = get_theme_mod('rg_template_innerpagemainsectionboxheading6_color', '#131d4e');


$headerinnerpagemainsectionboxtextColor = get_theme_mod('rg_template_innerpagemainsectionboxtext_color', '#767676');
$innerpagemainsectionboxtextlinksColor = get_theme_mod('rg_template_innerpagemainsectionboxtextlinks_color', '#767676');
$innerpagemainsectionboxtextlinkshoverColor = get_theme_mod('rg_template_innerpagemainsectionboxtextlinkshvrs_color', '#fb705d');
$innerpagemainsectionboxtextlinksiconColor = get_theme_mod('rg_template_innerpagemainsectionboxtextlinksicon_color', '#fb705d');
$innerpagemainsectionboxtextlinksiconbgssclrlinksiconColor = get_theme_mod('rg_template_innerpagemainsectionboxtextlinksiconbgssclr_color', '#ffffff');

$innerpagemainsectionsidebarwidbrs = get_theme_mod('rg_template_innerpagemainsectionsidebarwidbrs_color', '#f1f1f1');
$innerpagemainsectionsidebarborderrs = get_theme_mod('rg_template_innerpagemainsectionsidebarborderrs_color', '#131d4e');


$innerpagesidebardaytxtColors = get_theme_mod('rg_template_innerpagesidebardaytxt_color', '#ffffff');
$innerpagesidebardaybgsstxtColors = get_theme_mod('rg_template_innerpagesidebardaybgsstxt_color', '#f1f1f1');

$innerpageblogboxbgssColors = get_theme_mod('lz_fitness_template_innerpageblogboxbgss_color', '#eee');

$custom_css .= 'main#rg-inner-bx,
header.rg-inner-pg-bx,
.breadcrumbbox {background-color: '.$headerinnerpagemaininnerpagemainsectionboxsectionboxColor.';}body.page-template-default main#rg-inner-bx h1{color: '.$innerpagemainsectioninnerpagemainsectionboxheading1.';}
body.page-template-default main#rg-inner-bx h2,
main#rg-inner-bx h2,
main#rg-inner-bx div#rg-sitemap h2,
div#rg-sitemap .rg-post-cat li.categories,
.single-productpage h2.woocommerce-Reviews-title,
div#masonry .dlab-post-title .post-title,
div#masonry .dlab-post-title .post-title small,
main#rg-inner-bx h2.woocommerce-loop-product__title small{color: '.$innerpagemainsectioninnerpagemainsectionboxheading2.';}
body.page-template-default main#rg-inner-bx h4,
div#commentsAdd h4,
main#rg-inner-bx .widget-area .widget-title{color: '.$innerpagemainsectioninnerpagemainsectionboxheading4.';}
body.page-template-default main#rg-inner-bx h5{color: '.$innerpagemainsectioninnerpagemainsectionboxheading5.';}
body.page-template-default main#rg-inner-bx h6,
div#blog-box.innerpage-whitebox h6{color: '.$innerpagemainsectioninnerpagemainsectionboxheading6.';}
main#rg-inner-bx p, #content-box ul li, #content-box ol li, main#innerpage-box ul#recentcomments li, #blog-box .inner-blog-excerpt,
#secondary input[type="text"],
main#rg-inner-bx .widget_calendar table tbody td,
main#rg-inner-bx li,
div#secondary caption,
.single_post .post-date-publishable,
main#rg-inner-bx textarea#comment,
.total-comments,
.woocommerce .woocommerce-ordering select,
.woocommerce-product-search .search-field::placeholder,
table.shop_table.woocommerce-checkout-review-order-table,
.woocommerce form .form-row .input-text::placeholder, 
.woocommerce-page form .form-row .input-text::placeholder,
.woocommerce form .form-row input.input-text::placeholder, 
.woocommerce form .form-row textarea::placeholder,
main#rg-inner-bx input#billing_email,
.select2-container--default .select2-selection--single .select2-selection__rendered,
div#content-box input#account_email,
main#rg-inner-bx input#account_display_name,
.widget.widget_categories select,
main#rg-inner-bx .select2-container--default .select2-selection--single .select2-selection__placeholder,
.woocommerce ul.cart_list li span, 
.woocommerce ul.product_list_widget li span,
.woocommerce .product_meta,
.comment-respond .comment-reply-title,
div#review_form_wrapper label,
.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta, 
.woocommerce-page #reviews #comments ol.commentlist li .comment-text p.meta,
.woocommerce-error, 
.woocommerce-info, 
.woocommerce-message,
.woocommerce-MyAccount-content address,
.woocommerce legend,
.woocommerce-MyAccount-content input[type="text"],
.woocommerce-MyAccount-content input[type="password"],
#coupon_code::placeholder,
.woocommerce .cart-collaterals, 
.woocommerce-page .cart-collaterals th,
.woocommerce table.shop_table td,
.woocommerce .quantity .qty,
.woocommerce form .form-row input.input-text,
div#rg-sitemap ul li, 
.price_label,
.woocommerce form .form-row textarea,
main#rg-inner-bx div#secondary input[type="submit"],
main#rg-inner-bx div#secondary .widget.widget_archive select,
div#masonry p,
div#masonry .dlab-post-meta ul li,
div#masonry a.site-button.left-btn,
.single.single-post .dlab-post-meta ul li,
.single_post span.tagtext
{color: '.$headerinnerpagemainsectionboxtextColor.';}
.single-productpage #sidebars button{color: '.$headerinnerpagemainsectionboxtextColor.' !important;}


.widget-area a, .woocommerce-MyAccount-navigation-link a, .entry-content p a, div#content-box a, div#sidebars span.product-title, div#sitemap-box ul li a, main#rg-inner-bx .woocommerce-info a.showcoupon,
.woocommerce .product_meta a,
div#rg-sitemap ul li a{color: '.$innerpagemainsectionboxtextlinksColor.';}
#content-box ul li:before, #content-box ol li:before,
main#rg-inner-bx div#sitemap-box ul li a:before{color: '.$innerpagemainsectionboxtextlinksiconColor.';}
#content-box ol li:before{background-color: '.$innerpagemainsectionboxtextlinksiconbgssclrlinksiconColor.';}
.widget-area a:hover, .woocommerce-MyAccount-navigation-link a:hover, .entry-content p a:hover, div#content-box a:hover, div#sidebars span.product-title:hover, .widget-area li a:hover, div#content-box p a:hover, div#sitemap-box ul li a:hover, div#content-box a.shipping-calculator-button:hover, main#innerpage-box .woocommerce-info a.showcoupon:hover, div#content-box div#payment a.woocommerce-privacy-policy-link:hover, div#content-box .woocommerce-MyAccount-navigation-link a:hover,
div#content-box a.post-edit-link:hover,
div#content-box .woocommerce-MyAccount-content p a:hover,
div#content-box a.shipping-calculator-button:hover,
div#content-box div#payment a:hover,
.woocommerce .product_meta a:hover,
div#rg-sitemap ul li a:hover,
div#sidebars span.product-title:hover span, 
main#rg-inner-bx a.showcoupon:hover{color: '.$innerpagemainsectionboxtextlinkshoverColor.';}
.widget-area .widget-title:after{background-color: '.$innerpagemainsectionsidebarwidbrs.';}
.widget-area .widget,
#secondary input[type="text"],
main#rg-inner-bx .woocommerce-product-search .search-field,
.woocommerce form .form-row input.input-text, 
.woocommerce form .form-row textarea,
.select2-container--default .select2-selection--single,
#innerpage-box .comment-respond,
main#rg-inner-bx div#commentsAdd textarea#comment,
.widget.widget_categories select,
div#secondary .select2-container--default .select2-selection--single,
.single_post .post-date-publishable,
.woocommerce-page.columns-3 ul.products li.product, 
.woocommerce.columns-3 ul.products li.product,
.single-productpage .widget-area li,
.woocommerce ul.cart_list li, 
.woocommerce ul.product_list_widget li,
.single-productpage select,
.woocommerce div.product form.cart .button, 
.woocommerce-page div.product form.cart .button, 
.woocommerce #content div.product form.cart .button, 
.woocommerce-page #content div.product form.cart .button,
.woocommerce .quantity .qty,
.woocommerce #review_form #respond textarea,
.woocommerce #review_form #respond .form-submit input,
.woocommerce-MyAccount-content input[type="text"], 
.woocommerce-MyAccount-content input[type="password"],
.woocommerce-MyAccount-content input[type="email"],
.woocommerce .cart .button, 
.woocommerce .cart input.button,
#coupon_code,
.woocommerce table.shop_table td,
.woocommerce #payment #place_order, 
.woocommerce-page #payment #place_order,
.woocommerce-checkout #payment ul.payment_methods,
.woocommerce table.shop_table tbody th, 
.woocommerce table.shop_table tfoot td, 
.woocommerce table.shop_table tfoot th,
div#rg-sitemap ul li,
div#sidebars ul li,
.woocommerce ul.cart_list li img, 
.woocommerce-page ul.cart_list li img, 
.woocommerce ul.product_list_widget li img, 
.woocommerce-page ul.product_list_widget li img,
main#rg-inner-bx div#secondary .widget.widget_archive select,
.single-productpage #sidebars button,
div#secondary input[type="submit"],
.woocommerce .widget_shopping_cart .total, 
.woocommerce.widget_shopping_cart .total,
.woocommerce .widget_shopping_cart .buttons a, 
.woocommerce.widget_shopping_cart .buttons a,
div#masonry .rg-innerblogs,
div#masonry a.site-button.left-btn,
.single_post .share-btn ul li a,
div#secondary ul li,
.widget-area ul ul,
#rg-inner-bx .blue.pages-btn1,
div#respond textarea#comment{border-color: '.$innerpagemainsectionsidebarborderrs.';}

div#masonry .dlab-post-meta li:after{color: '.$innerpagemainsectionsidebarborderrs.';}
div#sidebars ul li:before,
div#secondary ul li:before{color: '.$innerpagemainsectionsidebarborderrs.';}

.cart-collaterals .cart_totals table th,
.cart-collaterals .cart_totals table td{border-color: '.$innerpagemainsectionsidebarborderrs.' !important;}

.widget-area .widget-title:before{background-color: '.$innerpagemainsectionsidebarborderrs.';}
div#secondary .widget_calendar table thead tr th{color: '.$innerpagesidebardaytxtColors.';}
div#secondary .widget_calendar table thead tr th,
.woocommerce ul.products li.product .woocommerce-loop-category__title, 
.woocommerce ul.products li.product .woocommerce-loop-product__title, 
.woocommerce ul.products li.product h3,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.woocommerce-MyAccount-content input[type="text"], 
.woocommerce-MyAccount-content input[type="password"],
.woocommerce-MyAccount-content input[type="email"],
#coupon_code,
.woocommerce form .form-row input.input-text, 
.woocommerce form .form-row textarea,
.select2-container--default .select2-selection--single,
div#rg-sitemap ul li,
div#masonry .share-btn ul li a.site-button,
.single_post .share-btn ul li a.site-button,
#rg-inner-bx div#secondary .widget.widget_categories option,
#rg-inner-bx div#secondary .widget.widget_archive option,
.select2-results__option[aria-selected], .select2-results__option[data-selected],
.select2-container .select2-selection--single .select2-selection__rendered,
.woocommerce-ordering select option{background-color: '.$innerpagesidebardaybgsstxtColors.';}
#blog-box .inner-blog-post{background-color: '.$innerpageblogboxbgssColors.';}
.woocommerce-product-search .search-field{border-right-color: '.$innerpagemainsectionsidebarborderrs.' !important;}
main#rg-inner-bx div#sidebars h3.widget-title,
main#rg-inner-bx h3{color: '.$innerpagemainsectioninnerpagemainsectionboxheading3.';}';

// Contact Page Inner
$contactpagrinnerTitleColors = get_theme_mod('rg_contactpagrinnerTitleColor', '#2b2b2b');
$contactpagrinnerSubTitleColors = get_theme_mod('rg_contactpagrinnerSubTitleColor', '#767676');
$contactpagrinnerIconsColors = get_theme_mod('rg_contactpagrinnerIconsColor', '#767676');
$contactpagrinnerIconsbgssColors = get_theme_mod('rg_contactpagrinnerIconsbgssColor', '#ffffff');
$contactpagrinnerdettxtColors = get_theme_mod('rg_contactpagrinnerdettxtColor', '#767676');
$contactpagrinnerfrmTtlColors = get_theme_mod('rg_contactpagrinnerfrmTtlColor', '#2b2b2b');
$contactpagrinnerfrmTtlsubColors = get_theme_mod('rg_contactpagrinnerfrmTtlsubColor', '#767676');

$contactpagrinnerformalllblColors = get_theme_mod('rg_contactpagrinnerformalllblColor', '#767676');
$contactpagrinnerformalltxtColors = get_theme_mod('rg_contactpagrinnerformalltxtColor', '#767676');
$contactpagrinnerformalltxtbrssColor = get_theme_mod('rg_contactpagrinnerformalltxtbrssColor', '#ccc');

$contactpagrinnerformabtnbgsColor = get_theme_mod('rg_contactpagrinnerformabtnbgsColor', '#ffffff');
$contactpagrinnerformabtntxtColor = get_theme_mod('rg_contactpagrinnerformabtntxtColor', '#767676');

$custom_css .= 'main#rg-inner-bx h1.rg-contact-frm-titl.text-center,
main#rg-inner-bx h1.rg-contact-frm-titl.text-center small {color: '.$contactpagrinnerTitleColors.';}
main#rg-inner-bx .rg-contact-frm-subtitl.text-center{color: '.$contactpagrinnerSubTitleColors.';}
main#rg-inner-bx .rg-frm-ico span.fa{color: '.$contactpagrinnerIconsColors.';}
main#rg-inner-bx .rg-frm-ico{background-color: '.$contactpagrinnerIconsbgssColors.';}
main#rg-inner-bx .rg-frm-bx-det,
main#rg-inner-bx .rg-frm-bx-det a{color: '.$contactpagrinnerdettxtColors.';}
main#rg-inner-bx h1.rg-frm-tagline.text-center,
main#rg-inner-bx h1.rg-frm-tagline.text-center small{color: '.$contactpagrinnerfrmTtlColors.';}
main#rg-inner-bx .text-center.rg-frm-subtagline{color: '.$contactpagrinnerfrmTtlsubColors.';}
main#rg-inner-bx div#rg-cform-bx1 input[type="text"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="email"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="url"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="password"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="search"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="number"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="tel"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="range"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="date"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="month"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="week"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="time"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="datetime"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="datetime-local"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="color"], 
main#rg-inner-bx div#rg-cform-bx1 select,
main#rg-inner-bx div#rg-cform-bx1 textarea,

main#rg-inner-bx div#rg-cform-bx1 input[type="text"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="email"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="url"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="password"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="search"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="number"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="tel"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="range"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="date"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="month"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="week"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="time"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="datetime"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="datetime-local"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 input[type="color"]::placeholder, 
main#rg-inner-bx div#rg-cform-bx1 select,
main#rg-inner-bx div#rg-cform-bx1 textarea::placeholder{color: '.$contactpagrinnerformalltxtColors.';}
main#rg-inner-bx div#rg-cform-bx1 input[type="text"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="email"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="url"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="password"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="search"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="number"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="tel"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="range"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="date"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="month"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="week"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="time"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="datetime"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="datetime-local"], 
main#rg-inner-bx div#rg-cform-bx1 input[type="color"], 
main#rg-inner-bx div#rg-cform-bx1 select,
main#rg-inner-bx div#rg-cform-bx1 textarea{border-color: '.$contactpagrinnerformalltxtbrssColor.';}

main#rg-inner-bx div#rg-cform-bx1 label,
main#rg-inner-bx div#rg-cform-bx1 p,
main#rg-inner-bx div#rg-cform-bx1 div.wpcf7 input[type="file"]{color: '.$contactpagrinnerformalllblColors.';}
main#rg-inner-bx div#rg-cform-bx1 input[type="submit"]{color: '.$contactpagrinnerformabtntxtColor.';}
main#rg-inner-bx div#rg-cform-bx1 input[type="submit"]{background-color: '.$contactpagrinnerformabtnbgsColor.';}';
//

$custom = get_post_custom( $post->ID );

$image_id = get_post_meta( $post->ID, '_listing_image_id', true );
$thumbnail_html = wp_get_attachment_image_src( $image_id, 'larger');

    // echo '<pre />'; print_r($custom);
if(!empty($custom['useColor']) && $custom['useColor'][0]==1){
    if( isset( $custom['page_bg_color'][0] ) ){
        $custom_css .= '#rg-inner-bx{background-color:'.$custom['page_bg_color'][0].';}';
    }
}else{
    if( isset( $custom['_listing_image_id'][0]) ){
        $custom_css .= '#rg-inner-bx{background-image: url(\''.$thumbnail_html[0].'\');background-position: center;background-attachment: fixed;background-origin: content-box;background-size: cover;}';
    }
}


$custom_css .='.border{border:1px solid #fff;}';

return punte_css_strip_whitespace($custom_css);
}