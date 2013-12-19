<?php
/* @var $this AlbumController */
/* @var $model Album */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'album-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titre'); ?>
		<?php echo $form->textField($model,'titre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titre_alpha'); ?>
		<?php echo $form->textField($model,'titre_alpha',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titre_alpha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'casse'); ?>
		<?php echo $form->textField($model,'casse',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'casse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'annee'); ?>
		<?php echo $form->textField($model,'annee',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'annee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nbtpa'); ?>
		<?php echo $form->textField($model,'nbtpa',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'nbtpa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_dispo'); ?>
		<?php echo $form->textField($model,'nb_dispo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nb_dispo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pochette'); ?>
		<?php echo $form->textField($model,'pochette',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pochette'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prix'); ?>
		<?php echo $form->textField($model,'prix',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'prix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_insc'); ?>
		<?php echo $form->textField($model,'date_insc',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'date_insc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_insc1'); ?>
		<?php echo $form->textField($model,'date_insc1',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'date_insc1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commentaire'); ?>
		<?php echo $form->textArea($model,'commentaire',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'commentaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_groupe'); ?>
		<?php echo $form->textField($model,'id_groupe',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'id_groupe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_recto'); ?>
		<?php echo $form->textField($model,'url_recto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_recto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_verso'); ?>
		<?php echo $form->textField($model,'url_verso',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_verso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_cmde'); ?>
		<?php echo $form->textField($model,'url_cmde',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_cmde'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clic_cmde'); ?>
		<?php echo $form->textField($model,'clic_cmde',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'clic_cmde'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_p2p'); ?>
		<?php echo $form->textField($model,'url_p2p',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_p2p'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_torrent'); ?>
		<?php echo $form->textField($model,'url_torrent',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_torrent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_zip'); ?>
		<?php echo $form->textField($model,'url_zip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_archive'); ?>
		<?php echo $form->textField($model,'url_archive',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_archive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lien_album_pragma'); ?>
		<?php echo $form->textField($model,'lien_album_pragma',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lien_album_pragma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpt_page_album'); ?>
		<?php echo $form->textField($model,'cpt_page_album',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cpt_page_album'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->