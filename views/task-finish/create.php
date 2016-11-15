<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TaskFinish */

$this->title = 'Create Task Finish';
$this->params['breadcrumbs'][] = ['label' => 'Task Finishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-finish-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
