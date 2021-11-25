<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%oly_game_info}}".
 *
 * @property int $game_id 大项的编号
 * @property string $game_name_en 大项的英文名称
 * @property string $game_name_zh 大项的中文名称
 * @property string $game_code
 * @property int|null $status
 *
 * @property OlyPrizeInfo[] $olyPrizeInfos
 * @property OlyTypeInfo[] $olyTypeInfos
 */
class OlyGameInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%oly_game_info}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['game_name_en', 'game_name_zh', 'game_code'], 'required'],
            [['status'], 'integer'],
            [['game_name_en', 'game_name_zh', 'game_code'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'game_id' => '大项的编号',
            'game_name_en' => '大项的英文名称',
            'game_name_zh' => '大项的中文名称',
            'game_code' => 'Game Code',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[OlyPrizeInfos]].
     *
     * @return \yii\db\ActiveQuery|OlyPrizeInfoQuery
     */
    public function getOlyPrizeInfos()
    {
        return $this->hasMany(OlyPrizeInfo::className(), ['game_id' => 'game_id']);
    }

    /**
     * Gets query for [[OlyTypeInfos]].
     *
     * @return \yii\db\ActiveQuery|OlyTypeInfoQuery
     */
    public function getOlyTypeInfos()
    {
        return $this->hasMany(OlyTypeInfo::className(), ['game_id' => 'game_id']);
    }

    /**
     * {@inheritdoc}
     * @return OlyGameInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyGameInfoQuery(get_called_class());
    }
}
