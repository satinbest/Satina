// slider in main page
$('#main_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplayHoverPause:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
// article slider
$('#article_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplayHoverPause:true,
    autoplay:true,
    lazyLoad:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
// course slier
$('#course-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplayHoverPause:true,
    autoplay:true,
    lazyLoad:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
// related post in single page slider
$('#relate_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplayHoverPause:true,
    autoplay:true,
    lazyLoad:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
$(document).ready(function (){
    $('.search-icon').click(function (){
        $('.searchbox').slideToggle();
    })
});
$(document).ready(function (){
    $('#access_title').click(function (){
        $('.list-access-dl').slideToggle();
    })
});
$(document).ready(function (){
    $('.lesson-course > ul > li').click(function (){
        $(this).find('ul').slideToggle();
    })
});