<?php
/* @var $this PcdmController */
/* @var $model Pcdm */

$this->breadcrumbs=array(
	'Pcdms'=>array('index'),
	$model->pk_pcdm,
);

$this->menu=array(
	array('label'=>'List Pcdm', 'url'=>array('index')),
	array('label'=>'Create Pcdm', 'url'=>array('create')),
	array('label'=>'Update Pcdm', 'url'=>array('update', 'id'=>$model->pk_pcdm)),
	array('label'=>'Delete Pcdm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk_pcdm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pcdm', 'url'=>array('admin')),
);
?>

<h1>View Pcdm #<?php echo $model->pk_pcdm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk_pcdm',
		'niv1',
		'niv2',
		'niv3',
		'niv4',
		'niv5',
		'lib_pcdm',
		'old_style_dogma',
		'pcdm_actif',
	),
)); ?>
