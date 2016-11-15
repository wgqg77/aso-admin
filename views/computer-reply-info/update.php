<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerReplyInfo */

$this->title = 'Update Computer Reply Info: ' . $model->r_id;
$this->params['breadcrumbs'][] = ['label' => 'Computer Reply Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->r_id, 'url' => ['view', 'id' => $model->r_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="computer-reply-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
