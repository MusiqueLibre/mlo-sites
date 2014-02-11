<?php
/* @var $this ArtisteController */
/* @var $data Artiste */
$this->setPageTitle('Archives Dogmazic - '.$data->nom);
?>

  <h1><?php echo $data->nom; ?></h1>


<header class="content">
  
<?php if( $data->logo)
    echo CHtml::image($data->logo, "image du groupe", array("class"=>"artiste_image")); ?>
  <dl>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('date_insc')); ?>:</dt>
    <dd><?php echo CHtml::encode(date("d/m/Y",$data->date_insc)); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('pays')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->pays); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ville')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->ville); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('musiciens')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->musicien); ?></dd>
    <dt>Liens :</dt>
    <dd><?php echo CHtml::link(CHtml::encode('Site officiel'), $data->site); ?></dd>
  </dl>
	<p><?php echo $data->commentaire ?></p>
</header>
