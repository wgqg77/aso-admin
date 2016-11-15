<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'ASO',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if( Yii::$app->user->isGuest ){
        $items=[['label' => 'Login', 'url' => ['/site/login'] ,'class' =>'pull-right']];
    }else{
        $items= [
            ['label' => '用户', 'items' => [
                ['label' => '新建', 'url' => Yii::$app->urlManager->createUrl('/account/create')],
                '<li class="divider"></li>',
                ['label' => '查看', 'url' => Yii::$app->urlManager->createUrl('/account/index')],
            ],],
            ['label' => '任务', 'items' => [
                ['label' => '新建', 'url' => Yii::$app->urlManager->createUrl('/task-setting/create')],
                '<li class="divider"></li>',
                ['label' => '查看', 'url' => Yii::$app->urlManager->createUrl('/task-setting/index')],
                '<li class="divider"></li>',
                ['label' => '完成情况', 'url' => Yii::$app->urlManager->createUrl('/computer-reply-info/index')],
                ['label' => '电脑列表', 'url' => Yii::$app->urlManager->createUrl('/computer-exec-info/index')],
            ],],
            ['label' => '客户端', 'items' => [
                ['label' => '新建', 'url' => Yii::$app->urlManager->createUrl('/computer-main/create')],
                '<li class="divider"></li>',
                ['label' => '查看', 'url' => Yii::$app->urlManager->createUrl('/computer-main/index')],
            ],],
            '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>'
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
