<?php
/* @var $this PcdmController */
/* @var $data Pcdm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk_pcdm')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk_pcdm), array('view', 'id'=>$data->pk_pcdm)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niv1')); ?>:</b>
	<?php echo CHtml::encode($data->niv1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niv2')); ?>:</b>
	<?php echo CHtml::encode($data->niv2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niv3')); ?>:</b>
	<?php echo CHtml::encode($data->niv3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niv4')); ?>:</b>
	<?php echo CHtml::encode($data->niv4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('niv5')); ?>:</b>
	<?php echo CHtml::encode($data->niv5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lib_pcdm')); ?>:</b>
	<?php echo CHtml::encode($data->lib_pcdm); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('old_style_dogma')); ?>:</b>
	<?php echo CHtml::encode($data->old_style_dogma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcdm_actif')); ?>:</b>
	<?php echo CHtml::encode($data->pcdm_actif); ?>
	<br />

	*/ ?>

</div>
