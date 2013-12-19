<?php
/* @var $this ArtisteController */
/* @var $data Artiste */
?>

  <h1><?php echo $data->nom; ?></h1>


<div class="content">
  <span class="artiste_image"><?php echo CHtml::image($data->logo); ?></span>
  <dl>
	<dt><?php echo CHtml::encode($data->getAttributeLabel('date_insc')); ?>:</dt>
	<dd><?php echo CHtml::encode(date("d/m/Y",$data->date_insc)); ?></dd>
  </dl>
  <dl>
	<dt><?php echo CHtml::encode($data->getAttributeLabel('pays')); ?>:</dt>
	<dd><?php echo CHtml::encode($data->pays); ?></dd>
  </dl>
  <dl>
	<dt><?php echo CHtml::encode($data->getAttributeLabel('ville')); ?>:</dt>
	<dd><?php echo CHtml::encode($data->ville); ?></dd>
  </dl>
  <dl>
	<dt><?php echo CHtml::encode($data->getAttributeLabel('musicien')); ?>:</dt>
	<dd><?php echo CHtml::encode($data->musicien); ?></dd>
  </dl>
	<p><?php echo $data->commentaire ?></p>
	<?php echo CHtml::link(CHtml::encode('Site'), $data->site); ?>
</div>
