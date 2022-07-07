$('.owl-carousel').owlCarousel({
    loop:true,
    margin:24,
    nav:false,
    smartSpeed: 700,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2,
            center: true
        }
    }
})