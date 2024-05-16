<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_historique_stock_alimentaire".
 *
 * @property int $id
 * @property int|null $fk_stock_id
 * @property int|null $quantie_mvt quantite_mouvemente
 * @property int|null $quantite_now
 * @property string|null $type_operation
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class HistoriqueStockAlimentaire extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_historique_stock_alimentaire';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'fk_stock_id', 'quantie_mvt', 'quantite_now'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['type_operation'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fk_stock_id' => Yii::t('app', 'Fk Stock ID'),
            'quantie_mvt' => Yii::t('app', 'Quantie Mvt'),
            'quantite_now' => Yii::t('app', 'Quantite Now'),
            'type_operation' => Yii::t('app', 'Type Operation'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
