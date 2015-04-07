/**
 * 
 */

//scripts for the main menu

	$(document).ready(function() {
		//Initialisieren
		//alle submenus loeschen -> macht das css

		$('.mainmenu ul li').hover(function () {
		//hover fadeIn
		//console.log("Hover In");
		//aktives submenu loeschen
		//$('.active li ul.submenu').css({

		//anderes submenu anzeigen
		//$(this).fadeOut('fast');
		a = $(this).parents();
		console.log(a[1].nodeName);
		if($(this).hasClass('parent')) {
		$('ul.submenu').css({
		'display' : 'none',
		'opacity' : '0.0'
		});

		$(this).children('ul.submenu').css({
		'display': 'block'
		}).fadeTo('', '1.0');
		}//else{
		//$(this).children('ul.submenu').css({
		//'display' : 'none',
		//'opacity' : '0.0'
		//});
		//}
		}, function () {
		//hover fadeOut
		//	console.log("Hover Out");
		//if(!$(this).hasClass('parent') && (!$(this).parents('.submenu'))) {
		if('.mainmenu ul li :not(ul.submenu)'){
		$('ul.submenu').css({
		'display' : 'none',
		'opacity' : '0.0'
		});
		}
		//   $('ul.submenu').css({
		//   'display': 'block'
		//	}).fadeTo('', '0.0');

		//aktives Submenu anzeigen
		// $('.active li ul.submenu').css({
		//     'display': 'block'
		// }) .fadeTo('', '1.0');
		});
		});

		//display 1st submenu
		//$(document).ready(function() {
		//	console.log("submenu");
		//	$(".active li ul.submenu").css({
		//    "display" : "block", "opacity" : "1.0"});
		//});

		//display triangle if submenu exists
		$(document).ready(function() {
		$('.mainmenu ul li.active a').closest('ul.submenu').after('<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/triangle.png" class="triangle"/>');
			});