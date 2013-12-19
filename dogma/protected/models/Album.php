<?php

/**
 * This is the model class for table "album".
 *
 * The followings are the available columns in table 'album':
 * @property string $id_album
 * @property string $titre
 * @property string $titre_alpha
 * @property string $casse
 * @property string $annee
 * @property string $nbtpa
 * @property string $nb_dispo
 * @property string $url
 * @property string $pochette
 * @property string $prix
 * @property string $date_insc
 * @property string $date_insc1
 * @property string $commentaire
 * @property integer $id_groupe
 * @property integer $id_user
 * @property string $url_recto
 * @property string $url_verso
 * @property string $url_cmde
 * @property string $clic_cmde
 * @property string $url_p2p
 * @property string $url_torrent
 * @property string $url_zip
 * @property string $url_archive
 * @property string $lien_album_pragma
 * @property string $cpt_page_album
 */
class Album extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'album';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('titre, titre_alpha, url, pochette, url_recto, url_verso, url_cmde, url_p2p, url_torrent, url_zip, url_archive, lien_album_pragma', 'length', 'max'=>255),
			array('casse', 'length', 'max'=>1),
			array('annee, nbtpa', 'length', 'max'=>4),
			array('nb_dispo, clic_cmde, cpt_page_album', 'length', 'max'=>20),
			array('prix', 'length', 'max'=>15),
			array('date_insc', 'length', 'max'=>11),
			array('date_insc1', 'length', 'max'=>10),
			array('id_groupe', 'length', 'max'=>200),
			array('commentaire', 'safe'),
			// The following rule is used by search().
			array('titre, commentaire', 'safe', 'on'=>'search'),
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
      'morceaux' => array(self::HAS_MANY, 'Morceau', 'id_album')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_album' => 'Id Album',
			'titre' => 'Titre',
			'titre_alpha' => 'Titre Alpha',
			'casse' => 'Casse',
			'annee' => 'Annee',
			'nbtpa' => 'Nbtpa',
			'nb_dispo' => 'Nb Dispo',
			'url' => 'Url',
			'pochette' => 'Pochette',
			'prix' => 'Prix',
			'date_insc' => 'Date Insc',
			'date_insc1' => 'Date Insc1',
			'commentaire' => 'Commentaire',
			'id_groupe' => 'Id Groupe',
			'id_user' => 'Id User',
			'url_recto' => 'Url Recto',
			'url_verso' => 'Url Verso',
			'url_cmde' => 'Url Cmde',
			'clic_cmde' => 'Clic Cmde',
			'url_p2p' => 'Url P2p',
			'url_torrent' => 'Url Torrent',
			'url_zip' => 'Url Zip',
			'url_archive' => 'Url Archive',
			'lien_album_pragma' => 'Lien Album Pragma',
			'cpt_page_album' => 'Cpt Page Album',
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

		$criteria->compare('id_album',$this->id_album,true);
		$criteria->compare('titre',$this->titre,true);
		$criteria->compare('titre_alpha',$this->titre_alpha,true);
		$criteria->compare('casse',$this->casse,true);
		$criteria->compare('annee',$this->annee,true);
		$criteria->compare('nbtpa',$this->nbtpa,true);
		$criteria->compare('nb_dispo',$this->nb_dispo,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('pochette',$this->pochette,true);
		$criteria->compare('prix',$this->prix,true);
		$criteria->compare('date_insc',$this->date_insc,true);
		$criteria->compare('date_insc1',$this->date_insc1,true);
		$criteria->compare('commentaire',$this->commentaire,true);
		$criteria->compare('id_groupe',$this->id_groupe,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('url_recto',$this->url_recto,true);
		$criteria->compare('url_verso',$this->url_verso,true);
		$criteria->compare('url_cmde',$this->url_cmde,true);
		$criteria->compare('clic_cmde',$this->clic_cmde,true);
		$criteria->compare('url_p2p',$this->url_p2p,true);
		$criteria->compare('url_torrent',$this->url_torrent,true);
		$criteria->compare('url_zip',$this->url_zip,true);
		$criteria->compare('url_archive',$this->url_archive,true);
		$criteria->compare('lien_album_pragma',$this->lien_album_pragma,true);
		$criteria->compare('cpt_page_album',$this->cpt_page_album,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Album the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
