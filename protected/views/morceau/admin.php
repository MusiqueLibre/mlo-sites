<?php
/* @var $this MorceauController */
/* @var $model Morceau */

$this->breadcrumbs=array(
	'Morceaus'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Morceau', 'url'=>array('index')),
	array('label'=>'Create Morceau', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#morceau-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Morceaus</h1>

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
	'id'=>'morceau-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_membre',
		'date_insc1',
		'date_insc',
		'titre',
		'casse',
		/*
		'album',
		'album_alpha',
		'id_album',
		'ordre_album',
		'ordre_groupe',
		'visible_groupe',
		'groupe',
		'groupe_alpha',
		'auteur',
		'compositeur',
		'interprete',
		'date_compo',
		'duree',
		'style',
		'fk_pcdm',
		'commentaire',
		'label',
		'label_alpha',
		'licence',
		'licence_avenant',
		'prix',
		'hits',
		'stream',
		'radio',
		'url_titre',
		'url_titre2',
		'url_p2p',
		'actif',
		'desac_404',
		'note',
		'post',
		'taille',
		'taille_mp3',
		'taille_ogg',
		'url_torrent',
		'autorise_vote',
		'autorise_comment',
		'url_archive_mp3',
		'url_archive_ogg',
		'suppr',
		'date_suppr',
		'id_borne',
		'reclassement_par',
		'date_reclassement',
		'date_mod',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
