<?php
/* @var $this MorceauController */
/* @var $model Morceau */

$this->breadcrumbs=array(
	'Morceaus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Morceau', 'url'=>array('index')),
	array('label'=>'Create Morceau', 'url'=>array('create')),
	array('label'=>'Update Morceau', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Morceau', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Morceau', 'url'=>array('admin')),
);
?>

<h1>View Morceau #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_membre',
		'date_insc1',
		'date_insc',
		'titre',
		'casse',
		'album',
		'album_alpha',
		'id_album',
		'ordre_album',
		'ordre_groupe',
		'visible_groupe',
		'groupe',
		'groupe_alpha',
		'auteur',
		'compositeur',
		'interprete',
		'date_compo',
		'duree',
		'style',
		'fk_pcdm',
		'commentaire',
		'label',
		'label_alpha',
		'licence',
		'licence_avenant',
		'prix',
		'hits',
		'stream',
		'radio',
		'url_titre',
		'url_titre2',
		'url_p2p',
		'actif',
		'desac_404',
		'note',
		'post',
		'taille',
		'taille_mp3',
		'taille_ogg',
		'url_torrent',
		'autorise_vote',
		'autorise_comment',
		'url_archive_mp3',
		'url_archive_ogg',
		'suppr',
		'date_suppr',
		'id_borne',
		'reclassement_par',
		'date_reclassement',
		'date_mod',
	),
)); ?>
