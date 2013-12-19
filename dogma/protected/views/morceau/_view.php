<?php
/* @var $this MorceauController */
/* @var $data Morceau */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_membre')); ?>:</b>
	<?php echo CHtml::encode($data->id_membre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_insc1')); ?>:</b>
	<?php echo CHtml::encode($data->date_insc1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_insc')); ?>:</b>
	<?php echo CHtml::encode($data->date_insc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titre')); ?>:</b>
	<?php echo CHtml::encode($data->titre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casse')); ?>:</b>
	<?php echo CHtml::encode($data->casse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album')); ?>:</b>
	<?php echo CHtml::encode($data->album); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('album_alpha')); ?>:</b>
	<?php echo CHtml::encode($data->album_alpha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_album')); ?>:</b>
	<?php echo CHtml::encode($data->id_album); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordre_album')); ?>:</b>
	<?php echo CHtml::encode($data->ordre_album); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordre_groupe')); ?>:</b>
	<?php echo CHtml::encode($data->ordre_groupe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visible_groupe')); ?>:</b>
	<?php echo CHtml::encode($data->visible_groupe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupe')); ?>:</b>
	<?php echo CHtml::encode($data->groupe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupe_alpha')); ?>:</b>
	<?php echo CHtml::encode($data->groupe_alpha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auteur')); ?>:</b>
	<?php echo CHtml::encode($data->auteur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compositeur')); ?>:</b>
	<?php echo CHtml::encode($data->compositeur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interprete')); ?>:</b>
	<?php echo CHtml::encode($data->interprete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_compo')); ?>:</b>
	<?php echo CHtml::encode($data->date_compo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duree')); ?>:</b>
	<?php echo CHtml::encode($data->duree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('style')); ?>:</b>
	<?php echo CHtml::encode($data->style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_pcdm')); ?>:</b>
	<?php echo CHtml::encode($data->fk_pcdm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commentaire')); ?>:</b>
	<?php echo CHtml::encode($data->commentaire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label_alpha')); ?>:</b>
	<?php echo CHtml::encode($data->label_alpha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licence')); ?>:</b>
	<?php echo CHtml::encode($data->licence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('licence_avenant')); ?>:</b>
	<?php echo CHtml::encode($data->licence_avenant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prix')); ?>:</b>
	<?php echo CHtml::encode($data->prix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hits')); ?>:</b>
	<?php echo CHtml::encode($data->hits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stream')); ?>:</b>
	<?php echo CHtml::encode($data->stream); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('radio')); ?>:</b>
	<?php echo CHtml::encode($data->radio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_titre')); ?>:</b>
	<?php echo CHtml::encode($data->url_titre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_titre2')); ?>:</b>
	<?php echo CHtml::encode($data->url_titre2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_p2p')); ?>:</b>
	<?php echo CHtml::encode($data->url_p2p); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actif')); ?>:</b>
	<?php echo CHtml::encode($data->actif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desac_404')); ?>:</b>
	<?php echo CHtml::encode($data->desac_404); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post')); ?>:</b>
	<?php echo CHtml::encode($data->post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taille')); ?>:</b>
	<?php echo CHtml::encode($data->taille); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taille_mp3')); ?>:</b>
	<?php echo CHtml::encode($data->taille_mp3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taille_ogg')); ?>:</b>
	<?php echo CHtml::encode($data->taille_ogg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_torrent')); ?>:</b>
	<?php echo CHtml::encode($data->url_torrent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autorise_vote')); ?>:</b>
	<?php echo CHtml::encode($data->autorise_vote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autorise_comment')); ?>:</b>
	<?php echo CHtml::encode($data->autorise_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_archive_mp3')); ?>:</b>
	<?php echo CHtml::encode($data->url_archive_mp3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_archive_ogg')); ?>:</b>
	<?php echo CHtml::encode($data->url_archive_ogg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suppr')); ?>:</b>
	<?php echo CHtml::encode($data->suppr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_suppr')); ?>:</b>
	<?php echo CHtml::encode($data->date_suppr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_borne')); ?>:</b>
	<?php echo CHtml::encode($data->id_borne); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reclassement_par')); ?>:</b>
	<?php echo CHtml::encode($data->reclassement_par); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_reclassement')); ?>:</b>
	<?php echo CHtml::encode($data->date_reclassement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_mod')); ?>:</b>
	<?php echo CHtml::encode($data->date_mod); ?>
	<br />

	*/ ?>

</div>