<?php
/* @var $this ArtisteController */
/* @var $data Artiste */
?>

<li class="band_list_item index_list_columns three_columns">


	<?php echo CHtml::link($data->nom, array('view','id'=>$data->id), array('class'=>'band_list_link')); ?>
	<dl >
   <dt><?php echo CHtml::encode($data->getAttributeLabel('date_insc')); ?>:</dt>
   <dd><?php echo CHtml::encode(date("d/m/Y",$data->date_insc)); ?></dd>
	</dl>

  <dl>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ville')); ?>:</dt>
  	<dd><?php echo CHtml::encode($data->ville); ?></dd>
	</dl>

  <dl>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('pays')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->pays); ?></dd>
	</dl>

</li>

<?php
/* Tool tip display ?
/* echo CHtml::link($data->nom, array('view','id'=>$data->id), array('class'=>'titlization tooltip', 'title' =>
                                                                            'un groupe de '.$data->pays.' inscrit le : '.
                                                                            $data->date_insc
                                                                    )
                                                                  ); 
 */?>
