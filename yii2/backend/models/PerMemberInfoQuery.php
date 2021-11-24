<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PerMemberInfo]].
 *
 * @see PerMemberInfo
 */
class PerMemberInfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PerMemberInfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PerMemberInfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
