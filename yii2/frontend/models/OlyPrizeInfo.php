<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the prize model of the frontend web.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "oly_prize_info".
 *
 * @property int $game_id
 * @property int $type_id
 * @property int $team_id
 * @property string $athlete_id
 * @property int $group_id
 * @property int|null $rank
 * @property int|null $status
 *
 * @property OlyAthletesInfo $athlete
 * @property OlyGameInfo $game
 * @property OlyTeamInfo $team
 * @property OlyTypeInfo $type
 */
class OlyPrizeInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oly_prize_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['game_id', 'type_id', 'team_id', 'athlete_id', 'group_id'], 'required'],
            [['game_id', 'type_id', 'team_id', 'group_id', 'rank', 'status'], 'integer'],
            [['athlete_id'], 'string', 'max' => 100],
            [['game_id', 'type_id', 'team_id', 'athlete_id', 'group_id'], 'unique', 'targetAttribute' => ['game_id', 'type_id', 'team_id', 'athlete_id', 'group_id']],
            [['athlete_id'], 'exist', 'skipOnError' => true, 'targetClass' => OlyAthletesInfo::className(), 'targetAttribute' => ['athlete_id' => 'athlete_id']],
            [['game_id'], 'exist', 'skipOnError' => true, 'targetClass' => OlyGameInfo::className(), 'targetAttribute' => ['game_id' => 'game_id']],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => OlyTeamInfo::className(), 'targetAttribute' => ['team_id' => 'team_id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => OlyTypeInfo::className(), 'targetAttribute' => ['type_id' => 'type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'game_id' => 'Game ID',
            'type_id' => 'Type ID',
            'team_id' => 'Team ID',
            'athlete_id' => 'Athlete ID',
            'group_id' => 'Group ID',
            'rank' => 'Rank',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Athlete]].
     *
     * @return \yii\db\ActiveQuery|OlyAthletesInfoQuery
     */
    public function getAthlete()
    {
        return $this->hasOne(OlyAthletesInfo::className(), ['athlete_id' => 'athlete_id']);
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
     * Gets query for [[Team]].
     *
     * @return \yii\db\ActiveQuery|OlyTeamInfoQuery
     */
    public function getTeam()
    {
        return $this->hasOne(OlyTeamInfo::className(), ['team_id' => 'team_id']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery|OlyTypeInfoQuery
     */
    public function getType()
    {
        return $this->hasOne(OlyTypeInfo::className(), ['type_id' => 'type_id']);
    }

    /**
     * {@inheritdoc}
     * @return OlyPrizeInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyPrizeInfoQuery(get_called_class());
    }
}
