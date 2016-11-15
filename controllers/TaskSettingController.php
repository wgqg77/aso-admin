<?php

namespace app\controllers;

use app\models\Account;
use app\models\TaskFinish;
use Yii;
use app\models\TaskSetting;
use app\models\TaskSettingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * TaskSettingController implements the CRUD actions for TaskSetting model.
 */
class TaskSettingController extends BaseController
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
     * Lists all TaskSetting models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TaskSettingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TaskSetting model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TaskSetting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TaskSetting();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->t_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TaskSetting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->t_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionStart($task_id)
    {
        TaskSetting::updateAll(['t_state' => 1,'t_response_pc_num'=>0], ['=', 't_id', $task_id]);
        $redis = Yii::$app->redis;
        $redis->del(sprintf('task-response-%s',$task_id));
        $redis->rpush('task', $task_id);
        return $this->redirect(Url::to(['/task-setting/index']));
    }

    public function actionStop($task_id)
    {
        TaskSetting::updateAll(['t_state' => 2], ['=', 't_id', $task_id]);
        return $this->redirect(Url::to(['/task-setting/index']));
    }

    /**
     * Deletes an existing TaskSetting model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TaskSetting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TaskSetting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TaskSetting::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionCurrentNum(){
        $app_id=Yii::$app->request->post()['app_id'];
        $t_ids=TaskSetting::getTaskIdByAppId($app_id,true);
        $t_ids = implode(',',array_column($t_ids,'t_id'));
//        $a_ids= TaskFinish::getFinishAccoutsByTaskIds($t_ids,true);
//        $a_ids = array_column($a_ids,'a_id');
//        $num = Account::find()->where(['not in','a_id',$a_ids])->count('a_id');
        $date = date("Y-m-d",strtotime("-90 day"));
        $sql = "select COUNT(a_id) as num from account use index (PRIMARY) where a_id not in (select a_id from task_finish use index(app_id) where app_id=".$app_id." and finish_at > '$date') ";
        $num = Yii::$app->db->createCommand($sql)->queryAll();
        $num = $num[0]['num'];
        $count = count(Yii::$app->redis->smembers('in-use-user'));
        return "{$count}/{$num}";

    }
}
