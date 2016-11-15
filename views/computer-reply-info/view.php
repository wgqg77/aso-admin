<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerReplyInfo */

$this->title = $model->r_id;
$this->params['breadcrumbs'][] = ['label' => 'Computer Reply Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-reply-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->r_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->r_id], [
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
            'r_id',
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
        ],
    ]) ?>

</div>
