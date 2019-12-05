<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GroupIndex;

/**
 * GroupIndexSearch represents the model behind the search form of `app\models\GroupIndex`.
 */
class GroupIndexSearch extends GroupIndex
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['imgs', 'highlights', 'events', 'news', 'publications'], 'safe'],
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
        $query = GroupIndex::find();

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

        $query->andFilterWhere(['like', 'imgs', $this->imgs])
            ->andFilterWhere(['like', 'highlights', $this->highlights])
            ->andFilterWhere(['like', 'events', $this->events])
            ->andFilterWhere(['like', 'news', $this->news])
            ->andFilterWhere(['like', 'publications', $this->publications]);

        return $dataProvider;
    }
}
