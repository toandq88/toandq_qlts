<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BienbaoLoai;

/**
 * BienbaoLoaiSearch represents the model behind the search form of `app\models\BienbaoLoai`.
 */
class BienbaoLoaiSearch extends BienbaoLoai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'thutu'], 'integer'],
            [['ten', 'loai'], 'safe'],
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
        $query = BienbaoLoai::find();

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
            'thutu' => $this->thutu,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'loai', $this->loai]);

        return $dataProvider;
    }
}
