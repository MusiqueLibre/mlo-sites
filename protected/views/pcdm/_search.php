<?php
/* @var $this PcdmController */
/* @var $model Pcdm */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pk_pcdm'); ?>
		<?php echo $form->textField($model,'pk_pcdm',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'niv1'); ?>
		<?php echo $form->textField($model,'niv1',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'niv2'); ?>
		<?php echo $form->textField($model,'niv2',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'niv3'); ?>
		<?php echo $form->textField($model,'niv3',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'niv4'); ?>
		<?php echo $form->textField($model,'niv4',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'niv5'); ?>
		<?php echo $form->textField($model,'niv5',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lib_pcdm'); ?>
		<?php echo $form->textField($model,'lib_pcdm',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'old_style_dogma'); ?>
		<?php echo $form->textField($model,'old_style_dogma',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pcdm_actif'); ?>
		<?php echo $form->textField($model,'pcdm_actif',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->