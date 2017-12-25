//scripts for the main menu

		//Initialisieren
		//alle submenus loeschen -> macht das css
jQuery(function() {
		jQuery('.nav-header').click(function () {
    	// hover in
    	console.log('Hover In');
		var a = jQuery(this).parents();
		//anderes submenu anzeigen
    	console.log(a[1].nodeName);

    	if (jQuery(this).parent().hasClass('parent')) {
    	    console.log("has parent");
			jQuery(this).siblings('ul.submenu').css({
			'display': 'inline'
			}).fadeTo('', '1.0');
		}
  		}
  		//, function () {
	   	//hover out
	   	//   jQuery('ul.submenu').css({
	   	//     'display': 'none',
	   	//     'opacity': '0.0'
	   	//   });
	    //	console.log('hover out');
	  );
});

		//display triangle if submenu exists
//jQuery(function () {
//  jQuery('.mainmenu ul li.active a').closest('ul.submenu').after('<img src="/adonjeschua/templates/adonjeschua/images/triangle.png" class="triangle"/>');
//});
