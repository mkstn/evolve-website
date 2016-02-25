
/* ==============================================
Theme Panel Style Switcher
=============================================== */

	$( "#theme-panel .panel-btn" ).click(function(){
		$( "#theme-panel" ).toggleClass( "panel-close", "panel-open", 800 );
		$( "#theme-panel" ).toggleClass( "panel-open", "panel-close", 400 );
		return false;
	});

	$('.color-switch').click(function(){
		var title = jQuery(this).attr('title');		
		jQuery('#color-skins').attr('href', 'css/colors/' + title + '.css');				
	  	return false;
    });	
