<?php
/* @var $this MorceauController */
/* @var $model Morceau */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_membre'); ?>
		<?php echo $form->textField($model,'id_membre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_insc1'); ?>
		<?php echo $form->textField($model,'date_insc1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_insc'); ?>
		<?php echo $form->textField($model,'date_insc',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titre'); ?>
		<?php echo $form->textField($model,'titre',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'casse'); ?>
		<?php echo $form->textField($model,'casse',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album'); ?>
		<?php echo $form->textField($model,'album',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_alpha'); ?>
		<?php echo $form->textField($model,'album_alpha',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_album'); ?>
		<?php echo $form->textField($model,'id_album'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordre_album'); ?>
		<?php echo $form->textField($model,'ordre_album'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordre_groupe'); ?>
		<?php echo $form->textField($model,'ordre_groupe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visible_groupe'); ?>
		<?php echo $form->textField($model,'visible_groupe',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'groupe'); ?>
		<?php echo $form->textField($model,'groupe',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'groupe_alpha'); ?>
		<?php echo $form->textField($model,'groupe_alpha',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'auteur'); ?>
		<?php echo $form->textField($model,'auteur',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compositeur'); ?>
		<?php echo $form->textField($model,'compositeur',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interprete'); ?>
		<?php echo $form->textField($model,'interprete',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_compo'); ?>
		<?php echo $form->textField($model,'date_compo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duree'); ?>
		<?php echo $form->textField($model,'duree',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'style'); ?>
		<?php echo $form->textField($model,'style',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_pcdm'); ?>
		<?php echo $form->textField($model,'fk_pcdm',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commentaire'); ?>
		<?php echo $form->textArea($model,'commentaire',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'label'); ?>
		<?php echo $form->textField($model,'label',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'label_alpha'); ?>
		<?php echo $form->textField($model,'label_alpha',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'licence'); ?>
		<?php echo $form->textField($model,'licence',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'licence_avenant'); ?>
		<?php echo $form->textField($model,'licence_avenant',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prix'); ?>
		<?php echo $form->textField($model,'prix',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stream'); ?>
		<?php echo $form->textField($model,'stream',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'radio'); ?>
		<?php echo $form->textField($model,'radio',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_titre'); ?>
		<?php echo $form->textField($model,'url_titre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_titre2'); ?>
		<?php echo $form->textField($model,'url_titre2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_p2p'); ?>
		<?php echo $form->textField($model,'url_p2p',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actif'); ?>
		<?php echo $form->textField($model,'actif',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desac_404'); ?>
		<?php echo $form->textField($model,'desac_404',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post'); ?>
		<?php echo $form->textField($model,'post',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taille'); ?>
		<?php echo $form->textField($model,'taille'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taille_mp3'); ?>
		<?php echo $form->textField($model,'taille_mp3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taille_ogg'); ?>
		<?php echo $form->textField($model,'taille_ogg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_torrent'); ?>
		<?php echo $form->textField($model,'url_torrent',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autorise_vote'); ?>
		<?php echo $form->textField($model,'autorise_vote',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autorise_comment'); ?>
		<?php echo $form->textField($model,'autorise_comment',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_archive_mp3'); ?>
		<?php echo $form->textField($model,'url_archive_mp3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url_archive_ogg'); ?>
		<?php echo $form->textField($model,'url_archive_ogg',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suppr'); ?>
		<?php echo $form->textField($model,'suppr',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_suppr'); ?>
		<?php echo $form->textField($model,'date_suppr',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_borne'); ?>
		<?php echo $form->textField($model,'id_borne',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reclassement_par'); ?>
		<?php echo $form->textField($model,'reclassement_par',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_reclassement'); ?>
		<?php echo $form->textField($model,'date_reclassement',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_mod'); ?>
		<?php echo $form->textField($model,'date_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->