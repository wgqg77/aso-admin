<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerReplyInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="computer-reply-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_id')->textInput() ?>

    <?= $form->field($model, 't_id')->textInput() ?>

    <?= $form->field($model, 'r_total_task')->textInput() ?>

    <?= $form->field($model, 'r_finish_task')->textInput() ?>

    <?= $form->field($model, 'r_success_task')->textInput() ?>

    <?= $form->field($model, 'r_task_204')->textInput() ?>

    <?= $form->field($model, 'r_task_205')->textInput() ?>

    <?= $form->field($model, 'r_task_206')->textInput() ?>

    <?= $form->field($model, 'r_task_207')->textInput() ?>

    <?= $form->field($model, 'r_task_208')->textInput() ?>

    <?= $form->field($model, 'r_task_209')->textInput() ?>

    <?= $form->field($model, 'r_task_210')->textInput() ?>

    <?= $form->field($model, 'r_task_211')->textInput() ?>

    <?= $form->field($model, 'r_task_212')->textInput() ?>

    <?= $form->field($model, 'r_task_213')->textInput() ?>

    <?= $form->field($model, 'r_begintime')->textInput() ?>

    <?= $form->field($model, 'r_endtime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
