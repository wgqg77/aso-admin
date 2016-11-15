<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComputerMain */

$this->title = 'Create Computer Main';
$this->params['breadcrumbs'][] = ['label' => 'Computer Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-main-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
