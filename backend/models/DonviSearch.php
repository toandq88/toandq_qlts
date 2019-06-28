<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Donvi;

/**
 * DonviSearch represents the model behind the search form of `app\models\Donvi`.
 */
class DonviSearch extends Donvi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_donvi', 'ngaytao', 'loaidonvi'], 'integer'],
            [['ten', 'tenviettat', 'diachi', 'email', 'dienthoai', 'website', 'hinhanh', 'mota'], 'safe'],
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
        $query = Donvi::find();

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
            'id_donvi' => $this->id_donvi,
            'ngaytao' => $this->ngaytao,
            'loaidonvi' => $this->loaidonvi,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'tenviettat', $this->tenviettat])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'dienthoai', $this->dienthoai])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'hinhanh', $this->hinhanh])
            ->andFilterWhere(['like', 'mota', $this->mota]);

        return $dataProvider;
    }
}
