<?php

namespace app\backend\components\home\controllers;


use Yii;
use yii\web\Controller;
use app\backend\components\balance\models\Balance;


class HomeController extends Controller
{
    /**
     * @inheritDoc
     */
    public function init(){
        parent::init();
        $this->viewPath = '@app/backend/components/home/views';
    }


    public function actionHomeView()
    {
        $model = Balance::find()->one();
        return $this->render('@app/backend/components/home/views/home-view', ['model' => $model]);
    }
}