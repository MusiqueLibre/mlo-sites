<?php
$base_path = Yii::getPathOfAlias('webroot');
foreach($albums as $my_album):
  $file_url = '/playlist/'.$artiste->id.'_'.$my_album->id_album.'.json';
  $file_path = $base_path.$file_url;
  $is_playlist = false;
  if(!file_exists($file_path)){
    $file = fopen($file_path, 'w') or die ("can't open file");
    fwrite($file, "[\n");
  }else{
    $is_playlist = true;
    $file =false;
  }
?>
  <div class="band_album">
    <?php
      $album_zip = '../../archive/albums/'.$my_album->id_album.'.zip';
      if(file_exists($album_zip)){
        echo'<a class="buttonified" href="'.$album_zip.'" download="'.$my_album->titre_alpha.'.zip">Télécharger album</a>';
      }
    ?>
    <h2><?php echo $my_album->titre;?></h2>
    <button class="add_album_to_playlist track_button loading_playlist">&#8853; Ajouter tout l'album  au lecteur</button>
    <ul class="band_album_list" data-playlist="<?php echo '/dogma'.$file_url; ?>" data-id="<?php echo $artiste->id.'_'.$my_album->id_album; ?>">
      <?php
        $this->renderPartial('_morceaux', array(
            'album' => $my_album,
            'artiste_name' => $artiste->nom,
            'is_playlist' => $is_playlist,
            'file' => $file,
          )
        )
      ?>
    </ul>
  </div>
<?php
  if(!$is_playlist){
    fwrite($file, ']');
    fclose($file);
  }
endforeach;
?>

