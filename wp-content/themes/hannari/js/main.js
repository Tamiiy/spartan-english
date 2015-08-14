jQuery(document).ready(function(){
	// Dropdown menu
	jQuery('.menu li').hover(function(){
		jQuery(this).children('a').addClass('hover');
		jQuery(this).children('.sub-menu').css({'display':'block'});
	}, function(){
		jQuery(this).children('a').removeClass('hover');
		jQuery(this).children('.sub-menu').css({'display':'none'});
	});
	
	jQuery('.menu li').hover(function(){
		jQuery(this).children('a').addClass('hover');
		jQuery(this).children('.children').css({'display':'block'});
	}, function(){
		jQuery(this).children('a').removeClass('hover');
		jQuery(this).children('.children').css({'display':'none'});
	});
	
	jQuery('.widget .menu').addClass('menuwidget');
	jQuery('.widget .menuwidget').removeClass('menu');
	jQuery('.column4 .menu').addClass('menuwidget');
	jQuery('.column4 .menuwidget').removeClass('menu');	
	jQuery('#footer .column4 .widget').addClass('column4');
	jQuery('#footer .column4 .column4').removeClass('widget');

	// Mobile
	jQuery('.mobilemenu_toggle').click(function(eventObject) {
		eventObject.preventDefault();
	}).toggle(function(){
		jQuery(this).parents('.menuwrapp_mobile').find('.menu_mobile').slideDown(200);
	}, function(){
		jQuery(this).parents('.menuwrapp_mobile').find('.menu_mobile').slideUp(200);
	});
	
	// Input focus
	jQuery("#search").focus(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery("#s label").css({"display":"none"});
	});
	jQuery("#search").blur(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery("#s label").css({"display":"block"});
	});
	jQuery('#commentform input:text, #commentform input:password, #commentform textarea').focus(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery(this).parent('p').children('label').css({"display":"none"});
	});
	jQuery('#commentform input:text, #commentform input:password, #commentform textarea').blur(function(){
		var value = jQuery(this).attr("value");
		if (value == "")
		jQuery(this).parent('p').children('label').css({"display":"block"});
	});

	// Borders None, Margins None
	jQuery('.menu > li:first-child').css({'background':'none'});
	jQuery('.menu ul > li:first-child').css({'background':'none'});
	
	jQuery('.menu .sub-menu > li:first-child').css({'border':'none'});
	jQuery('.menu .children > li:first-child').css({'border':'none'});
	jQuery('.columnwrapp .column4:nth-child(4n)').css({'margin-right':'0'});
	jQuery('#footer .column4:nth-child(4n)').css({'margin-right':'0'});
	
}); //Final Ready