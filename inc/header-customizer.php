<?php
function copydiss_customize_header( $wp_customize ) {

    $wp_customize->add_section ( 'copydiss_header_theme_section', array(
        'title' => __('Header', 'copydiss'),
        'priority' => 29,
    ) );

    // front page message
    $wp_customize->add_setting( 'copydiss_front_page_message' , array(
        'default' => 'Welcome to the website.',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_front_page_message',
        array (
            'label' => __( 'Front Page Message', 'copydiss' ),
            'section' => 'copydiss_header_theme_section',
            'settings' => 'copydiss_front_page_message'
        )
    ) ) ;


    // contact address first line
    $wp_customize->add_setting( 'copydiss_contact_address_first_line' , array(
        'default' => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_contact_address_first_line',
        array (
            'label' => __( 'Contact Address (first line)', 'copydiss' ),
            'section' => 'copydiss_header_theme_section',
            'settings' => 'copydiss_contact_address_first_line'
        )
    ) ) ;

    // contact address second line
    $wp_customize->add_setting( 'copydiss_contact_address_second_line' , array(
        'default' => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_contact_address_second_line',
        array (
            'label' => __( 'Contact Address (second line)', 'copydiss' ),
            'section' => 'copydiss_header_theme_section',
            'settings' => 'copydiss_contact_address_second_line'
        )
    ) ) ;

    // contact email
    $wp_customize->add_setting( 'copydiss_contact_email' , array(
        'default' => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_contact_email',
        array (
            'label' => __( 'Contact Email', 'copydiss' ),
            'section' => 'copydiss_header_theme_section',
            'settings' => 'copydiss_contact_email'
        )
    ) ) ;

    // contact phone
    $wp_customize->add_setting( 'copydiss_contact_phone' , array(
        'default' => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_contact_phone',
        array (
            'label' => __( 'Contact Phone', 'copydiss' ),
            'section' => 'copydiss_header_theme_section',
            'settings' => 'copydiss_contact_phone'
        )
    ) ) ;



}

add_action( 'customize_register', 'copydiss_customize_header' );
