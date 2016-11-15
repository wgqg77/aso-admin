<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "computermain".
 *
 * @property integer $c_id
 * @property string $c_name
 * @property integer $c_state
 * @property string $c_last_request_time
 */
class ComputerMain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'computermain';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_state'], 'integer'],
            [['c_last_request_time'], 'safe'],
            [['c_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'ID',
            'c_name' => '客户端',
            'c_state' => 'State',
            'c_last_request_time' => '最后请求时间',
        ];
    }
}
