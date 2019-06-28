<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bienbao;

/**
 * BienbaoSearch represents the model behind the search form of `app\models\Bienbao`.
 */
class BienbaoSearch extends Bienbao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kmchinh', 'kmle', 'kmchinh_nhanh', 'kmle_nhanh', 'loailanduong', 'loaibien', 'hinhdang', 'vongdoi', 'bienbao_capphanquang', 'bocuc_tuyenso'], 'integer'],
            [['id_tuyenduong', 'id_donvikhaithac', 'tennhanh', 'vido', 'kinhdo', 'id_tinh', 'id_huyen', 'id_xa', 'loailapdatcaccot', 'loaicot', 'loaivatlieuphu', 'soluongbientrencot', 'namxaydung', 'bienbao_sohieu', 'bienbao_tenbien', 'bienbao_vatlieu', 'bienbao_loaiphanquang', 'bienbao_kieuganbien', 'bocuc_huongmuiten', 'bocuc_tendiemden', 'bocuc_khoangcachtoidiemden', 'bocuc_khoangcachtoinutgiao', 'bocuc_tentuyen', 'nguoitao', 'ngaytao', 'nguoisua', 'ngaysua'], 'safe'],
            [['khoangcachtucotdentimduong', 'chieucaotinhkhong', 'bienbao_cochu', 'bienbao_chieucao', 'bienbao_chieurong', 'bienbao_dientich'], 'number'],
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
        $query = Bienbao::find();

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
            'kmchinh' => $this->kmchinh,
            'kmle' => $this->kmle,
            'kmchinh_nhanh' => $this->kmchinh_nhanh,
            'kmle_nhanh' => $this->kmle_nhanh,
            'loailanduong' => $this->loailanduong,
            'loaibien' => $this->loaibien,
            'hinhdang' => $this->hinhdang,
            'khoangcachtucotdentimduong' => $this->khoangcachtucotdentimduong,
            'chieucaotinhkhong' => $this->chieucaotinhkhong,
            'namxaydung' => $this->namxaydung,
            'vongdoi' => $this->vongdoi,
            'bienbao_cochu' => $this->bienbao_cochu,
            'bienbao_chieucao' => $this->bienbao_chieucao,
            'bienbao_chieurong' => $this->bienbao_chieurong,
            'bienbao_dientich' => $this->bienbao_dientich,
            'bienbao_capphanquang' => $this->bienbao_capphanquang,
            'bocuc_tuyenso' => $this->bocuc_tuyenso,
            'ngaytao' => $this->ngaytao,
            'ngaysua' => $this->ngaysua,
        ]);

        $query->andFilterWhere(['like', 'id_tuyenduong', $this->id_tuyenduong])
            ->andFilterWhere(['like', 'id_donvikhaithac', $this->id_donvikhaithac])
            ->andFilterWhere(['like', 'tennhanh', $this->tennhanh])
            ->andFilterWhere(['like', 'vido', $this->vido])
            ->andFilterWhere(['like', 'kinhdo', $this->kinhdo])
            ->andFilterWhere(['like', 'id_tinh', $this->id_tinh])
            ->andFilterWhere(['like', 'id_huyen', $this->id_huyen])
            ->andFilterWhere(['like', 'id_xa', $this->id_xa])
            ->andFilterWhere(['like', 'loailapdatcaccot', $this->loailapdatcaccot])
            ->andFilterWhere(['like', 'loaicot', $this->loaicot])
            ->andFilterWhere(['like', 'loaivatlieuphu', $this->loaivatlieuphu])
            ->andFilterWhere(['like', 'soluongbientrencot', $this->soluongbientrencot])
            ->andFilterWhere(['like', 'bienbao_sohieu', $this->bienbao_sohieu])
            ->andFilterWhere(['like', 'bienbao_tenbien', $this->bienbao_tenbien])
            ->andFilterWhere(['like', 'bienbao_vatlieu', $this->bienbao_vatlieu])
            ->andFilterWhere(['like', 'bienbao_loaiphanquang', $this->bienbao_loaiphanquang])
            ->andFilterWhere(['like', 'bienbao_kieuganbien', $this->bienbao_kieuganbien])
            ->andFilterWhere(['like', 'bocuc_huongmuiten', $this->bocuc_huongmuiten])
            ->andFilterWhere(['like', 'bocuc_tendiemden', $this->bocuc_tendiemden])
            ->andFilterWhere(['like', 'bocuc_khoangcachtoidiemden', $this->bocuc_khoangcachtoidiemden])
            ->andFilterWhere(['like', 'bocuc_khoangcachtoinutgiao', $this->bocuc_khoangcachtoinutgiao])
            ->andFilterWhere(['like', 'bocuc_tentuyen', $this->bocuc_tentuyen])
            ->andFilterWhere(['like', 'nguoitao', $this->nguoitao])
            ->andFilterWhere(['like', 'nguoisua', $this->nguoisua]);

        return $dataProvider;
    }
}
