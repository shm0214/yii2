<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the group query model of the frontend web.
 */

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[OlyGroupInfo]].
 *
 * @see OlyGroupInfo
 */
class OlyGroupInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyGroupInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyGroupInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
