<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\OlyPrizeInfo;

/**
 * OlyPrizeInfoSearch represents the model behind the search form of `frontend\models\OlyPrizeInfo`.
 */
class OlyPrizeInfoSearch extends OlyPrizeInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['game_id', 'type_id', 'team_id', 'group_id', 'rank', 'status'], 'integer'],
            [['athlete_id'], 'safe'],
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
        $query = OlyPrizeInfo::find();
        $query->joinWith(['team']);
        $query->select("oly_prize_info.*, oly_team_info.team_name_zh, oly_team_info.flag_path");
        $query->where('type_id=' . $params['type_id'] . ' and rank>0');
        if (isset($params['rank']))
            $query->andWhere('rank<4');
        $query->orderBy(['rank' => SORT_ASC]);
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
            'game_id' => $this->game_id,
            'type_id' => $this->type_id,
            'team_id' => $this->team_id,
            'group_id' => $this->group_id,
            'rank' => $this->rank,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'athlete_id', $this->athlete_id]);

        return $dataProvider;
    }
}
