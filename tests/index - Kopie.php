<?php 
// Copyright (c) 2014 Benjamin Schnabel <Benjamin-777@gmx.de>
// Template for Adon Jeschua
// All rights reserved. No warranty, explicit or implicit, provided.

defined('_JEXEC') or die ;
//detecting site title
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
JHtml::_('jquery.framework');
JHtml::_('bootstrap.framework');
$doc->addScript('templates/'.$this->template.'/js/mainmenu.js');

	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhmtl1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:///www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<meta charset="UTF-8" />
		<jdoc:include type="head" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/overrides.css" type="text/css" media="screen" />
		<link rel="apple-touch.icon-precomposed" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/apple-touch-icon.png" />
		<?php if($this->direction == 'rtl') : ?>
			<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/rtl.css" type="text/css" rel="stylesheet" />
		<?php endif; ?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery-2.1.0.min.js"></script>
				
<script type="text/javascript">

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

</script>

	</head>
	<body >
	
		<hr id="top" />
		<div class="container-fluid">

			<div class="row">
			<div class="col-md-2 col-md-push-2">
				<!-- Logo -->
				<div class="col-md-12">
					<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this -> template; ?>/images/logo.gif" id ="logo" alt="Logo" class="customImage img-responsive logo">
				</div>
				<!-- Left Side -->
					<!--Left Termine -->					
					<div class="col-md-12">
						<jdoc:include type="modules" name="termine" title="Termine" style="xhtml"/>
					</div>

					<!-- Left Hinweise -->
					<div class="col-md-12">
						<jdoc:include type="modules" name="hinweise" title="Hinweise" style="xhtml"/>
					</div>
					
					<!-- Left Extras -->
					<div class="col-md-12">
						<jdoc:include type="modules" name="extras" title="Extras" style="xhtml" />
					</div>
				</div>
	
				<div class="col-md-10">
				<!-- Main Menu -->
				<div class="col-md-8">
					<nav class="mainmenu" role="navigation" id="mainmenu">
						<!--<ul class="nav navbar-nav">-->
							<jdoc:include type="modules" name="mainmenu" type="none" title="Main Menu" style="none"/>
						<!--</ul>-->
					</nav>
				</div>
				<!-- Language -->
				<div class="col-md-2" id="language">
					<jdoc:include type="modules" name="language" title="Language" style="none"/>
				</div>
				<!-- Line -->
				<!--<hr class="col-md-10" id="up" />-->
				<div class="row">
				<div class="col-md-8"></div>
					<!-- Search -->
					<div class="col-md-2 hidden-xs">
						<jdoc:include type="modules" name="search" title="Search" style="none"/>
					</div>
					<!-- Breadcrumb -->
					<div class="row">
						<div class="col-md-6">
							<ol class="breadcrumb">
								<jdoc:include type="modules" name="Breadcrumbs" style="xhtml"/>
							</ol>
						</div>
					</div>
				</div>
				<!-- Content -->
				<!-- Mainbody Top -->
				<div class="col-md-8">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<jdoc:include type="modules" name="slider" title="Mainbody_Top_Left" style="xhtml" >
				</div>
				<!-- Right Side -->
				<div class="col-md-3">
					<div class="col-md-12">
						<jdoc:include type="modules" name="right-1" title="Right_1" style="xhtml" />
					</div>
					<div class="col-md-12">
						<jdoc:include type="modules" name="right-2" title="Right_2" style="xhtml" />
					</div>
					<div class="col-md-12">
						<jdoc:include type="modules" name="right-3" title="Right_3" style="xhtml" />
					</div>
					<div class="col-md-12">
						<jdoc:include type="modules" name="right-4" title="Right_4" style="xhtml" />
					</div>
					<div class="col-md-12">
						<jdoc:include type="modules" name="right-5" title="Right_5" style="xhtml" />
					</div>
				</div>
			</div>
			</div>
			<!-- Teaser up -->
			<br />
			<div class="col-md-2 col-md-offset-1">
				<jdoc:include type="modules" name="teaser-up-1" title="Teaser_Up_1" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="teaser-up-2" title="Teaser_Up_2" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="teaser-up-3" title="Teaser_Up_3" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="teaser-up-4" title="Teaser_Up_4" style="xhmtl" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="teaser-up-5" title="Teaser_Up_5" style="xhtml" />
			</div>
			<!-- Teaser down -->
			<div class="col-md-2 col-md-offset-1">
				<jdoc:include type="modules" name="teaser-down-1" title="Teaser_Down_1" style="xhmtl" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="teaser-down-2" title="Teaser_Down_2" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="teaser-down-3" title="Teaser_Down_3" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="teaser-down-4" title="Teaser_Down_4" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="teaser-down-5" title="Teaser_Down_5" style="xhtml" />
			</div>
			<!-- Footer -->
			<div class="row">
				<br />
				<hr  class="col-md-8 col-md-offset-2"/>
				<div class="col-md-12" align="right">
					<jdoc:include type="modules" name="footer" title="Footer" style="xhtml" align="right"/>
				</div>
			</div>
			<jdoc:include type="modules" name="debug" />
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo $this->template; ?>/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
