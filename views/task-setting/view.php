<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TaskSetting */

$this->title = $model->t_id;
$this->params['breadcrumbs'][] = ['label' => 'Task Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-setting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->t_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->t_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            't_id',
            't_appid',
            't_appkey',
            't_devicetype',
            't_thread',
            't_data_count',
            't_pc_num',
            't_response_pc_num',
            't_state',
            'unknown',
            't_success_num',
            't_begintime',
            't_endtime',
            'costtimedesc',
        ],
    ]) ?>

</div>
