$(function() {
  $( window ).scroll(function() {
    var scrolltop = $( window ).scrollTop();
    var opacity = 100;
    var blur = 0;
    if(scrolltop <= 250){
      opacity = (100-(scrolltop/2.5))/100;
      blur = scrolltop/30;
    }
    else opacity=0;
    $('#logoshadow').css({
      'top':(scrolltop/5)+20,
      'opacity':opacity,
      '-webkit-filter':'blur('+blur+'px)',
      'filter':'blur('+blur+'px)'
    });
    
    updateScrollStatuses();
    
  });

  //horiz scrolling hexes
  $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
      {
      height: 3000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
      onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
          //console.log(percent);
      }
  });
  
  //about li hovers
  var colorArray = new Array( "rgb(255,0,0)", "rgb(0,255,0)", "rgb(0,0,255)", "rgb(255,255,0)", "rgb(0,255,255)", "rgb(255,0,255)" );
  $('.about li').mouseover(function(){
    console.log('hover');
    $('.colorbacker').css({'background-color':colorArray[$(this).index()]});
  }).mouseout(function(){
    $('.colorbacker').css({'background-color':'rgb(255,255,255)'});
  });
  
  updateScrollStatuses();
  
});

function updateScrollStatuses(){
  //keep track of whats onscreen
  $('body *').each(function(){
      var $this = $(this);
      
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();

      var elemTop = $this.offset().top;
      var elemBottom = elemTop + $this.height();

      
      if((elemBottom <= docViewBottom) && (elemTop >= docViewTop)){
        $this.addClass('onscreen');
        $this.removeClass('offscreen');
      }
      else{
        $this.addClass('offscreen');
        $this.removeClass('onscreen');
      }
      if(elemBottom > docViewBottom) $this.addClass('offlow');
      else $this.removeClass('offlow');
      if(elemTop < docViewTop) $this.addClass('offhigh');
      else $this.removeClass('offhigh');
    });
}

