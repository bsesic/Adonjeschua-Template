<?php
// By Benjamin Schnabel 2014

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
//detecting site title
$app = JFactory::getApplication();

//logic comes here

// Load Joomla filesystem package
jimport('joomla.filesystem.file');

// To get an application object
$app = JFactory::getApplication();
// Returns a reference to the global document object
$doc = JFactory::getDocument();
// Get the offline status of the website
$offLine = $app->getCfg('offline');
// Define relative path to the  current template directory
$template = 'templates/' . $this->template;
// Get language and direction
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Send the user to the home page if the website is offline
if ($offLine) {
	$app->redirect($this->baseurl);
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8" />
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="<?php echo $this -> baseurl; ?>/templates/<?php echo $this -> template; ?>/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this -> baseurl; ?>/templates/<?php echo $this -> template; ?>/css/overrides.css" type="text/css" media="screen" />
	<link rel="apple-touch.icon-precomposed" href="<?php echo $this -> baseurl; ?>/templates/<?php echo $this -> template; ?>/apple-touch-icon.png" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body >
	
		<hr id="top" />
		<div class="container-fluid">

			<div class="row">
				<!-- Logo -->
				<div class="col-md-2">
					<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this -> template; ?>/images/logo.gif" alt="Logo" class="customImage img-responsive">
				</div>
				<!-- Main Menu -->
				<div class="col-md-8">
					<nav class="navbar navbar-default" role="navigation" id="mainmenu">
						<ul class="nav navbar-nav">
							<jdoc:include type="modules" name="mainmenu" type="none" title="Main Menu" style="none"/>
							<!-- old Menu -->
						</ul>
					</nav>
				</div>
				<!-- Language -->
				<div class="col-md-2">
					<jdoc:include type="modules" name="language" title="Language" style="none"/>
				</div>
				<!-- Line -->
				<hr class="col-md-9" id="up" />
				<div class="row">
					<div class="col-md-6"></div>
					<!-- Search -->
					<div class="col-md-2">
						<jdoc:include type="modules" name="search" title="Search" style="none"/>
					</div>
					<!-- Breadcrumb -->
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<ol class="breadcrumb">
								<jdoc:include type="modules" name="breadcrumbs" style="xhtml"/>
							</ol>
						</div>
					</div>
				</div>
				<!-- Left Side -->
				<div class="col-md-2">
					<!--Left Side Up -->					
					<div class="col-md-12">
						<jdoc:include type="modules" name="leftsideup" title="Left Side Up" style="xhtml"/>
					</div>

					<!-- Left Side Middle -->
					<div class="col-md-12">
						<jdoc:include type="modules" name="leftsidemiddle" title="Left Side Middle" style="xhtml"/>
					</div>
					
					<!-- Left Side Down -->
					<div class="col-md-12">
						<jdoc:include type="modules" name="leftsidedown" title="Left Side Down" style="xhtml" />
					</div>
				</div>
				
				<!-- Content -->
				<div class="col-md-8">
				<div class="col-md-12">
					<jdoc:include type="message" />
					<div id="error-message">
						<?php echo $this->error->getCode() ?> - <?php echo $this->error->getMessage() ?>
						<p><strong><?php echo JText::_('You may not be able to visit this page because of:') ?></strong>
						</p>
						<ol>
							<li><?php echo JText::_('An out-of-date bookmark/favourite') ?></li>
							<li><?php echo JText::_('A search engine that has an out-of-date listing for this site') ?></li>
							<li><?php echo JText::_('A mis-typed address') ?></li>
							<li><?php echo JText::_('You have no access to this page') ?></li>
							<li><?php echo JText::_('The requested resource was not found') ?></li>
							<li><?php echo JText::_('An error has occurred while processing your request.') ?></li>
						</ol>
						<p><strong><?php echo JText::_('Please try one of the following pages:') ?></strong></p>
						<ul>
							<li>
								<a href="<?php echo $this->baseurl ?>/" title="<?php echo JText::_('Go to the home page') ?>"><?php echo JText::_('Home Page') ?></a>
							</li>
						</ul>
						<p><?php echo JText::_('If difficulties persist, please contact the system administrator of this site.') ?></p>
						</div>
					</div>
				</div>
				
				<!-- Right Side -->
				<div class="col-md-2">
					<div class="col-md-12">
						<jdoc:include type="modules" name="rightside1" title="Right Side 1" style="xhtml" />
					</div>
					<div class="col-md-12">
						<jdoc:include type="modules" name="rightside2" title="Right Side 2" style="xhtml" />
					</div>
					<div class="col-md-12">
						<jdoc:include type="modules" name="rightside3" title="Right Side 3" style="xhtml" />
					</div>
					<div class="col-md-12">
						<jdoc:include type="modules" name="rightside4" title="Right Side 4" style="xhtml" />
					</div>
					<div class="col-md-12">
						<jdoc:include type="modules" name="rightside5" title="Right Side 5" style="xhtml" />
					</div>
				</div>
			</div>
			
			<!-- Bottom up --->
			<br />
			<div class="col-md-2 col-md-offset-1">
				<jdoc:include type="modules" name="bottomup1" title="Bottom Up 1" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="bottomup2" title="Bottom Up 2" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="bottomup3" title="Bottom Up 3" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="bottomup4" title="Bottom Up 4" style="xhmtl" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="bottomup5" title="Bottom Up 5" style="xhtml" />
			</div>
			<!-- Bottom down -->
			<div class="col-md-2 col-md-offset-1">
				<jdoc:include type="modules" name="bottomdown1" title="Bottom Down 1" style="xhmtl" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="bottomdown2" title="Bottom Down 2" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="bottomdown3" title="Bottom Down 3" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="bottomdown4" title="Bottom Down 4" style="xhtml" />
			</div>
			<div class="col-md-2">
				<jdoc:include type="modules" name="bottomdown5" title="Bottom Down 5" style="xhtml" />
			</div>
			<!-- Footer -->
			<div class="row">
				<br />
				<hr  class="col-md-8 col-md-offset-2"/>
				<div class="col-md-2">
					<jdoc:include type="modules" name="footer1" title="Footer 1" style="xhtml" />
				</div>
				<div class="col-md-2">
					<jdoc:include type="modules" name="footer2" title="Footer 2" style="xhtml" />
				</div>
				<div class="col-md-2">
					<jdoc:include type="modules" name="footer3" title="Footer 3" style="xhtml" />
				</div>
				<div class="col-md-2">
					<jdoc:include type="modules" name="footer4" title="Footer 4" style="xhtml" />
				</div>
				<div class="col-md-2">
					<jdoc:include type="modules" name="footer5" title="Footer 5" style="xhtml" />
				</div>
				<div class="col-md-2">
					<jdoc:include type="modules" name="footer6" title="Footer 6" style="xhtml" />
				</div>
			</div>
			<jdoc:include type="modules" name="debug" />
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/adonjeschua_template/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
