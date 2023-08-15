// JavaScript Document

$("#btech_banner").owlCarousel({
    items: 1, //10 items above 1000px browser width
    autoplay: true,
    loop: true,
});
var owl_banner = $("#btech_banner");
owl_banner.owlCarousel();
// Go to the next item
$('.banner_nxt').click(function() {
    owl_banner.trigger('next.owl.carousel');
})
// Go to the previous item
$('.banner_prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_banner.trigger('prev.owl.carousel', [300]);
})

//Btech store slider

$("#fix_deposit").owlCarousel({

    autoplay: true, //Set AutoPlay to 3 seconds
    margin: 10,
    items: 1,
    nav: false,
    // transitionStyle : "slideUp",
    loop: true,
    //animateOut: 'slideOutDown',
    //animateIn: 'flipInX',


});



//online partnet

$("#online_prtner").owlCarousel({
    items: 1, //10 items above 1000px browser width
    autoplay: true,
    loop: true,

});
var owl_prtner = $("#online_prtner");
owl_prtner.owlCarousel();
// Go to the next item
$('.online_nxt').click(function() {
    owl_prtner.trigger('next.owl.carousel');
})
// Go to the previous item
$('.online_prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_prtner.trigger('prev.owl.carousel', [300]);
})


//------------------------------------------------------------------///
$("#doctor_slide").owlCarousel({
    items: 3, //10 items above 1000px browser width
    autoplay: true,
    loop: true,
    margin: 8,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        460: {
            items: 2
        },
        768: {
            items: 2
        },
        960: {
            items: 3
        },
        1200: {
            items: 3
        }

    }

});

var owl_doct = $("#doctor_slide");
owl_doct.owlCarousel();
// Go to the next item
$('.service_nxt').click(function() {
    owl_doct.trigger('next.owl.carousel');
})
// Go to the previous item
$('.service_prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_doct.trigger('prev.owl.carousel', [300]);
})
//------------------------------------------------------------------///

// -----------------------------------------
$("#deprt").owlCarousel({
    items: 1, //10 items above 1000px browser width
    autoplay: true,
    loop: true,
    margin: 8,
    nav: false,

});



//scroller_top_bottom-------------
$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});

$('.scrollup').click(function() {
    $("html, body").animate({
        scrollTop: 0
    }, 500);
    return false;



});


//Site Menu////////////////////////////////////
$(function() {
    var html = $('html, body'),
        navContainer = $('.nav-container'),
        navToggle = $('.nav-toggle'),
        navDropdownToggle = $('.has-dropdown');

    // Nav toggle
    navToggle.on('click', function(e) {
        var $this = $(this);
        e.preventDefault();
        $this.toggleClass('is-active');
        navContainer.toggleClass('is-visible');
        html.toggleClass('nav-open');
    });

    // Nav dropdown toggle
    navDropdownToggle.on('click', function() {
        var $this = $(this);
        $this.toggleClass('is-active').children('ul').toggleClass('is-visible');
    });

    // Prevent click events from firing on children of navDropdownToggle
    navDropdownToggle.on('click', '*', function(e) {
        e.stopPropagation();
    });
});

///////////////// header



$(window).scroll(function() {
    var sticky = $('#header'),
        scroll = $(window).scrollTop();

    if (scroll >= 117) sticky.addClass('head_shadow');
    else sticky.removeClass('head_shadow');
});



///////////////// header    

$("#news_slider").owlCarousel({
    items: 1, //10 items above 1000px browser width
    autoplay: true,
    slideSpeed: 300,
    margin: 0,
    nav: false,

});
var owl_news = $("#news_slider");
owl_news.owlCarousel();
// Go to the next item
$('.news_nxt').click(function() {
    owl_news.trigger('next.owl.carousel');
})
// Go to the previous item
$('.news_prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_news.trigger('prev.owl.carousel', [300]);
})