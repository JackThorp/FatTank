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
  $wp_customize->add_section('contact_banner', array(
    'title'     => __('Contact Banner','Alicia'),
    'priority'  => 3,
  ));

  $wp_customize->add_setting('contact_number', array(
    'default'     => '+44',
    'type'        =>  'theme_mod',
    'capability'  => 'edit_theme_options',
  ));

  $wp_customize->add_control('alicia_contact_number', array(
    'label'     => __('Contact Number', 'alicia'),
    'section'   => 'contact_banner',
    'settings'  => 'contact_number',
  ));

  $wp_customize->add_setting('contact_email', array(
    'default'     => 'hello@mail.com',
    'type'        =>  'theme_mod',
    'capability'  => 'edit_theme_options',
  ));

  $wp_customize->add_control('alicia_contact_email', array(
    'label'     => __('Contact Email', 'alicia'),
    'section'   => 'contact_banner',
    'settings'  => 'contact_email',
    'type'      => 'email'
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
 
  // ABOUT SECTION
  $wp_customize->add_section('about', array(
    'title' => __('About', 'Alicia'),
    'priority' => 5,
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
  
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');
