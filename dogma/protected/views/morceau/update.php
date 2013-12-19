<?php
/* @var $this MorceauController */
/* @var $model Morceau */

$this->breadcrumbs=array(
	'Morceaus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Morceau', 'url'=>array('index')),
	array('label'=>'Create Morceau', 'url'=>array('create')),
	array('label'=>'View Morceau', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Morceau', 'url'=>array('admin')),
);
?>

<h1>Update Morceau <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>