<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the medal query model of the frontend web.
 */

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[OlyMedalInfo]].
 *
 * @see OlyMedalInfo
 */
class OlyMedalInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyMedalInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyMedalInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
