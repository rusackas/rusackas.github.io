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

  console.log('hi');
        $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
            {
            height: 3000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                //console.log(percent);
            }
        });
  
});
