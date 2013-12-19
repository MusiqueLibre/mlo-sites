<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->id_album=>array('view','id'=>$model->id_album),
	'Update',
);

$this->menu=array(
	array('label'=>'List Album', 'url'=>array('index')),
	array('label'=>'Create Album', 'url'=>array('create')),
	array('label'=>'View Album', 'url'=>array('view', 'id'=>$model->id_album)),
	array('label'=>'Manage Album', 'url'=>array('admin')),
);
?>

<h1>Update Album <?php echo $model->id_album; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>