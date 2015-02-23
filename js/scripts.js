
// @codekit-prepend "../bower_components/jquery/dist/jquery.min.js"
// @codekit-prepend "../bower_components/modernizr/modernizr.js"
// @codekit-prepend "../bower_components/tipsy/src/javascripts/jquery.tipsy.js"
// @codekit-prepend "../bower_components/colorbox/jquery.colorbox-min.js"
// @codekit-prepend "../bower_components/animatescroll/animatescroll.min.js"
// @codekit-prepend "../bower_components/scrolltracker/jquery.scrolltracker.js"
// @codekit-no-prepend "../bower_components/jquery-throttle-debounce/jquery.ba-throttle-debounce.min.js"
// @codekit-no-prepend "../bower_components/blockui/jquery.blockUI.js"
// @codekit-no-prepend "../bower_components/tweenjs/src/Tween.js"
// @codekit-prepend "CSSPlugin.js"
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
  
  $.scrolltracker('body .watchpos, section');

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
    
    //$.scrolltracker('body .watchpos, section');
    
    
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

  
  //about li hovers
  var colorArray = [ "#97A68D", "#BEBF93", "#A68E46", "#594022", "#6B8250", "#2A6170" ];
  colorArray.sort(function () { return 0.5 - Math.random(); });
  $('.about li').mouseover(function () {
    //console.log('hover');
    $('.colorbacker').css({'background-color' : colorArray[$(this).index()]});
  }).mouseout(function () {
    $('.colorbacker').css({'background-color' : '#ffffff'});
  });
    
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
  
});