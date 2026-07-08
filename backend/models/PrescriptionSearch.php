<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Prescription;

/**
 * PrescriptionSearch represents the model behind the search form of `backend\models\Prescription`.
 */
class PrescriptionSearch extends Prescription
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'medication', 'dosage', 'instructions', 'Created_at', 'updated_at'], 'safe'],
            [['record_id', 'patient_id', 'doctor_id', 'quantity'], 'integer'],
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
        $query = Prescription::find();

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
            'record_id' => $this->record_id,
            'patient_id' => $this->patient_id,
            'doctor_id' => $this->doctor_id,
            'quantity' => $this->quantity,
            'Created_at' => $this->Created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'medication', $this->medication])
            ->andFilterWhere(['like', 'dosage', $this->dosage])
            ->andFilterWhere(['like', 'instructions', $this->instructions]);

        return $dataProvider;
    }
}
