<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TaskSetting */

$this->title = 'Update Task Setting: ' . $model->t_id;
$this->params['breadcrumbs'][] = ['label' => 'Task Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->t_id, 'url' => ['view', 'id' => $model->t_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
