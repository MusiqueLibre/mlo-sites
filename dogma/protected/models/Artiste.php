<?php

/**
 * This is the model class for table "artiste".
 *
 * The followings are the available columns in table 'artiste':
 * @property string $id
 * @property string $nom
 * @property string $casse_artiste
 * @property string $forme
 * @property string $inscrit_par
 * @property integer $date_insc
 * @property string $ville
 * @property string $pays
 * @property string $musicien
 * @property string $logo
 * @property string $commentaire
 * @property string $commentaire_en
 * @property string $site
 * @property string $mail
 * @property string $pass
 * @property string $french
 * @property string $english
 * @property string $don_status
 * @property string $don_chaine
 * @property string $cpt_page_artiste
 * @property string $lien_groupe_pragma
 * @property string $suppr
 * @property string $date_suppr
 * @property string $automazic
 * @property string $suppr_automazic
 * @property string $compte_paypal
 */
class Artiste extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'artiste';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('commentaire_en', 'required'),
			array('date_insc', 'numerical', 'integerOnly'=>true),
			array('nom, inscrit_par', 'length', 'max'=>150),
			array('casse_artiste', 'length', 'max'=>2),
			array('forme', 'length', 'max'=>12),
			array('ville, pays', 'length', 'max'=>120),
			array('logo, site, mail, lien_groupe_pragma, compte_paypal', 'length', 'max'=>255),
			array('pass', 'length', 'max'=>30),
			array('don_status, suppr, automazic', 'length', 'max'=>1),
			array('don_chaine', 'length', 'max'=>25),
			array('cpt_page_artiste', 'length', 'max'=>20),
			array('date_suppr', 'length', 'max'=>10),
			array('suppr_automazic', 'length', 'max'=>8),
			array('musicien, commentaire, french, english', 'safe'),
			// The following rule is used by search().
			array('nom, commentaire', 'safe', 'on'=>'search'),
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
      'albums' => array(self::HAS_MANY, 'Album', 'id_groupe'),
      'morceaux' => array(self::HAS_MANY, 'Morceau', 'groupe', 'condition'=>"id_album IS NOT NULL"),
      'morceaux_no_album' => array(self::HAS_MANY, 'Morceau', 'groupe', 'condition'=>"id_album IS NULL")
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nom' => 'Nom',
			'casse_artiste' => 'Casse Artiste',
			'forme' => 'Forme',
			'inscrit_par' => 'Inscrit Par',
			'date_insc' => "Date d'inscription",
			'ville' => 'Ville',
			'pays' => 'Pays',
			'musicien' => 'Musicien',
			'logo' => 'Logo',
			'commentaire' => 'Commentaire',
			'commentaire_en' => 'Commentaire En',
			'site' => 'Site',
			'mail' => 'Mail',
			'pass' => 'Pass',
			'french' => 'French',
			'english' => 'English',
			'don_status' => 'Don Status',
			'don_chaine' => 'Don Chaine',
			'cpt_page_artiste' => 'Cpt Page Artiste',
			'lien_groupe_pragma' => 'Lien Groupe Pragma',
			'suppr' => 'Suppr',
			'date_suppr' => 'Date Suppr',
			'automazic' => 'Automazic',
			'suppr_automazic' => 'Suppr Automazic',
			'compte_paypal' => 'Compte Paypal',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('casse_artiste',$this->casse_artiste,true);
		$criteria->compare('forme',$this->forme,true);
		$criteria->compare('inscrit_par',$this->inscrit_par,true);
		$criteria->compare('date_insc',$this->date_insc);
		$criteria->compare('ville',$this->ville,true);
		$criteria->compare('pays',$this->pays,true);
		$criteria->compare('musicien',$this->musicien,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('commentaire',$this->commentaire,true);
		$criteria->compare('commentaire_en',$this->commentaire_en,true);
		$criteria->compare('site',$this->site,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('french',$this->french,true);
		$criteria->compare('english',$this->english,true);
		$criteria->compare('don_status',$this->don_status,true);
		$criteria->compare('don_chaine',$this->don_chaine,true);
		$criteria->compare('cpt_page_artiste',$this->cpt_page_artiste,true);
		$criteria->compare('lien_groupe_pragma',$this->lien_groupe_pragma,true);
		$criteria->compare('suppr',$this->suppr,true);
		$criteria->compare('date_suppr',$this->date_suppr,true);
		$criteria->compare('automazic',$this->automazic,true);
		$criteria->compare('suppr_automazic',$this->suppr_automazic,true);
		$criteria->compare('compte_paypal',$this->compte_paypal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artiste the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
