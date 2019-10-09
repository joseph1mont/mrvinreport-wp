<!--
  Template Name: report page
-->
<?php get_header(); ?>
<?php
if (have_posts()) {
  while(have_posts()) {
    the_post();
?>
    <div class="report">
      <div class="report-header">
        <div class="container">
          <div class="report-header__left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Main.png" alt="">
          </div>
          <div class="report-header__middle">
            <h3>Vehicle History Report</h3>
            <h3>VIN # <strong>WBAFR7C57CC811956</strong></h3>
          </div>
          <div class="report-header__right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/download_pdf_box.png" alt="download PDF img">
            <a href="#"><h4>Download</h4>
            <h4>PDF</h4></a>
          </div>
        </div>
      </div>
      <div class="report-content">
        <div class="container">
          <div class="car-type">
            <div class="row">
              <div class="car-type__title col-6 col-sm-6">Year:</div><div class="car-type__content col-6 col-sm-6">2012</div>
              <div class="car-type__title col-6 col-sm-6">Make/Model:</div><div class="car-type__content col-6 col-sm-5">BMV 5-series</div>
              <div class="car-type__title col-6 col-sm-6">Date Generated:</div><div class="car-type__content col-6 col-sm-6">Thu Jul 19 2018</div>
            </div>
            <a href="#"><div class="print-report"><strong>Print Report</strong></div></a>
          </div>
        </div>
        <hr>
        <div class="report-summary report-summary-section">
            <div id="outer-circle">
              <div id="inner-circle">
                <div class="report-summary__title">
                  <h4>Report <strong>Summary</strong></h4>
                </div>
            </div>
          </div>
          <div class="report-summary__content">
            <div class="row">
              <div class="report-summary__content-left col-12 col-sm-9">
                <ul>
                  <li class="itemPink item1">State Title Brand Reported</li>
                  <li class="itemPink item2">Accident Reported (1) No Air Bag Deployed</li>
                  <li class="itemPink item3">Other Damage Reported</li>
                  <li class="itemPink item4">Other Title Brand or Specific Event Reported</li>
                  <li class="item item5">No Odometer Problem(s) Reported</li>
                  <li class="item item6">No Open Recall(s) Reported</li>
                  <li class="itemPink item7">Inspection Information Reported</li>
                  <li class="itemPink item8">Service & Repair Information Reported</li>
                </ul>
              </div>
              <div class="report-summary__content-right col-12 col-sm-3">
                <img src="<?php echo get_template_directory_uri(); ?>/images/barcode.png" alt="barcode">
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="market-value report-summary-section">
          <div id="outer-circle__no-icon">
            <div id="inner-circle__no-icon">
              <div class="report-Summary-item__title report-Summary-item__title-short report-Summary-item__title1">
                <h4>Market <strong>Value</strong></h4>
            </div>
          </div>
          </div>

          <!-- Market Value Chart Here -->

        </div>
        <hr>
            <div class="accident-information report-summary-section">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon">
                    <div class="report-Summary-item__title report-Summary-item__title2">
                      <h4>Accident <strong>Information</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5>Source<span>NMVTIS</span></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 33%">NO#</th>
                        <th style="width: 33%">REPORTED DATE</th>
                        <th style="width: 33%">LOCATION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                        <td>01/06/2011</td>
                        <td>WESTFIELD, NJ</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="damage-verification report-summary-section">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon">
                    <div class="report-Summary-item__title report-Summary-item__title3">
                      <h4>Damage <strong>Verification</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5>Source<span>NMVTIS</span></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="d-flex justify-content-center left-space">PROBLEM REPORTED</th>
                        <th>OTHER PROBLEM AREAS CHECKED</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No fire brand</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No hail, flood brand</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No junk or scrapped brand</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No manufacturer buyback</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No lemon brand</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon unchecked-icon"></td>
                        <td>Salvage brand</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No rebuilt or rebuildable brand</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No odometer brand (EML or NAM)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="odometer-verification report-summary-section">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon">
                    <div class="report-Summary-item__title report-Summary-item__title5">
                      <h4>Odometer <strong>Verification</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5>Source<span>NMVTIS</span></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table text-center">
                    <thead>
                      <tr>
                        <th class="d-flex justify-content-center">PROBLEM REPORTED</th>
                        <th>MILLAGE</th>
                        <th>DATE REPORTED</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>60</td>
                        <td>02/16/2009</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>6,596</td>
                        <td>09/23/2009</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>9,433</td>
                        <td>03/05/2010</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>11,966</td>
                        <td>07/01/2010</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>6,596</td>
                        <td>09/23/2009</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>9,433</td>
                        <td>03/05/2010</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>6,596</td>
                        <td>09/23/2009</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>9,433</td>
                        <td>03/05/2010</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>9,433</td>
                        <td>03/05/2010</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>11,966</td>
                        <td>07/01/2010</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>6,596</td>
                        <td>09/23/2009</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>9,433</td>
                        <td>03/05/2010</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>6,596</td>
                        <td>09/23/2009</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>9,433</td>
                        <td>03/05/2010</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="inspection-records report-summary-section">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon">
                    <div class="report-Summary-item__title report-Summary-item__title7">
                      <h4>Inspection <strong>Records</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5>Source<span>NMVTIS</span></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table text-center">
                    <thead>
                      <tr>
                        <th style="width: 20%">INSPECTION DATE</th>
                        <th class="big-screen-only" style="width: 20%">LOCATION</th>
                        <th style="width: 16%">ODOMETER</th>
                        <th style="width: 20%">DATA SOURCE</th>
                        <th class="big-screen-only" style="width: 22%">DETAILS</th>
                        <th style="width: 3%"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="top-align">
                        <td>08/14/2017</td>
                        <td class="big-screen-only"></td>
                        <td>49,596</td>
                        <td>True Frame Certified Inspction</td>
                        <td class="big-screen-only">TRUEFRAME INSPECTION PERFORMED VERY MINOR DAMAGE REPORTEDVERY MINOR COSMETIC REPAIRS Click here to view the complete report</td>
                        <td style="width: 3%"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="service-information report-summary-section">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon">
                    <div class="report-Summary-item__title report-Summary-item__title8">
                      <h4>Services & Repair <strong>Info</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5>Source<span>NMVTIS</span></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table text-center">
                    <tbody>
                      <tr>
                        <td style="width: 20%">09/23/2009</td>
                        <td style="width: 15%">NJ</td>
                        <td style="width: 25%">Spring Acura 973.912.9000</td>
                        <td style="width: 35%">TIRES OR WHEELS SERVICE PERFORMED VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>ACESSORIES SERVICED OR INSTALLED VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>ACESSORIES SERVICED OR INSTALLED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>BATTERY SERVICED OR REPLACED VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>MULTIPLE POINT VEHICLE SINSPECTION LUBE, OIL AND/OR FILTER CHANGED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>TIRES OR WHEELS SERVICE PERFORMED VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td>09/23/2009</td>
                        <td>NJ</td>
                        <td>Spring Acura 973.912.9000</td>
                        <td>TIRES OR WHEELS SERVICE PERFORMED VEHICLE SERVICED</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="vehicle-uses report-summary-section">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon">
                    <div class="report-Summary-item__title">
                      <h4>Vehicle Uses <strong>Verification</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5>Source<span>NMVTIS</span></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon text-center"></td>
                        <td>Personal</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Fleet</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Rental</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Lease</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Taxi</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Livery</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Police</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Government</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Divers Ed</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Commercial</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="vehicle-events report-summary-section">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon">
                    <div class="report-Summary-item__title report-Summary-item__title">
                      <h4>Vehicle Events <strong>Verification</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5>Source<span>NMVTIS</span></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 50%">REPORTED</th>
                        <th class="" style="width: 50%">EVENTS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="d-flex justify-content-center check-icon unchecked-icon"></td>
                        <td>Insurance Loss record</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No Titled to an insurance company record</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No Auction Lemon/Manufacturer Buyback record</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No abandoned title record</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No grey market title record</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon exclamation-icon"></td>
                        <td>loan/Lien record(s)</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No repossessed record</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No corrected title record</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No duplicate title record</td>
                      </tr>
                      <tr>
                        <td class="d-flex justify-content-center check-icon checked-icon"></td>
                        <td>No theft record(s)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="detailed-history report-summary-section">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon">
                    <div class="report-Summary-item__title report-Summary-item__title-long">
                      <h4>Detailed History <strong>Verification</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5>Source<span>NMVTIS</span></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table text-center">
                    <tbody class="top-align">
                      <tr>
                        <td style="width:9px"></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">09/23/2009</td>
                        <td style="width: 20%">WESTFIELD, NJ</td>
                        <td style="width: 20%">60</td>
                        <td>Motor Vehicle Dept.</td>
                        <td>TITLE<br>(Title #:GD200904700000371)</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">02/28/2009</td>
                        <td>WESTFIELD, NJ</td>
                        <td></td>
                        <td>Motor Vehicle Dept.</td>
                        <td>REGISTRATION EVENT/RENEWAL</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">09/23/2009</td>
                        <td>WESTFIELD, NJ</td>
                        <td>6,596</td>
                        <td>Springfield Acura<br>973.912.9000</td>
                        <td>TIRES OR WHEELS SERVICE<br>PERFORMED VEHICLE SERVICES</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">03/05/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>9,433</td>
                        <td>Springfield Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Springfield Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">12/28/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>14,773</td>
                        <td>Springfield Acura<br>973.912.9000</td>
                        <td>ACCESSORIES SERVICED OR INSTALLED VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">12/28/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Springfield Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Springfield Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Springfield Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Springfield Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">09/23/2009</td>
                        <td>WESTFIELD, NJ</td>
                        <td>60</td>
                        <td>Motor Vehicle Dept.</td>
                        <td>TITLE<br>(Title #:GD200904700000371)</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">02/28/2009</td>
                        <td>WESTFIELD, NJ</td>
                        <td></td>
                        <td>Motor Vehicle Dept.</td>
                        <td>REGISTRATION EVENT/RENEWAL</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">09/23/2009</td>
                        <td>WESTFIELD, NJ</td>
                        <td>6,596</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>TIRES AND WHEELS SERVICE<br>PERFORMED VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">03/05/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>9,433</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">09/23/2009</td>
                        <td>WESTFIELD, NJ</td>
                        <td>60</td>
                        <td>Motor Vehicle Dept.</td>
                        <td>TITLE<br>(Title #:GD200904700000371)</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">02/28/2009</td>
                        <td>WESTFIELD, NJ</td>
                        <td></td>
                        <td>Motor Vehicle Dept.</td>
                        <td>REGISTRATION EVENT/RENEWAL</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>6,596</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>TIRES OR WHEELS SERVICE<br>PERFORMED VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">03/05/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>9,433</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon checked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon unchecked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon unchecked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon unchecked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon unchecked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon unchecked-icon">07/01/2010</td>
                        <td>WESTFIELD, NJ</td>
                        <td>11,966</td>
                        <td>Spring Acura<br>973.912.9000</td>
                        <td>VEHICLE SERVICED</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="d-flex justify-content-center check-icon unchecked-icon">04/02/2019</td>
                        <td>NT</td>
                        <td>68,648</td>
                        <td>Auto Insurance Source</td>
                        <td>REPORED AS INSURABCE LOSS - VEHICLE SOLD BY INSURER. CLAIM PAID TO INSURED VEHICLE LOSS CAUSED BY COLLISION</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="inspection-records-last report-summary-section mb-5">
              <div class="report-summary-section__top">
                <div id="outer-circle__no-icon">
                  <div id="inner-circle__no-icon-long">
                    <div class="report-Summary-item__title report-Summary-item__title6">
                      <h4>Inspection <strong>Records</strong></h4>
                  </div>
                </div>
                </div>
                <div class="report-Summary-item__title-right">
                  <h5></h5>
                </div>
              </div>
              <div class="report-Summary-item__table">
                <div class="table-responsive">
                  <table class="table text-center mt-5 mt-lg-4">
                    <thead>
                      <tr>
                        <th class="float-left pl-3 pb-1">No Recalls found</th>
                      </tr>
                    </thead>
                  </table>
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
