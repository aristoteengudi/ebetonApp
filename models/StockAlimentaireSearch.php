<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StockAlimentaire;

/**
 * StockAlimentaireSearch represents the model behind the search form of `app\models\StockAlimentaire`.
 */
class StockAlimentaireSearch extends StockAlimentaire
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quantite_entre', 'quantite_sorti', 'prix_achat', 'created_by'], 'integer'],
            [['produit', 'date_achat', 'buy_by', 'created_at', 'updated_at'], 'safe'],
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
        $query = StockAlimentaire::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'quantite_entre' => $this->quantite_entre,
            'quantite_sorti' => $this->quantite_sorti,
            'prix_achat' => $this->prix_achat,
            'date_achat' => $this->date_achat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'produit', $this->produit])
            ->andFilterWhere(['like', 'buy_by', $this->buy_by]);

        return $dataProvider;
    }
}
