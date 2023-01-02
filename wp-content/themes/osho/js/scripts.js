jQuery(document).ready(function () {

    jQuery(".hero-slider, .om-slider").slick({
        autoplay: true,
        lazyLoad: "ondemand",
        autoplaySpeed: 4000,
        arrows: true,
        // fade:false,
        dots: true,
        dotsClass: 'custom_paging',
		customPaging: function (slider, i) {
			console.log(slider);
			return  (i + 1) + ' of ' + slider.slideCount;
		}
      });


      jQuery(".ab-slider").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        lazyLoad: "ondemand",
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
        ],
      });







    // Fixed header.
    $(window).scroll(function () {
        if ($(this).scrollTop() >= $(".main-menu").height()) {
            $(".main-menu").addClass("sticky");
        } else {
            $(".main-menu").removeClass("sticky");
        }
    });

     // Implement go to top.
     var $scroll_obj = jQuery("#btn-scrollup1");
     jQuery(window).on("scroll", function () {
       if (jQuery(this).scrollTop() > 100) {
         $scroll_obj.fadeIn();
       } else {
         $scroll_obj.fadeOut();
       }
     });
   
     $scroll_obj.on("click", function () {
       jQuery("html, body").animate(
         {
           scrollTop: 0,
         },
         600
       );
       return false;
     });

});