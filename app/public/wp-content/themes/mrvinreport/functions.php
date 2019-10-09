<?php

function mrvinreport_files (){
  wp_enqueue_style('font-awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_style('font-style', '//fonts.googleapis.com/css?family=Poppins&display=swap');

  wp_register_style('homepage-style', get_template_directory_uri().'/css/style.css');
  wp_register_style('contact-us-style', get_template_directory_uri().'/css/contact-us.css');
  wp_register_style('why-us-style', get_template_directory_uri().'/css/why-us.css');
  wp_register_style('dealers-style', get_template_directory_uri().'/css/dealers.css');
  wp_register_style('report-style', get_template_directory_uri().'/css/reportStyle.css');

  wp_enqueue_style('header-style', get_template_directory_uri().'/css/header.css');
  wp_enqueue_style('caroousel1', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css', array(), null);
  wp_enqueue_style('caroousel2', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css', array(), null);
  wp_enqueue_style('round-slider', '//cdn.jsdelivr.net/jquery.roundslider/1.0/roundslider.min.css');

  wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), true);
  wp_enqueue_script('jq', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
  wp_enqueue_script('testimonial', '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js', array('jquery'), true);
  wp_enqueue_script('roundslider', '//cdn.jsdelivr.net/jquery.roundslider/1.0/roundslider.min.js', array('jquery'), true);
  wp_enqueue_script('testimonial-slider', get_template_directory_uri().'/js/testimonial-slider.js', array('jquery'), true);

  wp_enqueue_script('fadeIn-homepage', get_template_directory_uri().'/js/text-fadeIn-homepage.js');
  wp_enqueue_script('testimonial-slider', get_template_directory_uri().'/js/imagesCompareSlider.js', array('jquery'), true);

  wp_enqueue_script('testimonial-slider', get_template_directory_uri().'/js/popup-login.js', array('jquery'), true);
  wp_enqueue_script('testimonial-slider', get_template_directory_uri().'/js/popup-findVIN.js', array('jquery'), true);

if (is_page('contact-us')) {
    wp_enqueue_style('contact-us-style');
  } elseif (is_page('why-us')) {
    wp_enqueue_style('why-us-style');
  } elseif (is_page('dealers')) {
    wp_enqueue_style('dealers-style');
  } elseif (is_page('sample-report')) {
    wp_enqueue_style('report-style');
  } else {
    wp_enqueue_style('homepage-style');
  }
}
add_action('wp_enqueue_scripts', 'mrvinreport_files');


function wpb_hook_javascript() {
  ?>
<script>
  // Get the modal login
  var modal = document.getElementById("myModal");

  var btn = document.getElementById("myBtn");

  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
    modal.style.display = "block";
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>


  <?php
  if (is_page ('home')) {
    ?>
        <script type="text/javascript">
          // Text changed for the home page
          var divs = $('div[id^="checksFor-"]').hide(),
             n = 0;
          (function cycle() {
             divs.eq(n).fadeIn(400)
                       .delay(1000)
                       .fadeOut(400, cycle);
             n = ++n % divs.length;
          })();
        </script>
        <script>
        function openForm() {
          document.getElementById("myModal1").style.display = "block";
        }
        function closeForm() {
         document.getElementById("myModal1").style.display = "none";
       }
       </script>
       <script>
       function initComparisons() {
         var x, i;
         /*find all elements with an "overlay" class:*/
         x = document.getElementsByClassName("img-comp-overlay");
         for (i = 0; i < x.length; i++) {
           compareImages(x[i]);
         }
         function compareImages(img) {
           var slider, img, clicked = 0, w, h;

           w = img.offsetWidth;
           h = img.offsetHeight;

           img.style.width = (w / 2) + "px";

           slider = document.createElement("DIV");
           slider.setAttribute("class", "img-comp-slider");

           img.parentElement.insertBefore(slider, img);

           slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
           slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";

           slider.addEventListener("mousedown", slideReady);

           window.addEventListener("mouseup", slideFinish);

           slider.addEventListener("touchstart", slideReady);

           window.addEventListener("touchstop", slideFinish);
           function slideReady(e) {

             e.preventDefault();

             clicked = 1;

             window.addEventListener("mousemove", slideMove);
             window.addEventListener("touchmove", slideMove);
           }
           function slideFinish() {
             clicked = 0;
           }
           function slideMove(e) {
             var pos;
             if (clicked == 0) return false;
             pos = getCursorPos(e)
             if (pos < 0) pos = 0;
             if (pos > w) pos = w;
             slide(pos);
           }
           function getCursorPos(e) {
             var a, x = 0;
             e = e || window.event;
             a = img.getBoundingClientRect();
             x = e.pageX - a.left;
             x = x - window.pageXOffset;
             return x;
           }
           function slide(x) {
             img.style.width = x + "px";
             slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
           }
         }
       }

       initComparisons();

       </script>
    <?php
  }
}
add_action('wp_footer', 'wpb_hook_javascript');
 ?>
