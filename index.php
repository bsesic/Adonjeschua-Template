<?php
// Copyright (c) 2014 Benjamin Schnabel <Benjamin-777@gmx.de>
// Template for Adon Jeschua
// All rights reserved. No warranty, explicit or implicit, provided.

defined('_JEXEC') or die;
error_reporting(E_ERROR & E_WARNING & E_NOTICE); //use for debug, not for production stable
//detecting site title
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
//JHtml::_('jquery.framework'); //FIXME
//JHtml::_('bootstrap.framework'); //FIXME
//$doc->addScript('templates/'.$this->template.'/js/mainmenu.js');
$useCompression = $this->params->get('useCompression');
$useCDN = $this->params->get('useCDN');
$useJQuery = $this->params->get('useJQuery'); //Todo: add Jquery in template.xml
$useBootstrap = $this->params->get('useBootstrap');
$logoUrl = $this->params->get('logoUrl');
$googleAnalytics = $this->params->get('googleAnalytics');


//Header
include "layouts/header.php";

//Scripts
include "layouts/scripts.php";
//Bootstrap
//responsiveness

//Main Menu
include "layouts/mainmenu.php";

//Main body
include "layouts/main.php";

//Footer & footer scripts
include "layouts/footer.php";
?>



