<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TaskSettingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-setting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 't_id') ?>

    <?= $form->field($model, 't_appid') ?>

    <?= $form->field($model, 't_appkey') ?>

    <?= $form->field($model, 't_devicetype') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
