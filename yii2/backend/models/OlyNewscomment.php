<?php

namespace app\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "oly_newscomment".
 *
 * @property int $cmt_id 评论标识
 * @property int $cmt_userid 评论用户
 * @property string $cmt_date 评论时间
 * @property string $cmt_content 评论内容
 * @property int $cmt_newsid 评论对象
 * @property int $cmt_trashed 评论是否删除
 *
 * @property OlyNews $cmtNews
 * @property User $cmtUser
 */
class OlyNewscomment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oly_newscomment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cmt_userid', 'cmt_date', 'cmt_content', 'cmt_newsid'], 'required'],
            [['cmt_userid', 'cmt_newsid', 'cmt_trashed'], 'integer'],
            [['cmt_date'], 'safe'],
            [['cmt_content'], 'string'],
            [['cmt_newsid'], 'exist', 'skipOnError' => true, 'targetClass' => OlyNews::className(), 'targetAttribute' => ['cmt_newsid' => 'news_id']],
            [['cmt_userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['cmt_userid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cmt_id' => '评论标识',
            'cmt_userid' => '评论用户',
            'cmt_date' => '评论时间',
            'cmt_content' => '评论内容',
            'cmt_newsid' => '评论对象',
            'cmt_trashed' => '评论是否删除',
        ];
    }

    /**
     * Gets query for [[CmtNews]].
     *
     * @return \yii\db\ActiveQuery|OlyNewsQuery
     */
    public function getCmtNews()
    {
        return $this->hasOne(OlyNews::className(), ['news_id' => 'cmt_newsid']);
    }

    /**
     * Gets query for [[CmtUser]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getCmtUser()
    {
        return $this->hasOne(User::className(), ['id' => 'cmt_userid']);
    }

    /**
     * {@inheritdoc}
     * @return OlyNewscommentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyNewscommentQuery(get_called_class());
    }
}
