<?php

namespace frontend\controllers;

use common\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\ResetPasswordForm;
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
            // gebruiker heeft nog geen password

            $model = new User();

                return $this->renderAjax('/user/_password', ['model' => $model]);
        } else {
            return $this->render('contest');
        }

        $this->layout = 'dashboard/main';
        return $this->render('index', [
                'model' => $model,
                'identity' => $identity,
            ]);

        }
    }

    public function actionSettings($id)
    {
      $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            $this->layout = "dashboard/main";
            return $this->render('index');
        } else {

            $this->layout = 'dashboard/main';
            return $this->redirect(['/user/update', 'id' => Yii::$app->user->identity->id]);
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
