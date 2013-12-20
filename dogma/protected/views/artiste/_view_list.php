<?php
/* @var $this ArtisteController */
/* @var $data Artiste */
?>

<li class="band_list_item index_list_columns three_columns masonry_item">


	<?php echo CHtml::link($data->nom, array('view','id'=>$data->id), array('class'=>'titlization')); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_insc')); ?>:</b>
	<?php echo CHtml::encode(date("d/m/Y",$data->date_insc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ville')); ?>:</b>
	<?php echo CHtml::encode($data->ville); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pays')); ?>:</b>
	<?php echo CHtml::encode($data->pays); ?>
	<br />

</li>

<?php
/* Tool tip display ?
/* echo CHtml::link($data->nom, array('view','id'=>$data->id), array('class'=>'titlization tooltip', 'title' =>
                                                                            'un groupe de '.$data->pays.' inscrit le : '.
                                                                            $data->date_insc
                                                                    )
                                                                  ); 
 */?>
