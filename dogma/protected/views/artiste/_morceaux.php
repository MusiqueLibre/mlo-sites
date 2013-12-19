<?php
foreach($morceaux as $my_morceau):
//if the album_less option is true : display only tracks without albums
if(isset($album_less) && $my_morceau->album != NULL){
  continue;
}
?>
<li>
  <?php

    echo $my_morceau->titre;
    /*
    foreach (glob("../archive/MP3/".$artiste->id."/".$my_morceau->groupe."*") as $filename) {
      echo '<a href="/archive/MP3/'.$artiste->id.'/'.$filename.'">mp3</a>';
    }
    */
    echo " - ";
    //check if the file name's in the DB
    if(!$my_morceau->url_archive_ogg){
      //if not, just find the file starting with the id and ending with the proper format (the ']' checks it's properly named
      $file_list_ogg = glob("archive/OGG/".$my_morceau->id."*].ogg", GLOB_NOSORT);
      if($file_list_ogg){
        $file_ogg = $file_list_ogg[0];
        $my_morceau->url_archive_ogg = $file_ogg;
      }else{
        $my_morceau->url_archive_ogg = "not_found";
      }
    }else{
      if($my_morceau->url_archive_ogg != "not_found"){
        echo '<a href="'.$my_morceau->url_archive_ogg.'">ogg</a>';
      }
    }
    if(!$my_morceau->url_archive_mp3){
      $file_list_mp3 = glob("archive/MP3/".$my_morceau->id."*].mp3", GLOB_NOSORT);
      if($file_list_mp3){
        $file_mp3 = $file_list_mp3[0];
        $my_morceau->url_archive_mp3 = $file_mp3;
      }else{
        $my_morceau->url_archive_mp3 = "not_found";
      }
      //just save the file name to avoid the heavy glob again
      $my_morceau->save();
    }else{
      if($my_morceau->url_archive_mp3 != "not_found"){
        echo " - ";
        echo '<a href="'.$my_morceau->url_archive_mp3.'">mp3</a>';
      }
    }


  ?>
</li>
<?php
endforeach;
?>

