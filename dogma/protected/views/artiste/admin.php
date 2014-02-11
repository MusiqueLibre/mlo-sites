<?php
/* @var $this ArtisteController */
/* @var $model Artiste */

$this->breadcrumbs=array(
	'Artistes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Artiste', 'url'=>array('index')),
	array('label'=>'Create Artiste', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#artiste-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Artistes</h1>

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
	'id'=>'artiste-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nom',
		'casse_artiste',
		'forme',
		'inscrit_par',
		'date_insc',
		/*
		'ville',
		'pays',
		'musicien',
		'logo',
		'commentaire',
		'commentaire_en',
		'site',
		'mail',
		'pass',
		'french',
		'english',
		'don_status',
		'don_chaine',
		'cpt_page_artiste',
		'lien_groupe_pragma',
		'suppr',
		'date_suppr',
		'automazic',
		'suppr_automazic',
		'compte_paypal',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
