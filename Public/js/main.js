$(document).ready(function(){
    sliderIMG();
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