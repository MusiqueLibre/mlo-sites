<?php

/**
 * This is the model class for table "licence".
 *
 * The followings are the available columns in table 'licence':
 * @property integer $id
 * @property string $date
 * @property string $nom
 * @property string $sous_nom
 * @property string $langue
 * @property string $ecoute_prive
 * @property string $modif_prive
 * @property string $tx_prive
 * @property string $distrib_prive
 * @property string $dif_prive
 * @property string $usage_com
 * @property string $modif_com
 * @property string $tx_com
 * @property string $distrib_com
 * @property string $dif_com
 * @property string $gestion_collective
 * @property string $decla_licence
 * @property string $citer_auteur
 * @property string $url
 * @property string $choix_licence
 * @property string $commentaire
 * @property string $picto
 * @property string $preambule
 * @property string $metadonnees
 */
class Licence extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'licence';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date', 'length', 'max'=>11),
			array('nom, sous_nom, langue, url, picto', 'length', 'max'=>255),
			array('ecoute_prive, modif_prive, tx_prive, distrib_prive, dif_prive, usage_com, modif_com, tx_com, distrib_com, dif_com, gestion_collective, decla_licence, citer_auteur', 'length', 'max'=>3),
			array('choix_licence', 'length', 'max'=>1),
			array('commentaire, preambule, metadonnees', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, nom, sous_nom, langue, ecoute_prive, modif_prive, tx_prive, distrib_prive, dif_prive, usage_com, modif_com, tx_com, distrib_com, dif_com, gestion_collective, decla_licence, citer_auteur, url, choix_licence, commentaire, picto, preambule, metadonnees', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date' => 'Date',
			'nom' => 'Nom',
			'sous_nom' => 'Sous Nom',
			'langue' => 'Langue',
			'ecoute_prive' => 'Ecoute Prive',
			'modif_prive' => 'Modif Prive',
			'tx_prive' => 'Tx Prive',
			'distrib_prive' => 'Distrib Prive',
			'dif_prive' => 'Dif Prive',
			'usage_com' => 'Usage Com',
			'modif_com' => 'Modif Com',
			'tx_com' => 'Tx Com',
			'distrib_com' => 'Distrib Com',
			'dif_com' => 'Dif Com',
			'gestion_collective' => 'Gestion Collective',
			'decla_licence' => 'Decla Licence',
			'citer_auteur' => 'Citer Auteur',
			'url' => 'Url',
			'choix_licence' => 'Choix Licence',
			'commentaire' => 'Commentaire',
			'picto' => 'Picto',
			'preambule' => 'Preambule',
			'metadonnees' => 'Metadonnees',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('sous_nom',$this->sous_nom,true);
		$criteria->compare('langue',$this->langue,true);
		$criteria->compare('ecoute_prive',$this->ecoute_prive,true);
		$criteria->compare('modif_prive',$this->modif_prive,true);
		$criteria->compare('tx_prive',$this->tx_prive,true);
		$criteria->compare('distrib_prive',$this->distrib_prive,true);
		$criteria->compare('dif_prive',$this->dif_prive,true);
		$criteria->compare('usage_com',$this->usage_com,true);
		$criteria->compare('modif_com',$this->modif_com,true);
		$criteria->compare('tx_com',$this->tx_com,true);
		$criteria->compare('distrib_com',$this->distrib_com,true);
		$criteria->compare('dif_com',$this->dif_com,true);
		$criteria->compare('gestion_collective',$this->gestion_collective,true);
		$criteria->compare('decla_licence',$this->decla_licence,true);
		$criteria->compare('citer_auteur',$this->citer_auteur,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('choix_licence',$this->choix_licence,true);
		$criteria->compare('commentaire',$this->commentaire,true);
		$criteria->compare('picto',$this->picto,true);
		$criteria->compare('preambule',$this->preambule,true);
		$criteria->compare('metadonnees',$this->metadonnees,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Licence the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
