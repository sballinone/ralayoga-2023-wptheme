<?php

function my_customize_register($wp_customize)
{
	$wp_customize->add_setting('home_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_customize_sanitize_home_image',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'my_home_image', array(
                'label'    => 'Header Homepage',
                'settings' => 'home_image',
                'section'  => 'header_image',
                'priority' => 50,
            )
        )
    );
	
	
    $wp_customize->add_setting('footer_image', array(
        'default' => '',
        'type' => 'theme_mod',
        'sanitize_callback' => 'my_customize_sanitize_footer_image',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'my_footer_image', array(
                'label'    => 'Bild Footer',
                'settings' => 'footer_image',
                'section'  => 'header_image',
                'priority' => 51,
            )
        )
    );
}
add_action('customize_register', 'my_customize_register');



function my_customize_sanitize_home_image($input)
{
    error_log(attachment_url_to_postid($input));//debug
    return attachment_url_to_postid($input);
}

function my_customize_sanitize_footer_image($input)
{
    error_log(attachment_url_to_postid($input));//debug
    return attachment_url_to_postid($input);
}
