<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
	UserModule::t("Profile"),
);
date_default_timezone_set('Europe/Paris');
?><h1 id="main_content_title"><?php echo UserModule::t('Your profile'); ?></h1>
<div class="content">

  <?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
  <div class="success">
  <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
  </div>
  <?php endif; ?>
  <dl>
    <dt class="label"><?php echo CHtml::encode($model->getAttributeLabel('username')); ?>
  </dt>
      <dd><?php echo CHtml::encode($model->username); ?>
  </dd>
  </dl>
  <?php 
      $profileFields=ProfileField::model()->forOwner()->sort()->findAll();
      if ($profileFields) {
        foreach($profileFields as $field) {
          //echo "<pre>"; print_r($profile); die();
        ?>
  <dl>
    <dt class="label"><?php echo CHtml::encode(UserModule::t($field->title)); ?>
  </dt>
      <dd><?php echo (($field->widgetView($profile))?$field->widgetView($profile):CHtml::encode((($field->range)?Profile::range($field->range,$profile->getAttribute($field->varname)):$profile->getAttribute($field->varname)))); ?>
  </dd>
  </dl>
        <?php
        }//$profile->getAttribute($field->varname)
      }
  ?>
  <dl>
    <dt class="label"><?php echo CHtml::encode($model->getAttributeLabel('email')); ?>
  </dt>
      <dd><?php echo CHtml::encode($model->email); ?>
  </dd>
  </dl>
  <dl>
    <dt class="label"><?php echo CHtml::encode($model->getAttributeLabel('createtime')); ?>
  </dt>
      <dd><?php echo date("d.m.Y H:i:s",$model->createtime); ?>
  </dd>
  </dl>
  <dl>
    <dt class="label"><?php echo CHtml::encode($model->getAttributeLabel('lastvisit')); ?>
  </dt>
      <dd><?php echo date("d.m.Y H:i:s",$model->lastvisit); ?>
  </dd>
  </dl>
  <dl>
    <dt class="label"><?php echo CHtml::encode($model->getAttributeLabel('status')); ?>
  </dt>
      <dd><?php echo CHtml::encode(User::itemAlias("UserStatus",$model->status));
      ?>
  </dd>
  </dl>
  <?php echo $this->renderPartial('menu'); ?>
</div>
