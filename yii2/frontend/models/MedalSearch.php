<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Medal;

/**
 * MedalSearch represents the model behind the search form of `frontend\models\Medal`.
 */
class MedalSearch extends Medal
{
    public $name_zh;
    public $path;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gold', 'silver', 'bronze', 'total', 'rank'], 'integer'],
            [['name_zh', 'flag_path'], 'safe'],
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
        $query = Medal::find();
        $query->joinWith(['team']);
        $query->select("medal.*, team.name_zh, team.path");

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'page' => $params['page'],
                'pageSize' => $params['pageSize'],
            ],
        ]);

        $this->load($params);

        $dataProvider->sort->attributes['name_zh'] = [
            'asc' => ['team.name_zh' => SORT_ASC],
            'desc' => ['team.name_zh' => SORT_DESC],
        ];

        $dataProvider->getSort();


        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'gold' => $this->gold,
            'silver' => $this->silver,
            'bronze' => $this->bronze,
            'total' => $this->total,
            'rank' => $this->rank,
            'name_zh' => $this->name_zh,
            'path' => $this->path,
        ]);

        return $dataProvider;
    }
}
