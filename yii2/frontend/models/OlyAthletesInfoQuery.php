<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by baying 1911537, 20211126
 * This is the athlete query model of the frontend web.
 */
namespace frontend\models;

/**
 * This is the ActiveQuery class for [[OlyAthletesInfo]].
 *
 * @see OlyAthletesInfo
 */
class OlyAthletesInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyAthletesInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyAthletesInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
