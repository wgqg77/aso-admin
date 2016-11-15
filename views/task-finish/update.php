<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TaskFinish */

$this->title = 'Update Task Finish: ' . $model->c_id;
$this->params['breadcrumbs'][] = ['label' => 'Task Finishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->c_id, 'url' => ['view', 'c_id' => $model->c_id, 't_id' => $model->t_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-finish-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
