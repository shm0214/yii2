<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the prize query model of the frontend web.
 */

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[OlyPrizeInfo]].
 *
 * @see OlyPrizeInfo
 */
class OlyPrizeInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyPrizeInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyPrizeInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
