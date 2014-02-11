<?php
$this->pageTitle=Yii::app()->name . ' - Search results';
$this->breadcrumbs=array(
    'Search Results',
);
?>
 
<h1 id="main_content_title" >Search Results for: "<?php echo CHtml::encode($term); ?>"</h1>
<div class="content">
<?php if (!empty($results)): ?>
                <?php for($i = $currentPage * $pages->pageSize - $pages->pageSize, $end = $currentPage * $pages->pageSize; $i<$end;$i++):
                $artiste_nom = $results[$i]->Artiste;
                $artiste = Artiste::model()->find('nom = "'.$artiste_nom.'"');
?>                  
                    <dl>
                    <dt>Artiste :</dt> <dd><a href="/index.php/artiste/<?php echo $artiste->id ?>"><?php echo CHtml::encode($results[$i]->Artiste); ?></a><dd/>
                    <dt>Title:</dt><dd> <?php echo CHtml::encode($results[$i]->Titre); ?><dd/>
                    <dt>Genre :</dt><dd> <?php echo CHtml::encode($results[$i]->Genre); ?><dd/>
                    </dl>
                    <?php
                      if(!isset($results[$i+1])){
                        break;
                      }
                    ?>
                <?php endfor; ?>
 
            <?php else: ?>
                <p class="error">No results matched your search terms.</p>
            <?php endif; ?>
<?php $this->widget('CLinkPager', array(
      'pages' => $pages,
    )) ?>
</div>
