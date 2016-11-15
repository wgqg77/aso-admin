<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TaskSetting;

/**
 * TaskSettingSearch represents the model behind the search form about `app\models\TaskSetting`.
 */
class TaskSettingSearch extends TaskSetting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_id', 't_state'], 'integer'],
            [['t_appid', 't_appkey', 't_devicetype'], 'safe'],
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
        $query = TaskSetting::find();

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
            't_id' => $this->t_id,
            't_thread' => $this->t_thread,
            't_data_count' => $this->t_data_count,
            't_pc_num' => $this->t_pc_num,
            't_response_pc_num' => $this->t_response_pc_num,
            't_state' => $this->t_state,
            't_success_num' => $this->t_success_num,
            't_begintime' => $this->t_begintime,
            't_endtime' => $this->t_endtime,
        ]);

        $query->andFilterWhere(['like', 't_appid', $this->t_appid])
            ->andFilterWhere(['like', 't_appkey', $this->t_appkey])
            ->andFilterWhere(['like', 't_devicetype', $this->t_devicetype])
            ->andFilterWhere(['like', 'unknown', $this->unknown])
            ->andFilterWhere(['like', 'costtimedesc', $this->costtimedesc]);

        return $dataProvider;
    }
}
