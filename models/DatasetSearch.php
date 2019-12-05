<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dataset;

/**
 * DatasetSearch represents the model behind the search form of `app\models\Dataset`.
 */
class DatasetSearch extends Dataset
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['contributor', 'dataset_name', 'size', 'url', 'describe', 'other'], 'safe'],
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
        $query = Dataset::find();

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

        $query->andFilterWhere(['like', 'contributor', $this->contributor])
            ->andFilterWhere(['like', 'dataset_name', $this->dataset_name])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'describe', $this->describe])
            ->andFilterWhere(['like', 'other', $this->other]);

        return $dataProvider;
    }
}
