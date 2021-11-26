<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "oly_athletes_info".
 *
 * @property string $athlete_id 运动员的编号
 * @property string $name_en 运动员的英文名
 * @property int $team_id 代表团编号
 * @property int $group_id 团队的编号
 * @property int|null $status
 *
 * @property OlyPrizeInfo[] $olyPrizeInfos
 * @property OlyTeamInfo $team
 */
class OlyAthletesInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oly_athletes_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['athlete_id', 'name_en', 'team_id', 'group_id'], 'required'],
            [['team_id', 'group_id', 'status'], 'integer'],
            [['athlete_id'], 'string', 'max' => 100],
            [['name_en'], 'string', 'max' => 50],
            [['athlete_id'], 'unique'],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => OlyTeamInfo::className(), 'targetAttribute' => ['team_id' => 'team_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'athlete_id' => '运动员的编号',
            'name_en' => '运动员的英文名',
            'team_id' => '代表团编号',
            'group_id' => '团队的编号',
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
        return $this->hasMany(OlyPrizeInfo::className(), ['athlete_id' => 'athlete_id']);
    }

    /**
     * Gets query for [[Team]].
     *
     * @return \yii\db\ActiveQuery|OlyTeamInfoQuery
     */
    public function getTeam()
    {
        return $this->hasOne(OlyTeamInfo::className(), ['team_id' => 'team_id']);
    }

    /**
     * {@inheritdoc}
     * @return OlyAthletesInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyAthletesInfoQuery(get_called_class());
    }
}
