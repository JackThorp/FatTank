<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

  // Rehearse Section
  $wp_customize->add_section('rehearse', array(
    'title' => __('Rehearse', 'Alicia'),
    'priority' => 2,
  ));
  
  $wp_customize->add_setting('equipment_text', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_equipment_text', array(
    'label'   => __( 'List Equipment Text', 'alicia' ),
    'section' => 'rehearse',
    'settings'  => 'equipment_text',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('oneoff_text', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_oneoff_text', array(
    'label'   => __( 'One Off Slots Text', 'alicia' ),
    'section' => 'rehearse',
    'settings'  => 'oneoff_text',
    'type' => 'textarea',
  ));
  
  $wp_customize->add_setting('residencies_text', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_residencies_text', array(
    'label'   => __( 'Residencies Text', 'alicia' ),
    'section' => 'rehearse',
    'settings'  => 'residencies_text',
    'type' => 'textarea',
  ));

  // CONTACT BANNER
  $wp_customize->add_section('contact_details', array(
    'title'     => __('Contact Details','Alicia'),
    'priority'  => 3,
  ));

  $wp_customize->add_setting('contact_number', array(
    'default'     => '+44',
    'type'        =>  'theme_mod',
    'capability'  => 'edit_theme_options',
  ));

  $wp_customize->add_control('alicia_contact_number', array(
    'label'     => __('Contact Number', 'alicia'),
    'section'   => 'contact_details',
    'settings'  => 'contact_number',
  ));

  $wp_customize->add_setting('contact_email', array(
    'default'     => 'contact@fattankstudios.co.uk',
    'type'        =>  'theme_mod',
    'capability'  => 'edit_theme_options',
  ));

  $wp_customize->add_control('alicia_contact_email', array(
    'label'     => __('Contact Email', 'alicia'),
    'section'   => 'contact_details',
    'settings'  => 'contact_email',
    'type'      => 'email'
  ));

  $wp_customize->add_setting('twitter_address', array(
    'default'     => 'https://twitter.com/fattankstudios',
    'type'        => 'theme_mod',
    'capability'  => 'edit_theme_options',
  ));

  $wp_customize->add_control('alicia_twitter_address', array(
    'label'     => __('Twitter Address', 'alicia'),
    'section'   => 'contact_details',
    'settings'  => 'twitter_address',
    'type'      => 'text'
  ));

  $wp_customize->add_setting('facebook_address', array(
    'default'     => 'https://facebook.com/fattankstudios',
    'type'        => 'theme_mod',
    'capability'  => 'edit_theme_options',
  ));

  $wp_customize->add_control('alicia_facebook_address', array(
    'label'     => __('Facebook Address', 'alicia'),
    'section'   => 'contact_details',
    'settings'  => 'facebook_address',
    'type'      => 'text'
  ));


  // RECORD SECTION
  $wp_customize->add_section('record', array(
    'title' => __('Record', 'Alicia'),
    'priority' => 4,
  ));

  $wp_customize->add_setting('record_text', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_record_text', array(
    'label'   => __( 'Record Text', 'alicia' ),
    'section' => 'record',
    'settings'  => 'record_text',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('soundcloud_track', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_soundcloud_track', array(
    'settings' => 'soundcloud_track',
    'label'    => __( 'Soundcloud Embed Link' ),
    'section'  => 'record',
  ));
 
  $wp_customize->add_setting('soundcloud_track', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_soundcloud_track', array(
    'settings' => 'soundcloud_track',
    'label'    => __( 'Soundcloud Embed Link' ),
    'section'  => 'record',
  ));

  // RESIDENTS SECTION
  $wp_customize->add_section('residents', array(
    'title' => __('Residents', 'Alicia'),
    'priority' => 5,
  ));
  
  $wp_customize->add_setting('residents_gallery_shortcode', array(
    'default'     => '',
    'type'        => 'theme_mod',
    'capability'  => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_residents_gallery_shortcode', array(
    'label'     => __('Residents Gallery Shortcode', 'alicia'),
    'section'   => 'residents',
    'settings'  => 'residents_gallery_shortcode',
    'type'      => 'text',
  ));

  // ABOUT SECTION
  $wp_customize->add_section('about', array(
    'title' => __('About', 'Alicia'),
    'priority' => 6,
  ));
 
  $wp_customize->add_setting('about_text', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_about_text', array(
    'label'   => __( 'About Text', 'alicia' ),
    'section' => 'about',
    'settings'  => 'about_text',
    'type' => 'textarea',
  ));
 
  $wp_customize->add_setting('studio_gallery_shortcode', array(
    'default'     => '',
    'type'        => 'theme_mod',
    'capability'  => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_studio_gallery_shortcode', array(
    'label'     => __('Studio Gallery Shortcode', 'alicia'),
    'section'   => 'about',
    'settings'  => 'studio_gallery_shortcode',
    'type'      => 'text',
  ));

  $wp_customize->add_setting('team_one_image', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'team_one_image', array(
    'label'    => __( 'Team One Image', 'alicia' ),
    'section'  => 'about',
    'settings' => 'team_one_image',
  ) ) );

  // Team One Name
  $wp_customize->add_setting('team_one_name', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_team_one_name', array(
    'label'   => __( 'Team One Name', 'alicia' ),
    'section' => 'about',
    'settings'  => 'team_one_name',
    'type' => 'text',
  ));

  // Team One Title
  $wp_customize->add_setting('team_one_title', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_team_one_title', array(
    'label'   => __( 'Team One Title', 'alicia' ),
    'section' => 'about',
    'settings'  => 'team_one_title',
    'type' => 'text',
  ));

  // Team One Email
  $wp_customize->add_setting('team_one_email', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_team_one_email', array(
    'label'   => __( 'Team One Email', 'alicia' ),
    'section' => 'about',
    'settings'  => 'team_one_email',
    'type' => 'text',
  ));

  // Team One Phone Number
  $wp_customize->add_setting('team_one_phone', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_team_one_phone', array(
    'label'   => __( 'Team One Phone', 'alicia' ),
    'section' => 'about',
    'settings'  => 'team_one_phone',
    'type' => 'text',
  ));

  // Team Two Image
  $wp_customize->add_setting('team_two_image', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));

  $wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'team_two_image', array(
    'label'    => __( 'Team Two Image', 'alicia' ),
    'section'  => 'about',
    'settings' => 'team_two_image',
  ) ) );


  // Team Two Name
  $wp_customize->add_setting('team_two_name', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_team_two_name', array(
    'label'   => __( 'Team Two Name', 'alicia' ),
    'section' => 'about',
    'settings'  => 'team_two_name',
    'type' => 'text',
  ));

  // Team Two Title
  $wp_customize->add_setting('team_two_title', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_team_two_title', array(
    'label'   => __( 'Team Two Title', 'alicia' ),
    'section' => 'about',
    'settings'  => 'team_two_title',
    'type' => 'text',
  ));

  // Team Two Email
  $wp_customize->add_setting('team_two_email', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));
  
  $wp_customize->add_control('alicia_team_two_email', array(
    'label'   => __( 'Team Two Email', 'alicia' ),
    'section' => 'about',
    'settings'  => 'team_two_email',
    'type' => 'text',
  ));

  // Team Two Phone Number
  $wp_customize->add_setting('team_two_phone', array(
    'default'        => '',
    'type'           => 'theme_mod',
    'capability'     => 'edit_theme_options',
  ));

  $wp_customize->add_control('alicia_team_two_phone', array(
    'label'   => __( 'Team Two Phone', 'alicia' ),
    'section' => 'about',
    'settings'  => 'team_two_phone',
    'type' => 'text',
  ));

 
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
