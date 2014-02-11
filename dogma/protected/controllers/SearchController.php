<?php
class SearchController extends Controller
{
    /**
     * @var string index dir as alias path from <b>application.</b>  , default to <b>runtime.search</b>
     */
    private $_indexFiles = 'runtime.search';
    /**
     * (non-PHPdoc)
     * @see CController::init()
     */
    public function init(){
        Yii::import('application.vendors.*');
        require_once('Zend/Search/Lucene.php');
        parent::init(); 
    }

    public function actionCreate(){
        $index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles), true);

        $criteria = new CDbCriteria(array(
            'condition'=> 't.suppr = "N"',
            'order'=>'nom ASC',
          )
        );
        $artiste = Artiste::model()->findAll($criteria);
        echo "GO<br/>";
        foreach($artiste as $count =>  $my_artiste){
              echo " -||".$count."||- ";
              $morceaux = $my_artiste->morceaux;
              foreach($morceaux as $count => $my_morceau){
                  $doc = new Zend_Search_Lucene_Document();

                  $doc->addField(Zend_Search_Lucene_Field::Text('Artiste',
                                                CHtml::encode($my_morceau->artiste->nom), 'utf-8')
                  );

                  $doc->addField(Zend_Search_Lucene_Field::Text('Titre',
                                                  CHtml::encode($my_morceau->titre)
                                                      , 'utf-8')
                  );   


                  $separator = '';
                  $genre_str = '';
                  $genre = Pcdm::model()->find("pk_pcdm = $my_morceau->fk_pcdm");
                  $doc->addField(Zend_Search_Lucene_Field::Text('Genre',
                                                CHtml::encode($genre->lib_pcdm)
                                                , 'utf-8')
                  );
                  $licence = Licence::model()->find("id = $my_morceau->licence");
                  $doc->addField(Zend_Search_Lucene_Field::Text('Licence',
                                                CHtml::encode($licence->nom)
                                                , 'utf-8')
                  );
                  $index->addDocument($doc);


              }
           }
           $index->commit();
           echo 'Lucene index created';
    }
 
    public function actionSearch(){
       $this->layout='column2';
         if (($term = Yii::app()->getRequest()->getParam('q', null)) !== null) {
            $index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles));
            $results = $index->find($term);
            $query = Zend_Search_Lucene_Search_QueryParser::parse($term);
            $pages = new CPagination(count($results));
            $currentPage = Yii::app()->getRequest()->getQuery('page', 1);
            $pages->pageSize = 50;
 
            $this->render('search', compact('results', 'term', 'query', 'pages', 'currentPage'));
        }
    }
}
?>
