<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Doctors;

/**
 * DoctorsSearch represents the model behind the search form of `backend\models\Doctors`.
 */
class DoctorsSearch extends Doctors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'dept_id', 'experience_years'], 'integer'],
            [['specialization', 'qualification', 'created_at', 'updated_at'], 'safe'],
            [['consultation_fee'], 'number'],
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Doctors::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'dept_id' => $this->dept_id,
            'experience_years' => $this->experience_years,
            'consultation_fee' => $this->consultation_fee,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'specialization', $this->specialization])
            ->andFilterWhere(['like', 'qualification', $this->qualification]);

        return $dataProvider;
    }
}
