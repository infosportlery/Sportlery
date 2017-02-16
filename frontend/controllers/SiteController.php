<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\AuthForm;
use frontend\models\ContactForm;
use common\models\User;
use app\models\Location;
use frontend\models\LocationSearch;
use common\models\UserSearch;
use yii\helpers\Url;
use app\components\AuthHandler;
use yii\db\Query;
use frontend\models\Mailing;
use frontend\models\GzUsers;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function successCallback($client)
    {
        $attributes = $client->getUserAttributes();
        $email = User::find()->where(['email' => $attributes['email']])->exists();
        
        if(!$email)
        {

          // email does exist -- login

        } else {
          // email doesnt exist - register account
          $user = new User();
          $user->email = $attributes['email'];
          $user->firstname = $attributes['first_name'];
          $user->lastname = $attributes['last_name'];

          return $this->action->redirect(Url::to(['authsignup'],true) );
        }

    }
    public $successUrl = 'Success';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['signup', 'language'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
            'eauth' => array(
              // required to disable csrf validation on OpenID requests
              'class' => \nodge\eauth\openid\ControllerBehavior::className(),
              'only' => array('login'),
            ),
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
              'class' => 'yii\authclient\AuthAction',
              'successCallback' => [$this, 'successCallback'],
            ],
        ];
    } 

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

      $mailing = new Mailing();
      $searchModel = new LocationSearch();

      $userSearchModel = new UserSearch();

      // Content providers
      $publicProvider = $searchModel->frontPagePublicSearch(Yii::$app->request->queryParams);
      $paidProvider = $searchModel->frontPagePaidSearch(Yii::$app->request->queryParams);
      $userProvider = $userSearchModel->frontPageUserSearch(Yii::$app->request->queryParams);


      $public = (new Query())
        ->select(['id', 'name', 'description', 'price', 'category', 'city', 'zipcode', 'street', 'avatar'])
        ->from('location')
        ->where(['type' => 0])
        ->all();

      if ($mailing->load(Yii::$app->request->post()) && $mailing->save()) {
        if ($mailing->validate()) {
          Yii::$app->mailer->compose('mailing')
          ->setFrom('info@sportlery.nl')
          ->setTo($mailing->email)
          ->setSubject('Thanks for subscribing!')
          ->send();
          return $this->goHome();
        }
      }

      return $this->render('index', [
          'searchModel' => $searchModel,
          'userSearchModel' => $userSearchModel,
          'mailing' => $mailing,
          'paidProvider' => $paidProvider,
          'publicProvider' => $publicProvider,
          'userProvider' => $userProvider,
      ]);
    }

    public function actionAuthsignup()
    {

      $model = new AuthForm();

      $this->layout = "signup";
      return $this->render('authsignup', [
          'model' => $model,
        ]);
    }

    public function actionSportclub()
    {
      $this->layout = 'sportclub';
      return $this->render('sportclub');
    }

    public function actionTrainer()
    {
      $this->layout = 'trainer';
      return $this->render('trainer');
    }

    public function actionContest()
    {
      $this->layout = "contestlay";

      return $this->redirect(['site/contest']);
    }

    public function actionComingsoon()
    {
      $this->layout = 'default';
      return $this->render('comingsoon');
    }

    public function actionDashboard()
    {
      $events = Event::find()->all();

      foreach ($events as $event) {
        $event = new \yii2fullcalendar\models\Event();
        $event->id = 1;
        $event->title = "test";
        $event->start = date('2017-01-03\TH:i:s\Z');
        $events[] = $event;
      }
    }
      public function actionLogin()
      {
        $serviceName = Yii::$app->getRequest()->getQueryParam('service');
        if (isset($serviceName)) {
          /** @var $eauth \nodge\eauth\ServiceBase */
          $eauth = Yii::$app->get('eauth')->getIdentity($serviceName);
          $eauth->setRedirectUrl(Yii::$app->getUser()->getReturnUrl());
          $eauth->setCancelUrl(Yii::$app->getUrlManager()->createAbsoluteUrl('/dashboard/index'));
          try {
            if ($eauth->authenticate()) {
    //          var_dump($eauth->getIsAuthenticated(), $eauth->getAttributes()); exit;
              $identity = User::findByEAuth($eauth);
              Yii::$app->getUser()->login($identity);
              // special redirect with closing popup window

              $eauth->redirect($eauth->getCancelUrl());
            }
            else {
              // close popup window and redirect to cancelUrl
              $eauth->cancel();
            }
          }
          catch (\nodge\eauth\ErrorException $e) {
            // save error to show it later
            Yii::$app->getSession()->setFlash('error', 'EAuthException: '.$e->getMessage());
            // close popup window and redirect to cancelUrl
    //        $eauth->cancel();
            $eauth->redirect($eauth->getCancelUrl());
          }
        }
        $model = new LoginForm();
        if ($model->load($_POST) && $model->login()) {
          return $this->goBack();
        }
        else {
          $this->layout = "signup";
          return $this->render('login', array(
            'model' => $model,
          ));
        }
      }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
          if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->refresh();
        } else {            
            $this->layout = "main";
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionSport()
    {
      $this->layout = "default";
      return $this->render('sport');
    }

    /**
     * Displays team page.
     *
     * @return mixed
     */
    public function actionTeam()
    {
        return $this->render('overons');
    }

    public function actionListing()
    {
      $this->layout = "default";
      return $this->render('listing');
    }
    /**
     * Displays Profile Page.
     *
     * @return mixed
     */
    public function actionProfile($id){

      $model = new User();
      $id = $_GET['id'];

      $user = (new Query())
        ->select(['id', 'username', 'firstname', 'lastname', 'favorite_sport', 'favorite_athlete'])
        ->from('user')
        ->where(['id' => $id])
        ->all();

      $this->layout = "profile";
      return $this->render('profile', [
        'model' => $model,
        'user' => $user,
      ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    
                    return $this->goHome();
                }
            }
        }

        if(Yii::$app->user->isGuest)
        {
            $this->layout = "signup";
            return $this->render('signup', [
                'model' => $model,
            ]);
        } else {
            $this->layout = 'dashboard/main';
            return $this->render('/dashboard/index');
        }
      
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', ' Sorry, het is ons niet gelukt om jouw wachtwoord te resetten.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Je nieuwe wachtwoord is opgeslagen.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionLanguage() {
        if(isset($_POST['lang'])){
            Yii::$app->language = $_POST['lang'];
            $cookie = new yii\web\Cookie([
                'name' => 'lang',
                'value' => $_POST['lang']
            ]);

            Yii::$app->getResponse()->getCookies()->add($cookie);
        }
    }

    public function actionChangel() {
      return $this->redirect(['site/index']);
    }

}

?>


