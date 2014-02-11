<?php
/* @var $this LicenceController */
/* @var $model Licence */

$this->breadcrumbs=array(
	'Licences'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Licence', 'url'=>array('index')),
	array('label'=>'Create Licence', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#licence-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Licences</h1>

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
	'id'=>'licence-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date',
		'nom',
		'sous_nom',
		'langue',
		'ecoute_prive',
		/*
		'modif_prive',
		'tx_prive',
		'distrib_prive',
		'dif_prive',
		'usage_com',
		'modif_com',
		'tx_com',
		'distrib_com',
		'dif_com',
		'gestion_collective',
		'decla_licence',
		'citer_auteur',
		'url',
		'choix_licence',
		'commentaire',
		'picto',
		'preambule',
		'metadonnees',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
