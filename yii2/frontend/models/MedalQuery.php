<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Medal]].
 *
 * @see Medal
 */
class MedalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Medal[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Medal|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
