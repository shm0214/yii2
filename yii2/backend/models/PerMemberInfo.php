<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "per_member_info".
 *
 * @property int $id 成员编号
 * @property string|null $sid 学号
 * @property string|null $name 姓名
 * @property string|null $introduction 成员介绍
 * @property string|null $image_path 图片路径
 */
class PerMemberInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'per_member_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'introduction'], 'string'],
            [['sid'], 'string', 'max' => 7],
            [['image_path'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '成员编号',
            'sid' => '学号',
            'name' => '姓名',
            'introduction' => '成员介绍',
            'image_path' => '图片路径',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PerMemberInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PerMemberInfoQuery(get_called_class());
    }
}
