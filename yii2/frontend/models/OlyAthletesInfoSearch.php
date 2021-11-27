<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by baying 1911537, 20211126
 * This is the athlete search model of the frontend web.
 */

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\OlyAthletesInfo;

/**
 * OlyAthletesInfoSearch represents the model behind the search form of `frontend\models\OlyAthletesInfo`.
 */
class OlyAthletesInfoSearch extends OlyAthletesInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['athlete_id', 'name_en'], 'safe'],
            [['team_id', 'group_id', 'status'], 'integer'],
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
        $query = OlyAthletesInfo::find();
        if(isset($params['group_id']))
            $query->where('group_id=' . $params['group_id']);
        if (isset($params['athlete_id']))
        $query->where('athlete_id=' . $params['athlete_id']);
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
            'team_id' => $this->team_id,
            'group_id' => $this->group_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'athlete_id', $this->athlete_id])
            ->andFilterWhere(['like', 'name_en', $this->name_en]);

        return $dataProvider;
    }
}
