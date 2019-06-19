<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SanphamDanhmuc;

/**
 * SanphamDanhmucSearch represents the model behind the search form of `app\models\SanphamDanhmuc`.
 */
class SanphamDanhmucSearch extends SanphamDanhmuc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'parents', 'thutu', 'tinhtrang'], 'integer'],
            [['ten', 'ten_url', 'hinhanh', 'mota', 'meta_mota', 'meta_tukhoa'], 'safe'],
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
        $query = SanphamDanhmuc::find();

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
            'parents' => $this->parents,
            'thutu' => $this->thutu,
            'tinhtrang' => $this->tinhtrang,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'ten_url', $this->ten_url])
            ->andFilterWhere(['like', 'hinhanh', $this->hinhanh])
            ->andFilterWhere(['like', 'mota', $this->mota])
            ->andFilterWhere(['like', 'meta_mota', $this->meta_mota])
            ->andFilterWhere(['like', 'meta_tukhoa', $this->meta_tukhoa]);

        return $dataProvider;
    }
}
