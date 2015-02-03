
// @codekit-prepend "../bower_components/jquery/dist/jquery.min.js"
// @codekit-prepend "../bower_components/modernizr/modernizr.js"
// @codekit-prepend "../bower_components/tipsy/src/javascripts/jquery.tipsy.js"
// @codekit-prepend "../bower_components/colorbox/jquery.colorbox-min.js"
// @codekit-prepend "../bower_components/animatescroll/animatescroll.min.js"
// @codekit-no-prepend "../bower_components/jquery-throttle-debounce/jquery.ba-throttle-debounce.min.js"
// @codekit-no-prepend "../bower_components/stellar/jquery.stellar.min.js"
// @codekit-no-prepend "../bower_components/konami-code/src/jquery.konami.min.js"
// @codekit-no-prepend "../bower_components/blockui/jquery.blockUI.js"
// @codekit-no-prepend "../bower_components/createjs-tweenjs/lib/tweenjs-NEXT.combined.js"
// @codekit-no-prepend "../bower_components/easeljs/lib/easeljs-NEXT.min.js"
// @codekit-no-prepend "../bower_components/tweenjs/src/Tween.js"
// @codekit-prepend "CSSPlugin.js"
// @codekit-prepend "jquery.whatwhere.js"
// @codekit-prepend "coverflow.js"

//  <script type="text/javascript" src="http://www.createjs.com/Demos/TweenJS/assets/easeljs-NEXT.min.js"></script>
//  <script type="text/javascript" src="http://www.createjs.com/Demos/src/createjs/events/Event.js"></script>
//  <script type="text/javascript" src="http://www.createjs.com/Demos/src/createjs/events/EventDispatcher.js"></script>
//  <script type="text/javascript" src="http://www.createjs.com/Demos/src/tweenjs/Tween.js"></script>
//  <script type="text/javascript" src="http://www.createjs.com/Demos/src/tweenjs/Ease.js"></script>
//  <script type="text/javascript" src="http://www.createjs.com/Demos/src/tweenjs/CSSPlugin.js"></script>


$(function () {
  
  'use strict';
  //$(window).stellar();
  
  var headerbar = $('#headerbar'), headerlogo_bottom = $('#headerlogo_bottom'), currentTopSection;
  
  var windowheight=$(window).height();
  
  $.whatwhere('body .watchpos, section');

  //jQuery
  $(window).on('DOMContentLoaded load resize scroll', function(){
    
    var scrolltop = $(window).scrollTop();
    //lock header to top
    if (scrolltop >= 400) {
      headerbar.addClass('fixed');
      headerlogo_bottom.addClass('barred');
    } else { 
      headerbar.removeClass('fixed'); 
      headerlogo_bottom.removeClass('barred');
    }
    
    //$.whatwhere('body .watchpos, section');
    
    
    
    //update nav to highlight highest current onscreen item
    var currentTopSection = '';
    if($('section.onscreen').length > 0){
      //console.log('somethingOnscreen');
      currentTopSection = $('section.onscreen:last');
    }
    else{
      currentTopSection = $('section.onfromtop:last');
      //console.log('somethingsTop');
    }
    var currentTopSectionID = currentTopSection.attr('id');
    //console.log(currentTopSection);
    $('#nav_'+currentTopSectionID).addClass('active').siblings().removeClass('active');
    
  }); 

  
  
  function updateScrollStatuses() {
    //keep track of whats onscreen
//    'use strict';
    //docViewTop = $(window).scrollTop()
//    var scrolltop = $(window).scrollTop(), docViewBottom = scrolltop + windowheight, opacity = 100, blur = 0;
//    if (scrolltop <= 250) {
//      opacity = (100 - (scrolltop / 2.5)) / 100;
//      blur = scrolltop / 30;
//    } else { opacity = 0; }

    //lock header to top
//    if (scrolltop >= 400) {
//      headerbar.addClass('fixed');
//      headerlogo_bottom.addClass('barred');
//    } else { 
//      headerbar.removeClass('fixed'); 
//      headerlogo_bottom.removeClass('barred');
//    }  
    
    //set oncreen/offscreen classes
//    $('body .watchpos, section').each(function () {
//      var $this = $(this),
//        elemTop = $this.offset().top,
//        elemBottom = elemTop + $this.height();
//      if ((elemBottom <= docViewBottom) && (elemTop >= scrolltop)) {
//        $this.addClass('onscreen');
//        $this.removeClass('offscreen');
//      } else {
//        $this.addClass('offscreen');
//        $this.removeClass('onscreen');
//      }
//      if (elemBottom > docViewBottom) {
//        $this.addClass('offlow');
//      } else { $this.removeClass('offlow'); }
//      if (elemTop < scrolltop) {
//        $this.addClass('offhigh');
//      } else { $this.removeClass('offhigh'); }
//      if (elemTop > docViewBottom) {
//        $this.addClass('allofflow');
//      } else { $this.removeClass('allofflow'); }
//    });
    

  }
  
  //$(window).scroll($.throttle(250, updateScrollStatuses));
  //$(window).scroll($.debounce(250, updateScrollStatuses));
  //$(window).scroll(updateScrollStatuses);
//  $(window).on('scroll', function() {
//    window.requestAnimationFrame(updateScrollStatuses);
//  });
  
  //horiz scrolling hexes
//  $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
//    {
//      height : 3000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
//      onScroll : function () {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
//        // option: onScroll : function (percent) {
//        //console.log(percent);
//    }
//  });
  
  //about li hovers
  var colorArray = [ "#97A68D", "#BEBF93", "#A68E46", "#594022", "#6B8250", "#2A6170" ];
  colorArray.sort(function () { return 0.5 - Math.random(); });
  $('.about li').mouseover(function () {
    //console.log('hover');
    $('.colorbacker').css({'background-color' : colorArray[$(this).index()]});
  }).mouseout(function () {
    $('.colorbacker').css({'background-color' : '#ffffff'});
  });
  
  updateScrollStatuses();
  
  //init coverflow(s)
//  coverflow('player').setup({
//    flash: 'coverflow.swf',
//    playlist: 'playlist.json',
//    width: 960,
//    height: 360,
//    backgroundopacity: 0,
//    coverwidth: 500,
//    mousewheel: false
//  });
  coverflow('player2').setup({
    flash: 'coverflow.swf',
    playlist: 'playlist2.json',
    width: 960,
    height: 470,
    backgroundopacity: 0,
    coverwidth: 500,
    covergap: 100,
    coverangle: 45,
    coverdepth: 400,
    coveroffset: 300,
    mousewheel: false,
    reflectionopacity: 0.1
  });
  
  //init nav dots
  var navHTML = '', sectionID;
  $('section').each(function(){
    sectionID = $(this).attr('id');
    //console.log('section found');
    navHTML += '<a href="#' + sectionID + '" id="nav_' + sectionID + '" original-title="' + $(this).attr('data-title') + '" class="navdot_link"></a>';
  });
  //navHTML += '<a href="#footer"></a>'
  $('#nav_dots').html(navHTML);
  //nav dot tipsys
  $('#nav_dots a').tipsy({fade: true, gravity: $.fn.tipsy.autoNS});
  
  
  //now make those navdots do sweet animatescroll calls.
  $('.navdot_link').each(function(){
    $(this).click(function(event){
      event.preventDefault();
      var scrolltarget = $(this).attr('href');
      //console.log(scrolltarget);
      $(scrolltarget).animatescroll({
        scrollSpeed:1000,
        easing:'easeInOutCubic',
        padding:100,
        onScrollStart:function(){
          $('.tipsy').hide();
        },
        onScrollEnd:function(){
          $('.tipsy').show();
        }
      });
    });
  });
  
  //init colorboxes
  $(".group1").colorbox({rel:'group1',maxHeight:'100%',scalePhotos:'true'});
  $(".group2").colorbox({rel:'group2',maxHeight:'100%',scalePhotos:'true'});
  $(".group3").colorbox({rel:'group3',maxHeight:'100%',scalePhotos:'true'});
  $(".group4").colorbox({rel:'group4',maxHeight:'100%',scalePhotos:'true'});
  $(".group5").colorbox({rel:'group5',maxHeight:'100%',scalePhotos:'true'});

  //place email
  $('#my-email').html(function(){
	var e = "evan";
	var a = "@";
	var d = "rusackas";
	var c = ".com";
	var h = 'mailto:' + e + a + d + c;
	$(this).parent('a').attr('href', h);
	return e + a + d + c;
  });
  
  //secret! snoo!
//  $(function() {
//    $( window ).konami({
//      cheat: function() {
//        
//        $('#reddit-alien, #overlayCaption, .upvote').removeClass('active');
//        
//        $.blockUI({ 
//          message: $('#overlayContent'), 
//          css: {
//                'width': '960px',
//                'color':'#fff',
//                'background': 'none',
//                'border':'none',
//                'margin-left':'-480px',
//                left:'50%',
//                top:'50%',
//                'margin-top':'-240px',
//                cursor:'default'
//               },
//          onBlock: function() { 
//            init();
//            disable_scroll();
//          },
//          overlayCSS:  { 
//            opacity:0.9, 
//            cursor:'default' 
//          },
//        }); 
//
//        
//        $('#overlayClose, #reddit-alien').click(function(){
//          $('#reddit-alien, #overlayCaption, .upvote').addClass('active');
//          setTimeout(function(){
//            $.unblockUI();
//            enable_scroll();
//          },3500);
//        });        
//      } // end cheat
//    });
//  });
  //init();
});



var colorSeed = 0;

function init() {
    if (window.top != window) {
        document.getElementById("header").style.display = "none";
    }

    createjs.CSSPlugin.install(createjs.Tween);

    //createjs.Ticker.setFPS(20);
    var count = 600;
    while (--count >= 0) {
        var box = document.createElement("div");
        box.style.width = "2px";
        box.style.height = "2px";
        box.style.position = "absolute";
        box.style.borderRadius = "2px";
        box.style.backgroundColor = "#0F0";
        $('.blockOverlay').first().append(box);
        var a = (Math.random()*Math.PI*2*16|0)/16;
        box.style.webkitTransform = "rotate("+a+"rad)";
        var d = 30;
        box.style.left = window.innerWidth/2+Math.cos(a-0.2-Math.random())*d+"px";
        box.style.top = window.innerHeight/2+Math.sin(a-0.2-Math.random())*d+"px";
        d = (Math.min(window.innerWidth,window.innerHeight)-16)/2*(Math.random()*0.3+0.7);
        var x = window.innerWidth/2+Math.cos(a)*d;
        var y = window.innerHeight/2+Math.sin(a)*d;
        createjs.Tween.get(box, {loop:true}, true).set({opacity:"0"},box.style).wait(Math.random()*1000+1|0).call(updateColor).to({top:y,left:x,width:16,height:4,opacity:1},Math.random()*1500+1000,easeIn);
    }
    // tween the base color that divs will be assigned when they start moving:
    createjs.Tween.get(this,{loop:true}).to({colorSeed:360},5000);
}

function updateColor(tween) {
    // grab the tween's target (the style object), and update it's color
    tween._target.style.backgroundColor = "hsl("+(Math.random()*60+colorSeed|0)+",100%,50%)";
}

// very simple easing equation:
function easeIn(ratio) {
    return ratio*ratio;
}

//prevent BG scrolling while overlay is on
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = [37, 38, 39, 40];

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function keydown(e) {
    for (var i = keys.length; i--;) {
        if (e.keyCode === keys[i]) {
            preventDefault(e);
            return;
        }
    }
}

function wheel(e) {
  preventDefault(e);
}

function disable_scroll() {
  if (window.addEventListener) {
      window.addEventListener('DOMMouseScroll', wheel, false);
  }
  window.onmousewheel = document.onmousewheel = wheel;
  document.onkeydown = keydown;
}

function enable_scroll() {
    if (window.removeEventListener) {
        window.removeEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = document.onkeydown = null;  
}
	