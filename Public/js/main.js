$(document).ready(function(){
    // sliderIMG();
    animaMenu();
});

// function sliderIMG(){
//     $(document).ready(function(){
//         $('.slide-img').owlCarousel({
//             loop:true,
//             items:1,
//             margin:10,
//             nav:true,
//             dots: false,
//             navText : ["<span class='icon-arrow-back'></span>","<span class='icon-arrow-next'></span>"]
//         });
//     });
// }

function animaMenu(){
    $('.nav_list').on('click','a',function() {
        let capId = $(this).attr('id');
        $('.'+capId).fadeToggle('slow', function(){

        });
        console.log($(this).attr('id'));

    });
}
// function animaMenu(){
//     $('.item_nav').click(function() {
//         $('.hidden-menu').fadeToggle("slow", function(){
            
//         });
//         // Alternative animation for example
//         // slideToggle("fast");
//     });
// }
