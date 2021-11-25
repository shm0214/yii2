<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OlyNews]].
 *
 * @see OlyNews
 */
class OlyNewsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyNews[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyNews|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
