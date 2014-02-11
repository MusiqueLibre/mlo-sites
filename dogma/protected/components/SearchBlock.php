<?php
Yii::import('zii.widgets.CPortlet');
 
class SearchBlock extends CPortlet
{
    function __construct(){
      $this->setId('search_form');
    }
    public $title='Search';
 
    protected function renderDecoration(){
      //leave empty, it's an override
    }
    protected function renderContent()
    {
        echo CHtml::beginForm(array('search/search'), 'get', array('style'=> 'inline')) .
        CHtml::textField('q', '', array('placeholder'=> 'search...','style'=>'width:140px;')) .
        CHtml::submitButton('Go!',array('class'=>'clear_bg')) .
        CHtml::endForm('');
    }

}
?>
