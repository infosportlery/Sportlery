<?php

namespace frontend\controllers;

use common\models\User;
use common\models\UserSearch;
use frontend\models\Location;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\LocationSearch;
use app\models\Category;
use yii;

// $userSearchModel = new UserSearch();
// $searchModel = new LocationSearch();

Yii::$app->view->params['searchModel'] = new LocationSearch();
Yii::$app->view->params['userSearchModel'] = new LocationSearch();

$userInfo = new User();
Yii::$app->view->params['userData'] = $userInfo->getUserData();

class DashboardController extends Controller
{
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

    public function actionIndex()
    {

    $userInfo = new User();
    $searchModel = new LocationSearch();
    $userSearchModel = new UserSearch();
    $publicProvider = $searchModel->publicSearch(Yii::$app->request->queryParams);


    $userProvider = $userSearchModel->search(Yii::$app->request->queryParams);

    $model = new User();
    $categoryModel = new Category();

    if(Yii::$app->user->isGuest)
    {
        return $this->goHome();
    } else {

        //////////////////////////
        // 3 STEP TUTORIAL
        //////////////////////////

        // get loggedin user sport
        $sport = Yii::$app->user->identity->favorite_sport;
        $city = Yii::$app->user->identity->city;
        $wantingsport = Yii::$app->user->identity->wanting_sport;


        // $user = User::find()
        //   ->where(['id' => Yii::$app->user->identity->id])
        //   ->one();

        // check if empty (NULL)
        if(empty($userInfo->getUserData()->favorite_sport))
        {
            // if empty: redirect to user/action for automatic modal
            return $this->redirect(['/user/stepone', 'id' => Yii::$app->user->identity->id]);
        }
        if(empty($userInfo->getUserData()->city)) {

            return $this->redirect(['/user/steptwo', 'id' => Yii::$app->user->identity->id]);
        }
        if(empty($userInfo->getUserData()->wanting_sport)) {

            return $this->redirect(['/user/stepthree', 'id' => Yii::$app->user->identity->id]);
        }

        $identity = Yii::$app->getUser()->getIdentity();

        $setPassword = Yii::$app->user->identity->password_hash;


        if (!isset($setPassword))
        {
            Yii::$app->session->setFlash('danger', "Je hebt nog geen wachtwoord ingesteld.");
        }

        $this->layout = 'dashboard/main';
        return $this->render('index', [
                'model' => $model,
                'categoryModel' => $categoryModel,
                'identity' => $identity,
                'publicProvider' => $publicProvider,
                'searchModel' => $searchModel,
                'userProvider' => $userProvider,
                'userSearchModel' => $userSearchModel,
            ]);

        }
    }

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



}
