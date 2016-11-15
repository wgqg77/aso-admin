<?php
namespace app\controllers;

use Yii;
use yii\base\ActionFilter;
use yii\base\UserException;
use yii\web\BadRequestHttpException;
use yii\web\ErrorAction;

class AuthFilter extends ActionFilter{

    private $allowList = [
        'site/login',
        'site/error',
    ];

    public function beforeAction($action)
    {
        $controllerId = $action->controller->id;
        $actionId = $action->id;
        $string = $controllerId."/".$actionId;
        if(in_array($string,$this->allowList)){
            return true;
        }
        if(Yii::$app->user->isGuest){
            $url = Yii::$app->urlManager->createUrl('site/login');
            Yii::$app->controller->redirect($url);
            return false;
        }
        if(Yii::$app->user->identity->username == 'admin'){
            return true;
        }
        if(Yii::$app->user->identity->username !== "admin" && $controllerId == 'auth'){
            throw new UserException('没有权限的非法的操作');
        }
        if(!Yii::$app->authManager->checkAccess(Yii::$app->user->identity->getId(),$controllerId.".".$actionId)){
            throw new UserException("没有权限的非法的操作,请联系管理员分配权限",405);
        }
        return true;
    }
}
