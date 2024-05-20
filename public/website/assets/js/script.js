/*========================================navbar js==========================================*/
const menu = document.querySelector(".menu");
 const menuMain = menu.querySelector(".menu-main");
 const goBack = menu.querySelector(".go-back");
 const menuTrigger = document.querySelector(".mobile-menu-trigger");
 const closeMenu = menu.querySelector(".mobile-menu-close");
 let subMenu;
 menuMain.addEventListener("click", (e) =>{
  if(!menu.classList.contains("active")){
    return;
  }
   if(e.target.closest(".menu-item-has-children")){
     const hasChildren = e.target.closest(".menu-item-has-children");
      showSubMenu(hasChildren);
   }
 });
 goBack.addEventListener("click",() =>{
   hideSubMenu();
 })
 menuTrigger.addEventListener("click",() =>{
   toggleMenu();
 })
 closeMenu.addEventListener("click",() =>{
   toggleMenu();
 })
 document.querySelector(".menu-overlay").addEventListener("click",() =>{
  toggleMenu();
 })
 function toggleMenu(){
  menu.classList.toggle("active");
  document.querySelector(".menu-overlay").classList.toggle("active");
 }
 function showSubMenu(hasChildren){
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML=menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
 }

 function  hideSubMenu(){  
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() =>{
       subMenu.classList.remove("active");  
    },300); 
    menu.querySelector(".current-menu-title").innerHTML="";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
 }
 
 window.onresize = function(){
  if(this.innerWidth >991){
    if(menu.classList.contains("active")){
      toggleMenu();
    }

  }
 }
/*========================================navbar js==========================================*/

/*========================================animated pulse animation===========================*/
 $('#play-video').on('click', function(e){
  e.preventDefault();
  $('#video-overlay').addClass('open');
  $("#video-overlay").append('<iframe width="560" height="315" src="https://www.youtube.com/embed/ngElkyQ6Rhs" frameborder="0" allowfullscreen></iframe>');
});

$('.video-overlay, .video-overlay-close').on('click', function(e){
  e.preventDefault();
  close_video();
});

$(document).keyup(function(e){
  if(e.keyCode === 27) { close_video(); }
});

function close_video() {
  $('.video-overlay.open').removeClass('open').find('iframe').remove();
};
/*=======================================animated pulse animation===========================*/

/*=======================================our work process===================================*/
//Pen JS Starts Here
jQuery(document).ready(function(){

  // SVG 
  var snapC = Snap("#svgC"); 

  // SVG C - "Squiggly" Path
  var myPathC = snapC.path("M62.9 14.9c-25-7.74-56.6 4.8-60.4 24.3-3.73 19.6 21.6 35 39.6 37.6 42.8 6.2 72.9-53.4 116-58.9 65-18.2 191 101 215 28.8 5-16.7-7-49.1-34-44-34 11.5-31 46.5-14 69.3 9.38 12.6 24.2 20.6 39.8 22.9 91.4 9.05 102-98.9 176-86.7 18.8 3.81 33 17.3 36.7 34.6 2.01 10.2.124 21.1-5.18 30.1").attr({
    id: "squiggle",
    fill: "none",
    strokeWidth: "1",
    stroke: "rgba(0,0,0,0.1)",
    strokeMiterLimit: "10",
    strokeDasharray: "5 10",
    strokeDashOffset: "180"
  });

  // SVG C - Triangle (As Polyline)
  var Triangle = snapC.polyline("0, 30, 15, 0, 30, 30");
  Triangle.attr({
    id: "plane",
    fill: "rgba(0,0,0,0.050)"
  }); 
  
  initTriangle();
  
  // Initialize Triangle on Path
  function initTriangle(){
    var triangleGroup = snapC.g( Triangle ); // Group polyline 
    movePoint = myPathC.getPointAtLength(length);
    triangleGroup.transform( 't' + parseInt(movePoint.x - 15) + ',' + parseInt( movePoint.y - 15) + 'r' + (movePoint.alpha - 90));
  }
  
  // SVG C - Draw Path
  var lenC = myPathC.getTotalLength();

  // SVG C - Animate Path
  function animateSVG() {
    
    myPathC.attr({
      stroke: 'rgba(0,0,0,0.1)',
      strokeWidth: 1,
      fill: 'none',
      // Draw Path
      "stroke-dasharray": "5 10",
      "stroke-dashoffset": "180"
    }).animate({"stroke-dashoffset": 10}, 2500,mina.easeinout);
    
    var triangleGroup = snapC.g( Triangle ); // Group polyline

    setTimeout( function() {
      Snap.animate(0, lenC, function( value ) {
   
        movePoint = myPathC.getPointAtLength( value );
      
        triangleGroup.transform( 't' + parseInt(movePoint.x - 15) + ',' + parseInt( movePoint.y - 15) + 'r' + (movePoint.alpha - 90));
    
      }, 2500,mina.easeinout, function(){
      });
    });
    
  } 
  
  
  // Animate Button
  function kapow(){
    $(window).on('scroll', function (){       
      // Run SVG
      animateSVG();      
    });
  }

  kapow();

});
/*=======================================our work process===================================*/

/*========================================global recognition================================*/
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  dots: true,
  /*nav: true,*/
  navText: [
    "<i class='fa fa-caret-left klrghticon_design'></i>",
    "<i class='fa fa-caret-right klrghticon_design'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
/*========================================global recognition================================*/

/*========================================associate area====================================*/
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
/*========================================associate area====================================*/

/*========================================leadership area===================================*/
  
/*========================================leadership area===================================*/ 

/*=======================================content management service area====================*/
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  ); 
/*=======================================content management service area====================*/  

/*=======================================content management service area====================*/

/*=======================================content management service area====================*/