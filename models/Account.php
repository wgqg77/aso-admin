<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $a_id
 * @property string $account_id
 * @property string $password
 * @property string $udid
 * @property string $idfa
 * @property string $serial
 * @property string $imei
 * @property string $unknown
 * @property integer $state
 * @property integer $num
 * @property string $reason
 * @property string $ecid
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state', 'num'], 'integer'],
            [['account_id', 'password', 'udid', 'idfa', 'serial', 'imei', 'unknown', 'ecid'], 'string', 'max' => 100],
            [['reason'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'account_id' => 'Account ID',
            'password' => 'Password',
            'udid' => 'Udid',
            'idfa' => 'Idfa',
            'serial' => 'Serial',
            'imei' => 'Imei',
            'unknown' => 'Unknown',
            'state' => 'State',
            'num' => 'Num',
            'reason' => 'Reason',
            'ecid' => 'Ecid',
        ];
    }
}
