<?php
/* @var $this ArtisteController */
/* @var $data Artiste */
$this->setPageTitle('Archives Dogmazic - '.$data->nom);
?>

  <h1><?php echo $data->nom; ?></h1>


<div class="content">
  <?php echo CHtml::image($data->logo, "image du groupe", array("class"=>"artiste_image")); ?>
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
