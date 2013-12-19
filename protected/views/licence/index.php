<?php
/* @var $this LicenceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Licences',
);

$this->menu=array(
	array('label'=>'Create Licence', 'url'=>array('create')),
	array('label'=>'Manage Licence', 'url'=>array('admin')),
);
?>

<h1>Licences</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
