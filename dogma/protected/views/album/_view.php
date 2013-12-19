<?php
/* @var $this AlbumController */
/* @var $data Album */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_album')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_album), array('view', 'id'=>$data->id_album)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titre')); ?>:</b>
	<?php echo CHtml::encode($data->titre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titre_alpha')); ?>:</b>
	<?php echo CHtml::encode($data->titre_alpha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casse')); ?>:</b>
	<?php echo CHtml::encode($data->casse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('annee')); ?>:</b>
	<?php echo CHtml::encode($data->annee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nbtpa')); ?>:</b>
	<?php echo CHtml::encode($data->nbtpa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_dispo')); ?>:</b>
	<?php echo CHtml::encode($data->nb_dispo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pochette')); ?>:</b>
	<?php echo CHtml::encode($data->pochette); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prix')); ?>:</b>
	<?php echo CHtml::encode($data->prix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_insc')); ?>:</b>
	<?php echo CHtml::encode($data->date_insc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_insc1')); ?>:</b>
	<?php echo CHtml::encode($data->date_insc1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commentaire')); ?>:</b>
	<?php echo CHtml::encode($data->commentaire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_groupe')); ?>:</b>
	<?php echo CHtml::encode($data->id_groupe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_recto')); ?>:</b>
	<?php echo CHtml::encode($data->url_recto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_verso')); ?>:</b>
	<?php echo CHtml::encode($data->url_verso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_cmde')); ?>:</b>
	<?php echo CHtml::encode($data->url_cmde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clic_cmde')); ?>:</b>
	<?php echo CHtml::encode($data->clic_cmde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_p2p')); ?>:</b>
	<?php echo CHtml::encode($data->url_p2p); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_torrent')); ?>:</b>
	<?php echo CHtml::encode($data->url_torrent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_zip')); ?>:</b>
	<?php echo CHtml::encode($data->url_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_archive')); ?>:</b>
	<?php echo CHtml::encode($data->url_archive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lien_album_pragma')); ?>:</b>
	<?php echo CHtml::encode($data->lien_album_pragma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpt_page_album')); ?>:</b>
	<?php echo CHtml::encode($data->cpt_page_album); ?>
	<br />

	*/ ?>

</div>