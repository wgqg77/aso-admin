<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComputerReplyInfo */

$this->title = 'Create Computer Reply Info';
$this->params['breadcrumbs'][] = ['label' => 'Computer Reply Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-reply-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
