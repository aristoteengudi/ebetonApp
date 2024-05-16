<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employe;

/**
 * EmployeSearch represents the model behind the search form of `app\models\Employe`.
 */
class EmployeSearch extends Employe
{
    public $globalSearch;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['matricule','globalSearch','nom', 'prenom', 'postnom', 'date_naissance', 'lieu_naissance', 'date_embauche', 'fonction', 'service', 'created_by', 'created_at', 'updated_at'], 'safe'],
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
        $query = Employe::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>['defaultOrder' => ['id' => SORT_DESC]],
            'pagination' => [
                'pageSize' => 3,
            ],
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
            'date_naissance' => $this->date_naissance,
            'date_embauche' => $this->date_embauche,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->orFilterWhere(['like', 'matricule', $this->globalSearch])
            ->orFilterWhere(['like', 'nom', $this->globalSearch])
            ->orFilterWhere(['like', 'prenom', $this->globalSearch])
            ->andFilterWhere(['like', 'postnom', $this->globalSearch])
            ->orFilterWhere(['like', 'lieu_naissance', $this->globalSearch])
            ->orFilterWhere(['like', 'fonction', $this->globalSearch])
            ->orFilterWhere(['like', 'service', $this->globalSearch])
            ->orFilterWhere(['like', 'created_by', $this->globalSearch]);

        return $dataProvider;
    }
}
