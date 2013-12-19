<?php
/* @var $this PcdmController */
/* @var $model Pcdm */

$this->breadcrumbs=array(
	'Pcdms'=>array('index'),
	$model->pk_pcdm=>array('view','id'=>$model->pk_pcdm),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pcdm', 'url'=>array('index')),
	array('label'=>'Create Pcdm', 'url'=>array('create')),
	array('label'=>'View Pcdm', 'url'=>array('view', 'id'=>$model->pk_pcdm)),
	array('label'=>'Manage Pcdm', 'url'=>array('admin')),
);
?>

<h1>Update Pcdm <?php echo $model->pk_pcdm; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>