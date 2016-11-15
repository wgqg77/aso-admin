<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task_setting".
 *
 * @property integer $t_id
 * @property string $t_appid
 * @property string $t_appkey
 * @property string $t_devicetype
 * @property integer $t_thread
 * @property integer $t_data_count
 * @property integer $t_pc_num
 * @property integer $t_response_pc_num
 * @property integer $t_state
 * @property string $unknown
 * @property integer $t_success_num
 * @property string $t_begintime
 * @property string $t_endtime
 * @property string $costtimedesc
 */
class TaskSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_appid','t_thread', 't_data_count', 't_pc_num', 't_response_pc_num', 't_state', 't_success_num'], 'integer'],
            [['t_begintime', 't_endtime'], 'safe'],
            [[ 't_appkey', 't_devicetype', 'unknown'], 'string', 'max' => 100],
            [['costtimedesc'], 'string', 'max' => 20],
            [['t_appid','t_appkey'],'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'taskId',
            't_appid' => 'Appid',
            't_appkey' => '任务名称',
            't_devicetype' => 'Devicetype',
            't_thread' => 'Thread',
            't_data_count' => '每台终端执行数量',
            't_pc_num' => '总PC数量',
            't_response_pc_num' => '已响应PC数量',
            't_state' => '任务状态',
            //'unknown' => 'Unknown',
            't_success_num' => '成功数量',
            't_begintime' => '开始时间',
            't_endtime' => '结束时间',
            //'costtimedesc' => 'Costtimedesc',
        ];
    }

    public static function getTaskIdByAppId($appid=null,$returnArray=false){

        if($appid == null){
            return $returnArray?array():null;
        }
        $query = self::find()->select('t_id')->where(['t_appid'=>$appid]);
        if($returnArray){
            $query->asArray();
        }
        return $query->all();
    }
}
