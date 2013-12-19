<?php
/* @var $this PcdmController */
/* @var $model Pcdm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pcdm-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pk_pcdm'); ?>
		<?php echo $form->textField($model,'pk_pcdm',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'pk_pcdm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'niv1'); ?>
		<?php echo $form->textField($model,'niv1',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'niv1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'niv2'); ?>
		<?php echo $form->textField($model,'niv2',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'niv2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'niv3'); ?>
		<?php echo $form->textField($model,'niv3',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'niv3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'niv4'); ?>
		<?php echo $form->textField($model,'niv4',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'niv4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'niv5'); ?>
		<?php echo $form->textField($model,'niv5',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'niv5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lib_pcdm'); ?>
		<?php echo $form->textField($model,'lib_pcdm',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lib_pcdm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_style_dogma'); ?>
		<?php echo $form->textField($model,'old_style_dogma',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'old_style_dogma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pcdm_actif'); ?>
		<?php echo $form->textField($model,'pcdm_actif',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'pcdm_actif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->