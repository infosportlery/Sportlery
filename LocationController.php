<?php

namespace frontend\controllers;

use Yii;
use app\models\Location;
use frontend\models\LocationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\db\Query;

/**
 * LocationController implements the CRUD actions for Location model.
 */
class LocationController extends Controller
{

    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all Location models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LocationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $paidProvider = $searchModel->paidSearch(Yii::$app->request->queryParams);
        
        $this->layout = "default";
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'paidProvider' => $paidProvider,
        ]);
    }

    /**
     * Displays a single Location model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout = "profile";
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionPaid($id)
    {
        $id = $_GET['id'];
        $paid = Yii::$app->manage->createCommand("SELECT * from `time_gz_time_slot_users` WHERE `id` = $id")->queryAll();
        $calendars = Yii::$app->manage->createCommand("SELECT * from `time_gz_time_slot_calendars` WHERE `user_id` = $id")->queryAll();


        $this->layout = "profile";
        return $this->render('paid', [
            'paid' => $paid,
            'calendars' => $calendars,
        ]);
    }

    /**
     * Creates a new Location model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('admin'))
        {

            // Jesse, Er moet nog een IF not Exists Error Handler.
            $model = new Location();

            if ($model->load(Yii::$app->request->post())) {

                if(!empty($model->file)) {
                    
                    $imageName = $model->name;

                    // get the instance of the uploaded file
                    $model->file = UploadedFile::getInstance($model, 'file');
                    $model->file->saveAs('uploads/' . $imageName . '.' . $model->file->extension);

                    // save the path in db
                    $model->avatar = 'uploads/' . $imageName . '.' . $model->file->extension;

                }

                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            Yii::$app->session->setFlash('warning', 'bla bla bla bla 1');
            return $this->goHome();
        }
    }

    /**
     * Updates an existing Location model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            
            if(!empty($model->file)) {
                $imageName = $model->name;

                // get the instance of the uploaded file
                $model->file = UploadedFile::getInstance($model, 'file');
                $model->file->saveAs('uploads/' . $imageName . '.' . $model->file->extension);

                // save the path in db
                $model->avatar = 'uploads/' . $imageName . '.' . $model->file->extension;
            }

            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Location model.
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
     * Finds the Location model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Location the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Location::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
