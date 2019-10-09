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
      <div class="jumbotron-text_mobile col-md-6">
        <h3 class="m-0">CHECK YOUR</h3>
        <h2 class="m-0">VEHICLE TODAY</h2>
        <p class="m-0">A car's history affects its value!</p>
      </div>
      <!-- For md screens -->
      <div class="jumbotron-text_md col-md-6">
        <h2 class="m-0">CHECK YOUR</h2>
        <h1 class="m-0">VEHICLE TODAY</h1>
        <p class="m-0">A car's history affects its value!</p>
      </div>
      <div class="jumbotron-image col-md-6 align-self-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/heroImage.png" alt="our service" class="our-services__image">
      </div>
    </div>
    <div class="text-center mt-2 mt-sm-5">
      <h3 class="form-title">Check <span>VIN Here</span></h3>
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
              <button type="submit" class="get-report-btn btn">Get Your Report</button>
            </div>
          </div>
        </form>
        <p class="where-link1"><a href="#" id="myBtn1" onclick="openForm()">Where can I find my VIN?</a></p>
        <!-- The Modal -->
        <div id="myModal1" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close" onclick="closeForm()">&times;</span>
            <h3>WHERE CAN I FIND <span>MY VIN?</span></h3>
            <hr>
            <p>Your vehicle's unique Vehicle identification Number (VIN) can be found on the title document, the vehicle registration, and on the insurance policy. The VIN can also be located on the following locations on the car itself:</p>
            <div class="row">
              <div class="modal-content__image col-12 col-sm-6">
                <!-- <img src="./images/VinImage.png" alt="VIN Check"> -->
              </div>
              <div class="col-12 col-sm-6">
                <ul>
                  <li>
                    <p>On the driver's side dashboard</p>
                    <p>(viewable trough the windshield)</p>
                  </li>
                  <li>
                    <p>On the driver's side dashboard</p>
                    <p>(on a sticker in the door jamb)</p>
                  </li>
                </ul>
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
    <h3 class="text-center">About <span>US</span></h3>
    <div class="row">
      <div class="why-choose-us__icons-area col-lg-6">
        <div class="why-choose-us__item why-choose-us__item1">
          <p>Verify My Vin is a leading vehicle history report provider with unique and extensive data not found in other history reports such as CARFAX® or AutoCheck®.  Data is sourced in virtual real-time which provides the most up-to-date events. Data sources include U.S. Department of Justice, law enforcement, state DMVs and commercial and private sources. Verify My Vin is an authorized NMVTIS Consumer Access Provider (National Motor Vehicle Title Information System). Try our free VIN Check service to verify your VIN decode. These free car facts will help stop VIN cloning and title washing.</p>
        </div>
      </div>
      <div class="why-choose-us__image col-lg-6">
        <div class="img-comp-container">
          <div class="img-comp-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/New_Car.png">
          </div>
          <div class="img-comp-img img-comp-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Broken_Car.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-one m-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>Each report checks for
          <span>
            <div id="checksFor-1" class="quotes">accident history.</div>
            <div id="checksFor-2" class="quotes">theft & vandalism.</div>
            <div id="checksFor-3" class="quotes">insurance total loss.</div>
            <div id="checksFor-4" class="quotes">lien status.</div>
            <div id="checksFor-5" class="quotes">mileage records.</div>
            <div id="checksFor-6" class="quotes">service history.</div>
            <div id="checksFor-7" class="quotes">recall status.</div>
            <div id="checksFor-8" class="quotes">number of owners.</div>
          </span>
        </h3>
        <div class="section-one__list mt-4"><h7>Verify My Vin report is a fully comprehensive vehicle check, arming you with vital information about the car you want to buy or sell.</h7></div>
        <div class="section-one__list mt-4"><h7>Verify My VIN uses cutting edge technology to ensure you get accurate and up-to-date information. Every check verifies records from DMV, NMVTIS, Auction, State, Police, Insurance records and more. Every report contains over 60 checks.</h7></div>
        <div class="section-one__list mt-4"><h7>We have a dedicated team of experts available 7 days a week to assist you with any questions you may have. 100% Satisfaction Guaranteed or we'll refund your full payment.</h7></div>
      </div>
      <div class="col-md-7 mt-5">
        <img src="<?php echo get_template_directory_uri(); ?>/images/report.png" alt="section one">
      </div>
    </div>
  </div>
</section>
<section class="how-it-works text-center">
  <div class="container">
    <h3>How It <span>Works?</span></h3>
    <div class="row">
    <div class="how-it-works__item how-it-works__item1 col-12 col-lg-4">
      <h4>01. Enter <span>VIN</span></h4>
      <p>Enter your 17 character VIN Number off the vehicle. This information is found on the vehicles title or insurance papers.</p>
    </div>
    <div class="how-it-works__item how-it-works__item2 col-12 col-lg-4">
      <h4>02. VIN <span>Lookup</span></h4>
      <p>Choose a report package and make the payment. Upon successful payment you are redirected back to your account.</p>
    </div>
    <div class="how-it-works__item how-it-works__item3 col-12 col-lg-4">
      <h4>03. View the <span>History Report</span></h4>
      <p>Congratulations! The history report is available and copy has been sent to your email address. You can now download and print the report.</p>
    </div>
  </div>
  </div>
</section>
<section class="report mt-5">
  <h3 class="text-center">What Will My Vehicle Report <span>Include</span></h3>
  <div class="container">
    <div class="row">
      <div class="report-left col-md-5">
        <h3 class="text-center">This Report <span>Contains?</span></h3>
        <p>
          Detailed report about any used vehicle, simply enter the vehicle’s VIN number; as soon as the VIN number is entered, the user will get a detailed history report of the requested vehicle.This data has been consolidated from multiple authoritative sources with data that is updated in real time such as.
        </p>
        <ul>
          <li>Mileage Rollback</li>
          <li>Rebuilt/Branded Title</li>
          <li>Leans</li>
          <li>Registered Address</li>
          <li>Salvage History</li>
          <li>Lease, Taxi, Government Use</li>
        </ul>
      </div>
      <div class="report-right col-md-7">
        </div>
      </div>
    </div>
</section>

<section class="how-it-works text-center">
    <h3>Why You Need A Verify <span>My Vin Check?</span></h3>
    <div class="container">
      <div class="row">
        <div class="services__item services__item1 col-12 col-md-3">
          <h5 class="mt-4">A hidden Past<span>?</span></h5>
          <p>20% off vehicles that pass through our vehicle report service has something to hide. From an insurance write-off to a mileage discrepancy.</p>
        </div>
        <div class="services__item services__item2 col-12 col-md-3">
          <h5 class="mt-4">Rightful Owner<span>?</span></h5>
          <p>1 out of every 5 vehicles we check have an active finance agreement or loan against it and more than 75 per day are identified as stolen.</p>
        </div>
        <div class="services__item services__item3 col-12 col-md-3">
          <h5 class="mt-4">Accidents <span>& </span>Claims<span>?</span></h5>
          <p>On average 15% off the vehicles that pass through our service have had an accident or has claims filed.</p>
        </div>
        <div class="services__item services__item4 col-12 col-md-3">
          <h5 class="mt-4">Clocked<span>?</span></h5>
          <p>1 in 8 vehicles we verify has a discrepancy with its mileage meaning it may have been clocked.</p>
        </div>
      </div>
  </div>
</section>
<section class="faq mt-5">
  <div class="container">
    <div class="row">
      <div class="faq__left col-md-6">
        <h3 class="text-center">Frequently Asked Questions - <span>FAQ</span></h3>
        <div class="md-form">
          <div class="faq-text__left">
            <div id="accordion">
              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    What is a Verify My VIN History Report?
                  </a>
                </div>
                <div id="collapseOne" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>A vehicle history report contains a range of information on a car, including previous owners, odometer readings, open recalls and damage, accidents or repairs. Our reports are designed to provide our customers with comprehensive vehicle specifications and history throughout  North America.</P>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    Does VerifyMyVIN have a report for every vehicle?
                  </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>Verify My VIN Reports are available for ALL vehicles manufactured since 1981, when the 17-character VIN was standardized. There are some cases where we are able to retrieve data on vehicles older than 1981. Please speak with a customer service agent (live chat or by phone) to see if we can assist. You can look up trucks, cars, RVs, motor homes, trailers and more!</P>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link align-middle" data-toggle="collapse" href="#collapseThree">
                    What is a VIN?
                  </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>VIN stands for Vehicle Identification Number. A VIN consists of 17 characters and serves as a unique identifier for a specific vehicle. At Verify My Vin, you can use either a VIN or a license plate and state to get a Verify My Vin History Report.</P>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link align-middle" data-toggle="collapse" href="#collapseFour">
                    Where is my VIN located?
                  </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>A VIN can often be found on the driver-side door, near where the door latches as well as on the lower-left hand corner of the dashboard, in front of the steering wheel on the windshield. If you own the vehicle, you can find it on the title, registration card or insurance documents. If you need assistance connect with us on live chat or toll free.</P>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link align-middle" data-toggle="collapse" href="#collapseFive">
                    Who is a Vehicle History Report for?
                  </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <P>Verify My Vin History Report can be used by anyone who wants to check the history of a used vehicle. You may use a Verify My Vin Report to check the history of a car you’re about to buy, or a car you own that you’d like to sell to a private party. Shoppers feel more confident buying a used car once they know its history. Increase your chance of selling a vehicle by 23% by showing your buyers a vehicle history report.</P>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Get The History Today -->
      <div class="faq__right text-center col-md-6">
        <div class="quote">
          <h3 class="text-center ">Get The History <span>Today</span></h3>
          <P class="mx-5">
            We adjusted our prices by as much as 85%, because you shouldn’t have to pay more for reliable information.
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
                  <div class="form-check text-left ml-2">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1 Report" checked>
                    <label class="form-check-label" for="gridRadios1">
                      5 premium vehicle history report $60
                    </label>
                  </div>
                  <div class="form-check text-left ml-2">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2 Reports">
                    <label class="form-check-label" for="gridRadios2">
                      1 premium vehicle history report $25
                    </label>
                  </div>
                  <div class="form-check text-left ml-2">
                      <a href="#">Discounted price for multiple reports</a>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    <p>Yes, i'd like to download my report and also be shipped a copy of the report to my home address including a FREE bill of sale.</p>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <button type="submit" class="get-report-btn btn">Get Your Report</button>
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
    <h3 class="text-center m-5"><span>CUSTOMERS</span> REVIEWS</h3>
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <p class="testimonial-description">
                        Although the seller of the vehicle told me there were no accidents, a Verify My Vin report just gave me the peace of mind to continue with the purchase. A small amount to pay when looking at the big picture!
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">Cheryl</h5>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-description">
                      Through Verify My Vin, we found out that the vehicle we were looking at had 2 accidents. It was great info that we used to have our 3rd party mechanic look at the car and make sure that the accidents did not cause any serious damage.
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">Michael</h5>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-description">
                      Highly impressed, very comprehensive and informative service, if purchasing a valuable vehicle. Gives you peace of mind when your not mechanically inclined to verify the previous history.
                    </p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">Nick Bennett</h5>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-description">
                      It’s nice to know that there is a way to verify the history of the vehicle before investing a big chunk of money, to avoid waking up to have your car taken from you because there was a lien on the vehicle.</p>
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">Antonio</h5>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-description">
                      First time I have done something like this and it was worth every penny. I am so happy and at ease with my new car purchase. Thanks Verify My Vin.
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">Raymond</h5>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-description">
                      The customer service is excellent! I purchased two reports and had not used by other credit in 4 months after losing access to my emails. Live Support was able to fix my login issue within minutes while I was on site trying out the vehicle. Impressed.
                    <div class="testimonial-profile">
                        <h5 class="testimonial-date">Andrew</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
