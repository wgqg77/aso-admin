<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task_finish".
 *
 * @property integer $c_id
 * @property integer $t_id
 * @property integer $status
 * @property integer $a_id
 */
class TaskFinish extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_finish';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 't_id', 'status', 'a_id'], 'required'],
            [['c_id', 't_id', 'status', 'a_id'], 'integer'],
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
            'status' => 'Status',
            'a_id' => 'A ID',
        ];
    }

    public static function getFinishAccoutsByTaskIds($taskIds=null,$returnArray=false){
        if($taskIds == null || empty($taskIds)){
            return $returnArray?array():null;
        }
        $query = self::find()->select('a_id')->where(['t_id'=>$taskIds]);
        if($returnArray){
            $query->asArray();
        }
        return $query->all();
    }
}
