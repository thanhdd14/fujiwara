//menu header
$('.js-mobile').on('click', function(){
    $(this).toggleClass("js-mobile--close");
    $("html").toggleClass("js-locked");
    // $(".nav-menu").slideToggle();
    // e.preventDefault();
    $(".header-nav").fadeToggle();
});


// $(document).on("click", function(){
// 	$("aa").hide();
// });

// $(window).scroll(function () {
//     if ($(this).scrollTop() > 10) {
//         $("#header").addClass("js-fixed");
//     }
//     else {
//         $("#header").removeClass("js-fixed");
//     }
// });

//resize slider load page
// var window_type;
// var $window = $(window);
// if ($window.width() <= 1024) {
//     window_type = 'sp';
// } else {
//     window_type = 'pc';
// }
// $(window).resize(function() {
//     if($window.width() <= 1024){
//         if( (window_type != 'sp') ){
//             location.reload();
//         }
//     }else{
//         if(window_type != 'pc'){
//             location.reload();
//         }
//     }
// });




// $(window).on("load resize",function () {
//     $("main").css("padding-top",$("#header").outerHeight());
// });



//siider-home
// $('.js-mv-slider').slick({
//     dots: false,
//     focusOnSelect: true,
//     pauseOnHover:false,
//     infinite: true,
//     speed: 500,
//     fade: true,
//     autoplay: false,
//     cssEase: 'linear'
// });

const $herp_slide = $('.js-mv-slider')
    .slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 2000,
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        focusOnSelect: false,
        customPaging: function(slick, index) { return ''; },
    })
    .on({
        beforeChange: function(event, slick, currentSlide, nextSlide) {
            $('.slick-slide', this).eq(currentSlide).addClass('preve-slide');
            $('.slick-slide', this).eq(nextSlide).addClass('slide-animation');
        },
        afterChange: function() {
            $('.preve-slide', this).removeClass('preve-slide slide-animation');
        },
        init: function() {
            $(this).find('.slick-current').addClass('slide-animation');
        }
    });

$herp_slide.find('.slick-slide').eq(0).addClass('slide-animation');


// $(".js-product").slick({
// 	slidesToShow: 3,
// 	slidesToScroll: 1,
// 	autoplay: true,
// 	autoplaySpeed: 2000,
	// prevArrow:"<button type='button' class='slick-prev pull-left'></button>",
	// nextArrow:"<button type='button' class='slick-next pull-right'></button>"
// });


// $(".js-product").slick({
//   slidesToShow: item,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 2000,
// });


// $(function () {
//     objectFitImages('img');
// });


//matchHeight
jQuery(function ($) {
    $('.features-list .features-list__item .features-list__box .features-list__box-ct .features-list__box-ct-ttl').matchHeight();
    $('.features-list .features-list__item .features-list__box').matchHeight();
});



//fade
// $(window).on('scroll load assessFeatureHeaders', function(){
//     var scrollTop = $(window).scrollTop();
//     var appearenceBuffer = 60;
//     var windowBottom = scrollTop + $(window).height() - appearenceBuffer;
//     $('body').toggleClass('scrolled-down', scrollTop > 0);
//     $('.js-scrollin:not(.active)').filter(function(){
//         var offset = $(this).offset().top;
//         var height = $(this).outerHeight();
//         return offset + height >= scrollTop && offset <= windowBottom;
//     }).addClass('active');
// });

var window_type;
var $window = $(window);
if ($window.width() <= 834) {
    window_type = 'sp';
} else {
    window_type = 'pc';
}
$(window).resize(function() {
    if($window.width() <= 834){
        if( (window_type != 'sp') ){
            location.reload();
        }
    }else{
        if(window_type != 'pc'){
            location.reload();
        }
    }
});

$(document).ready(function() {
    if($(window).width()<834){
        $(".js-features-list").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            centerMode: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [
                {
                    breakpoint: 640,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    }
    else{
    }
});






if ($(".sec-mv").length > 0) {
    jQuery(document).ready(function ($) {
        $(window).on("scroll", function () {
            if($(window).scrollTop()>  $(".sec-mv").outerHeight()){
                $("#header").removeClass("top-page");
            }
            else {
                $("#header").addClass("top-page");
            }
        });
    });
}