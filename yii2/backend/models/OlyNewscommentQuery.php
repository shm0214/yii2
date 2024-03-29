<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is news-comment model query of the backend web.
 */

namespace backend\models;

/**
 * This is the ActiveQuery class for [[OlyNewscomment]].
 *
 * @see OlyNewscomment
 */
class OlyNewscommentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyNewscomment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyNewscomment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
