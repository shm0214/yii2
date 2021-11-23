<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%medal}}".
 *
 * @property int $id team_id
 * @property int $gold
 * @property int $silver
 * @property int $bronze
 * @property int $total
 * @property int $rank
 *
 * @property Team $id0
 */
class Medal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%medal}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gold', 'silver', 'bronze', 'total', 'rank'], 'required'],
            [['id', 'gold', 'silver', 'bronze', 'total', 'rank'], 'integer'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'gold' => 'Gold',
            'silver' => 'Silver',
            'bronze' => 'Bronze',
            'total' => 'Total',
            'rank' => 'Rank',
        ];
    }

    // /**
    //  * Gets query for [[Id0]].
    //  *
    //  * @return \yii\db\ActiveQuery|TeamQuery
    //  */
    // public function getId0()
    // {
    //     return $this->hasOne(Team::className(), ['id' => 'id']);
    // }

    /**
     * {@inheritdoc}
     * @return MedalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MedalQuery(get_called_class());
    }

    public function getTeam()
    {
        return $this->hasOne(Team::className(), ['id' => 'id']);
    }
}
