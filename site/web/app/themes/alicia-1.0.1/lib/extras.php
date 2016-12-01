<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Add Ajax hooks for contact form submission
 */
function submit_contact_form() {
  
  //user posted variables
  $name =     (isset($_POST['message_name'])    ? $_POST['message_name']  : ''); 
  $email =    (isset($_POST['message_email'])   ? $_POST['message_email'] : '');
  $message =  (isset($_POST['message_text'])     ? $_POST['message_text']  : '');
  $human =    (isset($_POST['message_human'])   ? $_POST['message_human'] : '');
  
  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  $sent = wp_mail($to, $subject, 'bla', '');

  if(!$human == 1 || $human != 2) {
    echo "Incorrect human validation check";
  } else {
    $sent = wp_mail($to, $subject, strip_tags($message), $headers);
    if($sent) {
      echo "Thanks for getting in touch. We will try to get back to you as soon as possible!";
    }
  }
  die();
}

add_action( 'wp_ajax_nopriv_submit_contact_form', __NAMESPACE__ . '\\submit_contact_form' );
add_action( 'wp_ajax_submit_contact_form', __NAMESPACE__ . '\\submit_contact_form' );


