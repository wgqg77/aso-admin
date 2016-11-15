<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TaskSettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Task Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-setting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Task Setting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            't_id',
            't_appid',
            't_appkey',
            't_devicetype',
            't_thread',
            't_data_count',
            //'t_pc_num',
            //'t_response_pc_num',
            ['label'=>'已响应/总pc数量','value'=>function($model){
                return sprintf("%d/%d",$model->t_response_pc_num,$model->t_pc_num);
            }],
            ['label'=>'成功/总数量','value'=>function($model){
                return sprintf("%d/%d",$model->t_success_num,$model->t_pc_num*$model->t_data_count);
            }],
            't_state',
            'unknown',
            //'t_success_num',
            //'t_begintime',
            //'t_endtime',

            //'costtimedesc',
            ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{set-role}{update-user}',
                'buttons'=>[
                    'set-role'=>function($url,$model,$key){
                        return Html::a('<span class="glyphicon glyphicon glyphicon-play"></span>', Url::to(['task-setting/start','task_id'=>$model->t_id]),[
                            'title'=>'开始']);
                    },
                    'update-user'=>function($url,$model,$key){
                        return Html::a('<span class="glyphicon glyphicon glyphicon-stop"></span>', Url::to(['task-setting/stop','task_id'=>$model->t_id]), [
                                'title'=>'停止']);
                    },
                ]
            ],
        ],
    ]); ?>
</div>
