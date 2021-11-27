<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the medal model of the frontend web.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "oly_medal_info".
 *
 * @property int $team_id 代表团编号
 * @property int $gold
 * @property int $silver
 * @property int $bronze
 * @property int $total
 * @property int $rank
 * @property int|null $status
 *
 * @property OlyTeamInfo $team
 */
class OlyMedalInfo extends \yii\db\ActiveRecord
{

    public $team_name_zh;
    public $flag_path;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oly_medal_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_id', 'gold', 'silver', 'bronze', 'total', 'rank'], 'required'],
            [['team_id', 'gold', 'silver', 'bronze', 'total', 'rank', 'status'], 'integer'],
            [['team_id'], 'unique'],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => OlyTeamInfo::className(), 'targetAttribute' => ['team_id' => 'team_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'team_id' => '代表团编号',
            'gold' => 'Gold',
            'silver' => 'Silver',
            'bronze' => 'Bronze',
            'total' => 'Total',
            'rank' => 'Rank',
            'status' => 'Status',
        ];
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
     * @return OlyMedalInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyMedalInfoQuery(get_called_class());
    }
}
