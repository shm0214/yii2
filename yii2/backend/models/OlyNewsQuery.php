<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is news model query of the backend web.
 */

namespace backend\models;

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
