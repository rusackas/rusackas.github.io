
// @codekit-prepend "../bower_components/jquery/dist/jquery.min.js"
// @codekit-prepend "../bower_components/modernizr/modernizr.js"
// @codekit-prepend "../bower_components/tipsy/src/javascripts/jquery.tipsy.js"
// @codekit-prepend "../bower_components/colorbox/jquery.colorbox-min.js"
// @codekit-prepend "../bower_components/animatescroll/animatescroll.min.js"
// @codekit-prepend "../bower_components/jquery-throttle-debounce/jquery.ba-throttle-debounce.min.js"
// @codekit-prepend "coverflow.js"


$(function () {
  
  'use strict';
  
  //$(window).stellar();
  
  var headerbar = $('#headerbar'), headerlogo_bottom = $('#headerlogo_bottom'), currentTopSection;
  
  var windowheight=$(window).height();
  
  function updateScrollStatuses() {
    //keep track of whats onscreen
    'use strict';
    //docViewTop = $(window).scrollTop()
    var scrolltop = $(window).scrollTop(), docViewBottom = scrolltop + windowheight, opacity = 100, blur = 0;
    if (scrolltop <= 250) {
      opacity = (100 - (scrolltop / 2.5)) / 100;
      blur = scrolltop / 30;
    } else { opacity = 0; }

    //lock header to top
    if (scrolltop >= 400) {
      headerbar.addClass('fixed');
      headerlogo_bottom.addClass('barred');
    } else { 
      headerbar.removeClass('fixed'); 
      headerlogo_bottom.removeClass('barred');
    }  
    
    //set oncreen/offscreen classes
    $('body .watchpos, section').each(function () {
      var $this = $(this),
        elemTop = $this.offset().top,
        elemBottom = elemTop + $this.height();
      if ((elemBottom <= docViewBottom) && (elemTop >= scrolltop)) {
        $this.addClass('onscreen');
        $this.removeClass('offscreen');
      } else {
        $this.addClass('offscreen');
        $this.removeClass('onscreen');
      }
      if (elemBottom > docViewBottom) {
        $this.addClass('offlow');
      } else { $this.removeClass('offlow'); }
      if (elemTop < scrolltop) {
        $this.addClass('offhigh');
      } else { $this.removeClass('offhigh'); }
      if (elemTop > docViewBottom) {
        $this.addClass('allofflow');
      } else { $this.removeClass('allofflow'); }
    });
    
    //update nav to highlight highest current onscreen item
    currentTopSection = $('section.offhigh:last').next('section').attr('id');
    //console.log(currentTopSection);
    $('#nav_'+currentTopSection).addClass('active').siblings().removeClass('active');
  }
  
  //$(window).scroll($.throttle(250, updateScrollStatuses));
  //$(window).scroll($.debounce(250, updateScrollStatuses));
  //$(window).scroll(updateScrollStatuses);
  $(window).on('scroll', function() {
    window.requestAnimationFrame(updateScrollStatuses);
  });
  
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
  
});


