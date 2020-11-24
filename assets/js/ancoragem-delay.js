$(document).ready(function() {
    $('a').click(function(){
         $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 1200);
        return false;
    });
   
//    var sbanner = document.getElementsById("second-banner");
//         window.addEventListener("scroll", function() {
//             sbanner.style.backgroundPosition = +window.pageYOffset+"px";
//         });
});