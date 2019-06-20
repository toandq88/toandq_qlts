<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_timkiem_theogia".
 *
 * @property int $id
 * @property int $loai
 * @property int $gia_tri1
 * @property int $gia_tri2
 */
class TimkiemTheogia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_timkiem_theogia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['loai', 'gia_tri1', 'gia_tri2'], 'required'],
            [['loai', 'gia_tri1', 'gia_tri2'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'loai' => 'Loại',
            'gia_tri1' => 'Giá trị 1',
            'gia_tri2' => 'Giá trị 2',
        ];
    }
}
