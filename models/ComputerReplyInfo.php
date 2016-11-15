<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "computer_rely_info".
 *
 * @property integer $r_id
 * @property integer $c_id
 * @property integer $t_id
 * @property integer $r_total_task
 * @property integer $r_finish_task
 * @property integer $r_success_task
 * @property integer $r_task_204
 * @property integer $r_task_205
 * @property integer $r_task_206
 * @property integer $r_task_207
 * @property integer $r_task_208
 * @property integer $r_task_209
 * @property integer $r_task_210
 * @property integer $r_task_211
 * @property integer $r_task_212
 * @property integer $r_task_213
 * @property string $r_begintime
 * @property string $r_endtime
 */
class ComputerReplyInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'computer_rely_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 't_id', 'r_total_task', 'r_finish_task', 'r_success_task', 'r_task_204', 'r_task_205', 'r_task_206', 'r_task_207', 'r_task_208', 'r_task_209', 'r_task_210', 'r_task_211', 'r_task_212', 'r_task_213'], 'integer'],
            [['r_begintime', 'r_endtime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            't_id' => 'T ID',
            'r_total_task' => 'R Total Task',
            'r_finish_task' => 'R Finish Task',
            'r_success_task' => 'R Success Task',
            'r_task_204' => 'R Task 204',
            'r_task_205' => 'R Task 205',
            'r_task_206' => 'R Task 206',
            'r_task_207' => 'R Task 207',
            'r_task_208' => 'R Task 208',
            'r_task_209' => 'R Task 209',
            'r_task_210' => 'R Task 210',
            'r_task_211' => 'R Task 211',
            'r_task_212' => 'R Task 212',
            'r_task_213' => 'R Task 213',
            'r_begintime' => 'R Begintime',
            'r_endtime' => 'R Endtime',
        ];
    }
}
