
<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Resend validation email");
$this->breadcrumbs=array(
	UserModule::t("Resend validation email"),
);
?>

<h1 id="main_content_title"><?php echo UserModule::t("Resend validation email"); ?></h1>

<div class="form content">
<?php if(Yii::app()->user->hasFlash('resend')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('resend'); ?>
</div>
<?php else: ?>

<?php $form=$this->beginWidget('UActiveForm', array(
	'id'=>'resend-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="form_hint"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
  <?php echo UserModule::t("Enter the e-mail address you used for the registration");?>
	<?php echo $form->errorSummary(array($model)); ?>
	<div class="row">
	<?php echo $form->labelEx($model,'email'); ?>
	<?php echo $form->textField($model,'email'); ?>
	<?php echo $form->error($model,'email'); ?>
	</div>
	<div class="row submit">
		<?php echo CHtml::submitButton(UserModule::t("Resend activation mail"), array('id'=>'main_form_submit')); ?>
	</div>
	
<?php $this->endWidget(); ?>
<?php endif; ?>
</div><!-- form -->
