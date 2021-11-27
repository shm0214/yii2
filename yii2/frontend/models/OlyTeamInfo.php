<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the team model of the frontend web.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "oly_team_info".
 *
 * @property int $team_id 代表团编号
 * @property string $team_name_en 代表团的英文名称
 * @property string $team_name_zh 代表团的中文名称
 * @property string $team_code 代表团英文缩写
 * @property string $flag_path 代表团国旗路径
 * @property int|null $status
 *
 * @property OlyAthletesInfo[] $olyAthletesInfos
 * @property OlyMedalInfo $olyMedalInfo
 * @property OlyPrizeInfo[] $olyPrizeInfos
 */
class OlyTeamInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oly_team_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_id', 'team_name_en', 'team_name_zh', 'team_code', 'flag_path'], 'required'],
            [['team_id', 'status'], 'integer'],
            [['team_name_en', 'flag_path'], 'string', 'max' => 100],
            [['team_name_zh', 'team_code'], 'string', 'max' => 40],
            [['team_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'team_id' => '代表团编号',
            'team_name_en' => '代表团的英文名称',
            'team_name_zh' => '代表团的中文名称',
            'team_code' => '代表团英文缩写',
            'flag_path' => '代表团国旗路径',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[OlyAthletesInfos]].
     *
     * @return \yii\db\ActiveQuery|OlyAthletesInfoQuery
     */
    public function getOlyAthletesInfos()
    {
        return $this->hasMany(OlyAthletesInfo::className(), ['team_id' => 'team_id']);
    }

    /**
     * Gets query for [[OlyMedalInfo]].
     *
     * @return \yii\db\ActiveQuery|OlyMedalInfoQuery
     */
    public function getOlyMedalInfo()
    {
        return $this->hasOne(OlyMedalInfo::className(), ['team_id' => 'team_id']);
    }

    /**
     * Gets query for [[OlyPrizeInfos]].
     *
     * @return \yii\db\ActiveQuery|OlyPrizeInfoQuery
     */
    public function getOlyPrizeInfos()
    {
        return $this->hasMany(OlyPrizeInfo::className(), ['team_id' => 'team_id']);
    }

    /**
     * {@inheritdoc}
     * @return OlyTeamInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyTeamInfoQuery(get_called_class());
    }
}
