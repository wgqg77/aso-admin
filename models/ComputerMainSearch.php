<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ComputerMain;

/**
 * ComputerMainSearch represents the model behind the search form about `app\models\ComputerMain`.
 */
class ComputerMainSearch extends ComputerMain
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'c_state'], 'integer'],
            [['c_name', 'c_last_request_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ComputerMain::find();

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
            'c_id' => $this->c_id,
            'c_state' => $this->c_state,
            'c_last_request_time' => $this->c_last_request_time,
        ]);

        $query->andFilterWhere(['like', 'c_name', $this->c_name]);

        return $dataProvider;
    }
}
