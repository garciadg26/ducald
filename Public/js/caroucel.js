$(document).ready(function(){

    sliderIMG();

    // //CAROUCEL BRAND
    // $('.brand-carousel').owlCarousel({
    //     loop:true,
	//     autoplay: true,
    //     autoplayTimeout:2200,
    //     margin:10,
    //     nav:true,
    //     dots: false,
    //     responsive:{
    //         100:{
    //             items:2
    //         },
    //         600:{
    //             items:3
    //         },
    //         1000:{
    //             items:5
    //         },
    //         1200:{
    //             items:7
    //         }
    //     }
    // });

    // //CAROUCEL TESTIMONIALS
    // $('.test-carousel').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     nav:true,
    //     dots: false,
    //     responsive:{
    //         0:{
    //             items:1
    //         },
    //         600:{
    //             items:2
    //         },
    //         1000:{
    //             items:3
    //         }
    //     }
    // });
});

function sliderIMG(){
    $(document).ready(function(){
        $('.slide-img').owlCarousel({
            loop:true,
            items:1,
            margin:10,
            nav:true,
            dots: false,
            navText : ["<span class='icon-arrow-back'></span>","<span class='icon-arrow-next'></span>"]
        });
    });
}