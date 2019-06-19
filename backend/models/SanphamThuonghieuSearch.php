<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SanphamThuonghieu;

/**
 * SanphamThuonghieuSearch represents the model behind the search form of `app\models\SanphamThuonghieu`.
 */
class SanphamThuonghieuSearch extends SanphamThuonghieu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'thutu', 'tinhtrang'], 'integer'],
            [['ten', 'ten_url', 'website', 'nguoitao', 'nguoisua', 'ngaytao', 'ngaysua'], 'safe'],
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
        $query = SanphamThuonghieu::find();

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
            'tinhtrang' => $this->tinhtrang,
            'ngaytao' => $this->ngaytao,
            'ngaysua' => $this->ngaysua,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'ten_url', $this->ten_url])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'nguoitao', $this->nguoitao])
            ->andFilterWhere(['like', 'nguoisua', $this->nguoisua]);

        return $dataProvider;
    }
}
