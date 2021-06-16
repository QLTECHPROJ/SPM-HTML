$(document).ready(function() {
//scroll top
jQuery(window).scroll(function() {  // OR  $(window).scroll(function() {
    var h = jQuery("header").height();
    var height = (h+0);
    var percentage = (height / jQuery(window).height())*100; 
    if(jQuery(this).scrollTop() > 150) {
        jQuery("header .main-header").addClass("sticky");
    }else {
        jQuery("header .main-header").removeClass("sticky");
    }
});
/*Header sticky*/
 $(window).scroll(function()
{
  if ($(window).scrollTop() > 100)
  {
    $('header').addClass('sticky');
  }
  else
  {
    $('header').removeClass('sticky');
  }
});
});

/*banner_sec_slider*/
$('.banner_sec_slider').slick({
 infinite: true,
 slidesToShow: 1,
 slidesToScroll:1,
 arrows: false,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});
$('.promo_video_slider').slick({
 infinite: true,
 slidesToShow: 1,
 slidesToScroll:1,
 arrows: true,
});
$('.spm_gallary_slider').slick({

 infinite: true,
 slidesToShow: 3,
  slidesToScroll:1,
  arrows: true,
  responsive: [

    {

      breakpoint: 991,

      settings: {

        slidesToShow: 2

      }

    },

    {

      breakpoint: 767,

      settings: {

        slidesToShow: 1

      }

    }

  ]

});