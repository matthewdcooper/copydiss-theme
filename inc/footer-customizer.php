<?php
function copydiss_customize_footer( $wp_customize ) {

    $menu_choices = array();
    foreach (wp_get_nav_menus() as $menu) {
        $arr = $menu->to_array();
        if (array_key_exists('name', $arr)) {
            $menu_choices[$arr['name']] = $arr['name'];
        }
    }

    $wp_customize->add_section ( 'copydiss_footer_theme_section', array(
        'title' => __('Footer', 'copydiss'),
        'priority' => 30,
    ) );

    // copyright notice
    $wp_customize->add_setting( 'copydiss_copyright_notice' , array(
        'default' => '© ' . date( "Y" ),
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_copyright_notice',
        array (
            'label' => __( 'Copyright Notice', 'copydiss' ),
            'section' => 'copydiss_footer_theme_section',
            'settings' => 'copydiss_copyright_notice'
        )
    ) ) ;

    // footer menu
    $wp_customize->add_setting( 'copydiss_footer_menu' , array(
        'default' => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_footer_menu',
        array (
            'label' => __( 'Footer Menu', 'copydiss' ),
            'section' => 'copydiss_footer_theme_section',
            'settings' => 'copydiss_footer_menu',
            'type' => 'select',
            'choices' => $menu_choices
        )
    ) ) ;





    // company number 
    $wp_customize->add_setting( 'copydiss_company_number' , array(
        'default' => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_company_number',
        array (
            'label' => __( 'Company Number', 'copydiss' ),
            'section' => 'copydiss_footer_theme_section',
            'settings' => 'copydiss_company_number'
        )
     ) ) ;


    // company address 
    $wp_customize->add_setting( 'copydiss_company_address' , array(
        'default' => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_company_address',
        array (
            'label' => __( 'Company Address', 'copydiss' ),
            'section' => 'copydiss_footer_theme_section',
            'settings' => 'copydiss_company_address'
        )
     ) ) ;


    // company vat 
    $wp_customize->add_setting( 'copydiss_company_vat' , array(
        'default' => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize,
        'copydiss_company_vat',
        array (
            'label' => __( 'Company VAT', 'copydiss' ),
            'section' => 'copydiss_footer_theme_section',
            'settings' => 'copydiss_company_vat'
        )
     ) ) ;
}

add_action( 'customize_register', 'copydiss_customize_footer' );