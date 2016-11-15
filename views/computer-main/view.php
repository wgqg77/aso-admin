<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerMain */

$this->title = $model->c_id;
$this->params['breadcrumbs'][] = ['label' => 'Computer Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-main-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->c_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->c_id], [
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
            'c_id',
            'c_name',
            'c_state',
            'c_last_request_time',
        ],
    ]) ?>

</div>
