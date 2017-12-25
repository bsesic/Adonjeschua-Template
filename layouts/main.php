<?php
/**
 * Created by PhpStorm.
 * User: Benni
 * Date: 21.07.2016
 * Time: 19:53
 */
defined('_JEXEC') or die;

?>

<!-- Mainbody -->
<!-- begin slider -->
<div class="col-sm-12 col-md-12 hidden-xs">
    <jdoc:include type="modules" name="slider" title="Slider" style="xhtml" />
</div>
<!-- end slider -->

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
</div>
<div class="row">
    <!-- Teaser up -->
    <br class=""/>
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
