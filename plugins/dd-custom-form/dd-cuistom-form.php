<?php
/**
 *  Plugin Name: Digital Decor Custom Form
 *  Plugin URI: https: digitaldecor.com
 *  Description: This contact form created for Digital Decor and intellectual property of GP Color
 *  Verson: 1.0
 *  Author: Arthur Melkonyan
 *  Author URI: https://digitaldecor.com
 *  Text Domain: ddform
 *  Copyright (C)2020 GP Color
 * 
 */
if( ! defined( 'ABSPATH' ) ) return die( 'No Trespassing!' );

 // Includes
include( 'inc/html-form.php' );
include( 'inc/process-email.php' );


 function dd_contact_form_shortcode() {
  ob_start();
  dd_deliver_mail();
  html_form_code();

  return ob_get_clean();
 }

 add_shortcode( 'digitaldecor_contact_form', 'dd_contact_form_shortcode' );

 ?>