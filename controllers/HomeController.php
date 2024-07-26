<?php

namespace app\controllers;

use yii\web\Controller;

class HomeController extends Controller
{
    public function actionHomeView(){
        return $this->render('home-view');
    }
}