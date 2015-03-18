<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ElegirAparatoForm;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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
        ];
    }

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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
	
	public function successCallback($client)
    {
        $attributes = $client->getUserAttributes();
        // user login or signup comes here
    }
	
	public function actionAparatos()
    {
        return $this->render('aparatos');
    }

	public function actionCentauro()
    {
        return $this->render('centauro');
    }

    public function actionElegiraparato()
    {
        $model = new ElegirAparatoForm();
        if ($model->load(Yii::$app->request->post()) && $model->enviar(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('elegirAparatoFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('elegir_aparato', [
                'model' => $model,
            ]);
        }
    }	

	public function actionFenix()
    {
        return $this->render('fenix');
    }

	public function actionHebe()
    {
        return $this->render('hebe');
    }

	public function actionIndra()
    {
        return $this->render('indra');
    }

	public function actionOdin()
    {
        return $this->render('odin');
    }

	public function actionZeus()
    {
        return $this->render('zeus');
    }
	

	
}