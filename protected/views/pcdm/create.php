<?php
/* @var $this PcdmController */
/* @var $model Pcdm */

$this->breadcrumbs=array(
	'Pcdms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pcdm', 'url'=>array('index')),
	array('label'=>'Manage Pcdm', 'url'=>array('admin')),
);
?>

<h1>Create Pcdm</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>