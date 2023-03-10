$(document).ready(function(){
    sliderIMG();
});

function sliderIMG(){
    $(document).ready(function(){
        $('.slide-img').owlCarousel({
            loop:true,
            items:1,
            margin:10,
            nav:true
        });
    });
}