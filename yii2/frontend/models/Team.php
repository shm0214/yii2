<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%team}}".
 *
 * @property int $id team_id
 * @property string|null $name_en team_name_en
 * @property string|null $name_zh team_name_zh
 * @property string|null $code team_code
 * @property string|null $path team_flag_path
 *
 * @property Medal $medal
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%team}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name_en'], 'string', 'max' => 40],
            [['name_zh'], 'string', 'max' => 10],
            [['code'], 'string', 'max' => 5],
            [['path'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'team_id',
            'name_en' => 'team_name_en',
            'name_zh' => 'team_name_zh',
            'code' => 'team_code',
            'path' => 'team_flag_path',
        ];
    }

    /**
     * Gets query for [[Medal]].
     *
     * @return \yii\db\ActiveQuery|MedalQuery
     */
    public function getMedal()
    {
        return $this->hasOne(Medal::className(), ['id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return TeamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeamQuery(get_called_class());
    }
}
