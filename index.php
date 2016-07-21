<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> refs/remotes/origin/master
// Copyright (c) 2014 Benjamin Schnabel <Benjamin-777@gmx.de>
// Template for Adon Jeschua
// All rights reserved. No warranty, explicit or implicit, provided.

<<<<<<< HEAD
defined('_JEXEC') or die;
error_reporting(E_ERROR & E_WARNING & E_NOTICE); //use for debug, not for production stable
//detecting site title
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
//JHtml::_('jquery.framework'); Todo: fix
//JHtml::_('bootstrap.framework'); Todo: fix
//$doc->addScript('templates/'.$this->template.'/js/mainmenu.js');
$useCompression = $this->params->get('useCompression');
$useCDN = $this->params->get('useCDN');
$useJQuery = $this->params->get('useJQuery'); //Todo: add Jquery in template.xml
$useBootstrap = $this->params->get('useBootstrap');
$logoUrl = $this->params->get('logoUrl');
$googleAnalytics = $this->params->get('googleAnalytics');
=======
defined('_JEXEC') or die ;
error_reporting(E_ERROR & E_WARNING & E_NOTICE);
//detecting site title
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
JHtml::_('jquery.framework');
JHtml::_('bootstrap.framework');
//$doc->addScript('templates/'.$this->template.'/js/mainmenu.js');
$compression = $this->params->get('useCompression');
//echo "<script>console.log(".$compression.");</script>";
$googleAnalytics = $this->params->get('googleAnalytics');
$logoUrl = $this->params->get('logoUrl');
>>>>>>> refs/remotes/origin/master

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhmtl1/DTD/xhtml1-transitional.dtd">
<<<<<<< HEAD
<html xmlns="http:///www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language;?>" lang="<?php echo $this->language;?>" dir="<?php echo $this->direction;?>">
=======
<html xmlns="http:///www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
>>>>>>> refs/remotes/origin/master
<head>
	<meta charset="UTF-8" />
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<<<<<<< HEAD
	<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/src/css/bootstrap.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/custom.css" type="text/css" media="screen" />
	<link rel="apple-touch.icon-precomposed" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/apple-touch-icon.png" />

	<?php
	//add css $ js files
			//bootstrap
			if($useBootstrap == true){
				if($useCDN== true){
					if($useCompression == true){ //use CDN
						echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">';
						echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>';
					} else {
						//files local
						echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">';
						echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>';
					}
				}else{
					//local fieles
					if($useCompression == true){
						echo '<link href="'.$this->baseurl.'/templates/'.$this->template.'/css/bootstrap.min.css" rel="stylesheet">';
						echo '<link href="'.$this->baseurl.'/templates/'.$this->template.'/js/bootstrap.min.js" rel="stylesheet">';
					}else{
						//use local files
						echo '<link href="'.$this->baseurl.'/templates/'.$this->template.'/css/bootstrap.css" rel="stylesheet">';
						echo '<link href="'.$this->baseurl.'/templates/'.$this->template.'/js/bootstrap.js" rel="stylesheet">';
					}
				}
			}

			//jquery
			if($useJQuery == true){
				if($useCDN == true) {
					if($useCompression == true){
						echo '<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>';
					}else{
						echo '<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.js"></script>';
					}

					}else{
					if($useCompression == true){
						echo '<script type="text/javascript" src="'.$this->baseurl.'/templates/'.$this->template.'/js/jquery-2.2.1.min.js"></script>';
					}else{
						echo '<script type="text/javascript" src="'.$this->baseurl.'/templates/'.$this->template.'/js/jquery-2.2.1.js"></script>';
					}
				}
			}
			//Todo: google fonts

			if($useFontAwesome == true) {
				//font awesome
				//CDN
				if ($useCDN == true) {
					if($useCompression == true) {
						//min
						echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">';
					}else {
						//full
						echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css">';
					}
				}else{
					if($useCompression == true){
						echo '<link rel="stylesheet" href="'.$this->baseurl.'/templates/'.$this->template.'/css/font-awesome.min.css">';
					}else{
						echo '<link rel="stylesheet" href="'.$this->baseurl.'/templates/'.$this->template.'/css/font-awesome.css">';
					}
				}
			}
	?>
=======
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/src/css/bootstrap.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/overrides.css" type="text/css" media="screen" />
	<link rel="apple-touch.icon-precomposed" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/apple-touch-icon.png" />

>>>>>>> refs/remotes/origin/master

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
<<<<<<< HEAD

<!-- google Analytics -->
<?php
if (isset($googleAnalytics))
	echo $googleAnalytics;
=======
		
		<?php //get var for compression
		//use jquery
		//if($compression == "1") {
		//	echo '<script src="'.$this->baseurl.'/templates/'.$this->template.'/js/jquery-2.1.3.min.js"></script>';
		//}else{
		//	echo '<script src="'.$this->baseurl.'/templates/'.$this->template.'/js/jquery-2.1.3.js"></script>';}
		?>



		<script type="text/javascript">

//scripts for the main menu

		//Initialisieren
		//alle submenus loeschen -> macht das css
//$(function() {
//		$('.mainmenu ul li').hover(function () {
//    	// hover in
//    	console.log('Hover In');
//		var a = $(this).parents();
//		//anderes submenu anzeigen
//    	console.log(a[1].nodeName);

//    	if ($(this).hasClass('parent')) {
//			$(this).children('ul.submenu').css({
//			'display': 'block'
//			}).fadeTo('', '1.0');
//		}
//  		}, function () {
//	   	//hover out
//	   	if ('.mainmenu ul li :not(ul.submenu)') {
	   	//   $('ul.submenu').css({
	   	//     'display': 'none',
	   	//     'opacity': '0.0'
	   	//   });
//	    	console.log('hover out');
//	    }
//	  });
//});

		//display triangle if submenu exists
//$(function () {
//  $('.mainmenu ul li.active a').closest('ul.submenu').after('<img src="/adonjeschua/templates/adonjeschua/images/triangle.png" class="triangle"/>');
//});
</script>
<!-- google Analytics -->
<?php
if(isset($googleAnalytics)){
	echo "<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', '".$googleAnalytics."', 'auto');
ga('send', 'pageview');
</script>";}
>>>>>>> refs/remotes/origin/master
?>

</head>
<body >
<<<<<<< HEAD

=======
	
>>>>>>> refs/remotes/origin/master
	<hr class="" id="top" />
	<div class="container">
		<div class="row">
			<!-- Left Side -->
<<<<<<< HEAD
			<div class="col-xs-3 col-sm-3 col-md-3 hidden-xs">
				<!-- Logo -->
				<div class="col-md-15 col-sm-15 hidden-xs">
					<div align="center">
						<?php $logo_url = $this->baseurl . '/templates/' . $this->template . '/images/logo.gif';?>
						<a href="<?php echo $this->baseurl;?>"><img src="<?php	echo $logo_url;?>" id ="logo" alt="Logo" class="customImage img-responsive logo" width="<?php $imageinfo = getimagesize($logo_url);
echo $imageinfo[0];?>" height="<?php echo $imageinfo[1];?>"></a>
					</div>
				</div>

				<!-- Spacer -->
				<div class="row"></div><div class="row"></div>

				<!--Left Termine -->
				<div class="col-md-15 hidden-xs">
					<jdoc:include type="modules" name="termine" title="Termine" style="xhtml"/>
				</div>
				<!-- Spacer -->
				<div class="row"></div><div class="row"></div>
=======
			<div class="col-xs-3 col-sm-2 col-md-3 col-lg-3 hidden-xs">
				<!-- Logo -->
				<div class="col-md-15 hidden-xs">
					<div align="center">
						<?php $logo_url= $this->baseurl.'/templates/'.$this -> template.'/images/logo.gif'; ?>
						<a href="<?php echo $this->baseurl; ?>"><img src="<?php	 echo $logo_url; ?>" id ="logo" alt="Logo" class="customImage img-responsive logo" width="<?php $imageinfo = getimagesize($logo_url); echo $imageinfo[0]; ?>" height="<?php echo $imageinfo[1]; ?>"></a>
					</div>
				</div>
				
				<!-- Spacer -->
				<div class="row"></div><div class="row"></div>
				
				<!--Left Termine -->					
				<div class="col-md-15 hidden-xs">
					<jdoc:include type="modules" name="termine" title="Termine" style="xhtml"/>
				</div>
>>>>>>> refs/remotes/origin/master

				<!-- Left Hinweise -->
				<div class="col-md-15 hidden-xs">
					<jdoc:include type="modules" name="hinweise" title="Hinweise" style="xhtml"/>
				</div>
<<<<<<< HEAD
				<!-- Spacer -->
				<div class="row"></div><div class="row"></div>
=======
>>>>>>> refs/remotes/origin/master

				<!-- Left Extras -->
				<div class="col-md-15 hidden-xs">
					<jdoc:include type="modules" name="extras" title="Extras" style="xhtml" />
				</div>
			</div>

			<!--Main Page -->
<<<<<<< HEAD
			<div class="col-xs-15 col-sm-12 col-md-12">
				<!-- Main Menu -->
				<div class="col-xs-15 col-sm-9 col-md-12 mainmenu">
					<div class="navbar">
						 <div class="navbar-inner">
							 <div class="container">
								 <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
								 </a>
								 <a class="brand" href="#"><?php echo $sitename ?></a>
								 <div class="nav-collapse collapse">
							 			<jdoc:include type="modules" name="mainmenu" title="Main Menu" style="none"/>
								 </div>
							 </div>
						</div>
					</div>
				</div>
				<!-- Language -->
				<div class="col-sm-3 col-md-2 col-md-offset-1 pull-right language hidden-xs padding-right-off">
					<jdoc:include type="modules" name="language" title="Language" style="none"/>
				</div>
				<!-- Line -->
				<hr class="col-sm-15 col-md-15 hidden-xs" id="up">
				<!-- Search -->
				<div class="col-sm-3 col-sm-offset-12 col-md-3 col-md-offset-12 hidden-xs">
					<jdoc:include type="modules" name="search" title="Search" style="none"/>
				</div>
				<!-- Breadcrumb -->
				<div class="col-xs-15 col-sm-15 col-md-15 padding-left-off">
=======
			<div class="col-xs-12 col-sm-13 col-md-12 col-lg-12 ">
				<!-- Main Menu -->
				<div class="col-md-12 mainmenu">
						<jdoc:include type="modules" name="mainmenu" type="none" title="Main Menu" style="none"/>
				</div>
				<!-- needs to be replaced by an alternative menu -->
				<div class="col-xs-12 visible-xs">
					<nav class="navbar navbar-default navbar-static-top" role="navigation" id="mainmenu">
						<!--<ul class="nav navbar-nav">-->
						<jdoc:include type="modules" name="mainmenu" type="none" title="Main Menu" style="none"/>
						<!--</ul>-->
					</nav>
				</div>
				<!-- Language -->
				<div class="col-md-2 col-md-offset-1 pull-left language hidden-xs">
					<jdoc:include type="modules" name="language" title="Language" style="none"/>
				</div>
				<!-- Line -->
				<hr class="col-md-15" id="up">
				<div class="col-md-12"></div>
				<!-- Search -->
				<div class="col-md-3 hidden-xs">
					<jdoc:include type="modules" name="search" title="Search" style="none"/>
				</div>
				<!-- Breadcrumb -->
				<div class="col-md-15">
>>>>>>> refs/remotes/origin/master
					<ol class="breadcrumb">
						<jdoc:include type="modules" name="Breadcrumbs" style="xhtml"/>
					</ol>
				</div>
			</div>
<<<<<<< HEAD

			<!-- Content -->
			<!-- Mainbody -->
			<div class="col-sm-12 col-md-12 hidden-xs">
				<jdoc:include type="modules" name="slider" title="Slider" />
			</div>

			<?php if ($this->countModules('right-1 or right-2 or right-3 or right-4 or right-5')): ?>
				<div class="col-xs-15 col-sm-9 col-md-9">
			<?php else: ?>
				<div class="col-xs-15 col-sm-12 col-md-12">
			<?php endif;?>
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>

		<!-- Right Side -->
		<?php //echo $this->countModules('right-1'); ?>
		<?php if ($this->countModules('right-1 or right-2 or right-3 or right-4 or right-5')): ?>
			<div class="col-sm-3 col-md-3 col-xs-15">
			<?php if ($this->countModules('right-1')): ?>
			<div class="col-md-15 col-xs-15">
				<jdoc:include type="modules" name="right-1" title="Right_1" style="xhtml" />
			</div>
			<?php endif;?>
			<?php if ($this->countModules('right-2')): ?>
			<div class="col-sm-3 col-md-15 col-xs-15">
				<jdoc:include type="modules" name="right-2" title="Right_2" style="xhtml" />
			</div>
			<?php endif;?>
			<?php if ($this->countModules('right-3')): ?>
			<div class="col-sm-3 col-md-15 col-xs-15">
				<jdoc:include type="modules" name="right-3" title="Right_3" style="xhtml" />
			</div>
			<?php endif;?>
			<?php if ($this->countModules('right-4')): ?>
			<div class="col-sm-3 col-md-15 col-xs-15">
				<jdoc:include type="modules" name="right-4" title="Right_4" style="xhtml" />
			</div>
			<?php endif;?>
			<?php if ($this->countModules('right-5')): ?>
			<div class="col-sm-3 col-md-15 col-xs-15">
				<jdoc:include type="modules" name="right-5" title="Right_5" style="xhtml" />
			</div>
			<?php endif;?>
			</div>
		<?php endif;?>
=======
			<!-- Content -->
			<!-- Mainbody -->
			<div class="col-md-12">
				<jdoc:include type="modules" name="slider" title="Slider" />
			</div>
			<?php if($this->countModules( 'right-1 or right-2 or right-3 or right-4 or right-5' )) : ?>
			<div class="col-md-9">
			<?php else: ?>
			<div class="col-md-12">
			<?php endif; ?>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
		<!-- Right Side -->
		<?php if($this->countModules( 'right-1 or right-2 or right-3 or right-4 or right-5' )) : ?>
			<div class="col-md-3">
			<?php if($this->countModules('right-1')) : ?>
			<div class="col-md-15">
				<jdoc:include type="modules" name="right-1" title="Right_1" style="xhtml" />
			</div>
			<?php endif; ?>
			<?php if($this->countModules('right-2')) : ?>
			<div class="col-md-15">
				<jdoc:include type="modules" name="right-2" title="Right_2" style="xhtml" />
			</div>
			<?php endif; ?>
			<?php if($this->countModules('right-3')) : ?>
			<div class="col-md-15">
				<jdoc:include type="modules" name="right-3" title="Right_3" style="xhtml" />
			</div>	
			<?php endif; ?>
			<?php if($this->countModules('right-4')) : ?>
			<div class="col-md-15">
				<jdoc:include type="modules" name="right-4" title="Right_4" style="xhtml" />
			</div>
			<?php endif; ?>
			<?php if($this->countModules('right-5')) : ?>
			<div class="col-md-15">
				<jdoc:include type="modules" name="right-5" title="Right_5" style="xhtml" />
			</div>
			<?php endif; ?>
			</div>
		<?php endif; ?>
>>>>>>> refs/remotes/origin/master
	</div>
		<div class="row">
			<!-- Teaser up -->
			<br class=""/>
<<<<<<< HEAD
			<div class="col-sm-offset-1 col-md-offset-0 col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-up-1" title="Teaser_Up_1" style="xhtml" />
			</div>
			<div class="col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-up-2" title="Teaser_Up_2" style="xhtml" />
			</div>
			<div class="col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-up-3" title="Teaser_Up_3" style="xhtml" />
			</div>
			<div class="col-sm-offset-1 col-md-offset-0 col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-up-4" title="Teaser_Up_4" style="xhmtl" />
			</div>
			<div class="col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-up-5" title="Teaser_Up_5" style="xhtml" />
			</div>
			<!-- Teaser down  #@teaser-down -->
			<div class="col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-down-1" title="Teaser_Down_1" style="xhmtl" />
			</div>
			<div class="col-sm-offset-1 col-md-offset-0 col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-down-2" title="Teaser_Down_2" style="xhtml" />
			</div>
			<div class="col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-down-3" title="Teaser_Down_3" style="xhtml" />
			</div>
			<div class="col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-down-4" title="Teaser_Down_4" style="xhtml" />
			</div>
			<div class="col-sm-offset-5 col-md-offset-0 col-sm-4 col-md-3">
				<jdoc:include type="modules" name="teaser-down-5" title="Teaser_Down_5" style="xhtml" />
			</div>

		</div>
		
		<div class="row"></div>
		<hr id="down" class="col-xs-15 col-sm-15 col-md-15 padding-left-off padding-right-off">
		<div class="row"></div>
		<div class="col-xs-15 col-sm-4 col-sm-offset-11 col-md-3 col-md-offset-12">
			<div class="navbar navbar-default footer">
				<jdoc:include type="modules" name="footer" title="Footer" style="xhtml" />
			</div>
		</div>
		<div class="center-block">
			<jdoc:include type="modules" name="debug" />
		</div>
	</div>
</div>

	<?php
		//add JQuery and bootstrap.js
	?>
=======
			<div class="col-md-3">
				<jdoc:include type="modules" name="teaser-up-1" title="Teaser_Up_1" style="xhtml" />
			</div>
			<div class="col-md-3">
				<jdoc:include type="modules" name="teaser-up-2" title="Teaser_Up_2" style="xhtml" />
			</div>
			<div class="col-md-3">
				<jdoc:include type="modules" name="teaser-up-3" title="Teaser_Up_3" style="xhtml" />
			</div>
			<div class="col-md-3">
				<jdoc:include type="modules" name="teaser-up-4" title="Teaser_Up_4" style="xhmtl" />
			</div>
			<div class="col-md-3">
				<jdoc:include type="modules" name="teaser-up-5" title="Teaser_Up_5" style="xhtml" />
			</div>
		</div>
<div class="row">
	<!-- Teaser down -->
	<div class="col-md-3">
		<jdoc:include type="modules" name="teaser-down-1" title="Teaser_Down_1" style="xhmtl" />
	</div>
	<div class="col-md-3">
		<jdoc:include type="modules" name="teaser-down-2" title="Teaser_Down_2" style="xhtml" />
	</div>
	<div class="col-md-3">
		<jdoc:include type="modules" name="teaser-down-3" title="Teaser_Down_3" style="xhtml" />
	</div>
	<div class="col-md-3">
		<jdoc:include type="modules" name="teaser-down-4" title="Teaser_Down_4" style="xhtml" />
	</div>
	<div class="col-md-3">
		<jdoc:include type="modules" name="teaser-down-5" title="Teaser_Down_5" style="xhtml" />
	</div>
</div>
<div class="row">
	<div class="row"></div>
	<hr class="col-md-15">
	<div class="row"></div>
	<div class="col-md-3 col-md-offset-12">
		<div class="navbar navbar-default footer">
			<jdoc:include type="modules" name="footer" title="Footer" style="xhtml" />
		</div>
	</div>
	<div class="center-block">
		<jdoc:include type="modules" name="debug" />
	</div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php //<script src="https://code.jquery.com/jquery.js"></script> --> ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php
if($compression == "1") {
	echo '<script src="/adonjeschua_template/bootstrap/js/bootstrap.min.js"></script>';
}else{
	echo '<script src="/adonjeschua_template/bootstrap/js/bootstrap.js"></script>';
}
?>
>>>>>>> refs/remotes/origin/master

</body>
</html>
