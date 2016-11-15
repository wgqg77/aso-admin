<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerMainSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="computer-main-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'c_id') ?>

    <?= $form->field($model, 'c_name') ?>

    <?= $form->field($model, 'c_state') ?>

    <?= $form->field($model, 'c_last_request_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
