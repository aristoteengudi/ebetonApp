<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_detenu".
 *
 * @property int $id
 * @property string|null $pris_nom
 * @property string|null $pris_prenom
 * @property string|null $pris_postnom
 * @property string|null $pris_adresse
 * @property string|null $pris_crime
 * @property string|null $genre
 * @property string|null $pris_matricule
 * @property string|null $pris_numero_id
 * @property string|null $pris_etat_civil
 * @property string|null $pris_date_detention
 * @property string|null $pris_date_naissance
 * @property string|null $pris_lieu_naissance
 * @property string|null $created_at
 * @property string|null $created_by
 * @property string|null $updated_at
 */
class Detenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */


    public static function tableName()
    {
        return 'tb_detenu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pris_nom', 'pris_prenom', 'pris_postnom', 'pris_etat_civil', 'pris_lieu_naissance'], 'required'],
            [['pris_date_detention', 'pris_date_naissance', 'created_at', 'updated_at'], 'safe'],
            [['pris_nom', 'pris_prenom', 'pris_postnom', 'pris_etat_civil', 'pris_lieu_naissance', 'created_by'], 'string', 'max' => 255],
            [['pris_adresse', 'pris_crime'], 'string', 'max' => 500],
            [['genre'], 'string', 'max' => 20],
            [['pris_matricule', 'pris_numero_id'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pris_nom' => 'Pris Nom',
            'pris_prenom' => 'Pris Prenom',
            'pris_postnom' => 'Pris Postnom',
            'pris_adresse' => 'Pris Adresse',
            'pris_crime' => 'Pris Crime',
            'genre' => 'Genre',
            'pris_matricule' => 'Pris Matricule',
            'pris_numero_id' => 'Pris Numero ID',
            'pris_etat_civil' => 'Pris Etat Civil',
            'pris_date_detention' => 'Pris Date Detention',
            'pris_date_naissance' => 'Pris Date Naissance',
            'pris_lieu_naissance' => 'Pris Lieu Naissance',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
        ];
    }


    public function setDateBeforeSave(){
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
    }
}
