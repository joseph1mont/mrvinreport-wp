<!--
  Template Name: Contact Us page
-->
<?php get_header(); ?>
<?php
if (have_posts()) {
  while(have_posts()) {
    the_post();
?>
    <div class="contact-us">
      <div class="hero p-5 mt-4">
        <div class="container">
          <h2>Contact <span>Us</span></h2>
        </div>
      </div>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 mb-5">
          <form id="contact-form" method="post" action="contact.php" role="form">
                  <div class="messages"></div>
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="Name *" required="required" data-error="Firstname is required.">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone">
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                          <textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="8" required="required" data-error="Please,leave us a message."></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-send" value="Send message">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-12 col-md-6 mb-5">
                <div class="row">
                  <div class="contact-info col-12 p-4">
                    <div class="row">
                      <?php if(get_field('phone')) { ?>
                        <a class="phone col-12" href="callto:8004514846"><?php echo get_field('phone'); ?></a>
                      <?php } ?>
                      <?php if(get_field('email')) { ?>
                        <a class="email col-12 pt-2" href="mailto:sales@usedautoreports.com"><?php echo get_field('email'); ?></a>
                      <?php } ?>
                      <?php if(get_field('address_1')) { ?>
                        <a class="location col-12 pt-2" href="#"><?php echo get_field('address_1'); ?></a>
                      <?php } ?>
                      <?php if(get_field('address_2')) { ?>
                        <a class="col-12 ml-4" href="#"><?php echo get_field('address_2'); ?></a>
                      <?php } ?>
                      <?php if(get_field('map')) { ?>
                        <a class="GoogleMap col-12 pt-2" href="#"><img src="<?php echo get_field('map'); ?>" alt="google map"></a>
                      <?php } ?>
                    </div>
                  </div>
                  <?php if(get_field('support_text')) { ?>
                    <div class="col-12">
                      <div class="support24-7"><h1 class=""><?php echo get_field('support_text'); ?></h1></div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
  }
}
?>
<?php get_footer(); ?>
