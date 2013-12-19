<?php
/* @var $this LicenceController */
/* @var $data Licence */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sous_nom')); ?>:</b>
	<?php echo CHtml::encode($data->sous_nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('langue')); ?>:</b>
	<?php echo CHtml::encode($data->langue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecoute_prive')); ?>:</b>
	<?php echo CHtml::encode($data->ecoute_prive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modif_prive')); ?>:</b>
	<?php echo CHtml::encode($data->modif_prive); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_prive')); ?>:</b>
	<?php echo CHtml::encode($data->tx_prive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distrib_prive')); ?>:</b>
	<?php echo CHtml::encode($data->distrib_prive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dif_prive')); ?>:</b>
	<?php echo CHtml::encode($data->dif_prive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usage_com')); ?>:</b>
	<?php echo CHtml::encode($data->usage_com); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modif_com')); ?>:</b>
	<?php echo CHtml::encode($data->modif_com); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_com')); ?>:</b>
	<?php echo CHtml::encode($data->tx_com); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distrib_com')); ?>:</b>
	<?php echo CHtml::encode($data->distrib_com); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dif_com')); ?>:</b>
	<?php echo CHtml::encode($data->dif_com); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gestion_collective')); ?>:</b>
	<?php echo CHtml::encode($data->gestion_collective); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decla_licence')); ?>:</b>
	<?php echo CHtml::encode($data->decla_licence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citer_auteur')); ?>:</b>
	<?php echo CHtml::encode($data->citer_auteur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('choix_licence')); ?>:</b>
	<?php echo CHtml::encode($data->choix_licence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commentaire')); ?>:</b>
	<?php echo CHtml::encode($data->commentaire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picto')); ?>:</b>
	<?php echo CHtml::encode($data->picto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preambule')); ?>:</b>
	<?php echo CHtml::encode($data->preambule); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metadonnees')); ?>:</b>
	<?php echo CHtml::encode($data->metadonnees); ?>
	<br />

	*/ ?>

</div>