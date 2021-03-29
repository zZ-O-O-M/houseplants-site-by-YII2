<?php

namespace app\controllers;

use app\helpers\Helper;
use app\models\Plant;
use app\models\PlantType;
use app\models\WindowType;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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

   public function actionAddPlant()
   {
      $plantModel        = new Plant();
      $this->view->title = 'Добавление растения';

      /* If request data*/
      if ($plantModel->load(\Yii::$app->request->post()) && $plantModel->save()) {
         if (\Yii::$app->request->isPjax) {
            \Yii::$app->session->setFlash('success', 'Данные добавлены (Ajax)');
            $plantModel = new Plant();
         }
         else {
            \Yii::$app->session->setFlash('success', 'Данные добавлены');
            return $this->refresh();
         }
      }

      /* Getting data */
      $plantTypes  = Helper::makeSelectedList(PlantType::find()->asArray()->all());
      $windowTypes = Helper::makeSelectedList(WindowType::find()->asArray()->all());


      return $this->render('plantForm', compact('plantModel', 'plantTypes', 'windowTypes'));
   }

   public function actionEditPlant(int $id)
   {
      $this->view->title = 'Редактирование растения';
      $plantModel        = Plant::findOne($id);

      if (!$plantModel) {
         throw new NotFoundHttpException('Plant not found!');
      }

      /* If request data*/
      if ($plantModel->load(\Yii::$app->request->post()) && $plantModel->validate()) {
         if (\Yii::$app->request->isPjax) {
            \Yii::$app->session->setFlash('success', 'Данные изменены (Ajax)');
            $plantModel = new Plant();
         }
         else {
            \Yii::$app->session->setFlash('success', 'Данные изменены');
            return $this->refresh();
         }
      }

      /* Getting data */
      $plantTypes  = Helper::makeSelectedList(PlantType::find()->asArray()->all());
      $windowTypes = Helper::makeSelectedList(WindowType::find()->asArray()->all());

      return $this->render('plantForm', compact('plantModel', 'plantTypes', 'windowTypes'));
   }

   public function actionDelete(int $id)
   {
      $plant = Plant::findOne($id);
      if ($plant) {
         $plant->delete();
      }
      return $this->render('editPlant', compact('model'));
   }

}