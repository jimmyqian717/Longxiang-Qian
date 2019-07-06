// Mouse positional animation

var width = $(window).width();
var height = $(window).height();
var ratio = width/height;
var centerLine = 0;
var moveX, moveY;
var tempPos = 0;
var alpha = 0.001;
document.onmousemove = translateBg;
function translateBg(event){
    centerX = width/2;
    centerY = height/2;
    moveX = (centerX - event.clientX) * alpha;
    moveY = (centerY - event.clientY) * alpha * ratio;
    // console.log(moveX);
    translate =  "translate(" + moveX + "%,calc(-50% + " + moveY + "%))";
    // console.log(translate);
    // $("#move").css("transform", translate)
}

// Mouseover image background themecolor transition
$(".gallery-images").mouseover(function(){
    switchThemebg(this);
    // console.log("mouseover")
})
$(".gallery-images").mouseleave(function(){
    $("body").css("background-color", "white");
})