<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ComputerReplyInfo;

/**
 * ComputerReplyInfoSearch represents the model behind the search form about `app\models\ComputerReplyInfo`.
 */
class ComputerExecInfoSearch extends ComputerExecInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'r_total_task', 'r_finish_task', 'r_success_task', 'r_task_204', 'r_task_205', 'r_task_206', 'r_task_207', 'r_task_208', 'r_task_209', 'r_task_210', 'r_task_211', 'r_task_212', 'r_task_213'], 'integer'],
            [['r_begintime', 'r_endtime'], 'safe'],
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
        $query = ComputerExecInfo::find();

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
            'r_total_task' => $this->r_total_task,
            'r_finish_task' => $this->r_finish_task,
            'r_success_task' => $this->r_success_task,
            'r_task_204' => $this->r_task_204,
            'r_task_205' => $this->r_task_205,
            'r_task_206' => $this->r_task_206,
            'r_task_207' => $this->r_task_207,
            'r_task_208' => $this->r_task_208,
            'r_task_209' => $this->r_task_209,
            'r_task_210' => $this->r_task_210,
            'r_task_211' => $this->r_task_211,
            'r_task_212' => $this->r_task_212,
            'r_task_213' => $this->r_task_213,
            'r_begintime' => $this->r_begintime,
            'r_endtime' => $this->r_endtime,
        ]);

        return $dataProvider;
    }
}
