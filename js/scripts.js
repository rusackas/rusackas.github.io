$(function () {
  //pre-select nodes
  'use strict';
  var headerbar = $('#headerbar'), headerlogo_bottom = $('#headerlogo_bottom'), currentTopSection;
  
  $(window).scroll(function () {
    
    //
    var scrolltop = $(window).scrollTop(), opacity = 100, blur = 0;
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
    updateScrollStatuses();
    
    //update nav to highlight highest current onscreen item
    currentTopSection = $('section.offhigh:last').next('section').attr('id');
    //console.log(currentTopSection);
    $('#nav_'+currentTopSection).addClass('active').siblings().removeClass('active');
  });

  //horiz scrolling hexes
  $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
    {
      height : 3000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
      onScroll : function (percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
      //console.log(percent);
      }
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
    height: 420,
    backgroundopacity: 0,
    coverwidth: 500,
    mousewheel: false,
    covergap:80,
    coverangle:50,
    reflectionopacity:.1
  });
  
  //init nav dots
  var navHTML = '', sectionID;
  $('section').each(function(){
    sectionID = $(this).attr('id');
    //console.log('section found');
    navHTML += '<a href="#' + sectionID + '" id="nav_' + sectionID + '" original-title="' + $(this).attr('data-title') + '"></a>';
  });
  //navHTML += '<a href="#footer"></a>'
  $('#nav_dots').html(navHTML);
  //nav dot tipsys
  $('#nav_dots a').tipsy({fade: true, gravity: $.fn.tipsy.autoNS});
  
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

function updateScrollStatuses() {
  //keep track of whats onscreen
  'use strict';
  $('body .watchpos, section').each(function () {
    var $this = $(this),
      docViewTop = $(window).scrollTop(),
      docViewBottom = docViewTop + $(window).height(),
      elemTop = $this.offset().top,
      elemBottom = elemTop + $this.height();


    if ((elemBottom <= docViewBottom) && (elemTop >= docViewTop)) {
      $this.addClass('onscreen');
      $this.removeClass('offscreen');
    } else {
      $this.addClass('offscreen');
      $this.removeClass('onscreen');
    }
    if (elemBottom > docViewBottom) {
      $this.addClass('offlow');
    } else { $this.removeClass('offlow'); }
    if (elemTop < docViewTop) {
      $this.addClass('offhigh');
    } else { $this.removeClass('offhigh'); }
  });
}

