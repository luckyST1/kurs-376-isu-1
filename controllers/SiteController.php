<?php

namespace app\controllers;

use app\models\CorrectQ;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\TestCreate;
use app\models\Tests;
use app\models\TestCS;
use app\models\TestSAsk;
use app\models\TestSAns;
use app\models\TestSCorAnsw;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout', 'test'],
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

    /**
     * {@inheritdoc}
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTest()
    {
        $model = new TestCreate();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect('/web/index.php?r=site/correctqq');
            }

        }
        return $this->render('test', [
            'model' => $model,
        ]);
    }

    public function actionTestcs()
    {
        $model = new \app\models\TestCS();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect('/web/index.php?r=site/testask');
            }
        }
        return $this->render('testcs', [
            'model'=> $model,
        ]);
    }

    public function actionTestask()
    {
        $model = new \app\models\TestSAsk();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect('/web/index.php?r=site/testans');
            }
        }

        return $this->render('testask', [
            'model' => $model,
        ]);
    }

    public function actionTestans()
    {
        $model = new \app\models\TestSAns();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect('/web/index.php?r=site/testqans');

            }
        }

        return $this->render('testans', [
            'model' => $model,
        ]);
    }

    public function actionTestqans()
    {
        $model = new \app\models\TestSCorAnsw();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('testqans', [
            'model' => $model,
        ]);
    }

    public function actionCorrectqq()
    {
        $model = new \app\models\CorrectQ();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect('/web/index.php?r=site/index');
            }
        }

        return $this->render('correctqq', [
            'model' => $model,
        ]);
    }

    public function actionCorrect()
    {
        $model = new CorrectQ();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                return $this->redirect('/web/index.php?r=site/index');
            }
        }
            return $this->render('correct', [
                'model' => $model,
                ]);

    }

    public function actionTests()
    {
        $model = new Tests();
        return $this->render('tests', [
            'model' => $model,
        ]);
    }
}
