<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComputerMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Computer Mains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-main-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Computer Main', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'c_id',
            'c_name',
            //'c_state',
            'c_last_request_time',

            ['label'=>'状态','value'=>function($model){
                //echo(time()-$model->last_update);
                //30分钟就认为下线
                if((time()-strtotime($model->c_last_request_time))/60>30){
                    return "离线";
                }else{
                    return  "在线";
                }
            }],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
