<?php
/* @var $this ArtisteController */
/* @var $model Artiste */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artiste-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'casse_artiste'); ?>
		<?php echo $form->textField($model,'casse_artiste',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'casse_artiste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forme'); ?>
		<?php echo $form->textField($model,'forme',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'forme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inscrit_par'); ?>
		<?php echo $form->textField($model,'inscrit_par',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'inscrit_par'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_insc'); ?>
		<?php echo $form->textField($model,'date_insc'); ?>
		<?php echo $form->error($model,'date_insc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ville'); ?>
		<?php echo $form->textField($model,'ville',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'ville'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pays'); ?>
		<?php echo $form->textField($model,'pays',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'pays'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'musicien'); ?>
		<?php echo $form->textArea($model,'musicien',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'musicien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logo'); ?>
		<?php echo $form->textField($model,'logo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commentaire'); ?>
		<?php echo $form->textArea($model,'commentaire',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'commentaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commentaire_en'); ?>
		<?php echo $form->textArea($model,'commentaire_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'commentaire_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site'); ?>
		<?php echo $form->textField($model,'site',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'french'); ?>
		<?php echo $form->textArea($model,'french',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'french'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'english'); ?>
		<?php echo $form->textArea($model,'english',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'english'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'don_status'); ?>
		<?php echo $form->textField($model,'don_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'don_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'don_chaine'); ?>
		<?php echo $form->textField($model,'don_chaine',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'don_chaine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpt_page_artiste'); ?>
		<?php echo $form->textField($model,'cpt_page_artiste',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cpt_page_artiste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lien_groupe_pragma'); ?>
		<?php echo $form->textField($model,'lien_groupe_pragma',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lien_groupe_pragma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suppr'); ?>
		<?php echo $form->textField($model,'suppr',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'suppr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_suppr'); ?>
		<?php echo $form->textField($model,'date_suppr',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'date_suppr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'automazic'); ?>
		<?php echo $form->textField($model,'automazic',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'automazic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suppr_automazic'); ?>
		<?php echo $form->textField($model,'suppr_automazic',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'suppr_automazic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compte_paypal'); ?>
		<?php echo $form->textField($model,'compte_paypal',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'compte_paypal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->