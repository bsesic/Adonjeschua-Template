<?php
/**
 * Created by PhpStorm.
 * User: Benni
 * Date: 21.07.2016
 * Time: 19:52
 */

defined('_JEXEC') or die;

?>

    <link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template;?>/css/bootstrap.css" type="text/css" media="screen" />
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- google Analytics -->
<?php
if (isset($googleAnalytics))
    echo $googleAnalytics;
?>