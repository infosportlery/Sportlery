<?php

namespace frontend\controllers;

use common\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use yii;

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

    $model = new User();

    if(Yii::$app->user->isGuest)
    {
        return $this->goHome();
    } else {

        $identity = Yii::$app->getUser()->getIdentity();

        $setPassword = Yii::$app->user->identity->password_hash;


        if (!isset($setPassword))
        {
            Yii::$app->session->setFlash('danger', "Je hebt nog geen wachtwoord ingesteld.");
        }

        $this->layout = 'dashboard/main';
        return $this->render('index', [
                'model' => $model,
                'identity' => $identity,
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
