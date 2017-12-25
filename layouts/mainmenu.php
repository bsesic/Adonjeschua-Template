<?php
/**
 * Created by PhpStorm.
 * User: Benni
 * Date: 21.07.2016
 * Time: 19:56
 */
defined('_JEXEC') or die;

?>
<body >

<hr class="" id="top" />
<div class="container">
    <div class="row">
        <!-- Left Side -->
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

            <!-- Left Hinweise -->
            <div class="col-md-15 hidden-xs">
                <jdoc:include type="modules" name="hinweise" title="Hinweise" style="xhtml"/>
            </div>
            <!-- Spacer -->
            <div class="row"></div><div class="row"></div>

            <!-- Left Extras -->
            <div class="col-md-15 hidden-xs">
                <jdoc:include type="modules" name="extras" title="Extras" style="xhtml" />
            </div>
        </div>

        <!--Main Page -->
        <div class="col-xs-15 col-sm-12 col-md-12"> <!-- begin main menu container -->
            <!-- Main Menu -->
            <div class="col-xs-15 col-sm-9 col-md-12 mainmenu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <!-- div id="navbar" -->
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <!-- begin joomla insert main menu -->
                            <jdoc:include type="modules" name="mainmenu" title="Main Menu" style="none"/>
                            <!-- end joomla insert main menu -->
                        </div>
                    </div> <!-- end container-fluid -->
                </nav> <!-- end nav -->
            </div> <!-- end mainmenu div -->
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
                <ol class="breadcrumb">
                    <jdoc:include type="modules" name="Breadcrumbs" style="xhtml"/>
                </ol>
            </div>
        </div> <!-- end main menu container -->