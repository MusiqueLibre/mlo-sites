<?php
/* @var $this MorceauController */
/* @var $data Morceau */
?>
<?php
 $band_array = array();
?>
<?php foreach($data as $my_track){ 

  $band_name =  $my_track->artiste->nom; 
  if(in_array($band_name, $band_array)){
    continue;
  }else{
    array_push($band_array, $band_name);
  }
?>


  <?php echo $band_name ; ?>
	<b><?php echo CHtml::encode($my_track->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($my_track->id), array('view', 'id'=>$my_track->id)); ?>
	<br />

	<b><?php echo CHtml::encode($my_track->getAttributeLabel('id_membre')); ?>:</b>
	<?php echo CHtml::encode($my_track->id_membre); ?>
	<br />

	<b><?php echo CHtml::encode($my_track->getAttributeLabel('date_insc1')); ?>:</b>
	<?php echo CHtml::encode($my_track->date_insc1); ?>
	<br />

	<b><?php echo CHtml::encode($my_track->getAttributeLabel('date_insc')); ?>:</b>
	<?php echo CHtml::encode($my_track->date_insc); ?>
	<br />

	<b><?php echo CHtml::encode($my_track->getAttributeLabel('titre')); ?>:</b>
	<?php echo CHtml::encode($my_track->titre); ?>
	<br />

	<b><?php echo CHtml::encode($my_track->getAttributeLabel('casse')); ?>:</b>
	<?php echo CHtml::encode($my_track->casse); ?>
	<br />

	<b><?php echo CHtml::encode($my_track->getAttributeLabel('album')); ?>:</b>
	<?php echo CHtml::encode($my_track->album); ?>
	<br />
<?php } ?>
