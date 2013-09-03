function computeSpace(){
	var compute = $(window).width() - $('#toolbar').width();
	compute = compute / 2;
	compute = Math.ceil(compute);
	return compute;
}
function getToolbarWidth(){
	//78 because
	//hidebar.width = 40
	//half-inch(req) = 18 * 2(Lft/right) = 36
	//two px space for border = 2px
	//total 78.
	var compute = $(window).width() - 78; 
	
	return compute;
}

var showButton = 0;
var chatShow = 0;

var $globalMarqueeReduxRL;
var $globalMarqueeReduxTB;



jQuery.cachedScript = function(url, options) {

  // allow user to set any option except for dataType, cache, and url
  options = $.extend(options || {}, {
    dataType: "script",
    cache: true,
    url: url
  });

  // Use $.ajax() since it is more flexible than $.getScript
  // Return the jqXHR object so we can chain callbacks
  return jQuery.ajax(options);
};

//price formatting
function numberFormat(price){
	var amt = parseFloat(price);
	return amt.toFixed(2);
}

//add commas
function commaSeparateNumber(val){
    while(/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
}

function showWindow(window){
	$(window).show();	
    
	if(window == '#showWindow' || window == '#cartWindow'|| window == '#jobWindow'){
		$(window).css({height: '0', 'bottom': '38px'});
	}else{
		$(window).css({height: '0', 'bottom': '38px'});
	}
    
	if(window ==  '#shopWindow' || window == '#shopWindow-bg' || window=='#jobWindow' || window=='#jobWindow-bg'){
		$(window).stop().animate({'height': '235px'}, 600);	
	}else{
		$(window).stop().animate({'height': '270px'}, 600);	
	}
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

var creSessionId = '';
var creSource = 'webservice.php';
var creBase = 'wowstore';
var cartItems = {};
var showImage = false;
var prevImage = '';
var onProducts = false;
var cartWeight = 0;


//example call
// getAPIManager().getProducts({
// 	success: function(data, textStatus, jqXHR){
// 		//do something
// 	},
// 	error: function(jqXHR, textStatus, errorThrown){
// 		//do something
// 	},
// 	complete: function(jqXHR, textStatus){
// 		//do something
// 	}
// });
//wowapi variables

$(function (){
var options = { "app_id":"app1", "app_key":"19e8a4d3bf", "server":"/api", "isAutoAuth": false };
var wowapi;
//initialize wow api
wowapi = new WowAPI(options);
wowapi.authenticate({
	success: function(data, textStatus, jqXHR){
		//get Session id from cre
		wowapi.getSession({
			success: function(data, textStatus, jqXHR){
				creSessionId = data;
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('Cannot get Session');
			},
			complete: function(jqXHR, textStatus){
				document.cookie ='lCsid='+creSessionId+'; path=/';
			}
		});

		wowapi.getShoppingCart({
			success: function(data, textStatus, jqXHR){
				$.each(data, function(key, value){
					cartItems[value.id] = 'added';
				});
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('Cannot get Shopping');
			},
			complete: function(jqXHR, textStatus){
				
			}
		});
	},
	error: function(jqXHR, textStatus, errorThrown){},
	complete: function(jqXHR, textStatus){}
})

/** 
 * Global access point for the
 * wowapi Manager.
 *
 * @return wowapi Wow API Manager
 */
getAPIManager = function(){
	return wowapi;
}

	$('#text-marquee-RL').marqueeRL();
	
	$("#toolbar").css({'width':getToolbarWidth(),'margin-right':'58px'});
	$("#toolbar-contents").css({'width':getToolbarWidth(),'margin-right':'58px'});
	$(window).resize(function(){
		$("#toolbar").css({'width':getToolbarWidth(),'margin-right':'58px'});
		$("#toolbar-contents").css({'width':getToolbarWidth(),'margin-right':'58px'});
	});
	
	//make text-marquee div top-left corner rounded 
	//if left side is zero 
	/*
	if($(".leftside").css("width") == "0px"){
		$("#toolbar-middle-container").css({"border-top-left-radius":"10px"});
		$("#text-marquee-container").css({"border-top-left-radius":"10px"});
	}*/

// ============ TOOLBAR BUTTONS =======================	

//When Menu is hidden, hides Shop and Cart window at the bottom of the screen
function hideWindowBottom(window){
    $(window).stop().animate({
            'height': '0',
            'bottom': '0px'
        }, 600,function() {$(window).hide();});
    $(window).removeClass('open');
    $(window).addClass('hidden');
}

    $('#shopContainer').click(function(){
    	if(onProducts){
    		if(cartItems[$('#addtocartBtn').data('product_id')] == null){
    			$('#addtocartBtn').text('Add To Cart');
				$('#item_note').css({display: 'none'});
    		}
    	}
    	if(showImage == true){
    		$('#items.shop_container').html(prevImage);
    		$('div.scrollbar').css({display: 'block'});
    		$('div.scrollbar').css({display: 'block'});
    		$('#image.prevShop').css({'margin-top': '120px'});
    		$('.prevShop').attr('id', 'channel');
    	}
    	hideWindow('#cartWindow');
		hideWindow('#cartWindow-bg');
		hideWindow('#jobWindow');
		hideWindow('#jobWindow-bg');
		if($('#shopWindow').hasClass('hidden')){
			showWindow('#shopWindow-bg');
			showWindow('#shopWindow');
			$('#shopContainer').addClass('selected');
			$('#cartContainer').removeClass('selected');
			$('#jobContainer').removeClass('selected');
			shop_move_space = $('.shop_container').height() - $('.shop_container ul').height();

			if(showImage == true){
				$('#shopWindow-bg').css({'width': '470px'});
				$('.shopWindowTitle').css({'width': '459px'});
			}
		}else{
			hideWindow('#shopWindow');
			hideWindow('#shopWindow-bg');
			
			$('#shopContainer').removeClass('selected');	
			$('#cartContainer').removeClass('selected');
			$('#jobContainer').removeClass('selected');			
		}
    });

    $('#cartContainer').click(function(){
    	cartWeight = 0;
    	cartTotal = 0;
    	var listitem = '';
    	var ulist = '';
    	cart_move = 0;
        hideWindow('#shopWindow');
		hideWindow('#shopWindow-bg');
		hideWindow('#jobWindow');
		hideWindow('#jobWindow-bg');
        if($('#cartWindow').hasClass('hidden')){
			showWindow('#cartWindow-bg');
			showWindow('#cartWindow');
			$('.innerContainer').hide();
			$('#cart_updating').css({display: 'block'});
			getAPIManager().getShoppingCart({
				success: function(data, textStatus, jqXHR){
					$.each(data, function(key, value){
						cartWeight += parseInt(value.weight);
						var itemTotal = Number(value.quantity) * Number(value.price);
						var addcomma_price = numberFormat(value.price);
						var addcomma_item_total = numberFormat(itemTotal);
						// listitem += '<li class=cart_items id='+value.id+'><div class=cart_left_container><input type=text class=quantity name=products_id['+value.id+'] value='+value.quantity+'></div><div class=carttextcontainer><span class=carttext>'+value.name+'</span></div><div class=cart_right_container><span class=price title=Each>$'+commaSeparateNumber(addcomma_price)+'</span><span class=totalprice title=Total>$'+commaSeparateNumber(addcomma_item_total)+'</span><div class=removefromcart title=Remove this item from cart></div><input class=hidden type=checkbox name=cart_delete['+value.id+'] value='+value.id+'></div></li>';
						listitem += '<li class=cart_items id='+value.id+'><div class=cart_left_container><input type=text class=quantity id=products['+value.item_id+'] name=products['+value.item_id+'] value='+value.quantity+'></div><div class=carttextcontainer><span class=carttext>'+value.name+'</span></div><div class=cart_right_container><span class=price title=Each>$'+commaSeparateNumber(addcomma_price)+'</span><span class=totalprice title=Total>$'+commaSeparateNumber(addcomma_item_total)+'</span><div class=removefromcart title=Remove this item from cart></div><input class=hidden type=checkbox name=cart_delete['+value.item_id+'] value='+value.id+'></div></li>';
						cartTotal = Number(cartTotal) + Number(itemTotal);
					});
					
					var addcomma_cart_total = numberFormat(cartTotal);
					ulist = '<ul class=cart>'+listitem+'</ul>';
					$('#checkout').text('Checkout (Total = $'+ commaSeparateNumber(addcomma_cart_total)+' )');
					$('ul.cart').replaceWith(ulist);
					$('#cart_updating').css({display: 'none'});
					$('.innerContainer').fadeIn('slow');
				},
				error: function(jqXHR, textStatus, errorThrown){
					alert('fail');
				},
				complete: function(){
					$('#cartContainer').addClass('selected');
					$('#shopContainer').removeClass('selected');
					cart_move_space = $('.cart_container').height() - $('ul.cart').height();
				}
			});
		}else{
            hideWindow('#cartWindow');
			hideWindow('#cartWindow-bg');
			$('#cartContainer').removeClass('selected');
			$('#shopContainer').removeClass('selected');
			$('#jobContainer').removeClass('selected');
        }
    });
    
	
	
	
	 $('#jobContainer').click(function(){
        hideWindow('#shopWindow');
		hideWindow('#shopWindow-bg');
		hideWindow('#cartWindow');
		hideWindow('#cartWindow-bg');
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
			$('#cartContainer').removeClass('selected');
			$('#shopContainer').removeClass('selected');
			job_move_space = $('.job_container').height() - $('.job_container ul').height();
			if(showImage == true){
				$('#jobWindow-bg').css({'width': '470px'});
				$('.jobWindowTitle').css({'width': '459px'});
			}
		}else{
            hideWindow('#jobWindow');
			hideWindow('#jobWindow-bg');
			$('#cartContainer').removeClass('selected');
			$('#shopContainer').removeClass('selected');
			$('#jobContainer').removeClass('selected');
        }
    });
    
    $('img#hideShop').live('click', function(){
        hideWindow('#shopWindow');
		hideWindow('#shopWindow-bg');
		$('#shopContainer').removeClass('selected');
    });
    
    $("img#hideCart").live('click', function(){
        hideWindow('#cartWindow');
		hideWindow('#cartWindow-bg');
		$('#cartContainer').removeClass('selected');
    });
	
	$("img#hideJob").live('click', function(){
        hideWindow('#jobWindow');
		hideWindow('#jobWindow-bg');
		$('#jobContainer').removeClass('selected');
    });

// ================== TOOLBAR SHOW/HIDE=================
	/**
	 *	If chatShow = 0 then chat is VISIBLE hence process outsideFrame
	 *	If chatShow = 1 then chat is INVISIBLE hence process miniOutsideFrame
	 */
	$('.hidebar').click(function(){
		
		$('.leftside').hide();
		$('.rightside').hide();
		$('#hidebar-container').slideToggle('fast');
		$('#hidebar-bg').slideToggle('fast');
		$('#toolbar').slideToggle("fast");
		$('#toolbar-middle-container').slideToggle('fast');
		$('#toolbarbut').fadeIn("slow");
		$('#shopWindow').animate({bottom: '5'},200);
		$('#shopWindow-bg').animate({bottom: '5'},200);
		$('#cartWindow').animate({bottom: '5'},200);
		$('#cartWindow-bg').animate({bottom: '5'},200);
		//Hides Shop and Cart window when Menu is hidden (if they aren't minimized already)
		hideWindowBottom('#shopWindow');
		hideWindowBottom('#shopWindow-bg');
		hideWindowBottom('#cartWindow');
		hideWindowBottom('#cartWindow-bg');
		hideWindowBottom('#jobWindow');
		hideWindowBottom('#jobWindow-bg');
		showButton = 1;
		
		if (chatShow == 0){			
			$("#outsideFrame").animate({
				bottom: '21'
				}, 200, function() {
					
				}
			);
		}
		else if (chatShow == 1){
			$("#miniOutsideFrame").animate({
				height: '0',
				opacity: '0'
				}, 200, function() {	
					$('#miniOutsideFrame').hide();
				}
			);
		}
	});
	/**
	 *	If chatShow = 0 then chatContainer is VISIBLE hence process outsideFrame
	 *	If chatShow = 1 then chatContainer is INVISIBLE hence process miniOutsideFrame
	 */				
	$('.showbar').click(function(){
		
		$('.leftside').show();
		$('.rightside').show();
		$('#hidebar-container').slideToggle('fast');
		$('#hidebar-bg').slideToggle('fast');
		$('#toolbar').slideToggle('fast');
		$('#toolbar-middle-container').slideToggle('fast');
		$('#toolbarbut').fadeOut('slow');
		$('#shopWindow').animate({bottom: '38'},200);
		$('#shopWindow-bg').animate({bottom: '38'},200);
		$('#cartWindow').animate({bottom: '38'},200);
		$('#cartWindow-bg').animate({bottom: '38'},200);
		$('#jobWindow').animate({bottom: '38'},200);
		$('#jobWindow-bg').animate({bottom: '38'},200);
		showButton = 0;
		
		if (chatShow == 0){
			$('#outsideFrame').show();
			$("#outsideFrame").animate({
				bottom: '38'
				}, 200);
		}
		else if (chatShow == 1){
			$('#miniOutsideFrame').show();
			$("#miniOutsideFrame").animate({
				height: '20px',
				opacity: '1'
				}, 200);
		}
	});
});
