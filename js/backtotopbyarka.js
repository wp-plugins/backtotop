jQuery("#top").hide();
jQuery(function() {
	
	jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() > 100) {
			jQuery('#top').slideDown("slow");	
		} else {
			jQuery('#top').slideUp("slow");
		}
	});
 
	jQuery('#top').click(function() {
		jQuery('body,html').animate({scrollTop:0},600);
	});	
});