<?php

namespace app\controllers;

use app\helpers\Helper;
use app\models\AddPlantForm;
use app\models\PlantForm;
use app\models\Plant;
use app\models\PlantType;
use app\models\WindowType;
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

   public function actionAddPlant()
   {
      $model             = new PlantForm();
      $this->view->title = 'Добавление растения';

      /* If request data*/
      if ($model->load(\Yii::$app->request->post())) {
         if (\Yii::$app->request->isPjax) {
            $newPlant = new Plant();

            $newPlant->name         = '123';
            $newPlant->plant_type    = 1;
            $newPlant->window_type   = 1;
            $newPlant->requirements = '1123123';

            if ($newPlant->save()) {
               \Yii::$app->session->setFlash('success', 'Данные добавлены (Ajax)');
               $model = new PlantForm();
            }
            else {
               \Yii::$app->session->setFlash('error', 'Ошибка при добалении данных!');
            }
         }
         else {
            \Yii::$app->session->setFlash('success', 'Данные добавлены');
            return $this->refresh();
         }
      }

      /* Getting data */
      $plantTypes  = Helper::makeSelectedList(PlantType::find()->asArray()->all());
      $windowTypes = Helper::makeSelectedList(WindowType::find()->asArray()->all());


      return $this->render('plantForm', compact('model', 'plantTypes', 'windowTypes'));
   }

   public function actionEditPlant(int $id)
   {
      $model             = new PlantForm();
      $this->view->title = 'Редактирование растения';

      /* If request data*/
      if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
         if (\Yii::$app->request->isPjax) {
            \Yii::$app->session->setFlash('success', 'Данные изменены (Ajax)');
            $model = new PlantForm();
         }
         else {
            \Yii::$app->session->setFlash('success', 'Данные изменены');
            return $this->refresh();
         }
      }

      /* Getting data */
      $plantInfo   = Plant::find()->where('id=:id ', [':id' => $id])->asArray()->one();
      $plantTypes  = Helper::makeSelectedList(PlantType::find()->asArray()->all());
      $windowTypes = Helper::makeSelectedList(WindowType::find()->asArray()->all());

      /* Set current plant's info as default values to fields */
      $model->name         = $plantInfo['name'];
      $model->plantType    = $plantInfo['plant_type'];
      $model->windowType   = $plantInfo['window_type'];
      $model->requirements = $plantInfo['requirements'];

      return $this->render('plantForm', compact('model', 'plantTypes', 'windowTypes'));
   }

   public function actionView()
   {
      $model = new Plant();
      return $this->render('editPlant', compact('model'));
   }

}