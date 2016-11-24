<!-- navbar menu button script begins -->

var $thisdiv = $('nav, body');
var $buffer = $('#buffer');
$(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(window).scrollTop();
    // whether that's below the form
    // if (y >= 01) {
    // // if so, add the shrink class
    //     $thisdiv.addClass('shrink');
    //     $buffer.addClass('shrink');
    // } else {
    //     $thisdiv.removeClass('shrink');
    //     $buffer.removeClass('shrink');
    // }
});
var isMenuDown = false;
$('.button').on('click', function(){
    var $nav = $('nav');

    if (isMenuDown) {
        $nav.slideUp(function () {
            $nav.removeAttr("style");
            $nav.blurjs({
                draggable: false,
                overlay: 'rgba(255,255,255,0.3)',
                radius:2,
                offset: { 
                    x: 3, y: 6 
                }
            });
            isMenuDown = false;
        });
    } else {
        $nav.slideDown(function () {
            isMenuDown = true;
        });
    }
});

<!-- navbar menu button script ends -->

<!-- Smooth scroll -->

$(document).ready(function() {
// navigation click actions
$('.scroll-link').on('click', function(event){
event.preventDefault();
var sectionID = $(this).attr("data-id");
scrollToID('#' + sectionID, 750);
});
// scroll to top action
$('.scroll-top').on('click', function(event) {
event.preventDefault();
$('html, body').animate({scrollTop:0}, 'slow');
});
// mobile nav toggle
$('#nav-toggle').on('click', function (event) {
event.preventDefault();
$('#main-nav').toggleClass("open");
});
});
// scroll function
function scrollToID(id, speed){
var offSet = 50;
var targetOffset = $(id).offset().top - offSet;
var mainNav = $('#main-nav');
$('html,body').animate({scrollTop:targetOffset}, speed);
if (mainNav.hasClass("open")) {
mainNav.css("height", "1px").removeClass("in").addClass("collapse");
mainNav.removeClass("open");
}
}
if (typeof console === "undefined") {
console = {
log: function() { }
};
}

<!-- smooth scroll end -->


    // $(document).ready(function(){
    //  $('.circle').blurjs({
    //      draggable: true,
    //      overlay: 'rgba(255,255,255,0.1)',
    //      radius:10
    //  });
    // });

    $(document).ready(function(){               
        $('nav, textbox, footer, .social-link, .Card-item, .panel, .button').blurjs({
      source: 'body',
            draggable: false,
            overlay: 'rgba(255,255,255,0.3)',
            radius:2,
      offset: { 
                x: 3, y: 6 
              },
        });
    });