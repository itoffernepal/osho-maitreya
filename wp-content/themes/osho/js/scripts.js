jQuery(document).ready(function () {

    jQuery(".hero-slider, .om-slider").slick({
        autoplay: false,
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
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            },
          },
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

     jQuery(".mobile-menu-icon").on("click", function () {
      jQuery(".mobile-navigation").addClass("active");
  });
  jQuery(".close-icon ").on("click", function () {
      jQuery(".mobile-navigation").removeClass("active");
  });

  jQuery(".event_modal_popup_btn").on("click", function (e) {
    e.preventDefault()
    //grab the data  event id
    let event_id = jQuery(this).data('event-id')
    let event_title = jQuery(this).data('event-title')
    // insert the event title to the  hidden field  within the form
    jQuery('.event_title').val(event_title)
    jQuery('.modal_event_title').text(event_title)
    // // make the title for  the modal dyanmic
    // // show the modal 
    jQuery('.form-popup').modal('show')
});
     

});



