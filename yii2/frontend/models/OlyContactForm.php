<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "oly_contact_form".
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
        return 'oly_contact_form';
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
            'contact_id' => 'Contact ID',
            'username' => 'Username',
            'email' => 'Email',
            'address' => 'Address',
            'message' => 'Message',
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
