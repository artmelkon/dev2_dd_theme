<?php
/**
 *  The template to process contact form
 */

function dd_deliver_mail() {
  // check if the form submitted
  if( isset( $_POST[ 'cf-submitted' ] ) ) {
    // sanitize from entires
    $name     = sanitize_text_field( $_POST[ 'cf-name' ] );
    $email    = sanitize_email( $_POST[ 'cf-email' ] );
    $subject  = sanitize_text_field( $_POST[ 'cf-subject' ] );
    $message  = esc_textarea( $_POST[ 'cf-message' ] );

    // destination email address
    // $to = 'info@digitaldecor.com';
    $to = "artmelkon@yahoo.com";
    $headers = "From: $name <$email>" . "\r\n";

    // Display Success page after form has been sent
    if( wp_mail( $to, $subject, $message, $headers ) ) {
      ?>
        <div class="text-center border-1 border-dark">
          <h2>Thank you for contacting us, we will get back to you promptly</h2>
        </div>
        <script>
          jQuery( function() {
            jQuery('#contact-form').hide();
          });
          </script>
      <?php } else { ?>
          <p class="text-center">An unexpected error occurred!</p>
          <script>
          jQuery( function() {
            jQuery('#contact-form').hide();
          });
          </script>
      <?php
    }
  }
 }
