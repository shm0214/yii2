<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "oly_news".
 *
 * @property string $news_title 新闻标题
 * @property string $news_abstract 新闻摘要
 * @property string $news_content 新闻内容
 * @property string $news_cover 新闻封面url
 * @property int $news_id 新闻标识
 * @property string|null $news_time
 *
 * @property OlyNewscomment[] $olyNewscomments
 */
class OlyNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oly_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_title', 'news_abstract', 'news_content', 'news_cover'], 'required'],
            [['news_content'], 'string'],
            [['news_time'], 'safe'],
            [['news_title', 'news_cover'], 'string', 'max' => 100],
            [['news_abstract'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_title' => '新闻标题',
            'news_abstract' => '新闻摘要',
            'news_content' => '新闻内容',
            'news_cover' => '新闻封面url',
            'news_id' => '新闻标识',
            'news_time' => 'News Time',
        ];
    }

    /**
     * Gets query for [[OlyNewscomments]].
     *
     * @return \yii\db\ActiveQuery|OlyNewscommentQuery
     */
    public function getOlyNewscomments()
    {
        return $this->hasMany(OlyNewscomment::className(), ['cmt_newsid' => 'news_id']);
    }

    /**
     * {@inheritdoc}
     * @return OlyNewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlyNewsQuery(get_called_class());
    }
}
