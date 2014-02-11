<?php
/* @var $this LicenceController */
/* @var $model Licence */

$this->breadcrumbs=array(
	'Licences'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Licence', 'url'=>array('index')),
	array('label'=>'Create Licence', 'url'=>array('create')),
	array('label'=>'Update Licence', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Licence', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Licence', 'url'=>array('admin')),
);
?>

<h1>View Licence #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date',
		'nom',
		'sous_nom',
		'langue',
		'ecoute_prive',
		'modif_prive',
		'tx_prive',
		'distrib_prive',
		'dif_prive',
		'usage_com',
		'modif_com',
		'tx_com',
		'distrib_com',
		'dif_com',
		'gestion_collective',
		'decla_licence',
		'citer_auteur',
		'url',
		'choix_licence',
		'commentaire',
		'picto',
		'preambule',
		'metadonnees',
	),
)); ?>
