<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Account;

/**
 * AccountSearch represents the model behind the search form about `app\models\Account`.
 */
class AccountSearch extends Account
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_id', 'state', 'num'], 'integer'],
            [['account_id', 'password', 'udid', 'idfa', 'serial', 'imei', 'unknown', 'reason', 'ecid'], 'safe'],
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
        $query = Account::find();

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
            'a_id' => $this->a_id,
            'state' => $this->state,
            'num' => $this->num,
        ]);

        $query->andFilterWhere(['like', 'account_id', $this->account_id])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'udid', $this->udid])
            ->andFilterWhere(['like', 'idfa', $this->idfa])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'imei', $this->imei])
            ->andFilterWhere(['like', 'unknown', $this->unknown])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'ecid', $this->ecid]);

        return $dataProvider;
    }
}
