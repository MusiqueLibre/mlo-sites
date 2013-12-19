<?php
/* @var $this MorceauController */
/* @var $model Morceau */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'morceau-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_membre'); ?>
		<?php echo $form->textField($model,'id_membre'); ?>
		<?php echo $form->error($model,'id_membre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_insc1'); ?>
		<?php echo $form->textField($model,'date_insc1',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'date_insc1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_insc'); ?>
		<?php echo $form->textField($model,'date_insc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'date_insc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titre'); ?>
		<?php echo $form->textField($model,'titre',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'titre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'casse'); ?>
		<?php echo $form->textField($model,'casse',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'casse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album'); ?>
		<?php echo $form->textField($model,'album',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'album'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_alpha'); ?>
		<?php echo $form->textField($model,'album_alpha',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'album_alpha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_album'); ?>
		<?php echo $form->textField($model,'id_album'); ?>
		<?php echo $form->error($model,'id_album'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordre_album'); ?>
		<?php echo $form->textField($model,'ordre_album'); ?>
		<?php echo $form->error($model,'ordre_album'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordre_groupe'); ?>
		<?php echo $form->textField($model,'ordre_groupe'); ?>
		<?php echo $form->error($model,'ordre_groupe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visible_groupe'); ?>
		<?php echo $form->textField($model,'visible_groupe',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'visible_groupe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groupe'); ?>
		<?php echo $form->textField($model,'groupe',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'groupe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groupe_alpha'); ?>
		<?php echo $form->textField($model,'groupe_alpha',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'groupe_alpha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auteur'); ?>
		<?php echo $form->textField($model,'auteur',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'auteur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compositeur'); ?>
		<?php echo $form->textField($model,'compositeur',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'compositeur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interprete'); ?>
		<?php echo $form->textField($model,'interprete',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'interprete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_compo'); ?>
		<?php echo $form->textField($model,'date_compo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'date_compo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duree'); ?>
		<?php echo $form->textField($model,'duree',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'duree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'style'); ?>
		<?php echo $form->textField($model,'style',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'style'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_pcdm'); ?>
		<?php echo $form->textField($model,'fk_pcdm',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'fk_pcdm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commentaire'); ?>
		<?php echo $form->textArea($model,'commentaire',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'commentaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'label'); ?>
		<?php echo $form->textField($model,'label',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'label'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'label_alpha'); ?>
		<?php echo $form->textField($model,'label_alpha',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'label_alpha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'licence'); ?>
		<?php echo $form->textField($model,'licence',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'licence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'licence_avenant'); ?>
		<?php echo $form->textField($model,'licence_avenant',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'licence_avenant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prix'); ?>
		<?php echo $form->textField($model,'prix',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'prix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stream'); ?>
		<?php echo $form->textField($model,'stream',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'stream'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'radio'); ?>
		<?php echo $form->textField($model,'radio',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'radio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_titre'); ?>
		<?php echo $form->textField($model,'url_titre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_titre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_titre2'); ?>
		<?php echo $form->textField($model,'url_titre2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_titre2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_p2p'); ?>
		<?php echo $form->textField($model,'url_p2p',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_p2p'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actif'); ?>
		<?php echo $form->textField($model,'actif',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'actif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desac_404'); ?>
		<?php echo $form->textField($model,'desac_404',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'desac_404'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post'); ?>
		<?php echo $form->textField($model,'post',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taille'); ?>
		<?php echo $form->textField($model,'taille'); ?>
		<?php echo $form->error($model,'taille'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taille_mp3'); ?>
		<?php echo $form->textField($model,'taille_mp3'); ?>
		<?php echo $form->error($model,'taille_mp3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taille_ogg'); ?>
		<?php echo $form->textField($model,'taille_ogg'); ?>
		<?php echo $form->error($model,'taille_ogg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_torrent'); ?>
		<?php echo $form->textField($model,'url_torrent',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'url_torrent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autorise_vote'); ?>
		<?php echo $form->textField($model,'autorise_vote',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'autorise_vote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autorise_comment'); ?>
		<?php echo $form->textField($model,'autorise_comment',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'autorise_comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_archive_mp3'); ?>
		<?php echo $form->textField($model,'url_archive_mp3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_archive_mp3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_archive_ogg'); ?>
		<?php echo $form->textField($model,'url_archive_ogg',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_archive_ogg'); ?>
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
		<?php echo $form->labelEx($model,'id_borne'); ?>
		<?php echo $form->textField($model,'id_borne',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'id_borne'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reclassement_par'); ?>
		<?php echo $form->textField($model,'reclassement_par',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'reclassement_par'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_reclassement'); ?>
		<?php echo $form->textField($model,'date_reclassement',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'date_reclassement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_mod'); ?>
		<?php echo $form->textField($model,'date_mod'); ?>
		<?php echo $form->error($model,'date_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->