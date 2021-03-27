<?php


namespace app\controllers;


use yii\web\Controller;

class UserController extends Controller
{
    public $layout = 'user';

    public function actionIndex()
    {
        return $this->render('allPlants');
    }
}