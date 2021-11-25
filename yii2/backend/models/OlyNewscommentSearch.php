<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OlyNewscomment;

/**
 * OlyNewscommentSearch represents the model behind the search form of `app\models\OlyNewscomment`.
 */
class OlyNewscommentSearch extends OlyNewscomment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cmt_id', 'cmt_userid', 'cmt_newsid', 'cmt_trashed'], 'integer'],
            [['cmt_date', 'cmt_content'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OlyNewscomment::find();
        
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cmt_id' => $this->cmt_id,
            'cmt_userid' => $this->cmt_userid,
            'cmt_date' => $this->cmt_date,
            'cmt_newsid' => $this->cmt_newsid,
            'cmt_trashed' => $this->cmt_trashed,
        ]);

        $query->andFilterWhere(['like', 'cmt_content', $this->cmt_content]);

        return $dataProvider;
    }
}
