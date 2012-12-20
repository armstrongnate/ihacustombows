<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript" src="js/smooth.pack.js"></script>
<script>
$(document).ready(function() {
 
    //get all link with class panel
    $('a.panel').click(function () {
 
                //reset and highlight the clicked link
        $('a.panel').removeClass('selected');
        $(this).addClass('selected');
         
        //grab the current item, to be used in resize function
        current = $(this);
         
                //scroll it to the destination
        $('#wrapper').scrollTo($(this).attr('href'), 800);      
         
                //cancel the link default behavior
        return false;
});
    //resize all the items according to the new browser size
    $(window).resize(function () {
         
        //call the resizePanel function
        //resizePanel();
    });
     
});

function resizePanel() {
 
    //get the browser width and height
    width = $(window).width();
    height = '100%';
 
    //get the mask width: width * total of items
    mask_width = width * $('.item').length;
         
    //set the dimension 
    $('#wrapper, .item').css({width: width, height: height,});
    $('#mask').css({width: mask_width, height: height});
     
    //if the item is displayed incorrectly, set it to the corrent pos
    $('#wrapper').scrollTo($('a.selected').attr('href'), 0);
         
}
</script>
<script>
// changing bg of bowStyles
$(function() {
    $('ul.bowStyles li a').click(function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.closest('ul.bowStyles').children('li').removeClass('active');
        $this.parent().addClass('active');
    });
});

// home page slider
$(document).ready(function() {
	$("#slide1-1").click(function() {
		$("#slide1_images").css("left","0");
	});
	$("#slide1-2").click(function() {
		$("#slide1_images").css("left","-480px");
	});
	$("#slide1-3").click(function() {
		$("#slide1_images").css("left","-960px");
	});
	$("#slide1-4").click(function() {
		$("#slide1_images").css("left","-1440px");
	});
});

// testimonials slider  
<!-- include jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript"></script>
<script>
$(document).ready(function() {
    $('#testimonials1')
	.before('<div id="testimonials_nav">')
	.cycle({
        fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, scrollRight, shuffle
		timeout: 7000
		//pager:  '#testimonials_nav' 
     });
	 
	// mouseover pause
	$('#testimonials1').mouseover(function() { 
		$('#testimonials1').cycle('pause'); 
    });
	
	$('#testimonials1').mouseout(function() { 
		$('#testimonials1').cycle('resume'); 
    });
});
</script>

<!-- Form Stuff -->
<script src="js/modernizr.js"></script>

<script>
$(document).ready(function(){

if(!Modernizr.input.placeholder){

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});

}

</script>
