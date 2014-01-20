<?php
if(isset($album)){
  $morceaux = $album->morceaux;
  $album_titre = $album->titre;
}else{
  $album_titre = "no album";
}
$separator = ',';

//count the number of element to be able to remove the last comma
$count = count($morceaux);

foreach($morceaux as $index =>  $my_morceau):
//if the album_less option is true : display only tracks without albums
//TODO : a proper criteria rather than this whould be better
  //remove the comma for the last element
  if($index+1 == $count){
    $separator = '';
  }
  if($my_morceau->suppr == 'O')
    continue;
  ?>
<li class="full_track_item media_entry_wrapper loading_playlist">
  <?php

    echo $my_morceau->titre;
    /*
    foreach (glob("../archive/MP3/".$artiste->id."/".$my_morceau->groupe."*") as $filename) {
      echo '<a href="/archive/MP3/'.$artiste->id.'/'.$filename.'">mp3</a>';
    }
    */
    //check if the file name's in the DB
    if(!$my_morceau->url_archive_ogg){
      //if not, just find the file starting with the id and ending with the proper format (the ']' checks it's properly named
      $file_list_ogg = glob("../../archive/OGG/".$my_morceau->id."*].ogg", GLOB_NOSORT);
      if($file_list_ogg){
        $file_ogg = $file_list_ogg[0];
        $my_morceau->url_archive_ogg = strstr($file_ogg, "/archive/OGG/");
      }else{
        $my_morceau->url_archive_ogg = "not_found";
      }
    }else{
      if($my_morceau->url_archive_ogg != "not_found"){
        echo '<a class="buttonified download track_button" href="'.$my_morceau->url_archive_ogg.'" download="'.$my_morceau->titre.'.ogg">ogg &#11015;</a>';
      }
    }
    if(!$my_morceau->url_archive_mp3){
      $file_list_mp3 = glob("../../archive/MP3/".$my_morceau->id."*].mp3", GLOB_NOSORT);
      if($file_list_mp3){
        $file_mp3 = $file_list_mp3[0];
        $my_morceau->url_archive_mp3 = strstr($file_mp3, "/archive/MP3/");
      }else{
        $my_morceau->url_archive_mp3 = "not_found";
      }
      //just save the file name to avoid the heavy glob again
      $my_morceau->save();
    }else{
      if($my_morceau->url_archive_mp3 != "not_found"){
        echo '<a class="buttonified download track_button" href="'.$my_morceau->url_archive_mp3.'" download="'.$my_morceau->titre.'.mp3">mp3 &#11015;</a>';
      }
    }
    echo '<button class="add_track track_button">&#8853; Ajouter au lecteur</button>';

    //create playliste if it doesn't exist
    if(!$is_playlist){
      $data = '{"0":{"src":"'.$my_morceau->url_archive_ogg."\"},\n";
      $data .= '"config":{"title":"'.$artiste_name.' - '.$album_titre.' - '.$my_morceau->titre."\"}\n";
      $data .= "}".$separator."\n";
      fwrite($file, $data);
    }

  ?>
</li>
<?php
endforeach;
?>

