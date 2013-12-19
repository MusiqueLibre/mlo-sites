<?php
/* @var $this PcdmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pcdms',
);

$this->menu=array(
	array('label'=>'Create Pcdm', 'url'=>array('create')),
	array('label'=>'Manage Pcdm', 'url'=>array('admin')),
);
?>

<h1>Pcdms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
