<?php

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
