<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by gongan 1913076, 20211128
 * This is contact-form model search of the backend web.
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OlyContactForm;

/**
 * OlyContactFormSearch represents the model behind the search form of `backend\models\OlyContactForm`.
 */
class OlyContactFormSearch extends OlyContactForm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contact_id'], 'integer'],
            [['username', 'email', 'address', 'message'], 'safe'],
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
        $query = OlyContactForm::find();

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
            'contact_id' => $this->contact_id,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'message', $this->message]);

        return $dataProvider;
    }
}
