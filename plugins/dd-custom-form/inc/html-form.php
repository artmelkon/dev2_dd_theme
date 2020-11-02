<?php
/**
 * The template to display contact form
 */

function html_form_code() {
   ?>
    <div class="col-12 col-sm-6 offset-md-3">
      <form action="<?php esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" id="contact-form">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa fa-user"></i>
            </span>
          </div>
          <input class="form-control" type="text" name="cf-name" value="<?php echo ( isset( $_POST[ 'cf-name' ]) ? esc_attr( $_POST[ 'cf-name' ] ) : '' ); ?>" placeholder="Your Name" pattern="[a-zA-Z0-9 ]+" />
        </div>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa fa-envelope" style="font-size:13px"></i>
            </span>
          </div>
          <input class="form-control" type="email" name="cf-email" value="<?php echo ( isset( $_POST[ 'cf-email' ] ) ? esc_attr( $_POST[ 'cf-email' ] ) : '' ); ?>" placeholder="Your Email" />
        </div>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">
            <i class="fa fa-pencil"></i>
            </span>
          </div>
          <input class="form-control" type="text" name="cf-subject" value="<?php echo ( isset( $_POST[ 'cf-subject' ] ) ? esc_attr( $_POST[ 'cf-subject' ] ) : '' ); ?>" placeholder="Subject" pattern="[a-zA-Z ]+" />
        </div>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa fa-file-text"></i>
            </span>
          </div>
          <textarea class="form-control" name="cf-message" cols="30" rows="5" placeholder="Your message here...."><?php echo ( isset( $_POST[ 'cf-message' ] ) ? esc_attr( $_POST[ 'cf-message' ] ) : '' ); ?></textarea>
        </div>
          <input type="submit" value="Send Away" class="btn btn-primary btn-block" name="cf-submitted" />
      </form>
    </div>
   <?php
 }
