<!--
  Template Name: Why Choose Us
-->
<?php get_header(); ?>
<?php
if (have_posts()) {
   while(have_posts()) {
     the_post();
?>
<div class="why-us">
  <div class="container">
    <?php if(get_field('why_us_header_title')) { ?>
      <h2><?php echo get_field('why_us_header_title'); ?></h2>
    <?php } ?>

    <?php if(get_field('why_us_header_icon')) { ?>
      <style>
        .why-us h2::before {
          background-image: url("<?php echo get_field('why_us_header_icon'); ?>");
        }
      </style>
    <?php } ?>

    <div class="hero p-4 mt-4">
        <div class="row">
          <?php if(get_field('why_us_hero_text')) { ?>
            <div class="col-12 col-md-6 mt-4">
              <p> <?php echo get_field('why_us_hero_text'); ?></p>
            </div>
          <?php } ?>

          <?php if(get_field('why_us_hero_image')) { ?>
            <div class="hero-right-img col-12 col-md-6">
              <img src="<?php echo get_field('why_us_image'); ?>" class="img-fluid" alt="why Choose Us">
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container">
          <?php if(get_field('why_us_jumbotron_text')) { ?>
            <p><?php echo get_field('why_us_jumbotron_text'); ?></p>
          <?php } ?>
      </div>
    </div>
    <div class="compare">
      <div class="container">
        <?php if(get_field('compare_with_carfax_title')) { ?>
          <h3><?php echo get_field('compare_with_carfax_title'); ?></h3>
        <?php } ?>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  <?php if(get_field('compare_header_column_1')) {
                    echo get_field('compare_header_column_1');
                  } ?>
                </th>
                <?php if(get_field('compare_header_column_2')) { ?>
                  <th><img src="<?php echo get_field('compare_header_column_2'); ?>" class="table-header-logo" alt="logo"</th>
                <?php } ?>
                <?php if(get_field('compare_header_column_3')) { ?>
                  <th><?php echo get_field('compare_header_column_3'); ?></th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Low cost, comprehensive Vehicle History and Title Report</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>U.S. Department of Justice title data through NMVTIS	</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>Virtually real-time title status matches DMV records	</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>Open Lien/Loan information including issuing financial institution</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>Expanded open recall data: recall severity, parts availability, repair costs, reimbursement & more</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>Seizure, impound and towing data</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>Up to 24 vehicle specifications and optional window sticker with factory build information</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>Exclusive sales history including historical "FOR SALE" listing records from select vehicle listing sites</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>No monthly fees, subscriptions or hidden costs!</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>Store and review reports for 90 days</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
              <tr>
                <td>Unique sources for active and recovered theft vehicles</td>
                <td class="check-icon checked-icon"></td>
                <td class="check-icon unchecked-icon"></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
</div>
<?php
   }
 }
 ?>
<?php get_footer(); ?>
