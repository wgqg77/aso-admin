<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerReplyInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="computer-reply-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'c_id') ?>

    <?= $form->field($model, 't_id') ?>

    <?= $form->field($model, 'r_total_task') ?>

    <?= $form->field($model, 'r_finish_task') ?>

    <?php // echo $form->field($model, 'r_success_task') ?>

    <?php // echo $form->field($model, 'r_task_204') ?>

    <?php // echo $form->field($model, 'r_task_205') ?>

    <?php // echo $form->field($model, 'r_task_206') ?>

    <?php // echo $form->field($model, 'r_task_207') ?>

    <?php // echo $form->field($model, 'r_task_208') ?>

    <?php // echo $form->field($model, 'r_task_209') ?>

    <?php // echo $form->field($model, 'r_task_210') ?>

    <?php // echo $form->field($model, 'r_task_211') ?>

    <?php // echo $form->field($model, 'r_task_212') ?>

    <?php // echo $form->field($model, 'r_task_213') ?>

    <?php // echo $form->field($model, 'r_begintime') ?>

    <?php // echo $form->field($model, 'r_endtime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
