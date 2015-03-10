<!DOCTYPE html>
<html>
<head>
	<title>Untitled</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$( document ).ready(function() {

  jQuery.fn.extend({
      getPath: function () {
          var path, node = this;
          this.stop
          while (node.length) {
              var realNode = node[0], name = realNode.localName;
              if (!name || name =='body') break;
              name = name.toLowerCase();

              var parent = node.parent();

              var sameTagSiblings = parent.children(name);
              if (sameTagSiblings.length > 1) { 
                  allSiblings = parent.children();
                  var index = allSiblings.index(realNode) + 1;
                  name += ':nth-child(' + index + ')';
              }

              path = name + (path ? '>' + path : '');
              node = parent;
          }

          return path;
      }
  });

  //$('iframe').clone(true,true).appendTo('body');
  //$('iframe').contents().find('section').hide();
  $('body').css({
    'transform':'scale(0.5)'
    }).attr('id','body1').clone(true,true).appendTo('html').attr('id','body2').css({
    'transform':'scale(0.5)'
  });
  $('#body1 *').on('mouseenter mouseleave', function (e) {
    event.stopPropagation();
    //console.log($(this).getPath());
    var selector = $(this).getPath();
    //$(selector).trigger(e.type);
    //var mirror = $(this).parents('body').siblings('body').find(selector);
    var mirror = $('#body2').find(selector);
    //mirror.trigger('mouseover');
    if(e.type == 'mouseenter') mirror.addClass('hover');
    else if(e.type == 'mouseleave') mirror.removeClass('hover');
    //console.log(selector);
    //return false;
  });
  
  $('#body2 link').each(function(){
    var extension = $(this).attr('href').split('.').pop();
    if(extension == "css"){
      //console.log($(this).attr('href'));
      $.ajax({
          type: "GET",
          url: $(this).attr('href'),
          success: function (css) {
              var newcss = css.split(':hover').join('.hover');
              //console.log(newcss);
              //look in this mess with regex for :hover selectors.
              //clone as .hover selectors and insert styles
              $("<style type='text/css'>" + newcss + "</style>").prependTo($('#body2')); // BORKED, TO DO
          }
      });
    }
  });
  
});
	</script>
	<style type="text/css">
	#body1{
	  left:-25%;
	}
	#body2{
	  right:-25%;
	}
	body, html{
	width:100%;
	height:100%;
	position:absolute;
	top:0;
	}
	  iframe{
	    border:none;
	    height:100%;
	    width:50%;
	    float:left
	  }
	</style>
</head>
<body>
<!--<iframe src="index.php" width="500" height="500">
</iframe>-->
<? include('index.php'); ?>
</body>
</html>
