// Slider
 $(document).ready(function() {
   $("#testimonial-slider").owlCarousel({
         items:3,
         itemsDesktop:[1000,2],
         itemsDesktopSmall:[979,2],
         itemsTablet:[767,1],
         pagination: true,
         autoPlay:true
     });
   });

// Text changed
   var divs = $('div[id^="content-"]').hide(),
       i = 0;

   (function cycle() {

       divs.eq(i).fadeIn(400)
                 .delay(1000)
                 .fadeOut(400, cycle);

       i = ++i % divs.length;

   })();
