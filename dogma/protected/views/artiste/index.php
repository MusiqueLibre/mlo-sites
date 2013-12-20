<?php
date_default_timezone_set('Europe/Paris');
/* @var $this ArtisteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Artistes',
);

$this->menu=array(
	array('label'=>'Create Artiste', 'url'=>array('create')),
	array('label'=>'Manage Artiste', 'url'=>array('admin')),
);
?>

<h1>Liste des Groupes</h1>
<div id="band_list">
<?php 
  // disabling useless script that goes with CListView
  Yii::app()->clientScript->scriptMap=array('jquery.yiilistview.js'=>false);
?>
  <?php $this->widget('application.components.CustomListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view_list',
    //'ajaxUpdate'=>false,
    //'ajaxType'=>null,
    'pager' => array('header' => false,
                     'firstPageLabel' => 'Début',
                     'lastPageLabel' => 'Fin',
                     'nextPageLabel' => 'Suite',
                     'prevPageLabel' => 'Précédent',
                     ),
    'template'=>"{pager}\n{sorter}\n{items}\n{pager}",
    'sortableAttributes'=>array(
            'nom',
            'pays',
            'date_insc'=>"date d'inscription",
     ),
     'sorterHeader' => false,
     'cssFile'=>false,
     'itemsTagName'=>"ul",
     //'id'=>"masonry_container",
  ));
   ?>
