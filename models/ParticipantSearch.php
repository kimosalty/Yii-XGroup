<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Participant;

/**
 * ParticipantSearch represents the model behind the search form of `app\models\Participant`.
 */
class ParticipantSearch extends Participant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nameone', 'nametwo', 'namethree', 'namefour', 'namefive', 'namesix', 'nameseven', 'nameeight'], 'safe'],
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
        $query = Participant::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nameone', $this->nameone])
            ->andFilterWhere(['like', 'nametwo', $this->nametwo])
            ->andFilterWhere(['like', 'namethree', $this->namethree])
            ->andFilterWhere(['like', 'namefour', $this->namefour])
            ->andFilterWhere(['like', 'namefive', $this->namefive])
            ->andFilterWhere(['like', 'namesix', $this->namesix])
            ->andFilterWhere(['like', 'nameseven', $this->nameseven])
            ->andFilterWhere(['like', 'nameeight', $this->nameeight]);

        return $dataProvider;
    }
}
