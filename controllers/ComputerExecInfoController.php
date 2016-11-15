<?php

namespace app\controllers;

use app\models\ComputerExecInfoSearch;
use Yii;

class ComputerExecInfoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new ComputerExecInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
