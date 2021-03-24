$(document).ready(function(){
	$('.team-slider').slick({
    dots: true,
    arrows:false,
    autoplay:false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,

    slidesToScroll:1,
    adaptiveHeight: true,
    responsive: [
    {
      breakpoint: 991,
      settings: {
         slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
         slidesToShow: 1,

      }
    },
  ]
});



 
// $(document).ready(function(){
//   var num = $("#masthead").offset().top; 
//   $(window).bind('scroll', function() { 
//     if ($(window).scrollTop() > num) {  
//       $('#masthead').addClass('fixed-menu');  
//     } 
//     else {  
//      $('#masthead').removeClass('fixed-menu');    
//     } 
//   });
// });
     

      $('#testimonial-slider').slick({
    dots: false,
    arrows:true,
    autoplay:true,
    infinite: true,
    speed: 500,
    slidesToShow: 2,
    slidesToScroll:1,
    adaptiveHeight: true,
    responsive: [
    {
      breakpoint: 991,
      settings: {
         slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
         slidesToShow: 1,

      }
    },
  ]
});

      $('.slides').slick({
    dots: false,
    arrows:false,
    autoplay:true,
    infinite: true,
    speed: 2500,
    fade:true,
    autoplaySpeed: 2500,
    slidesToShow: 1,
    slidesToScroll:1,
    cssEase: 'linear',
    adaptiveHeight: true,
    responsive: [
    {
      breakpoint: 991,
      settings: {
         slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
         slidesToShow: 1,

      }
    },
  ]
});

});





