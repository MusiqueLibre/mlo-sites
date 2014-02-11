<?php
/* @var $this LicenceController */
/* @var $model Licence */

$this->breadcrumbs=array(
	'Licences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Licence', 'url'=>array('index')),
	array('label'=>'Manage Licence', 'url'=>array('admin')),
);
?>

<h1>Create Licence</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>