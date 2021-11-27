<?php


/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by shihaonming 1911463, 20211127
 * This is the game search model of the frontend web.
 */

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\OlyGameInfo;

/**
 * OlyGameInfoSearch represents the model behind the search form of `frontend\models\OlyGameInfo`.
 */
class OlyGameInfoSearch extends OlyGameInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['game_id', 'status'], 'integer'],
            [['game_name_en', 'game_name_zh', 'game_code'], 'safe'],
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
        $query = OlyGameInfo::find();

        // add conditions that should always apply here

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
        // $query->andFilterWhere([
        //     'game_id' => $this->game_id,
        //     'status' => $this->status,
        // ]);

        // $query->andFilterWhere(['like', 'game_name_en', $this->game_name_en])
        //     ->andFilterWhere(['like', 'game_name_zh', $this->game_name_zh])
        //     ->andFilterWhere(['like', 'game_code', $this->game_code]);

        return $dataProvider;
    }
}
