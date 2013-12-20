<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
  <?php 
    $script_array = array(
      '/lib/jquery-migrate-1.0.0.js',
      '/lib/player/projekktor.min.js',
      '/lib/jquery.address-1.5.js',
    );
    $css_array = array(
      "global_yii.less",
      "old_dogma.less",
    );
    include('../inc/global_statics.php');
    $baseUrl = Yii::app()->baseUrl;
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($baseUrl.'/js/init.js');
  ?>

	<!-- blueprint CSS framework -->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
  <?php 
    $player = true;
    $site_title = Yii::app()->name;
	  $site_description= 'Intégralités des morceaux déposés sur le site Dogmazic entre 2004 et 2012';
    include('../inc/general_menu.php');
  ?>




	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

<footer id="footer">
  code sous GNU/GPL v3 - Un projet de l'association Musique Libre !.<br/>
  <?php echo Yii::powered();?> 
  <br/>
  <?php
    $this->widget('zii.widgets.CMenu',array(
    'id'=>'main_login',
    'itemCssClass' => 'link bullet_less',
    'items'=>array(
    array('label'=>'Login', 'url'=>array('/site/login'),  'visible'=>Yii::app()->user->isGuest),
    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
    )));
  ?>
</footer><!-- footer -->


</body>
</html>
