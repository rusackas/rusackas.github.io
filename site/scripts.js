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
    
  });
  
});