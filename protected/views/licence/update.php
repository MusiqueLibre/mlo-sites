<?php
/* @var $this LicenceController */
/* @var $model Licence */

$this->breadcrumbs=array(
	'Licences'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Licence', 'url'=>array('index')),
	array('label'=>'Create Licence', 'url'=>array('create')),
	array('label'=>'View Licence', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Licence', 'url'=>array('admin')),
);
?>

<h1>Update Licence <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>