<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\GuestForm;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
            ],
        ];
    }
   
    public function actionEntry()
    {
        $model = new GuestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
        return $this->render('entry', [
            'model' => $model]);
		}
	}

	public function actionIndex()
    {
        return $this->redirect(['guest/index']);
    }

    public function actionError()
    {

    }
}