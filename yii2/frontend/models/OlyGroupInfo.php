<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "oly_group_info".
 *
 * @property int $group_id 团队的编号
 * @property int $team_id 代表团编号
 * @property int|null $status
 */
class OlyGroupInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oly_group_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'team_id'], 'required'],
            [['group_id', 'team_id', 'status'], 'integer'],
            [['group_id', 'team_id'], 'unique', 'targetAttribute' => ['group_id', 'team_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'group_id' => '团队的编号',
            'team_id' => '代表团编号',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OlyGroupInfoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyGroupInfoQuery(get_called_class());
    }
}
