<?php

namespace app\controllers;

use app\controllers\AuthFilter;
use yii\web\Controller;

class BaseController extends Controller{

    public function behaviors()
    {
        return [
            [
                'class'=>AuthFilter::className(),
            ],
        ];
    }


}