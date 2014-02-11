<?php
/* @var $this ArtisteController */
/* @var $model Artiste */

$this->breadcrumbs=array(
	'Artistes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Artiste', 'url'=>array('index')),
	array('label'=>'Manage Artiste', 'url'=>array('admin')),
);
?>

<h1>Create Artiste</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>