<?php

namespace app\controllers;

use app\helpers\Helper;
use app\models\EditPlantForm;
use app\models\Plant;
use app\models\PlantType;
use yii\web\Controller;
use yii\web\Response;
use yii\widgets\ActiveForm;

class AdminController extends Controller
{
   public $layout = 'admin';

   public function actionIndex()
   {
      return $this->render('allPlants');
   }

   public function actionPlant($id)
   {

   }

   public function actionEditPlant()
   {
      $model = new EditPlantForm();
      $plantTypes = Helper::getSelectList(PlantType::find()->asArray()->all());

      if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
         if (\Yii::$app->request->isPjax) {
            \Yii::$app->session->setFlash('success', 'Данные приняты by Pjax');
            $model = new EditPlantForm();
         } else {
            \Yii::$app->session->setFlash('success', 'Данные приняты');
            return $this->refresh();
         }
      }

      return $this->render('editPlant', compact('model', 'plantTypes'));
   }

   public function actionView()
   {
      $model = new Plant();
      return $this->render('editPlant', compact('model'));
   }

}