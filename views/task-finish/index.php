<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TaskFinishSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Task Finishes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-finish-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Task Finish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'c_id',
            't_id',
            'status',
            'a_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
