<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by gongan 1913076, 20211128
 * This is contact-form model query of the backend web.
 */

namespace backend\models;

/**
 * This is the ActiveQuery class for [[OlyContactForm]].
 *
 * @see OlyContactForm
 */
class OlyContactFormQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyContactForm[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyContactForm|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
