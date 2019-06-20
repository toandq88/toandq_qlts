<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sanpham;

/**
 * SanphamSearch represents the model behind the search form of `app\models\Sanpham`.
 */
class SanphamSearch extends Sanpham
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_danhmuc', 'id_thuonghieu', 'soluong', 'giaban', 'giakhuyenmai', 'sp_banchay', 'sp_noibat', 'sp_moinhap', 'video_width', 'video_height', 'thutu', 'tinhtrang'], 'integer'],
            [['ma_sanpham', 'ten', 'ten_url', 'mota_ngan', 'mota', 'baohanh', 'khuyenmai', 'meta_mota', 'meta_tukhoa', 'link_video', 'file_huongdan', 'pk_dikem', 'nguoitao', 'nguoisua', 'ngaytao', 'ngaysua'], 'safe'],
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
        $query = Sanpham::find();

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
            'id_danhmuc' => $this->id_danhmuc,
            'id_thuonghieu' => $this->id_thuonghieu,
            'soluong' => $this->soluong,
            'giaban' => $this->giaban,
            'giakhuyenmai' => $this->giakhuyenmai,
            'sp_banchay' => $this->sp_banchay,
            'sp_noibat' => $this->sp_noibat,
            'sp_moinhap' => $this->sp_moinhap,
            'video_width' => $this->video_width,
            'video_height' => $this->video_height,
            'thutu' => $this->thutu,
            'tinhtrang' => $this->tinhtrang,
            'ngaytao' => $this->ngaytao,
            'ngaysua' => $this->ngaysua,
        ]);

        $query->andFilterWhere(['like', 'ma_sanpham', $this->ma_sanpham])
            ->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'ten_url', $this->ten_url])
            ->andFilterWhere(['like', 'hinhanh', $this->hinhanh])
            ->andFilterWhere(['like', 'mota_ngan', $this->mota_ngan])
            ->andFilterWhere(['like', 'mota', $this->mota])
            ->andFilterWhere(['like', 'baohanh', $this->baohanh])
            ->andFilterWhere(['like', 'khuyenmai', $this->khuyenmai])
            ->andFilterWhere(['like', 'meta_mota', $this->meta_mota])
            ->andFilterWhere(['like', 'meta_tukhoa', $this->meta_tukhoa])
            ->andFilterWhere(['like', 'link_video', $this->link_video])
            ->andFilterWhere(['like', 'file_huongdan', $this->file_huongdan])
            ->andFilterWhere(['like', 'pk_dikem', $this->pk_dikem])
            ->andFilterWhere(['like', 'nguoitao', $this->nguoitao])
            ->andFilterWhere(['like', 'nguoisua', $this->nguoisua]);

        return $dataProvider;
    }
}
