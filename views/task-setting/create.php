<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TaskSetting */

$this->title = 'Create Task Setting';
$this->params['breadcrumbs'][] = ['label' => 'Task Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
