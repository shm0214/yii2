<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by gongan 1913076, 20211128
 * This is contact-form model of the backend web.
 */

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%oly_contact_form}}".
 *
 * @property int $contact_id
 * @property string|null $username
 * @property string|null $email
 * @property string|null $address
 * @property string|null $message
 */
class OlyContactForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%oly_contact_form}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'string', 'max' => 20],
            [['email', 'address', 'message'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => '联系ID',
            'username' => '联系人名称',
            'email' => 'Email',
            'address' => '地址',
            'message' => '消息',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OlyContactFormQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyContactFormQuery(get_called_class());
    }
}
