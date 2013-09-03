var showImage = false;
var prevImage = '';
function computeSpace(){
	var compute = $(window).width() - $('#toolbar').width();
	compute = compute / 2;
	compute = Math.ceil(compute);
	return compute;
}
function getToolbarWidth(){
	
	var compute = $(window).width() - 78; 
	
	return compute;
}

function showWindow(window){
	$(window).show();
	$(window).css({height: '0', 'bottom': '38px'});
	$(window).stop().animate({'height': '235px'}, 600);	
    $(window).removeClass('hidden');
    $(window).addClass('open');
}
function hideWindow(window){
    $(window).stop().animate({
            'height': '0',
            'bottom': '35px'
        }, 600,function() {$(window).hide();});
    $(window).removeClass('open');
    $(window).addClass('hidden');
}	
function hideWindowBottom(window){
		$(window).stop().animate({
				'height': '0',
				'bottom': '0px'
			}, 600,function() {$(window).hide();});
		$(window).removeClass('open');
		$(window).addClass('hidden');
}
$(function (){
	$("#toolbar").css({'width':getToolbarWidth(),'margin-right':'58px'});
	$("#toolbar-contents").css({'width':getToolbarWidth(),'margin-right':'58px'});
	$(window).resize(function(){
		$("#toolbar").css({'width':getToolbarWidth(),'margin-right':'58px'});
		$("#toolbar-contents").css({'width':getToolbarWidth(),'margin-right':'58px'});
	});
	
	
	
	$('#jobContainer').click(function(){
		if(showImage == true){
    		$('#items.job_container').html(prevImage);
    		$('div.scrollbar').css({display: 'block'});
    		$('div.scrollbar').css({display: 'block'});
    		$('#image.prevJob').css({'margin-top': '120px'});
    		$('.prevJob').attr('id', 'channel');
    	}
        if($('#jobWindow').hasClass('hidden')){
			showWindow('#jobWindow-bg');
			showWindow('#jobWindow');
			$('#jobContainer').addClass('selected');
			job_move_space = $('.job_container').height() - $('.job_container ul').height();
			if(showImage == true){
				$('#jobWindow-bg').css({'width': '470px'});
				$('.jobWindowTitle').css({'width': '459px'});
			}
		}else{
            hideWindow('#jobWindow');
			hideWindow('#jobWindow-bg');
			$('#jobContainer').removeClass('selected');
        }
		
    });
    $("img#hideJob").live('click', function(){
        hideWindow('#jobWindow');
		hideWindow('#jobWindow-bg');
		$('#jobContainer').removeClass('selected');
    });
	$('.hidebar').click(function(){
		$('.leftside').hide();
		$('#hidebar-container').slideToggle('fast');
		$('#hidebar-bg').slideToggle('fast');
		$('#toolbar').slideToggle("fast");
		$('#toolbar-middle-container').slideToggle('fast');
		$('#toolbarbut').fadeIn("slow");
		$('#jobWindow').animate({bottom: '5'},200);
		$('#jobWindow-bg').animate({bottom: '5'},200);
		hideWindowBottom('#jobWindow');
		hideWindowBottom('#jobWindow-bg');
		showButton = 1;
	});
	$('.showbar').click(function(){
		
		$('.leftside').show();
		$('#hidebar-container').slideToggle('fast');
		$('#hidebar-bg').slideToggle('fast');
		$('#toolbar').slideToggle('fast');
		$('#toolbar-middle-container').slideToggle('fast');
		$('#toolbarbut').fadeOut('slow');
		$('#jobWindow').animate({bottom: '38'},200);
		$('#jobWindow-bg').animate({bottom: '38'},200);
		showButton = 0;
		
		
	});
	
});