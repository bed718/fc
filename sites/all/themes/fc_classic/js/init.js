Drupal.behaviors.loginblock = {
	attach: function (context, settings) {
		jQuery('.user-login-block').css('display', 'none');
		jQuery('.user-login-block .close-btn').click(function(){jQuery('.user-login-block').slideToggle(500);});
		jQuery('.show-login').click(function(){jQuery('.user-login-block').slideToggle(500);});
	}	
}

Drupal.behaviors.usernav = {
	attach: function (context, settings) {
		jQuery('#user-nav ul li').hover(function(){jQuery('ul', this).stop(true, true).fadeIn(200);}, function(){jQuery('ul', this).delay(200).fadeOut(200);});
	}	
}

Drupal.behaviors.ttips = {
	attach: function (context, settings) {
		jQuery(".basic-tip[title]").tooltip({
		   offset: [20, 0],
		   effect: 'slide',
		   tipClass: 'tip-bottom', 
		   position: ['bottom', 'center']
		});
		
		jQuery(".top-tip[title]").tooltip({
		   offset: [0, 0],
		   effect: 'slide',
		   tipClass: 'tip-top', 
		   position: ['top', 'center']
		});
	}
};


Drupal.behaviors.showMore = {
	attach: function (context, settings) {
		jQuery('.more-toggle').click(function(){
			var target = jQuery(this).parent().children(jQuery(this).attr('rel'));
			
			
			if(jQuery(target).hasClass('opened')){
				jQuery(target).removeClass('opened');
				jQuery(target).animate({height: jQuery(target).attr('start_height')}, 700);
				jQuery(this).text('(click to show more)');
			}else{
				jQuery(target).addClass('opened');
				jQuery(this).text('(click to show less)');
				if(!jQuery(target).hasClass('heights-set')){
					jQuery(target).attr('start_height', jQuery(target).height());
					jQuery(target).addClass('get-height');
					jQuery(target).attr('targ_height', jQuery(target).height());
					jQuery(target).removeClass('get-height');
					jQuery(target).addClass('heights-set');
					
				}
				jQuery(target).stop(true, true).animate({height: jQuery(target).attr('targ_height')}, 700);
				
			}			
		});
	}	
}

Drupal.behaviors.opendonations = {
	attach: function (context, settings) {
		jQuery('.show-doantion').click(function(){jQuery(this).parent().parent().parent().children('.donation-holder').slideDown(500); return false;});
		jQuery('.donation-block .close-btn').click(function(){jQuery(this).parent().parent().slideUp(500); return false;});
	}	
}
