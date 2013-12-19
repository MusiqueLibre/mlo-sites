<?php
/* @var $this LicenceController */
/* @var $model Licence */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'licence-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sous_nom'); ?>
		<?php echo $form->textField($model,'sous_nom',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sous_nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'langue'); ?>
		<?php echo $form->textField($model,'langue',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'langue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecoute_prive'); ?>
		<?php echo $form->textField($model,'ecoute_prive',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'ecoute_prive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modif_prive'); ?>
		<?php echo $form->textField($model,'modif_prive',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'modif_prive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_prive'); ?>
		<?php echo $form->textField($model,'tx_prive',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'tx_prive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distrib_prive'); ?>
		<?php echo $form->textField($model,'distrib_prive',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'distrib_prive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dif_prive'); ?>
		<?php echo $form->textField($model,'dif_prive',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'dif_prive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usage_com'); ?>
		<?php echo $form->textField($model,'usage_com',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'usage_com'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modif_com'); ?>
		<?php echo $form->textField($model,'modif_com',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'modif_com'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_com'); ?>
		<?php echo $form->textField($model,'tx_com',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'tx_com'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distrib_com'); ?>
		<?php echo $form->textField($model,'distrib_com',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'distrib_com'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dif_com'); ?>
		<?php echo $form->textField($model,'dif_com',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'dif_com'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gestion_collective'); ?>
		<?php echo $form->textField($model,'gestion_collective',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'gestion_collective'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decla_licence'); ?>
		<?php echo $form->textField($model,'decla_licence',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'decla_licence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citer_auteur'); ?>
		<?php echo $form->textField($model,'citer_auteur',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'citer_auteur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'choix_licence'); ?>
		<?php echo $form->textField($model,'choix_licence',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'choix_licence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commentaire'); ?>
		<?php echo $form->textArea($model,'commentaire',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'commentaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'picto'); ?>
		<?php echo $form->textField($model,'picto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'picto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preambule'); ?>
		<?php echo $form->textArea($model,'preambule',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'preambule'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metadonnees'); ?>
		<?php echo $form->textArea($model,'metadonnees',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metadonnees'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->