<?php
/* @var $this PcdmController */
/* @var $model Pcdm */

$this->breadcrumbs=array(
	'Pcdms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pcdm', 'url'=>array('index')),
	array('label'=>'Create Pcdm', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pcdm-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pcdms</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pcdm-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pk_pcdm',
		'niv1',
		'niv2',
		'niv3',
		'niv4',
		'niv5',
		/*
		'lib_pcdm',
		'old_style_dogma',
		'pcdm_actif',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
