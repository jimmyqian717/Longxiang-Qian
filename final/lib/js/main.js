
$(window).onscroll = hideNav;
// On scroll nav fade
var lastScrollTop = 0;
function hideNav(event){
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
        $(".navbar").fadeOut("fast");
    } else {
        // upscroll code
        $(".navbar").fadeIn("fast");
    }
    lastScrollTop = st;
}


var width = $(window).width();
var height = $(window).height();
var centerLine = 0;
var moveX = 0;
var tempPos = 0;
document.onmousemove = translateBg;
function translateBg(event){
    centerX = width/2;
    centerY = height/2;
    moveX = (centerX - event.clientX) * 0.002;
    moveY = (centerY - event.clientY) * 0.002;
    // console.log(moveX);
}