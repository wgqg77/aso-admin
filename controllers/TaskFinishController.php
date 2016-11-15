<?php

namespace app\controllers;

use Yii;
use app\models\TaskFinish;
use app\models\TaskFinishSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TaskFinishController implements the CRUD actions for TaskFinish model.
 */
class TaskFinishController extends BaseController
{
    /**
     * @inheritdoc
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
     */

    /**
     * Lists all TaskFinish models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TaskFinishSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TaskFinish model.
     * @param integer $c_id
     * @param integer $t_id
     * @return mixed
     */
    public function actionView($c_id, $t_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($c_id, $t_id),
        ]);
    }

    /**
     * Creates a new TaskFinish model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TaskFinish();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'c_id' => $model->c_id, 't_id' => $model->t_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TaskFinish model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $c_id
     * @param integer $t_id
     * @return mixed
     */
    public function actionUpdate($c_id, $t_id)
    {
        $model = $this->findModel($c_id, $t_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'c_id' => $model->c_id, 't_id' => $model->t_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TaskFinish model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $c_id
     * @param integer $t_id
     * @return mixed
     */
    public function actionDelete($c_id, $t_id)
    {
        $this->findModel($c_id, $t_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TaskFinish model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $c_id
     * @param integer $t_id
     * @return TaskFinish the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($c_id, $t_id)
    {
        if (($model = TaskFinish::findOne(['c_id' => $c_id, 't_id' => $t_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
