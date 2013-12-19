<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<main class="primary" id="main_content">
  <?php echo $content; ?>
</main>
<aside id="sidebar">
  <h1 id="sidebar_title">Filtres</h1>
    <ul id="side_nav">
      <li class="bullet_less side_filter">
        <div class="side_filter_content">
          <?php
            $alphabet = range('a', 'z');
            foreach($alphabet as $letter){
               echo CHtml::link( strtoupper($letter), array('index','start_with'=>$letter))." - ";
            }
            echo CHtml::link( "Afficher tout", array('index'));
          ?>
        </div>
        <h2 class="side_filter_title" id="side_filter_title_1"><span class="make_vertical">Alphabet</span></h2>
      </li>
      <li class="bullet_less side_filter">
        <div class="side_filter_content">
          <ul id="pcdm_list" class="side_filter_list">
            <?php 
              $criteria = new CDbCriteria(array(
                  'condition'=> 'pcdm_actif = "O"',
                  )
                 );
              $pcdm = Pcdm::model()->findAll($criteria);
              $pcdm_cat_lvl0 = $pcdm[0]->niv1;
              foreach($pcdm as $genre){

                if($pcdm_cat_lvl0 != $genre->niv1){
                  echo '</ul></details></li>';
                  $pcdm_cat_lvl0 = $genre->niv1;
                }
                if($genre->niv2 == null){
                  echo '<li class="genre_item side_filter_item bullet_less"><details>';
                  echo '<summary>'.$genre->lib_pcdm.'</summary><ul id="sub_genre" class="side_filter_list side_filter_sub_list">';
                }else{
                  if($genre->nombre_morceaux == 0)
                    continue;
                  echo '<li class="sub_genre_item side_filter_item bullet_less">'.CHtml::link($genre->lib_pcdm ,array('index', 'genre'=>$genre->pk_pcdm)).'('.$genre->nombre_morceaux.')</li>';
                }
              }

            echo '</ul></details></li>';
            ?> 
            <li class="sub_genre_item side_filter_item bullet_less">
              <?php echo Chtml::link('Non-classé', array('index', 'genre'=>7)) ; ?>
            </li>
          </ul>
        </div>
        <h2 class="side_filter_title" id="side_filter_title_2"><span class="make_vertical">Genre musical</span></h2>
      </li>
   </ul>
    <?php if(!Yii::app()->user->isGuest){?>
        <?php
          $this->beginWidget('zii.widgets.CPortlet', array(
            'title'=>'Operations',
          ));
          $this->widget('zii.widgets.CMenu', array(
            'items'=>$this->menu,
            'htmlOptions'=>array('class'=>'operations'),
          ));
          $this->endWidget();
        ?>
    <?php } ?>
</aside><!-- sidebar -->
<?php $this->endContent(); ?>
