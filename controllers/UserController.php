<?php


namespace app\controllers;


use app\models\Plant;
use yii\web\Controller;

class UserController extends Controller
{
   public $layout = 'user';

   public function actionIndex()
   {
      $plantsInfo = Plant::find()->asArray()->all();
      return $this->render('allPlants', compact('plantsInfo'));
   }

   public function actionPlant($id)
   {

   }
}