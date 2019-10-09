<!--
  Template Name: Dealers page
-->
<?php get_header(); ?>
<?php
if (have_posts()) {
  while(have_posts()) {
    the_post();
?>
<div class="dealers">
  <div class="hero p-5 mt-4">
    <?php if(get_field('dealers_hero_icon')) { ?>
      <style>
        .hero::before {
          background-image: url("<?php echo get_field('dealers_hero_icon') ?> ");
        }
      </style>
    <?php } ?>
    <?php if(get_field('dealers_hero_image')) { ?>
      <style>
        .hero {
          background-image: url("<?php echo get_field('dealers_hero_image'); ?> ");
        }
      </style>
    <?php } ?>
    <style>
      .hero_pink_title {
        color: #ff1c64;
        margin-bottom: 0;
      }
    </style>
    <?php if(get_field('hero_pink_title')) { ?>
      <h3 class="hero_pink_title">
        <?php echo get_field('hero_pink_title'); ?>
      </h3>
    <?php } ?>
    <?php if(get_field('hero_black_title')) { ?>
      <h3>
        <?php echo get_field('hero_black_title'); ?>
      </h3>
      <br>
    <?php } ?>
    <div class="signup">
      <h5>
        <?php if(get_field('hero_content_title'))
        { echo get_field('hero_content_title'); }
        ?>
      </h5>
      <?php
        if(get_field('hero_content')) {
         echo get_field('hero_content'); }
      ?>
      <a href="#" class="btn-signup">
        <?php if(get_field('hero_submit_button'))
          { echo get_field('hero_submit_button'); }
        ?>
      </a>
    </div>
    </div>
    <div class="join">
      <?php if(get_field('benefits_icon')) { ?>
        <style>
          .join::after {
            background-image: url("<?php echo get_field('benefits_icon') ?> ");
          }
        </style>
      <?php } ?>


      <?php if(get_field('benefits_title')) { ?>
        <h5><?php echo  get_field('benefits_title'); ?></h5>
      <?php } ?>

      <?php if(get_field('benefits_text'))
        { echo get_field('benefits_text'); }
      ?>

    </div>
    <div class="dealers-footer my-5 text-center">
      <div class="container h-100 text-left">
        <h4 class="ml-4">
          <?php if(get_field('vehicle_types_title')) {
            echo get_field('vehicle_types_title'); }
          ?>
        </h4>
        <div class="row d-fles justify-content-center mt-4">
          <?php if(get_field('vehicle_icon_1') OR get_field('vehicle_name_1')) { ?>
            <h5 class="types t1 col-6 col-sm-4 col-lg-2"></h5>
            <style>
            .dealers-footer h5.t1:before {
              background-image: url('<?php echo get_field('vehicle_icon_1'); ?>') ;
              content:"<?php echo get_field('vehicle_name_1'); ?>";
            }
            </style>
          <?php } ?>
          <?php if(get_field('vehicle_icon_2') OR get_field('vehicle_name_2')) { ?>
            <h5 class="types t2 col-6 col-sm-4 col-lg-2"></h5>
            <style>
            .dealers-footer h5.t2:before {
              background-image: url('<?php echo get_field('vehicle_icon_2'); ?>') ;
              content:"<?php echo get_field('vehicle_name_2'); ?>";
            }
            </style>
          <?php } ?>
          <?php if(get_field('vehicle_icon_3') OR get_field('vehicle_name_3')) { ?>
            <h5 class="types t3 col-6 col-sm-4 col-lg-2"></h5>
            <style>
            .dealers-footer h5.t3:before {
              background-image: url('<?php echo get_field('vehicle_icon_3'); ?>') ;
              content:"<?php echo get_field('vehicle_name_3'); ?>";
            }
            </style>
          <?php } ?>
          <?php if(get_field('vehicle_icon_4') OR get_field('vehicle_name_4')) { ?>
            <h5 class="types t4 col-6 col-sm-6 col-lg-2"></h5>
            <style>
            .dealers-footer h5.t4:before {
              background-image: url('<?php echo get_field('vehicle_icon_4'); ?>') ;
              content:"<?php echo get_field('vehicle_name_4'); ?>";
            }
            </style>
          <?php } ?>
          <?php if(get_field('vehicle_icon_5') OR get_field('vehicle_name_5')) { ?>
            <h5 class="types t5 col-6 col-sm-6 col-lg-2"></h5>
            <style>
            .dealers-footer h5.t5:before {
              background-image: url('<?php echo get_field('vehicle_icon_5'); ?>') ;
              content:"<?php echo get_field('vehicle_name_5'); ?>";
            }
            </style>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<?php
  }
}
?>
<?php get_footer(); ?>
