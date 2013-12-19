<?php
foreach($albums as $my_album):
?>
<div class="band_album">
  <h2><?php echo $my_album->titre;?></h2>
  <ul>
    <?php
      $this->renderPartial('_morceaux', array(
          'morceaux'=>$my_album->morceaux,
        )
      )
    ?>
  </ul>
</div>
<?php
endforeach;
?>

