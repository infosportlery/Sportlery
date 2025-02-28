<?php

namespace frontend\controllers;

use Yii;
use app\models\Location;
use frontend\models\LocationSearch;
use common\models\User;
use common\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\db\Query;
use yii\helpers\Url;

Yii::$app->view->params['searchModel'] = new LocationSearch();
Yii::$app->view->params['userSearchModel'] = new LocationSearch();

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
        // Search Models
        $userSearchModel = new UserSearch();
        $searchModel = new LocationSearch();

        // Location Providers
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $publicProvider = $searchModel->publicSearch(Yii::$app->request->queryParams);
        $paidProvider = $searchModel->paidSearch(Yii::$app->request->queryParams);
        
        $this->layout = "default";
        return $this->render('index', [
            'searchModel' => $searchModel,
            'userSearchModel' => $userSearchModel,
            'dataProvider' => $dataProvider,
            'paidProvider' => $paidProvider,
            'publicProvider' => $publicProvider,
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


        $this->layout = "profile";
        return $this->render('paid');
    }

    /**
     * Creates a new Location model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(!Yii::$app->user->isGuest && Yii::$app->user->can('admin'))
        {

            $model = new Location();

            if ($model->load(Yii::$app->request->post())) {

                $imageName = self::generateImageName();

                // get the instance of the uploaded file
                $model->file = UploadedFile::getInstance($model, 'file');
                $model->file->saveAs('uploads/' . $imageName . '.' . $model->file->extension);

                // save the path in db
                $model->avatar = 'uploads/' . $imageName . '.' . $model->file->extension;

                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);

            } else {
                $this->layout = "dashboard/main";
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {

            $this->layout = "signup";
            return $this->redirect(Yii::$app->urlManager->createUrl('site/login'));
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
    
            $imageName = self::generateImageName();

            // get the instance of the uploaded file
            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs('uploads/' . $imageName . '.' . $model->file->extension);

            // save the path in db
            $model->avatar = 'uploads/' . $imageName . '.' . $model->file->extension;

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

    public function generateImageName()
    {
        $avatarName = Yii::$app->security->generateRandomString();

        return $avatarName;
    }
}
