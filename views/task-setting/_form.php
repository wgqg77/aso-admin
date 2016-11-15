<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\TaskSetting */
/* @var $form yii\widgets\ActiveForm */

$url=Url::to(['/task-setting/current-num']);
$js= <<<jsstring
$( "#btn_current_num" ).click(function() {
        app_id=$("#tasksetting-t_appid").val();
        $.post("$url",{app_id:app_id},function(data){
            $("#curent_num").val(data);
        })
    });


jsstring;
$this->registerJs($js);
?>

<div class="task-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 't_appid')->textInput(['maxlength' => true]) ?>

    <label for="curent_num">当前/总可用数量</label>

    <input type="text" name="curent_num" id="curent_num"/>
    <input type="button" id="btn_current_num" value="查看">

    <?= $form->field($model, 't_appkey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_devicetype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_thread')->textInput() ?>

    <?= $form->field($model, 't_data_count')->textInput() ?>

    <?= $form->field($model, 't_pc_num')->textInput() ?>

    <?= $form->field($model, 't_state')->textInput() ?>

    <?= $form->field($model, 'unknown')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
