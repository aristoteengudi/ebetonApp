<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Visiteurs;

/**
 * VisiteursSearch represents the model behind the search form of `app\models\Visiteurs`.
 */
class VisiteursSearch extends Visiteurs
{

    public $globalSearch;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['vis_noms', 'vis_pris_noms', 'vis_visite_date', 'vis_numero_carte', 'created_at', 'updated_at', 'heure', 'phone', 'adresse', 'picture'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Visiteurs::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>['defaultOrder' => ['id' => SORT_DESC]],
            'pagination' => [
                'pageSize' => 3,
            ],
            //'sort'=>['defaultOrder'=>['id'=>'asc']],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'vis_visite_date' => $this->vis_visite_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->orFilterWhere(['like', 'vis_noms', $this->globalSearch])
            ->orFilterWhere(['like', 'vis_pris_noms', $this->globalSearch])
            ->orFilterWhere(['like', 'phone', $this->phone])
            ->orFilterWhere(['like', 'vis_numero_carte', $this->globalSearch])
            ->orFilterWhere(['like', 'vis_visite_date', $this->globalSearch]);

        return $dataProvider;
    }
}
