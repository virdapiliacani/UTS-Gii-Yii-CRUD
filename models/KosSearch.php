<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\kos;

/**
 * KosSearch represents the model behind the search form of `app\models\kos`.
 */
class KosSearch extends kos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kamar'], 'integer'],
            [['nama_panggilan'], 'safe'],
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
        $query = kos::find();

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
            'no_kamar' => $this->no_kamar,
        ]);

        $query->andFilterWhere(['like', 'nama_panggilan', $this->nama_panggilan]);

        return $dataProvider;
    }
}
