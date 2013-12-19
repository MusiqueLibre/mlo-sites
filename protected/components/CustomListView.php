<?php
 
Yii::import('zii.widgets.CListView');
 
/*
*
* Custom version of CListView that disables all AJAX
* Save this file to protected/components/CustomListView.php
*
*/
 
class CustomListView extends CListView {
  /**
  * Registers necessary client scripts.
  */
  public function registerClientScript()
  {
    $id=$this->getId();
     
    if($this->ajaxUpdate===false)
    $ajaxUpdate=array();
    else
    $ajaxUpdate=array_unique(preg_split('/\s*,\s*/',$this->ajaxUpdate.','.$id,-1,PREG_SPLIT_NO_EMPTY));
    $options=array(
    'ajaxUpdate'=>$ajaxUpdate,
    'ajaxVar'=>$this->ajaxVar,
    'pagerClass'=>$this->pagerCssClass,
    'loadingClass'=>$this->loadingCssClass,
    'sorterClass'=>$this->sorterCssClass,
    'enableHistory'=>$this->enableHistory
    );
    if($this->ajaxUrl!==null)
    $options['url']=CHtml::normalizeUrl($this->ajaxUrl);
    //if($this->ajaxType!==null)
    //$options['ajaxType']=strtoupper($this->ajaxType);
    if($this->updateSelector!==null)
    $options['updateSelector']=$this->updateSelector;
    foreach(array('beforeAjaxUpdate', 'afterAjaxUpdate', 'ajaxUpdateError') as $event)
    {
    if($this->$event!==null)
    {
    if($this->$event instanceof CJavaScriptExpression)
    $options[$event]=$this->$event;
    else
    $options[$event]=new CJavaScriptExpression($this->$event);
    }
    }
   
  /* removed all script references here */
  }
}
