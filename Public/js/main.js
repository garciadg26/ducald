$(document).ready(function(){
    // sliderIMG();
    animaMenu();
    animaMenuSm();
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


function animaMenuSm(){
    $('.nav_list_two a').hover(function() {
        let capId = $(this).attr('id');
        $('.'+capId).fadeToggle('slow', function(){

        });
        console.log($(this).attr('id'));

    });
}


function animaMenu(){
    $('.nav_list_one').on('click','a',function() {
        let capId = $(this).attr('id');
        $('.'+capId).siblings(".hidden-menu").addClass('d-none');
        $('.'+capId).removeClass('d-none');
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
