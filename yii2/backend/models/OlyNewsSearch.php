<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OlyNews;

/**
 * OlyNewsSearch represents the model behind the search form of `app\models\OlyNews`.
 */
class OlyNewsSearch extends OlyNews
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_title', 'news_abstract', 'news_content', 'news_cover'], 'safe'],
            [['news_id'], 'integer'],
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
        $query = OlyNews::find();

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
            'news_id' => $this->news_id,
        ]);

        $query->andFilterWhere(['like', 'news_title', $this->news_title])
            ->andFilterWhere(['like', 'news_abstract', $this->news_abstract])
            ->andFilterWhere(['like', 'news_content', $this->news_content])
            ->andFilterWhere(['like', 'news_cover', $this->news_cover]);

        return $dataProvider;
    }
}