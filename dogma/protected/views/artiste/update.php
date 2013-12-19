<?php
/* @var $this ArtisteController */
/* @var $model Artiste */

$this->breadcrumbs=array(
	'Artistes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artiste', 'url'=>array('index')),
	array('label'=>'Create Artiste', 'url'=>array('create')),
	array('label'=>'View Artiste', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Artiste', 'url'=>array('admin')),
);
?>

<h1>Update Artiste <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>