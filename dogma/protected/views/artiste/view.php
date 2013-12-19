<?php
/* @var $this ArtisteController */
/* @var $model Artiste */

$this->breadcrumbs=array(
	'Artistes'=>array('index'),
	$model->nom,
);

$this->menu=array(
	array('label'=>'List Artiste', 'url'=>array('index')),
	array('label'=>'Create Artiste', 'url'=>array('create')),
	array('label'=>'Update Artiste', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Artiste', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artiste', 'url'=>array('admin')),
);
?>

  <?php $this->renderPartial('_view_full', array(
      'data'=>$model,
    ));
  ?>
<section class="content">
  <h1>Albums de <?php echo $model->nom; ?></h1>

  <?php
    $this->renderPartial('_albums', array(
        'artiste'=>$model,
        'albums'=>$model->albums,
      )
    )
  ?>
  <h2>Morceaux sans album</h2>
  <ul>
      <?php
        $this->renderPartial('_morceaux', array(
            'morceaux'=>$model->morceaux,
            'album_less'=>true,
          )
        )
      ?>
  </ul>
</section>


