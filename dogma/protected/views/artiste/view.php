<?php
date_default_timezone_set('Europe/Paris');
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
    );
    $albumless_morceaux = $model->morceaux_no_album;
    if($albumless_morceaux){
  ?>
      <h2>Morceaux sans album</h2>
          <?php
            $base_path = Yii::getPathOfAlias('webroot');
            $file_url = '/playlist/'.$model->id.'_no_album.json';
            $file_path = $base_path.$file_url;
            $is_playlist = false;
            if(!file_exists($file_path)){
              $file = fopen($file_path, 'w') or die ("can't open file");
              fwrite($file, "[\n");
            }else{
              $is_playlist = true;
              $file = false;
            }
          ?>
        <ul data-playlist="<?php echo '/dogma'.$file_url; ?>" data-id="<?php echo $model->id.'_no_album'; ?>" class="band_album_list">
            <?php
            $this->renderPartial('_morceaux', array(
                'morceaux'=>$albumless_morceaux,
                'is_playlist' => $is_playlist,
                'artiste_name'=>$model->nom,
                'file' => $file,
              )
            );
            if(!$is_playlist){
              fwrite($file, ']');
              fclose($file);
            }
          ?>
      </ul>
 <?php } ?>
</section>


