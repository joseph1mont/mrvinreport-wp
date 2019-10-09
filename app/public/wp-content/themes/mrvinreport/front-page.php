<?php get_header(); ?>
<?php
if (have_posts()) {
  while(have_posts()) {
    the_post();
  }
}
?>
<div class="jumbotron d-flex">
  <div class="container">
    <div class="row text-center">
      <!-- For small screens -->
      <?php if( get_field('hero_image')) { ?>
        <div class="jumbotron-text_mobile col-md-6">
        <?php } else { ?>
          <div class="jumbotron-text_mobile col-12 mb-5">
        <?php } ?>
        <?php if(get_field('hero_text_line_1')) { ?>
          <h3 class="m-0"><?php echo get_field('hero_text_line_1'); ?></h3>
        <?php } ?>
        <?php if(get_field('hero_text_line_2')) { ?>
          <h2 class="m-0"><?php echo get_field('hero_text_line_2'); ?></h2>
        <?php } ?>
        <?php if(get_field('hero_text_line_3')) { ?>
          <p class="m-0"><?php echo get_field('hero_text_line_3'); ?></p>
        <?php } ?>
      </div>
      <!-- For md screens -->
      <?php if( get_field('hero_image')) { ?>
        <div class="jumbotron-text_md col-md-6">
      <?php } else { ?>
        <div class="jumbotron-text_md col-12  mb-5">
      <?php } ?>
        <?php if(get_field('hero_text_line_1')) { ?>
          <h2 class="m-0"><?php echo get_field('hero_text_line_1'); ?></h2>
        <?php } ?>
        <?php if(get_field('hero_text_line_2')) { ?>
          <h1 class="m-0"><?php echo get_field('hero_text_line_2'); ?></h1>
        <?php } ?>
        <?php if(get_field('hero_text_line_2')) { ?>
          <p class="m-0"><?php echo get_field('hero_text_line_3'); ?></p>
        <?php } ?>      </div>
      <div class="jumbotron-image col-md-6 align-self-center">
        <?php if( get_field('hero_image')): ?>
	         <img src="<?php the_field('hero_image'); ?>" alt="hero image" />
         <?php endif; ?>
      </div>
    </div>
    <div class="text-center mt-2 mt-sm-5">
      <h3 class="form-title">
        <?php if(get_field('check_vin_title')) {
          echo get_field('check_vin_title'); }
        ?>
      </h3>
      <div class="form-group__Header">
        <form>
          <div class="form-group__Header-item row">
            <label for="inputEmail3" class="col-2 col-form-label text-left">Email </label>
            <div class="col-10">
              <input type="email" class="quote-form__item" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group__Header-item row">
            <label for="inputvin3" class="col-2 col-form-label text-left">VIN </label>
            <div class="col-10">
              <input type="text" class="quote-form__item" id="inputvin3" placeholder="">
            </div>
          </div>
          <div class="form-group__Header-button my-3 row">
            <div class="col-sm-12">
              <button type="submit" class="get-report-btn btn">
                <?php if(get_field('get_report_botton')) {
                  echo get_field('get_report_botton'); }
                ?>
              </button>
            </div>
          </div>
        </form>
        <p class="where-link1"><a href="#" id="myBtn1" onclick="openForm()">
          <?php if(get_field('where_my_vin_link')) {
            echo get_field('where_my_vin_link'); }
          ?>
        </a></p>
        <!-- The Modal -->
        <div id="myModal1" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close" onclick="closeForm()">&times;</span>
            <h3>
              <?php if(get_field('vin_popup_title')) {
                echo get_field('vin_popup_title'); }
              ?>
            </h3>
            <hr>
            <p>
              <?php if(get_field('vin_popup_text')) {
                echo get_field('vin_popup_text'); }
              ?>
            </p>
            <div class="row">
              <div class="modal-content__image col-12 col-sm-6">
                <?php
                  $popup_image = get_field('vin_popup_image');

                  if ($popup_image): ?>
                  <style type="text/css">
                    .modal-content__image {
                      background-image: url(<?php echo $popup_image; ?> );
                    }
                  </style>
                <?php endif; ?>
              </div>
              <div class="col-12 col-sm-6">
                <p>
                  <?php if(get_field('vin_popup_list')) {
                    echo get_field('vin_popup_list'); }
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="why-choose-us">
  <div class="container">
    <h3 class="text-center">
      <?php if(get_field('about_us_title')) {
        echo get_field('about_us_title'); }
      ?>
    </h3>
    <div class="row">
      <?php if(get_field('about_us_fixed_car_image') AND get_field('about_us_broken_car_image')) {  ?>
        <div class="why-choose-us__icons-area col-lg-6">
        <?php } else { ?>
          <div class="why-choose-us__icons-area col-12">
        <?php } ?>
        <div class="why-choose-us__item why-choose-us__item1">
          <p>
            <?php if (get_field('about_us_text')) {
              echo get_field('about_us_text'); }
            ?>
          </p>
        </div>
      </div>
      <?php if(get_field('about_us_fixed_car_image') AND get_field('about_us_broken_car_image')) {  ?>
      <div class="why-choose-us__image col-lg-6">
        <div class="img-comp-container">
          <div class="img-comp-img">
                <img src="<?php echo get_field('about_us_fixed_car_image') ?>" alt="fixed car" />
          </div>
          <div class="img-comp-img img-comp-overlay">
              <img src="<?php echo get_field('about_us_broken_car_image')?>" alt="broken car" />
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<section class="section-one m-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>
          <?php if(get_field('report_details_title')) {
            echo (get_field('report_details_title')); }
          ?>
          <span>
            <div id="checksFor-1" class="quotes">
              <?php if(get_field('fadein_text_1')) {
                echo (get_field('fadein_text_1')); }
              ?>
            </div>
            <div id="checksFor-2" class="quotes">
              <?php if(get_field('fadein_text_2')) {
                echo (get_field('fadein_text_2')); }
              ?>
            </div>
            <div id="checksFor-3" class="quotes">
              <?php if(get_field('fadein_text_3')) {
                echo (get_field('fadein_text_3')); }
              ?>
            </div>
            <div id="checksFor-4" class="quotes">
              <?php if(get_field('fadein_text_4')) {
                echo (get_field('fadein_text_4')); }
              ?>
            </div>
            <div id="checksFor-5" class="quotes">
              <?php if(get_field('fadein_text_5')) {
                echo (get_field('fadein_text_5')); }
              ?>
            </div>
            <div id="checksFor-6" class="quotes">
              <?php if(get_field('fadein_text_6')) {
                echo (get_field('fadein_text_6')); }
              ?>
            </div>
            <div id="checksFor-7" class="quotes">
              <?php if(get_field('fadein_text_7')) {
                echo (get_field('fadein_text_7')); }
              ?>
            </div>
            <div id="checksFor-8" class="quotes">
              <?php if(get_field('fadein_text_8')) {
                echo (get_field('fadein_text_8')); }
              ?>
            </div>
          </span>
        </h3>
        <div class="section-one__list mt-4">
          <h7>
            <?php if(get_field('report_details_list')) {
              echo (get_field('report_details_list')); }
            ?>
          </h7>
        </div>
      </div>
      <div class="col-md-7 mt-5">
        <?php if(get_field('report_details_image')) { ?>
          <img src="<?php echo get_field('report_details_image')?>" alt="report image" />
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<section class="how-it-works text-center">
  <div class="container">
    <h3>
      <?php if(get_field('how_it_works_title')) {
        echo (get_field('how_it_works_title')); }
      ?>
    </h3>
    <div class="row d-flex justify-content-center">
    <?php if(get_field('how_it_works_icon_1') AND get_field('how_it_works_title_1') AND get_field('how_it_works_text_1')) { ?>
    <div class="how-it-works__item how-it-works__item1 col-12 col-lg-4">
      <style>
      .how-it-works__item1::before {
        background-image: <?php get_field('how_it_works_icon_1') ?> no-repeat;
      }
      </style>
      <h4>
        <?php echo get_field('how_it_works_title_1'); ?>
      </h4>
      <p>
        <?php echo get_field('how_it_works_text_1'); ?>
      </p>
    </div>
    <?php } ?>

    <?php if(get_field('how_it_works_icon_2') AND get_field('how_it_works_title_2') AND get_field('how_it_works_text_2')) { ?>
    <div class="how-it-works__item how-it-works__item1 col-12 col-lg-4">
      <style>
      .how-it-works__item1::before {
        background-image: <?php get_field('how_it_works_icon_2') ?> no-repeat;
      }
      </style>
      <h4>
        <?php echo get_field('how_it_works_title_2'); ?>
      </h4>
      <p>
        <?php echo get_field('how_it_works_text_2'); ?>
      </p>
    </div>
    <?php } ?>

    <?php if(get_field('how_it_works_icon_3') AND get_field('how_it_works_title_3') AND get_field('how_it_works_text_3')) { ?>
    <div class="how-it-works__item how-it-works__item1 col-12 col-lg-4">
      <style>
      .how-it-works__item1::before {
        background-image: <?php get_field('how_it_works_icon_3') ?> no-repeat;
      }
      </style>
      <h4>
        <?php echo get_field('how_it_works_title_3'); ?>
      </h4>
      <p>
        <?php echo get_field('how_it_works_text_3'); ?>
      </p>
    </div>
    <?php } ?>
  </div>
  </div>
</section>
<section class="report mt-5">
  <h3 class="text-center">
    <?php if(get_field('what_report_include_title')) {
      echo get_field('what_report_include_title'); }
    ?>
  </h3>
  <div class="container">
    <div class="row">
      <div class="report-left col-md-5">
        <h3 class="text-center">
          <?php if(get_field('what_report_include_left_title')) {
            echo get_field('what_report_include_left_title'); }
          ?>
        </h3>
        <p>
          <?php if(get_field('what_report_include_left_text')) {
            echo get_field('what_report_include_left_text'); }
          ?>
        </p>
        <?php if(get_field('what_report_include_left_list')) {
          echo get_field('what_report_include_left_list'); } ?>
      </div>
      <div class="report-right col-md-7">
        </div>
      </div>
    </div>
</section>
<section class="how-it-works text-center">
    <h3>
      <?php if(get_field('why_needed_title')) {
        echo get_field('why_needed_title'); }
      ?>
    </h3>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <?php if(get_field('why_needed_title_1') AND get_field('why_needed_text_1')) { ?>
        <div class="services__item services__item1 col-12 col-md-3">
          <h5 class="mt-4">
            <?php  echo get_field('why_needed_title_1'); ?>
          </h5>
          <p>
            <?php echo get_field('why_needed_text_1'); ?>
          </p>
        </div>
        <?php } ?>
        <?php if(get_field('why_needed_title_2') AND get_field('why_needed_text_2')) { ?>
        <div class="services__item services__item2 col-12 col-md-3">
          <h5 class="mt-4">
            <?php  echo get_field('why_needed_title_2'); ?>
          </h5>
          <p>
            <?php echo get_field('why_needed_text_2'); ?>
          </p>
        </div>
      <?php } ?>
      <?php if(get_field('why_needed_title_3') AND get_field('why_needed_text_3')) { ?>
        <div class="services__item services__item3 col-12 col-md-3">
          <h5 class="mt-4">
            <?php  echo get_field('why_needed_title_3'); ?>
          </h5>
          <p>
            <?php echo get_field('why_needed_text_3'); ?>
          </p>
        </div>
      <?php } ?>
      <?php if(get_field('why_needed_title_4') AND get_field('why_needed_text_4')) { ?>
        <div class="services__item services__item4 col-12 col-md-3">
          <h5 class="mt-4">
            <?php  echo get_field('why_needed_title_4'); ?>
          </h5>
          <p>
            <?php echo get_field('why_needed_text_4'); ?>
          </p>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<section class="faq mt-5">
  <div class="container">
    <div class="row">
      <div class="faq__left col-md-6">
        <h3 class="text-center">
          <?php if(get_field('faq_title')) {
            echo get_field('faq_title'); }
          ?>
        </h3>
        <div class="md-form">
          <div class="faq-text__left">
            <div id="accordion">
              <?php if(get_field('faq_title_1') AND get_field('faq_text_1')) { ?>
                <div class="card">
                  <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                      <?php  echo get_field('faq_title_1'); ?>
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                      <P>
                        <?php echo get_field('faq_text_1'); ?>
                      </p>
                    </div>
                  </div>
              </div>
              <?php } ?>
              <?php if(get_field('faq_title_2') AND get_field('faq_text_2')) { ?>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                      <?php  echo get_field('faq_title_2'); ?>
                    </a>
                  </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>
                      <?php echo get_field('faq_text_2'); ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php } ?>
              <?php if(get_field('faq_title_3') AND get_field('faq_text_3')) { ?>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                      <?php  echo get_field('faq_title_3'); ?>
                    </a>
                  </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>
                      <?php echo get_field('faq_text_3'); ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php } ?>
              <?php if(get_field('faq_title_4') AND get_field('faq_text_4')) { ?>
              <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                      <?php  echo get_field('faq_title_4'); ?>
                    </a>
                  </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>
                      <?php echo get_field('faq_text_4'); ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php } ?>
              <?php if(get_field('faq_title_5') AND get_field('faq_text_5')) { ?>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                      <?php  echo get_field('faq_title_5'); ?>
                    </a>
                  </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>
                      <?php echo get_field('faq_text_5'); ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Get The History Today -->
      <div class="faq__right text-center col-md-6">
        <div class="quote">
          <h3 class="text-center ">
            <?php if(get_field('get_your_report_title')) {
              echo get_field('get_your_report_title'); }
            ?>
          </h3>
          <P class="mx-5">
            <?php if(get_field('get_your_report_text')) {
              echo get_field('get_your_report_text'); }
            ?>
          </P>
          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label text-left">Email </label>
              <div class="col-sm-10">
                <input type="email" class="quote-form__item" id="inputEmail3" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputvin3" class="col-sm-2 col-form-label text-left">VIN </label>
              <div class="col-sm-10">
                <input type="text" class="quote-form__item" id="inputvin3" placeholder="">
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <?php if(get_field('get_your_report_input_label_1')) { ?>
                    <div class="form-check text-left ml-2">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1 Report" checked>
                      <label class="form-check-label" for="gridRadios1">
                          <?php echo get_field('get_your_report_input_label_1'); ?>
                      </label>
                    </div>
                  <?php } ?>
                  <?php if(get_field('get_your_report_input_label_2')) { ?>
                    <div class="form-check text-left ml-2">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2 Reports">
                      <label class="form-check-label" for="gridRadios2">
                        <?php echo get_field('get_your_report_input_label_2'); ?>
                      </label>
                    </div>
                  <?php } ?>
                  <?php if(get_field('get_your_report_input_label_3')) { ?>
                    <div class="form-check text-left ml-2">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3 Reports">
                      <label class="form-check-label" for="gridRadios3">
                        <?php echo get_field('get_your_report_input_label_3'); ?>
                      </label>
                    </div>
                  <?php } ?>
                  <?php if(get_field('get_your_multiple_reports_link') AND ('get_your_multiple_reports_link_text')) { ?>
                    <div class="form-check text-left ml-2">
                        <a href="<?php echo get_field('get_your_multiple_reports_link'); ?>">
                          <?php echo get_field('get_your_multiple_reports_link_text'); ?>
                        </a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    <p>
                      <?php if(get_field('get_your_report_checkbox')) {
                        echo get_field('get_your_report_checkbox'); }
                      ?>
                    </p>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <button type="submit" class="get-report-btn btn">
                  <?php if(get_field('get_your_report_submit_button')) {
                    echo get_field('get_your_report_submit_button'); }
                  ?>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- testimonial section-->
<section class="our-customers text-center">
  <div class="container">
    <h3 class="text-center m-5">
      <?php if(get_field('customer_reviews_title')) {
        echo get_field('customer_reviews_title'); }
      ?>
    </h3>
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
              <?php if(get_field('customer_review_1') AND get_field('customer_name_1')) { ?>
                <div class="testimonial">
                    <p class="testimonial-description">
                      <?php echo get_field('customer_review_1'); ?>
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">
                          <?php echo get_field('customer_name_1'); ?>
                        </h5>
                    </div>
                </div>
              <?php } ?>
              <?php if(get_field('customer_review_2') AND get_field('customer_name_2')) { ?>
                <div class="testimonial">
                    <p class="testimonial-description">
                      <?php echo get_field('customer_review_2'); ?>
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">
                          <?php echo get_field('customer_name_2'); ?>
                        </h5>
                    </div>
                </div>
              <?php } ?>
              <?php if(get_field('customer_review_3') AND get_field('customer_name_3')) { ?>
                <div class="testimonial">
                    <p class="testimonial-description">
                      <?php echo get_field('customer_review_3'); ?>
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">
                          <?php echo get_field('customer_name_3'); ?>
                        </h5>
                    </div>
                </div>
              <?php } ?>
              <?php if(get_field('customer_review_4') AND get_field('customer_name_4')) { ?>
                <div class="testimonial">
                    <p class="testimonial-description">
                      <?php echo get_field('customer_review_4'); ?>
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">
                          <?php echo get_field('customer_name_4'); ?>
                        </h5>
                    </div>
                </div>
              <?php } ?>
              <?php if(get_field('customer_review_5') AND get_field('customer_name_5')) { ?>
                <div class="testimonial">
                    <p class="testimonial-description">
                      <?php echo get_field('customer_review_5'); ?>
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">
                          <?php echo get_field('customer_name_5'); ?>
                        </h5>
                    </div>
                </div>
              <?php } ?>
              <?php if(get_field('customer_review_6') AND get_field('customer_name_6')) { ?>
                <div class="testimonial">
                    <p class="testimonial-description">
                      <?php echo get_field('customer_review_6'); ?>
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">
                          <?php echo get_field('customer_name_6'); ?>
                        </h5>
                    </div>
                </div>
              <?php } ?>

            </div>
        </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
