<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->id_album,
);

$this->menu=array(
	array('label'=>'List Album', 'url'=>array('index')),
	array('label'=>'Create Album', 'url'=>array('create')),
	array('label'=>'Update Album', 'url'=>array('update', 'id'=>$model->id_album)),
	array('label'=>'Delete Album', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_album),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Album', 'url'=>array('admin')),
);
?>

<h1>View Album #<?php echo $model->id_album; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_album',
		'titre',
		'titre_alpha',
		'casse',
		'annee',
		'nbtpa',
		'nb_dispo',
		'url',
		'pochette',
		'prix',
		'date_insc',
		'date_insc1',
		'commentaire',
		'id_groupe',
		'id_user',
		'url_recto',
		'url_verso',
		'url_cmde',
		'clic_cmde',
		'url_p2p',
		'url_torrent',
		'url_zip',
		'url_archive',
		'lien_album_pragma',
		'cpt_page_album',
	),
)); ?>
