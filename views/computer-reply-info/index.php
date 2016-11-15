<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComputerReplyInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Computer Reply Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-reply-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Computer Reply Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'c_id',
            't_id',
            'r_total_task',
            'r_finish_task',
            'r_success_task',
            'r_task_204',
            'r_task_205',
            'r_task_206',
            'r_task_207',
            'r_task_208',
            'r_task_209',
            'r_task_210',
            'r_task_211',
            'r_task_212',
            'r_task_213',
            'r_begintime',
            'r_endtime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
