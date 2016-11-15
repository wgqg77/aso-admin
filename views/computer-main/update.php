<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerMain */

$this->title = 'Update Computer Main: ' . $model->c_id;
$this->params['breadcrumbs'][] = ['label' => 'Computer Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->c_id, 'url' => ['view', 'id' => $model->c_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="computer-main-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
