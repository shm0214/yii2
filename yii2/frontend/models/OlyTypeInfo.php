<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the type model of the frontend web.
 */

namespace frontend\models;

use Yii;
use frontend\models\OlyTypeInfoQuery;

/**
 * This is the model class for table "oly_type_info".
 *
 * @property int $game_id 大项的编号
 * @property int $type_id 小项的编号
 * @property string $type_name_en 小项的英文名称
 * @property string $type_name_zh 小项的中文名称
 * @property int|null $status
 *
 * @property OlyGameInfo $game
 * @property OlyPrizeInfo[] $olyPrizeInfos
 */
class OlyTypeInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oly_type_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['game_id', 'type_id', 'type_name_en', 'type_name_zh'], 'required'],
            [['game_id', 'type_id', 'status'], 'integer'],
            [['type_name_en', 'type_name_zh'], 'string', 'max' => 50],
            [['game_id', 'type_id'], 'unique', 'targetAttribute' => ['game_id', 'type_id']],
            [['game_id'], 'exist', 'skipOnError' => true, 'targetClass' => OlyGameInfo::className(), 'targetAttribute' => ['game_id' => 'game_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'game_id' => '大项的编号',
            'type_id' => '小项的编号',
            'type_name_en' => '小项的英文名称',
            'type_name_zh' => '小项的中文名称',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Game]].
     *
     * @return \yii\db\ActiveQuery|OlyGameInfoQuery
     */
    public function getGame()
    {
        return $this->hasOne(OlyGameInfo::className(), ['game_id' => 'game_id']);
    }

    /**
     * Gets query for [[OlyPrizeInfos]].
     *
     * @return \yii\db\ActiveQuery|OlyPrizeInfoQuery
     */
    public function getOlyPrizeInfos()
    {
        return $this->hasMany(OlyPrizeInfo::className(), ['type_id' => 'type_id']);
    }

    /**
     * {@inheritdoc}
     * @return OlyTypeInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyTypeInfoQuery(get_called_class());
    }

    public static function findByTypeId($typeId)
    {
        return static::findOne(['type_id' => $typeId]);
    }
}
