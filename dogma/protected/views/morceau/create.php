<?php
/* @var $this MorceauController */
/* @var $model Morceau */

$this->breadcrumbs=array(
	'Morceaus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Morceau', 'url'=>array('index')),
	array('label'=>'Manage Morceau', 'url'=>array('admin')),
);
?>

<h1>Create Morceau</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>