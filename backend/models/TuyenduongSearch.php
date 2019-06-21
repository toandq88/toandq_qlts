<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tuyenduong;

/**
 * TuyenduongSearch represents the model behind the search form of `app\models\Tuyenduong`.
 */
class TuyenduongSearch extends Tuyenduong
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'donviquanly', 'coquanquanly', 'tukmchinh', 'tukmle', 'denkmchinh', 'denkmle', 'loailanduong', 'tinh', 'huyen', 'solanxecogioi', 'loainenduong'], 'integer'],
            [['matuyenduong', 'tenduong', 'tentuyen', 'nhanhdanso', 'capduong', 'vidodau', 'kinhdodau', 'vidocuoi', 'kinhdocuoi', 'dieuchinhcotkm', 'namhoanthanhxaydung', 'nambatdaukhaithac', 'loaicongtrinhduongbo', 'loaimatduonglanxecogioi', 'loaimatduonglanxethoso', 'leduong', 'loaiketcaulegiaco', 'viahe', 'loaiviahe', 'loaidiahinh', 'anh_daidien', 'nguoitao', 'ngaytao', 'nguoisua', 'ngaysua'], 'safe'],
            [['chieudaitheocotkm', 'chieudaithucte', 'hanhlangduongbo', 'chieuronglanxecogioi', 'chieurongphanduongxechay', 'chieurongmatduong', 'chieuronglegiaco', 'chieuronglekhonggiaco', 'chieurongviahe', 'chieurongthoatnuoc', 'tocdothietke', 'tocdotoidacaclan', 'tocdotoithieucaclan', 'nhietdo', 'luongmuatrungbinh'], 'number'],
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
        $query = Tuyenduong::find();

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
            'donviquanly' => $this->donviquanly,
            'coquanquanly' => $this->coquanquanly,
            'tukmchinh' => $this->tukmchinh,
            'tukmle' => $this->tukmle,
            'denkmchinh' => $this->denkmchinh,
            'denkmle' => $this->denkmle,
            'loailanduong' => $this->loailanduong,
            'tinh' => $this->tinh,
            'huyen' => $this->huyen,
            'dieuchinhcotkm' => $this->dieuchinhcotkm,
            'chieudaitheocotkm' => $this->chieudaitheocotkm,
            'chieudaithucte' => $this->chieudaithucte,
            'namhoanthanhxaydung' => $this->namhoanthanhxaydung,
            'nambatdaukhaithac' => $this->nambatdaukhaithac,
            'hanhlangduongbo' => $this->hanhlangduongbo,
            'solanxecogioi' => $this->solanxecogioi,
            'chieuronglanxecogioi' => $this->chieuronglanxecogioi,
            'chieurongphanduongxechay' => $this->chieurongphanduongxechay,
            'chieurongmatduong' => $this->chieurongmatduong,
            'chieuronglegiaco' => $this->chieuronglegiaco,
            'chieuronglekhonggiaco' => $this->chieuronglekhonggiaco,
            'chieurongviahe' => $this->chieurongviahe,
            'chieurongthoatnuoc' => $this->chieurongthoatnuoc,
            'tocdothietke' => $this->tocdothietke,
            'tocdotoidacaclan' => $this->tocdotoidacaclan,
            'tocdotoithieucaclan' => $this->tocdotoithieucaclan,
            'nhietdo' => $this->nhietdo,
            'luongmuatrungbinh' => $this->luongmuatrungbinh,
            'loainenduong' => $this->loainenduong,
            'ngaytao' => $this->ngaytao,
            'ngaysua' => $this->ngaysua,
        ]);

        $query->andFilterWhere(['like', 'matuyenduong', $this->matuyenduong])
            ->andFilterWhere(['like', 'tenduong', $this->tenduong])
            ->andFilterWhere(['like', 'tentuyen', $this->tentuyen])
            ->andFilterWhere(['like', 'nhanhdanso', $this->nhanhdanso])
            ->andFilterWhere(['like', 'capduong', $this->capduong])
            ->andFilterWhere(['like', 'vidodau', $this->vidodau])
            ->andFilterWhere(['like', 'kinhdodau', $this->kinhdodau])
            ->andFilterWhere(['like', 'vidocuoi', $this->vidocuoi])
            ->andFilterWhere(['like', 'kinhdocuoi', $this->kinhdocuoi])
            ->andFilterWhere(['like', 'loaicongtrinhduongbo', $this->loaicongtrinhduongbo])
            ->andFilterWhere(['like', 'loaimatduonglanxecogioi', $this->loaimatduonglanxecogioi])
            ->andFilterWhere(['like', 'loaimatduonglanxethoso', $this->loaimatduonglanxethoso])
            ->andFilterWhere(['like', 'leduong', $this->leduong])
            ->andFilterWhere(['like', 'loaiketcaulegiaco', $this->loaiketcaulegiaco])
            ->andFilterWhere(['like', 'viahe', $this->viahe])
            ->andFilterWhere(['like', 'loaiviahe', $this->loaiviahe])
            ->andFilterWhere(['like', 'loaidiahinh', $this->loaidiahinh])
            ->andFilterWhere(['like', 'anh_daidien', $this->anh_daidien])
            ->andFilterWhere(['like', 'nguoitao', $this->nguoitao])
            ->andFilterWhere(['like', 'nguoisua', $this->nguoisua]);

        return $dataProvider;
    }
}
