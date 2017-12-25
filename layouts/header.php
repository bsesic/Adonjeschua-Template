<?php
/**
 * Created by PhpStorm.
 * User: Benni
 * Date: 21.07.2016
 * Time: 19:52
 */
defined('_JEXEC') or die;
	$app = Jfactory::getApplication();
	$sitetitle = $app->get('sitename');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhmtl1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:///www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language;?>" lang="<?php echo $this->language;?>" dir="<?php echo $this->direction;?>">
<head>
	<meta charset="UTF-8" />
	<?php
	JHtmlBoottrap::loadCss();
	$doc = JFactory::getDocument();
	?>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
