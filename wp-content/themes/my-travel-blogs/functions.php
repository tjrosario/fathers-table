<?php

add_action( 'wp_enqueue_scripts', 'my_travel_blogs_chld_thm_parent_css' );
function my_travel_blogs_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'my_travel_blogs_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

    // boostrap
    wp_enqueue_script( 'bootstrap_js','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '', true );

    // slick carousel
    wp_enqueue_style( 'slick_css', esc_url_raw( 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' ), array(), null );
    wp_enqueue_script( 'slick_js','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '', true );

    // custom scripts
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/scripts/custom.js');

    // wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/scripts/custom.js', array(), time(), 'all' ); 

}

add_filter( 'bizberg_slider_btn_padding', function(){
    return [
        'top'    => '12px',
        'bottom' => '12px',
        'left'   => '30px',
        'right'  => '30px'
    ];
});

add_filter( 'bizberg_slider_read_more_font', function(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => '600',
        'font-size'      => '14px',
        'line-height'    => '42px',
        'letter-spacing' => '0px',
        'text-transform' => 'none',
        'color'          => '#fff',
    ];
});

add_filter( 'bizberg_read_more_background_color', function(){
    return '#886ac3';
});

add_filter( 'bizberg_read_more_background_color_2', function(){
    return '#981e8d';
});

add_filter( 'bizberg_homepage_blog_title', function(){
    return esc_html__( 'Latest Blogs', 'my-travel-blogs' );
});

add_filter( 'bizberg_slider_title_layout', function(){
    return '1';
});

/**
* Change the slider align to center
*/

add_filter( 'bizberg_slider_text_align', function(){
    return 'center';
});

/**
* Change the theme color
*/

add_filter( 'bizberg_theme_color', function(){
    return '#886ac3';
});

/**
* Change the header menu color hover
*/

add_filter( 'bizberg_header_menu_color_hover', function(){
    return '#886ac3';
});

/**
* Change the button color of header
*/

add_filter( 'bizberg_header_button_color', function(){
    return '#886ac3';
});

/**
* Change the button hover color of header
*/

add_filter( 'bizberg_header_button_color_hover', function(){
    return '#886ac3';
});

add_filter( 'bizberg_slider_title_box_highlight_color', function(){
    return '#886ac3';
});

add_filter( 'bizberg_slider_arrow_background_color', function(){
    return '#886ac3';
});

add_filter( 'bizberg_slider_dot_active_color', function(){
    return '#886ac3';
});

add_filter( 'bizberg_slider_gradient_primary_color', function(){
    return 'rgba(241,134,138,0.36)';
});

add_filter( 'bizberg_link_color', function(){
    return '#886ac3';
});

add_filter( 'bizberg_link_color_hover', function(){
    return '#886ac3';
});

add_filter( 'bizberg_blog_listing_pagination_active_hover_color', function(){
    return '#886ac3';
});

add_filter( 'bizberg_sidebar_widget_link_color_hover', function(){
    return '#886ac3';
});

add_filter( 'bizberg_sidebar_widget_title_color', function(){
    return '#886ac3';
});

add_filter( 'bizberg_footer_social_icon_background', function(){
    return '#886ac3';
});

add_filter( 'bizberg_footer_social_icon_color', function(){
    return '#fff';
});

add_filter( 'bizberg_slider_banner_settings', function(){
    return 'slider';
});

add_filter( 'bizberg_transparent_header_homepage', function(){
    return true;
});

add_filter( 'bizberg_transparent_navbar_background', function(){
    return 'rgba(10,10,10,0)';
});

add_filter( 'bizberg_header_blur', function(){
    return 0;
});

add_filter( 'bizberg_transparent_header_menu_sticky_background', function(){
    return '#fff';
});

add_filter( 'bizberg_transparent_header_menu_color_hover', function(){
    return '#886ac3';
});

add_filter( 'bizberg_transparent_header_menu_sticky_text_color', function(){
    return '#64686d';
});

add_filter( 'bizberg_body_content_typo_status', function(){
    return true;
});

add_filter( 'bizberg_typography_body_content', function(){
    return [
        'font-family'    => 'Lato',
        'variant'        => 'regular',
        'font-size'      => '15px',
        'line-height'    => '1.8'
    ];
});

add_filter( 'bizberg_body_typo_heading_2_status', function(){
    return true;
});

add_filter( 'bizberg_typography_h2', function(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => '500',
        'font-size'      => '20px',
        'line-height'    => '1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});

add_filter( 'bizberg_body_typo_heading_4_status', function(){
    return true;
});

add_filter( 'bizberg_typography_h4', function(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => '500',
        'font-size'      => '19px',
        'line-height'    => '1.3',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});

add_filter( 'bizberg_body_typo_heading_3_status', function(){
    return true;
});

add_filter( 'bizberg_typography_h3', function(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => '500',
        'font-size'      => '24px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});

add_filter( 'bizberg_body_typo_heading_1_status', function(){
    return true;
});

add_filter( 'bizberg_typography_h1', function(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => '700',
        'font-size'      => '44px',
        'line-height'    => '1.1',
        'letter-spacing' => '0',
        'text-transform' => 'inherit'
    ];
});

add_filter( 'bizberg_slider_height_monitor', function(){
    return 900;
});

add_filter( 'bizberg_transparent_header_menu_toggle_color_mobile', function(){
    return '#fff';
});

add_filter( 'bizberg_arrow_style', function(){
    return 'diamond';
});

add_filter( 'bizberg_arrow_size', function(){
    return 50;
});

add_filter( 'bizberg_slider_height_mobile', function(){
    return 800;
});

add_filter( 'bizberg_slider_height_desktop', function(){
    return 700;
});

add_filter( 'bizberg_slider_btn_border_radius', function(){
    return [
        'border-top-left-radius'  => '99px',
        'border-top-right-radius'  => '99px',
        'border-bottom-right-radius' => '99px',
        'border-bottom-left-radius' => '99px'
    ];
});

add_filter( 'bizberg_read_more_text_color', function(){
    return '#0a0a0a';
});

add_action( 'init' , 'my_travel_blogs_kirki_fields' );
function my_travel_blogs_kirki_fields(){

    if( !class_exists( 'Kirki' ) ){
        return;
    }
    
    /**
    * About Me
    */

    Kirki::add_panel( 'my_travel_blog_homepage_settings', array(
        'priority'    => 1,
        'title'       => esc_html__( 'Homepage Settings', 'my-travel-blogs' )
    ) );

    Kirki::add_section( 'my_travel_blog_about_us', array(
        'title'          => esc_html__( 'About Me', 'my-travel-blogs' ),
        'panel'          => 'my_travel_blog_homepage_settings'
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'select',
        'settings'    => 'about_me_page_id',
        'label'       => esc_attr__( 'Select about me page', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_about_us',
        'default'     => '',
        'multiple'    => 1,
        'choices'     => function_exists( 'bizberg_get_all_pages' ) ? bizberg_get_all_pages() : array()
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_about_us',
                'settings' => 'my_travel_blog_about_us_top_bottom_spacing',
                'global_active_callback'    => array(),
                'fields' => array(
                    'dimensions' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_top_bottom_spacing_desktop',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '80'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ],                      
                            'output' => array(
                                array(
                                    'element'  => '.about-us',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_top_bottom_spacing_tablet',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '80'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ],                      
                            'output' => array(
                                array(
                                    'element'  => '.about-us',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_top_bottom_spacing_mobile',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '80'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ], 
                            'output' => array(
                                array(
                                    'element'  => '.about-us',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }    

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_about_us_title_heading',
        'section'     => 'my_travel_blog_about_us',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Title Settings', 'my-travel-blogs' ) . '</div>'
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_about_us_title_font',
        'label'       => esc_html__( 'Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_about_us',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '600',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'color'          => '#333333',
            'text-transform' => 'none',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.my_travel_blog_about_me_wrapper h3',
            ],
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_about_us',
                'settings' => 'my_travel_blog_about_us_title_font_size',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Font Size ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_title_font_size_desktop',
                            'default' => 40,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Font Size ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_title_font_size_tablet',
                            'default' => 30,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Font Size ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_title_font_size_mobile',
                            'default' => 20,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_about_us',
                'settings' => 'my_travel_blog_about_us_title_spacing',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_title_spacing_desktop',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper h3',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_title_spacing_tablet',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper h3',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_title_spacing_mobile',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper h3',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_about_us_content_heading',
        'section'     => 'my_travel_blog_about_us',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Content Settings', 'my-travel-blogs' ) . '</div>'
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_about_us',
                'settings' => 'my_travel_blog_about_us_content_spacing',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Paragraph Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_description_spacing_desktop',
                            'default' => 15,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper p',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Paragraph Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_description_spacing_tablet',
                            'default' => 15,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper p',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Paragraph Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_description_spacing_mobile',
                            'default' => 15,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper p',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_about_us_button_heading',
        'section'     => 'my_travel_blog_about_us',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Button Settings', 'my-travel-blogs' ) . '</div>'
    ] );

    Kirki::add_field( 'bizberg', [
        'type'     => 'text',
        'settings' => 'my_travel_blog_about_us_button_text',
        'label'    => esc_html__( 'Label', 'my-travel-blogs' ),
        'section'  => 'my_travel_blog_about_us',
        'default'  => esc_html__( 'Read More', 'my-travel-blogs' )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_about_us_button_font_family',
        'label'       => esc_html__( 'Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_about_us',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '600',
            'font-size'      => '14px',
            'line-height'    => '42px',
            'letter-spacing' => '0',
            'text-transform' => 'none'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.my_travel_blog_about_me_wrapper a',
            ],
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_about_us',
                'settings' => 'my_travel_blog_about_us_button_top_spacing',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Top Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_button_top_spacing_desktop',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper a',
                                    'property' => 'margin-top',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Top Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_button_top_spacing_tablet',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper a',
                                    'property' => 'margin-top',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Top Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_about_us_button_top_spacing_mobile',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_about_me_wrapper a',
                                    'property' => 'margin-top',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'my_travel_blog_about_us_button_background_color_1',
        'label'       => __( 'Background Color 1', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_about_us',
        'default'     => '#886ac3',
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'my_travel_blog_about_us_button_background_color_2',
        'label'       => __( 'Background Color 2', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_about_us',
        'default'     => '#981e8d',
    ] );

    /**
    * Destination
    */

    Kirki::add_section( 'my_travel_blog_destinations', array(
        'title'          => esc_html__( 'Destinations', 'my-travel-blogs' ),
        'panel'          => 'my_travel_blog_homepage_settings'
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'switch',
        'settings'    => 'my_travel_blog_destinations_status',
        'label'       => esc_html__( 'Destination Section ?', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_destinations',
        'default'     => '1',
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'my-travel-blogs' ),
            'off' => esc_html__( 'Disable', 'my-travel-blogs' ),
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'my_travel_blog_destinations_background_color',
        'label'       => __( 'Background Color', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_destinations',
        'default'     => '#fafafa',
        'choices'     => [
            'alpha' => true,
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.explore_destination',
                'property' => 'background'
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_destinations_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_destinations',
                'settings' => 'my_travel_blog_destinations_top_bottom_spacing',
                'global_active_callback'    => [
                    [
                        'setting'  => 'my_travel_blog_destinations_status',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
                'fields' => array(
                    'dimensions' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_top_bottom_spacing_desktop',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '70'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ],                      
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_top_bottom_spacing_tablet',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '70'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ],                      
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_top_bottom_spacing_mobile',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '70'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ], 
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'select',
        'settings'    => 'my_travel_blog_destinations_columns',
        'label'       => esc_html__( 'Column', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_destinations',
        'default'     => '3',
        'multiple'    => 1,
        'choices'     => [
            '1' => '1',
            '2' => '2',
            '3' => '3'
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_destinations_status',
                'operator' => '==',
                'value'    => true,
            ]
        ]
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_destinations_title_heading',
        'section'     => 'my_travel_blog_destinations',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Title Settings', 'my-travel-blogs' ) . '</div>',
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_destinations_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'     => 'text',
        'settings' => 'my_travel_blog_destinations_heading',
        'label'    => esc_html__( 'Title', 'my-travel-blogs' ),
        'section'  => 'my_travel_blog_destinations',
        'default' => current_user_can( 'edit_theme_options' ) ? esc_html__( 'Explore by Destination', 'my-travel-blogs' ) : '',
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_destinations_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_destinations_title_font',
        'label'       => esc_html__( 'Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_destinations',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '600',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'color'          => '#333333',
            'text-transform' => 'none',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.explore_destination .section-title h3',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_destinations_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_destinations',
                'settings' => 'my_travel_blog_destinations_title_font_size',
                'global_active_callback'    => [
                    [
                        'setting'  => 'my_travel_blog_destinations_status',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Font Size ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_title_font_size_desktop',
                            'default' => 24,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .section-title h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Font Size ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_title_font_size_tablet',
                            'default' => 24,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .section-title h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Font Size ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_title_font_size_mobile',
                            'default' => 24,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .section-title h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_destinations',
                'settings' => 'my_travel_blog_destinations_title_spacing',
                'global_active_callback'    => [
                    [
                        'setting'  => 'my_travel_blog_destinations_status',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_title_spacing_desktop',
                            'default' => 25,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .section-title',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_title_spacing_tablet',
                            'default' => 25,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .section-title',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_title_spacing_mobile',
                            'default' => 25,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .section-title',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_destinations_content_heading',
        'section'     => 'my_travel_blog_destinations',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Content Settings', 'my-travel-blogs' ) . '</div>',
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_destinations_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Select Categories', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_destinations',
        'description' => sprintf(
            esc_html__( 
                'In free version, you can only select 3 categories. %s', 
                'my-travel-blogs' 
            ),
            '<a target="_blank" href="' . esc_url( bizberg_get_pro_link() ) . '">' . esc_html__( 'Upgrade to PRO', 'my-travel-blogs' ) . '</a>'
        ),
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'Category', 'my-travel-blogs' )
        ],
        'settings'    => 'my_travel_blog_destinations_categories',
        'fields' => [
            'category_id' => [
                'type'        => 'select',
                'label'       => esc_attr__( 'Select Post Category', 'my-travel-blogs' ),
                'choices' => my_travel_blogs_get_post_categories(),
                'default' => 1
            ],
            'image' => [
                'type'        => 'image',
                'label'       => esc_attr__( 'Image', 'my-travel-blogs' ),
                'default' => get_template_directory_uri() . '/assets/images/placeholder.jpg',
            ],
            'image_position' => [
                'type'        => 'select',
                'label'       => esc_attr__( 'Image Position', 'my-travel-blogs' ),
                'choices' => [
                    'left' => 'Left',
                    'right' => 'Right',
                    'bottom' => 'Bottom',
                    'center' => 'Center'
                ],
                'default' => 'center'
            ],
            'background_color' => [
               'type' => 'color',
               'label'       => esc_attr__( 'Background Color', 'my-travel-blogs' ),
               'default'     => '#000'
            ],
            'text_color' => [
               'type' => 'color',
               'label'       => esc_attr__( 'Text Color', 'my-travel-blogs' ),
               'default'     => '#fff'
            ],
        ],
        'default' => [
            [
                'category_id' => 1,
                'image' => get_template_directory_uri() . '/assets/images/placeholder.jpg',
                'image_position' => 'center',
                'background_color' => '#1e73be'
            ],
            [
                'category_id' => 1,
                'image' => get_template_directory_uri() . '/assets/images/placeholder.jpg',
                'image_position' => 'center',
                'background_color' => '#dd3333'
            ],
            [
                'category_id' => 1,
                'image' => get_template_directory_uri() . '/assets/images/placeholder.jpg',
                'image_position' => 'center',
                'background_color' => '#dd9933'
            ],
        ],
        'choices' => [
            'limit' => apply_filters( 'my_travel_blogs_destinations_categories', 3 )
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_destinations_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_destinations_button_font',
        'label'       => esc_html__( 'Button Font Settings', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_destinations',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '600',
            'font-size'      => '14px',
            'letter-spacing' => '0',
            'text-transform' => 'none'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.explore_destination .destination_cat .news-cats a',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_destinations_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_destinations',
                'settings' => 'my_travel_blog_destinations_image_height',
                'global_active_callback'    => [
                    [
                        'setting'  => 'my_travel_blog_destinations_status',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Image Height ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_image_height_desktop',
                            'default' => 300,
                            'choices'     => [
                                'min'  => 200,
                                'max'  => 450,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .news-item .news-image img',
                                    'property' => 'height',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Image Height ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_image_height_tablet',
                            'default' => 300,
                            'choices'     => [
                                'min'  => 200,
                                'max'  => 450,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .news-item .news-image img',
                                    'property' => 'height',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Image Height ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_destinations_image_height_mobile',
                            'default' => 300,
                            'choices'     => [
                                'min'  => 200,
                                'max'  => 450,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.explore_destination .news-item .news-image img',
                                    'property' => 'height',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    /**
    * Recent Trips
    */

    Kirki::add_section( 'my_travel_blog_recent_trips', array(
        'title'          => esc_html__( 'Recent Trips', 'my-travel-blogs' ),
        'panel'          => 'my_travel_blog_homepage_settings'
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'switch',
        'settings'    => 'my_travel_blog_recent_trips_status',
        'label'       => esc_html__( 'Recent Trips Section ?', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => '1',
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'my-travel-blogs' ),
            'off' => esc_html__( 'Disable', 'my-travel-blogs' ),
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_recent_trips',
                'settings' => 'my_travel_blog_recent_trips_top_bottom_spacing',
                'global_active_callback'    => [
                    [
                        'setting'  => 'my_travel_blog_recent_trips_status',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
                'fields' => array(
                    'dimensions' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_top_bottom_spacing_desktop',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '80'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ],                      
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_top_bottom_spacing_tablet',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '80'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ],                      
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_top_bottom_spacing_mobile',
                            'default'     => [
                                'padding-top'    => '80',
                                'padding-bottom' => '80'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ], 
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    
    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'select',
        'settings'    => 'my_travel_blog_recent_trips_columns',
        'label'       => esc_html__( 'Column', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => '3',
        'multiple'    => 1,
        'choices'     => [
            '1' => '1',
            '2' => '2',
            '3' => '3'
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true,
            ]
        ]
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_recent_trips_title_heading',
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Title Settings', 'my-travel-blogs' ) . '</div>',
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'     => 'text',
        'settings' => 'my_travel_blog_recent_trips_heading',
        'label'    => esc_html__( 'Title', 'my-travel-blogs' ),
        'section'  => 'my_travel_blog_recent_trips',
        'default' => current_user_can( 'edit_theme_options' ) ? esc_html__( 'Where I Am Now – ASIA', 'my-travel-blogs' ) : '',
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_recent_trips_title_font',
        'label'       => esc_html__( 'Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '600',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'color'          => '#333333',
            'text-transform' => 'none',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.where_am_i .section-title h3',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_recent_trips',
                'settings' => 'my_travel_blog_recent_trips_title_font_size',
                'global_active_callback'    => [
                    [
                        'setting'  => 'my_travel_blog_recent_trips_status',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Font Size ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_title_font_size_desktop',
                            'default' => 24,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .section-title h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Font Size ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_title_font_size_tablet',
                            'default' => 24,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .section-title h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Font Size ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_title_font_size_mobile',
                            'default' => 24,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .section-title h3',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_recent_trips',
                'settings' => 'my_travel_blog_recent_trips_title_spacing',
                'global_active_callback'    => [
                    [
                        'setting'  => 'my_travel_blog_recent_trips_status',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_title_spacing_desktop',
                            'default' => 25,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .section-title',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_title_spacing_tablet',
                            'default' => 25,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .section-title',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_title_spacing_mobile',
                            'default' => 25,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .section-title',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_recent_trips_content_heading',
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Content Settings', 'my-travel-blogs' ) . '</div>',
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'select',
        'settings'    => 'my_travel_blog_recent_trips_category',
        'label'       => esc_html__( 'Select Category', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_recent_trips',
        'description' => sprintf(
            esc_html__( 
                'In free version, only 3 posts will be displayed. %s', 
                'my-travel-blogs' 
            ),
            '<a target="_blank" href="' . esc_url( bizberg_get_pro_link() ) . '">' . esc_html__( 'Upgrade to PRO', 'my-travel-blogs' ) . '</a>'
        ),
        'choices'     => bizberg_get_post_categories(),
        'active_callback'    => array(
            array(
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'select',
        'settings'    => 'my_travel_blog_recent_trips_meta_options',
        'label'       => esc_html__( 'Meta Options', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => array('date','category','comment'),
        'multiple'    => 3,
        'choices'     => [
            'date' => esc_html__( 'Date', 'my-travel-blogs' ),
            'category' => esc_html__( 'Category', 'my-travel-blogs' ),
            'comment' => esc_html__( 'Comment', 'my-travel-blogs' )
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_recent_trips_meta_font',
        'label'       => esc_html__( 'Meta Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => [
            'font-family'    => 'Lato',
            'variant'        => '700',
            'line-height'    => '1.5',
            'font-size'      => '14px',
            'letter-spacing' => '0',
            'color'          => '#fff',
            'text-transform' => 'none',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.where_am_i .news-outer .meta li a',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_recent_trips_post_title_font',
        'label'       => esc_html__( 'Title Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '600',
            'line-height'    => '1',
            'font-size'      => '19px',
            'letter-spacing' => '0',
            'color'          => '#fff',
            'text-transform' => 'none',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.where_am_i .news-content h3 a',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'my_travel_blog_recent_trips_background_overlay_color',
        'label'       => __( 'Overlay Color', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_recent_trips',
        'default'     => 'rgba(20,0,0,0.24)',
        'choices'     => [
            'alpha' => true,
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.where_am_i .news-image .overlay',
                'property' => 'background'
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'my_travel_blog_recent_trips_status',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_recent_trips',
                'settings' => 'my_travel_blog_recent_trips_image_height',
                'global_active_callback'    => [
                    [
                        'setting'  => 'my_travel_blog_recent_trips_status',
                        'operator' => '==',
                        'value'    => true,
                    ]
                ],
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Image Height ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_image_height_desktop',
                            'default' => 300,
                            'choices'     => [
                                'min'  => 200,
                                'max'  => 450,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .news-item .news-image,.where_am_i .news-item .news-image img',
                                    'property' => 'height',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Image Height ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_image_height_tablet',
                            'default' => 300,
                            'choices'     => [
                                'min'  => 200,
                                'max'  => 450,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .news-item .news-image,.where_am_i .news-item .news-image img',
                                    'property' => 'height',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Image Height ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_recent_trips_image_height_mobile',
                            'default' => 300,
                            'choices'     => [
                                'min'  => 200,
                                'max'  => 450,
                                'step' => 25,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.where_am_i .news-item .news-image,.where_am_i .news-item .news-image img',
                                    'property' => 'height',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    /**
    * Call To Action
    */

    Kirki::add_section( 'my_travel_blog_call_to_action', array(
        'title'          => esc_html__( 'Call To Action', 'my-travel-blogs' ),
        'panel'          => 'my_travel_blog_homepage_settings'
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'select',
        'settings'    => 'my_travel_blog_call_to_action_page',
        'label'       => esc_html__( 'Select Page', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => '',
        'multiple'    => 1,
        'choices'     => function_exists( 'bizberg_get_all_pages' ) ? bizberg_get_all_pages() : array()
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'select',
        'settings'    => 'my_travel_blog_call_to_action_align',
        'label'       => esc_html__( 'Align', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => 'center',
        'multiple'    => 1,
        'choices'     => [
            'center' => esc_html__( 'Center', 'my-travel-blogs' ),
            'left' => esc_html__( 'Left', 'my-travel-blogs' ),
            'right' => esc_html__( 'Right', 'my-travel-blogs' )
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.my_travel_blog_call_to_action .call-content',
                'property' => 'text-align'
            ],
        ],
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'background',
        'settings'    => 'my_travel_blog_call_to_action_background',
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => [
            'background-color'      => 'rgba(92,25,154,0.37)',
            'background-image'      => '',
            'background-repeat'     => 'repeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ]
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){

        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_call_to_action',
                'settings' => 'my_travel_blog_call_to_action_top_bottom_spacing',
                'global_active_callback'    => array(),
                'fields' => array(
                    'dimensions' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_top_bottom_spacing_desktop',
                            'default'     => [
                                'padding-top'    => '150',
                                'padding-bottom' => '150'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ],                      
                            'output' => array(
                                array(
                                    'element'  => '.call-to-action.my_travel_blog_call_to_action',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_top_bottom_spacing_tablet',
                            'default'     => [
                                'padding-top'    => '150',
                                'padding-bottom' => '150'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ],                      
                            'output' => array(
                                array(
                                    'element'  => '.call-to-action.my_travel_blog_call_to_action',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_top_bottom_spacing_mobile',
                            'default'     => [
                                'padding-top'    => '150',
                                'padding-bottom' => '150'
                            ],  
                            'choices'     => [
                                'labels' => [
                                    'padding-top'  => esc_html__( 'Top', 'my-travel-blogs' ),
                                    'padding-bottom'  => esc_html__( 'Bottom', 'my-travel-blogs' )
                                ],
                            ], 
                            'output' => array(
                                array(
                                    'element'  => '.call-to-action.my_travel_blog_call_to_action',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );

    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_call_to_action_title_heading',
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Title Settings', 'my-travel-blogs' ) . '</div>',
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_call_to_action_page_title_font',
        'label'       => esc_html__( 'Title Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '600',
            'line-height'    => '1',
            'letter-spacing' => '0',
            'color'          => '#fff',
            'text-transform' => 'none',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.my_travel_blog_call_to_action h2',
            ],
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){
        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_call_to_action',
                'settings' => 'my_travel_blog_call_to_action_title_font_size',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Font Size ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_title_font_size_desktop',
                            'default' => 50,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action h2',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Font Size ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_title_font_size_tablet',
                            'default' => 30,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action h2',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Font Size ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_title_font_size_mobile',
                            'default' => 20,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action h2',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px !important',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){
        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_call_to_action',
                'settings' => 'my_travel_blog_call_to_action_title_spacing',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_title_spacing_desktop',
                            'default' => 20,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action h2',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_title_spacing_tablet',
                            'default' => 20,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action h2',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_title_spacing_mobile',
                            'default' => 20,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action h2',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_call_to_action_content_heading',
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Content Settings', 'my-travel-blogs' ) . '</div>',
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_call_to_action_page_content_font',
        'label'       => esc_html__( 'Content Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => [
            'font-family'    => 'Lato',
            'variant'        => '400',
            'line-height'    => '1.8',
            'letter-spacing' => '0',
            'color'          => '#fff',
            'text-transform' => 'none',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.my_travel_blog_call_to_action p'
            ],
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){
        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_call_to_action',
                'settings' => 'my_travel_blog_call_to_action_content_font_size',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Title Font Size ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_content_font_size_desktop',
                            'default' => 15,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action p',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Title Font Size ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_content_font_size_tablet',
                            'default' => 15,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action p',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Title Font Size ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_content_font_size_mobile',
                            'default' => 15,
                            'choices'     => [
                                'min'  => 10,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action p',
                                    'property' => 'font-size',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    }

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){
        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_call_to_action',
                'settings' => 'my_travel_blog_call_to_action_content_spacing',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Content Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_content_spacing_desktop',
                            'default' => 20,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action p',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Content Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_content_spacing_tablet',
                            'default' => 20,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action p',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Content Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_content_spacing_mobile',
                            'default' => 20,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action p',
                                    'property' => 'margin-bottom',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'custom',
        'settings'    => 'my_travel_blog_call_to_action_button_heading',
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => '<div class="bizberg_customizer_custom_heading">' . esc_html__( 'Button Settings', 'my-travel-blogs' ) . '</div>',
    ] );

    Kirki::add_field( 'bizberg', [
        'type'     => 'text',
        'settings' => 'my_travel_blog_call_to_action_button_text',
        'label'    => esc_html__( 'Label', 'my-travel-blogs' ),
        'section'  => 'my_travel_blog_call_to_action',
        'default'  => esc_html__( 'Read More', 'my-travel-blogs' )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'my_travel_blog_call_to_action_button_font_family',
        'label'       => esc_html__( 'Font Family', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '600',
            'font-size'      => '14px',
            'line-height'    => '42px',
            'letter-spacing' => '0',
            'text-transform' => 'none'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.my_travel_blog_call_to_action a.call_btn',
            ],
        ],
    ] );

    if( function_exists( 'bizberg_kirki_dtm_options' ) ){
        bizberg_kirki_dtm_options( 
            array(
                'display' => array(
                    'desktop' => 'desktop',
                    'tablet' => 'tablet',
                    'mobile' => 'mobile'
                ),
                'field_id' => 'bizberg',
                'section' => 'my_travel_blog_call_to_action',
                'settings' => 'my_travel_blog_call_to_action_button_top_spacing',
                'global_active_callback'    => array(),
                'fields' => array(
                    'slider' => array(
                        'desktop' => array(
                            'label' => esc_html__( 'Top Spacing ( Desktop )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_button_top_spacing_desktop',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action a.call_btn',
                                    'property' => 'margin-top',
                                    'value_pattern' => '$px'
                                )
                            ),
                        ),
                        'tablet' => array(
                            'label' => esc_html__( 'Top Spacing ( Tablet )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_button_top_spacing_tablet',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action a.call_btn',
                                    'property' => 'margin-top',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 481px) and (max-width: 1024px)'
                                )
                            ),
                        ),
                        'mobile' => array(
                            'label' => esc_html__( 'Top Spacing ( Mobile )', 'my-travel-blogs' ),
                            'settings' => 'my_travel_blog_call_to_action_button_top_spacing_mobile',
                            'default' => 5,
                            'choices'     => [
                                'min'  => 0,
                                'max'  => 100,
                                'step' => 1,
                            ],
                            'transport' => 'auto',
                            'output' => array(
                                array(
                                    'element'  => '.my_travel_blog_call_to_action a.call_btn',
                                    'property' => 'margin-top',
                                    'value_pattern' => '$px',
                                    'media_query' => '@media (min-width: 320px) and (max-width: 480px)'
                                )
                            ),
                        )
                    ),
                )
                
            ) 
        );
    }

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'my_travel_blog_call_to_action_button_background_color_1',
        'label'       => __( 'Background Color 1', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => '#886ac3',
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'color',
        'settings'    => 'my_travel_blog_call_to_action_button_background_color_2',
        'label'       => __( 'Background Color 2', 'my-travel-blogs' ),
        'section'     => 'my_travel_blog_call_to_action',
        'default'     => '#981e8d',
    ] );

}

function my_travel_blogs_get_post_categories(){

    $post_terms = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => false,
    ) );

    $data = array();
    if( empty( $post_terms ) ){
        return;
    }

    foreach ( $post_terms as $key => $value ) {
        $data[$value->term_id] = $value->name;
    }

    return $data;

}

add_filter( 'bizberg_inline_style', function( $inline_css ){

    $my_travel_blog_about_us_button_background_color_1 = bizberg_get_theme_mod( 'my_travel_blog_about_us_button_background_color_1' );
    $my_travel_blog_about_us_button_background_color_2 = bizberg_get_theme_mod( 'my_travel_blog_about_us_button_background_color_2' );

    $inline_css .= '.my_travel_blog_about_me_wrapper a { background-image: linear-gradient(to right,' . esc_attr( $my_travel_blog_about_us_button_background_color_1 ) . ',' . esc_attr( $my_travel_blog_about_us_button_background_color_2 ) . '); }';

    return $inline_css;

});

add_action( 'bizberg_before_homepage_blog', 'my_travel_blogs_about_me_section');
function my_travel_blogs_about_me_section(){

    $about_me_page_id = bizberg_get_theme_mod( 'about_me_page_id' );

    $button_text = bizberg_get_theme_mod( 'my_travel_blog_about_us_button_text' );

    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'p' => absint( $about_me_page_id )
    );

    if( $about_me_page_id === '0' ){
        $args = array();
    }

    $about_me_query = new WP_Query( $args );
    $post_thumbnail_status = false;

    if( $about_me_query->have_posts() ):

        while( $about_me_query->have_posts() ): $about_me_query->the_post();
        
            global $post; ?>

            <section class="about-us">

                <div class="container">

                    <div class="about-inner">

                        <div class="row d-flex align-items-center">

                            <?php 
                            if( has_post_thumbnail() ){
                                $post_thumbnail_status = true; ?>
                                <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
                                    <div class="about-image-box">
                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </div>
                                </div>
                                <?php 
                            } ?>

                            <div class="<?php echo ( $post_thumbnail_status ? 'col-lg-8 col-sm-7 col-md-8 col-xs-12' : 'col-lg-12 col-sm-12 col-md-12 col-xs-12' ) ?>">

                                <div class="left-side-content my_travel_blog_about_me_wrapper">

                                    <h3 class="elementor-heading-title"><?php the_title(); ?></h3>
                                    
                                    <?php 

                                    if( has_excerpt() ){
                                        the_excerpt();
                                    } else {
                                        the_content();
                                    }

                                    ?>

                                    <a href="<?php the_permalink(); ?>" class="about_me_btn">
                                        <?php echo esc_html( $button_text ); ?>                                                
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <?php

        endwhile;

    endif;

    wp_reset_postdata();

}

add_action( 'bizberg_before_homepage_blog', 'my_travel_blogs_destinations_section');
function my_travel_blogs_destinations_section(){

    $destinations_heading = bizberg_get_theme_mod( 'my_travel_blog_destinations_heading' );
    $destination_categories = bizberg_get_theme_mod( 'my_travel_blog_destinations_categories' ); 
    $destinations_status = bizberg_get_theme_mod( 'my_travel_blog_destinations_status' );
    $columns = bizberg_get_theme_mod( 'my_travel_blog_destinations_columns' );

    switch ( $columns ) {

        case '3':
            $col_class = 'col-lg-4';
            break;

        case '2':
            $col_class = 'col-lg-6';
            break;
        
        default:
            $col_class = 'col-lg-12';
            break;

    }

    if( empty( $destinations_status ) ){
        return;
    } ?>

    <section class="news explore_destination">
        <div class="container">

            <?php 
            if( !empty( $destinations_heading ) ){ ?>
                <div class="section-title text-center mb-5 pb-2">
                    <h3 class="elementor-heading-title"><?php echo esc_html( $destinations_heading ); ?></h3>
                </div>
                <?php 
            } 


            if( !empty( $destination_categories ) ){ ?>

                <div class="news-outer">

                    <div class="row">

                        <?php 
                        foreach ( $destination_categories as $key => $value ) {

                            // Get category details
                            $category_details = array();
                            if( !empty( $value['category_id'] ) ){
                                $category_details = get_term_by( 'id', $value['category_id'], 'category', ARRAY_A ); 
                            }  

                            // Get image 
                            $image = !empty( $value['image'] ) ? $value['image'] : get_template_directory_uri() . '/assets/images/placeholder.jpg';

                            if( filter_var( $image, FILTER_VALIDATE_INT ) ){
                                $image_attributes = wp_get_attachment_image_src( $image, 'medium_large' );
                                $image = !empty( $image_attributes[0] ) ? $image_attributes[0] : '';
                            } 

                            // Get image position
                            $image_position = !empty( $value['image_position'] ) ? $value['image_position'] : 'center'; 

                            // Get colors
                            $background_color = !empty( $value['background_color'] ) ? $value['background_color'] : '#000';
                            $text_color = !empty( $value['text_color'] ) ? $value['text_color'] : '#fff'; ?>
                            
                            <div class="<?php echo esc_attr( $col_class ); ?> col-md-6 col-sm-6 col-xs-12 mb-4 destination_cat">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">

                                        <img 
                                        style="object-position:<?php echo esc_attr( $image_position ); ?>"
                                        src="<?php echo esc_url( $image ); ?>">

                                        <?php 
                                        if( !empty( $category_details ) ){ ?>
                                            <div class="news-content">
                                                <div class="news-cats">
                                                    <a 
                                                    style="background: <?php echo esc_attr( $background_color ); ?>;color: <?php echo esc_attr( $text_color ); ?>;"
                                                    href="<?php echo esc_url( get_term_link( $category_details['term_id'] ) ); ?>">
                                                        <?php 
                                                        echo esc_html( $category_details['name'] );
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php 
                                        } ?>

                                    </div>
                                </div>
                            </div>

                            <?php
                        } ?>                        

                    </div>

                </div>

                <?php 

            } ?>

        </div>

    </section>

    <?php
}

add_action( 'bizberg_before_homepage_blog', 'my_travel_blogs_where_am_i_section');
function my_travel_blogs_where_am_i_section(){

    $recent_trips_status = bizberg_get_theme_mod( 'my_travel_blog_recent_trips_status' );
    $recent_trips_heading = bizberg_get_theme_mod( 'my_travel_blog_recent_trips_heading' );

    $trips_category = bizberg_get_theme_mod( 'my_travel_blog_recent_trips_category' );

    $meta_options = bizberg_get_theme_mod( 'my_travel_blog_recent_trips_meta_options' );

    $columns = bizberg_get_theme_mod( 'my_travel_blog_recent_trips_columns' );

    switch ( $columns ) {

        case '3':
            $col_class = 'col-lg-4';
            break;

        case '2':
            $col_class = 'col-lg-6';
            break;
        
        default:
            $col_class = 'col-lg-12';
            break;

    }

    if( empty( $recent_trips_status ) ){
        return;
    }

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => apply_filters( 'my_travel_blogs_where_am_i_section_limit', 3 ),
        'cat' => $trips_category
    );

    $trips_query = new WP_Query( $args ); ?>

    <section class="news where_am_i">

        <div class="container">
            
            <?php 
            if( !empty( $recent_trips_heading ) ){ ?>
                <div class="section-title text-center mb-5 pb-2">
                    <h3 class="elementor-heading-title">
                        <?php echo esc_html( $recent_trips_heading ); ?>
                    </h3>
                </div>
                <?php 
            } 

            if( $trips_query->have_posts() ): ?>

                <div class="news-outer">

                    <div class="row">

                        <?php 

                        while( $trips_query->have_posts() ): $trips_query->the_post();

                            global $post;

                            $category =  bizberg_post_categories( $post, 1, false, false ); ?>

                            <div class="<?php echo esc_attr( $col_class ); ?> col-md-6 col-sm-6 col-xs-12 mb-4 recent_trips_col">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <?php the_post_thumbnail( 'medium_large' ); ?>
                                        <div class="news-content">
                                            
                                            <?php 
                                            if( !empty( $meta_options ) ){ ?>
                                                <div class="news-list meta">
                                                    <ul>
                                                        <?php 
                                                        if( in_array( 'date' , $meta_options ) ){ ?>
                                                            <li>
                                                            <a href="<?php echo esc_url( home_url() ); ?>/<?php echo esc_attr( date( 'Y/m' , strtotime( get_the_date() ) ) ); ?>">
                                                                <i class="fal fa-clock"></i> 
                                                                <?php 
                                                                echo esc_html( get_the_date() ); 
                                                                ?> 
                                                                </a>
                                                            </li>
                                                            <?php 
                                                        } 

                                                        if( in_array( 'category' , $meta_options ) ){ ?>
                                                            <li>
                                                                <?php 
                                                                echo wp_kses_post( $category ); 
                                                                ?> 
                                                            </li>
                                                            <?php 
                                                        } 

                                                        if( in_array( 'comment' , $meta_options ) ){ ?>
                                                            <li>
                                                                <?php 
                                                                bizberg_get_comments_number( $post );
                                                                ?>   
                                                            </li>
                                                            <?php
                                                        } ?>
                                                    </ul>
                                                </div>
                                                <?php 
                                            } ?>

                                            <h3 class="elementor-heading-title">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>
                                         </div>
                                         <div class="overlay"></div>
                                    </div>
                                </div>
                            </div>

                            <?php 

                        endwhile; ?>

                    </div>

                </div>

                <?php 

            endif;

            wp_reset_postdata(); ?>

        </div>

    </section>

    <?php
}

add_action( 'bizberg_before_homepage_blog', 'my_travel_blogs_call_to_action');
function my_travel_blogs_call_to_action(){ 

    $call_to_action_page_id = bizberg_get_theme_mod( 'my_travel_blog_call_to_action_page' );
    $button_text = bizberg_get_theme_mod( 'my_travel_blog_call_to_action_button_text' );

    if( $call_to_action_page_id === '0' ){
        return;
    }

    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'p' => absint( $call_to_action_page_id )
    ); 

    $call_query = new WP_Query( $args );

    if( $call_query->have_posts() ):

        while( $call_query->have_posts() ): $call_query->the_post(); ?>

            <section 
            class="call-to-action my_travel_blog_call_to_action">
                <div class="container">
                    <div class="call-content">
                        <h2 class="elementor-heading-title">
                            <?php 
                            the_title();
                            ?>
                        </h2>
                        
                        <?php 
                        if( has_excerpt() ){
                            the_excerpt();
                        } else {
                            the_content();
                        }
                        
                        if( !empty( $button_text ) ){ ?>
                        
                            <a 
                            href="<?php the_permalink(); ?>" class="call_btn">                  
                                <?php echo esc_html( $button_text ); ?>                                               
                            </a>

                            <?php 
                        
                        } ?>

                    </div>
                </div>               
            </section>

            <?php

        endwhile;

    endif;

    wp_reset_postdata();
}

/**
* Call to action button gradient color
*/

add_filter( 'bizberg_inline_style', function( $inline_css ){

    $button_background_color_1 = bizberg_get_theme_mod( 'my_travel_blog_call_to_action_button_background_color_1' );
    $button_background_color_2 = bizberg_get_theme_mod( 'my_travel_blog_call_to_action_button_background_color_2' );

    $inline_css .= '.my_travel_blog_call_to_action a.call_btn { background-image: linear-gradient(to right,' . esc_attr( $button_background_color_1 ) . ',' . esc_attr( $button_background_color_2 ) . '); }';

    return $inline_css;

});

/**
* Call to action background image
*/

add_filter( 'bizberg_inline_style', function( $inline_css ){

    if( function_exists( 'bizberg_theme_background_image' ) ){
        $background = bizberg_get_theme_mod( 'my_travel_blog_call_to_action_background' );
        $inline_css .= bizberg_theme_background_image( $background, $placement = '.call-to-action.my_travel_blog_call_to_action' );
    }

    return $inline_css;

});

function bizberg_child_widgets_init() {
    register_sidebar(array(
        'name' => 'Footer Column 1',
        'id' => 'bizberg_child_footer_col1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Footer Column 2',
        'id' => 'bizberg_child_footer_col2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Footer Column 3',
        'id' => 'bizberg_child_footer_col3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ));
}   
add_action( 'widgets_init', 'bizberg_child_widgets_init' );

function bizberg_child_get_footer(){
    $social_icons = bizberg_get_footer_social_links(); ?>

    <footer 
	id="footer" 
	class="footer-style"
	style="<?php echo ( empty( $social_icons ) ? 'padding-top: 20px;' : '' ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <?php if ( has_custom_logo() ) { ?>
                        <img 
                            src="<?php echo esc_url(bizberg_get_custom_logo_link()); ?>" 
                            alt="<?php esc_attr_e('Logo', 'bizberg') ?>" 
                            class="site_logo"
                        />
                    <?php } ?>

                    <?php if ( is_active_sidebar( 'bizberg_child_footer_col1' ) ) : ?>
                        <div class="my-3">
                            <?php if(dynamic_sidebar('bizberg_child_footer_col1')) : else : endif ?>
                        </div>
                    <?php endif; ?>

                    <?php 
                    if( !empty( $social_icons ) ){ ?>
                        <div class="footer_social_links">
                            <?php 
                            echo wp_kses_post( $social_icons );
                            ?>
                        </div>
                        <?php 
                    } ?>
                </div>

                <div class="col-xs-12 col-md-4">
                    <h3 class="title mb-3">Quick links</h3>

                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'=>'menu',
                        'container' => 'ul',
                        'depth' => 1
                    ) );
                    ?>

                    <?php if ( is_active_sidebar( 'bizberg_child_footer_col2' ) ) : ?>
                        <div class="my-3">
                            <?php if(dynamic_sidebar('bizberg_child_footer_col2')) : else : endif ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-xs-12 col-md-4">
                    <h3 class="title mb-3">Contact us</h3>

                    <?php if ( is_active_sidebar( 'bizberg_child_footer_col3' ) ) : ?>
                        <div class="my-3">
                            <?php if(dynamic_sidebar('bizberg_child_footer_col3')) : else : endif ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>
    
    <?php
}

function get_product_breadcrumbs() {
    $queried_object = get_queried_object();
    $terms = get_the_terms( $queried_object->ID, 'product_categories' );
    $term = $terms[0];
    $tax = $term->taxonomy;
    $term_name = $term->name;
    $term_slug = $term->slug;

    $cat_link = home_url() . '/' . $tax . '/' . $term_slug;


    echo '<ol class="d-flex list-plain breadcrumb p-0">';
    echo '<li><a href="'.home_url().'" rel="nofollow">Home</a></li>';
    if (is_category() || is_single()) {
        echo '<li><a href="' . $cat_link . '">' . $term_name . '</a></li>';
        the_category(' &bull; ');
            if (is_single()) {
                echo '<li>' . get_field('title') . '</li>';
            }
    } elseif (is_page()) {
        echo '<li">' . the_title() . '</li>';
    } elseif (is_search()) {
        echo '<li>Search Results for... ';
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
        echo "</li>";
    }

    echo '</ol>';
}

function get_breadcrumbs() {
    // Set variables for later use
    $here_text        = __( 'You are currently here!' );
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<span typeof="v:Breadcrumb">';
    $link_after       = '</span>';
    $link_attr        = ' rel="v:url" property="v:title"';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = ' &raquo; ';              // Delimiter between crumbs
    $before           = '<span class="current">'; // Tag before the current crumb
    $after            = '</span>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /** 
     * Set our own $wp_the_query variable. Do not use the global variable version due to 
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() ) 
    {
        /** 
         * Set our own $post variable. Do not use the global variable version due to 
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables 
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type ) 
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent ) 
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }   

    // Handle the search page
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
    }

    // Handle 404's
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    // Handle paged pages
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<div class="breadcrumb">';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            // $breadcrumb_output_link .= $here_text . $delimiter;
            $breadcrumb_output_link .= '<a href="' . $home_link . '">' . $home_text . '</a>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        // $breadcrumb_output_link .= $here_text . $delimiter;
        $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</div><!-- .breadcrumbs -->';

    return $breadcrumb_output_link;
}