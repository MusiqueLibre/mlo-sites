<?php
/* @var $this MorceauController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Morceaus',
);

$this->menu=array(
	array('label'=>'Create Morceau', 'url'=>array('create')),
	array('label'=>'Manage Morceau', 'url'=>array('admin')),
);
?>

<h1>Morceaux</h1>
<?php
  $data=$dataProvider->getData();
?>
  <ul>
      <?php
        $this->renderPartial('_view_list_genre', array(
            'data'=>$data
          )
        )
      ?>
  </ul>
<?php
/* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view_list_genre',
)); */
?>
