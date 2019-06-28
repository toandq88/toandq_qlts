<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_loai_nenduong".
 *
 * @property int $id
 * @property string $ten
 * @property int $thutu
 */
class LoaiNenduong extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_loai_nenduong';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'thutu'], 'required'],
            [['thutu'], 'integer'],
            [['ten'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên',
            'thutu' => 'Thứ tự',
        ];
    }
}
