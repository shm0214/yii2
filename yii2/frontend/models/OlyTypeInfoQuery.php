<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[OlyTypeInfo]].
 *
 * @see OlyTypeInfo
 */
class OlyTypeInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OlyTypeInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OlyTypeInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
