<?php

/**
 * This is the model class for table "pcdm".
 *
 * The followings are the available columns in table 'pcdm':
 * @property string $pk_pcdm
 * @property string $niv1
 * @property string $niv2
 * @property string $niv3
 * @property string $niv4
 * @property string $niv5
 * @property string $lib_pcdm
 * @property string $old_style_dogma
 * @property string $pcdm_actif
 */
class Pcdm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pcdm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pk_pcdm', 'required'),
			array('pk_pcdm', 'length', 'max'=>5),
			array('niv1, niv2, niv3, niv4, niv5, pcdm_actif', 'length', 'max'=>1),
			array('lib_pcdm, old_style_dogma', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pk_pcdm, niv1, niv2, niv3, niv4, niv5, lib_pcdm, old_style_dogma, pcdm_actif', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
      'morceaux' => array(self::HAS_MANY, 'Morceau', 'fk_pcdm')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk_pcdm' => 'Pk Pcdm',
			'niv1' => 'Niv1',
			'niv2' => 'Niv2',
			'niv3' => 'Niv3',
			'niv4' => 'Niv4',
			'niv5' => 'Niv5',
			'lib_pcdm' => 'Lib Pcdm',
			'old_style_dogma' => 'Old Style Dogma',
			'pcdm_actif' => 'Pcdm Actif',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pk_pcdm',$this->pk_pcdm,true);
		$criteria->compare('niv1',$this->niv1,true);
		$criteria->compare('niv2',$this->niv2,true);
		$criteria->compare('niv3',$this->niv3,true);
		$criteria->compare('niv4',$this->niv4,true);
		$criteria->compare('niv5',$this->niv5,true);
		$criteria->compare('lib_pcdm',$this->lib_pcdm,true);
		$criteria->compare('old_style_dogma',$this->old_style_dogma,true);
		$criteria->compare('pcdm_actif',$this->pcdm_actif,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pcdm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
