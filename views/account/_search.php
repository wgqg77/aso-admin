<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccountSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'a_id') ?>

    <?= $form->field($model, 'account_id') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'udid') ?>

    <?= $form->field($model, 'idfa') ?>

    <?php // echo $form->field($model, 'serial') ?>

    <?php // echo $form->field($model, 'imei') ?>

    <?php // echo $form->field($model, 'unknown') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'num') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'ecid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
