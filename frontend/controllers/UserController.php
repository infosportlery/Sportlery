<?php

namespace frontend\controllers;

use Yii;
use common\models\User;
use common\models\UserSearch;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use frontend\models\LocationSearch;

Yii::$app->view->params['searchModel'] = new LocationSearch();
Yii::$app->view->params['userSearchModel'] = new LocationSearch();


$userInfo = new User();
Yii::$app->view->params['userData'] = $userInfo->getUserData();
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $user = Yii::$app->getUser()->getIdentity();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'user' => $user,
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
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

                if(isset($model->file))
                {
                    $model->file->saveAs('uploads/' . $imageName . '.' . $model->file->extension);
                    $model->avatar = 'uploads/' . $imageName . '.' . $model->file->extension;
                }
            

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionSettings($id)
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
            $this->layout = "dashboard/main";
            return $this->render('settings', [
                'model' => $model,
            ]);
        }
    }

    public function actionEditavatar($id)
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
            return $this->renderAjax('editavatar', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
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
    public function actionStepone($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('stepone', [
                'categoryModel' => $categoryModel,
            ]);
        }
    }
    
    public function actionTest()
    {
        return 'test';
    }
}
