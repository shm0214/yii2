<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[OlyGameInfo]].
 *
 * @see OlyGameInfo
 */
class OlyGameInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyGameInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyGameInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
