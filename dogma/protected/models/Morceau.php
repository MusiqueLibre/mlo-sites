<?php

/**
 * This is the model class for table "morceau".
 *
 * The followings are the available columns in table 'morceau':
 * @property string $id
 * @property integer $id_membre
 * @property string $date_insc1
 * @property string $date_insc
 * @property string $titre
 * @property string $casse
 * @property string $album
 * @property string $album_alpha
 * @property integer $id_album
 * @property integer $ordre_album
 * @property integer $ordre_groupe
 * @property string $visible_groupe
 * @property string $groupe
 * @property string $groupe_alpha
 * @property string $auteur
 * @property string $compositeur
 * @property string $interprete
 * @property string $date_compo
 * @property string $duree
 * @property string $style
 * @property string $fk_pcdm
 * @property string $commentaire
 * @property string $label
 * @property string $label_alpha
 * @property string $licence
 * @property string $licence_avenant
 * @property string $prix
 * @property string $hits
 * @property string $stream
 * @property string $radio
 * @property string $url_titre
 * @property string $url_titre2
 * @property string $url_p2p
 * @property string $actif
 * @property string $desac_404
 * @property string $note
 * @property string $post
 * @property integer $taille
 * @property integer $taille_mp3
 * @property integer $taille_ogg
 * @property string $url_torrent
 * @property string $autorise_vote
 * @property string $autorise_comment
 * @property string $url_archive_mp3
 * @property string $url_archive_ogg
 * @property string $suppr
 * @property string $date_suppr
 * @property string $id_borne
 * @property string $reclassement_par
 * @property string $date_reclassement
 * @property integer $date_mod
 */
class Morceau extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'morceau';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date_mod', 'required'),
			array('id_membre, id_album, ordre_album, ordre_groupe, taille, taille_mp3, taille_ogg, date_mod', 'numerical', 'integerOnly'=>true),
			array('date_insc1, date_insc, date_compo, duree, prix, note, date_suppr, date_reclassement', 'length', 'max'=>10),
			array('titre, groupe, groupe_alpha, compositeur, interprete, style, licence, licence_avenant', 'length', 'max'=>240),
			array('casse', 'length', 'max'=>2),
			array('album, album_alpha, auteur, label_alpha, url_titre, nom_fichier, url_p2p, url_archive_mp3, url_archive_ogg, id_borne', 'length', 'max'=>255),
			array('visible_groupe, actif, desac_404, autorise_vote, autorise_comment, suppr', 'length', 'max'=>1),
			array('fk_pcdm', 'length', 'max'=>5),
			array('label', 'length', 'max'=>100),
			array('hits, stream, radio', 'length', 'max'=>20),
			array('post', 'length', 'max'=>15),
			array('url_torrent', 'length', 'max'=>50),
			array('reclassement_par', 'length', 'max'=>25),
			array('commentaire', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_membre, date_insc1, date_insc, titre, casse, album, album_alpha, id_album, ordre_album, ordre_groupe, visible_groupe, groupe, groupe_alpha, auteur, compositeur, interprete, date_compo, duree, style, fk_pcdm, commentaire, label, label_alpha, licence, licence_avenant, prix, hits, stream, radio, url_titre, nom_fichier, url_p2p, actif, desac_404, note, post, taille, taille_mp3, taille_ogg, url_torrent, autorise_vote, autorise_comment, url_archive_mp3, url_archive_ogg, suppr, date_suppr, id_borne, reclassement_par, date_reclassement, date_mod', 'safe', 'on'=>'search'),
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
      'artiste' => array(self::BELONGS_TO, 'Artiste', 'groupe'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_membre' => 'Id Membre',
			'date_insc1' => 'Date Insc1',
			'date_insc' => 'Date Insc',
			'titre' => 'Titre',
			'casse' => 'Casse',
			'album' => 'Album',
			'album_alpha' => 'Album Alpha',
			'id_album' => 'Id Album',
			'ordre_album' => 'Ordre Album',
			'ordre_groupe' => 'Ordre Groupe',
			'visible_groupe' => 'Visible Groupe',
			'groupe' => 'Groupe',
			'groupe_alpha' => 'Groupe Alpha',
			'auteur' => 'Auteur',
			'compositeur' => 'Compositeur',
			'interprete' => 'Interprete',
			'date_compo' => 'Date Compo',
			'duree' => 'Duree',
			'style' => 'Style',
			'fk_pcdm' => 'Fk Pcdm',
			'commentaire' => 'Commentaire',
			'label' => 'Label',
			'label_alpha' => 'Label Alpha',
			'licence' => 'Licence',
			'licence_avenant' => 'Licence Avenant',
			'prix' => 'Prix',
			'hits' => 'Hits',
			'stream' => 'Stream',
			'radio' => 'Radio',
			'url_titre' => 'Url Titre',
			'nom_fichier' => 'Nom Ficher',
			'url_p2p' => 'Url P2p',
			'actif' => 'Actif',
			'desac_404' => 'Desac 404',
			'note' => 'Note',
			'post' => 'Post',
			'taille' => 'Taille',
			'taille_mp3' => 'Taille Mp3',
			'taille_ogg' => 'Taille Ogg',
			'url_torrent' => 'Url Torrent',
			'autorise_vote' => 'Autorise Vote',
			'autorise_comment' => 'Autorise Comment',
			'url_archive_mp3' => 'Url Archive Mp3',
			'url_archive_ogg' => 'Url Archive Ogg',
			'suppr' => 'Suppr',
			'date_suppr' => 'Date Suppr',
			'id_borne' => 'Id Borne',
			'reclassement_par' => 'Reclassement Par',
			'date_reclassement' => 'Date Reclassement',
			'date_mod' => 'Date Mod',
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
		$criteria->compare('id_membre',$this->id_membre);
		$criteria->compare('date_insc1',$this->date_insc1,true);
		$criteria->compare('date_insc',$this->date_insc,true);
		$criteria->compare('titre',$this->titre,true);
		$criteria->compare('casse',$this->casse,true);
		$criteria->compare('album',$this->album,true);
		$criteria->compare('album_alpha',$this->album_alpha,true);
		$criteria->compare('id_album',$this->id_album);
		$criteria->compare('ordre_album',$this->ordre_album);
		$criteria->compare('ordre_groupe',$this->ordre_groupe);
		$criteria->compare('visible_groupe',$this->visible_groupe,true);
		$criteria->compare('groupe',$this->groupe,true);
		$criteria->compare('groupe_alpha',$this->groupe_alpha,true);
		$criteria->compare('auteur',$this->auteur,true);
		$criteria->compare('compositeur',$this->compositeur,true);
		$criteria->compare('interprete',$this->interprete,true);
		$criteria->compare('date_compo',$this->date_compo,true);
		$criteria->compare('duree',$this->duree,true);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('fk_pcdm',$this->fk_pcdm,true);
		$criteria->compare('commentaire',$this->commentaire,true);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('label_alpha',$this->label_alpha,true);
		$criteria->compare('licence',$this->licence,true);
		$criteria->compare('licence_avenant',$this->licence_avenant,true);
		$criteria->compare('prix',$this->prix,true);
		$criteria->compare('hits',$this->hits,true);
		$criteria->compare('stream',$this->stream,true);
		$criteria->compare('radio',$this->radio,true);
		$criteria->compare('url_titre',$this->url_titre,true);
		$criteria->compare('nom_fichier',$this->nom_fichier,true);
		$criteria->compare('url_p2p',$this->url_p2p,true);
		$criteria->compare('actif',$this->actif,true);
		$criteria->compare('desac_404',$this->desac_404,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('post',$this->post,true);
		$criteria->compare('taille',$this->taille);
		$criteria->compare('taille_mp3',$this->taille_mp3);
		$criteria->compare('taille_ogg',$this->taille_ogg);
		$criteria->compare('url_torrent',$this->url_torrent,true);
		$criteria->compare('autorise_vote',$this->autorise_vote,true);
		$criteria->compare('autorise_comment',$this->autorise_comment,true);
		$criteria->compare('url_archive_mp3',$this->url_archive_mp3,true);
		$criteria->compare('url_archive_ogg',$this->url_archive_ogg,true);
		$criteria->compare('suppr',$this->suppr,true);
		$criteria->compare('date_suppr',$this->date_suppr,true);
		$criteria->compare('id_borne',$this->id_borne,true);
		$criteria->compare('reclassement_par',$this->reclassement_par,true);
		$criteria->compare('date_reclassement',$this->date_reclassement,true);
		$criteria->compare('date_mod',$this->date_mod);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Morceau the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
