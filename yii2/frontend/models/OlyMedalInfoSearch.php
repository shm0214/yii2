<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the medal search model of the frontend web.
 */

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\OlyMedalInfo;

/**
 * OlyMedalInfoSearch represents the model behind the search form of `frontend\models\OlyMedalInfo`.
 */
class OlyMedalInfoSearch extends OlyMedalInfo
{

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
        $query = OlyMedalInfo::find();
        $query->joinWith(['team']);
        $query->select("oly_medal_info.*, oly_team_info.team_name_zh, oly_team_info.flag_path");

        //VarDumper::dump($params);
        //exit;
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'page' => $params['page'],
                'pageSize' => $params['pageSize'],
            ],
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
            'gold' => $this->gold,
            'silver' => $this->silver,
            'bronze' => $this->bronze,
            'total' => $this->total,
            'rank' => $this->rank,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
