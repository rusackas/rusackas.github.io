$(function () {
  //pre-select nodes
  'use strict';
  var headerbar = $('#headerbar'), headerlogo_bottom = $('#headerlogo_bottom');
  
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
  coverflow('player').setup({
    flash: 'coverflow.swf',
    playlist: 'playlist.json',
    width: 960,
    height: 360,
    backgroundopacity: 0,
    coverwidth: 500
  });
  coverflow('player2').setup({
    flash: 'coverflow.swf',
    playlist: 'playlist.json',
    width: 960,
    height: 360,
    backgroundopacity: 0,
    coverwidth: 500
  });
  
});

function updateScrollStatuses() {
  //keep track of whats onscreen
  'use strict';
  $('body *').each(function () {
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

