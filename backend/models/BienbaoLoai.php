<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_bienbao_loai".
 *
 * @property int $id
 * @property string $ten
 * @property string $loai
 * @property int $thutu
 */
class BienbaoLoai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_bienbao_loai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'loai', 'thutu'], 'required'],
            [['thutu'], 'integer'],
            [['ten'], 'string', 'max' => 100],
            [['loai'], 'string', 'max' => 30],
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
            'loai' => 'Loại',
            'thutu' => 'Thứ tự',
        ];
    }
}
