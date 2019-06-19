<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cauhinh;

/**
 * CauhinhSearch represents the model behind the search form of `app\models\Cauhinh`.
 */
class CauhinhSearch extends Cauhinh
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sp_moi', 'sp_dacbiet', 'sp_banchay', 'sp_danhmuc', 'sp_cungloai', 'tintuc_1trang', 'tintuc_khac', 'qc_2ben', 'qc_goc_phai', 'back_top'], 'integer'],
            [['tieude', 'slogan', 'footer', 'gioithieu', 'mota', 'tukhoa', 'bando', 'hotline1', 'hotline2', 'facebook', 'youtube', 'google'], 'safe'],
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
        $query = Cauhinh::find();

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
            'sp_moi' => $this->sp_moi,
            'sp_dacbiet' => $this->sp_dacbiet,
            'sp_banchay' => $this->sp_banchay,
            'sp_danhmuc' => $this->sp_danhmuc,
            'sp_cungloai' => $this->sp_cungloai,
            'tintuc_1trang' => $this->tintuc_1trang,
            'tintuc_khac' => $this->tintuc_khac,
            'qc_2ben' => $this->qc_2ben,
            'qc_goc_phai' => $this->qc_goc_phai,
            'back_top' => $this->back_top,
        ]);

        $query->andFilterWhere(['like', 'tieude', $this->tieude])
            ->andFilterWhere(['like', 'slogan', $this->slogan])
            ->andFilterWhere(['like', 'footer', $this->footer])
            ->andFilterWhere(['like', 'gioithieu', $this->gioithieu])
            ->andFilterWhere(['like', 'mota', $this->mota])
            ->andFilterWhere(['like', 'tukhoa', $this->tukhoa])
            ->andFilterWhere(['like', 'bando', $this->bando])
            ->andFilterWhere(['like', 'hotline1', $this->hotline1])
            ->andFilterWhere(['like', 'hotline2', $this->hotline2])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'youtube', $this->youtube])
            ->andFilterWhere(['like', 'google', $this->google]);

        return $dataProvider;
    }
}
