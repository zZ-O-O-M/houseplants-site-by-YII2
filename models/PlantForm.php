<?php


namespace app\models;


use yii\base\Model;

class PlantForm extends Model
{
   public $name;
   public $plantType;
   public $windowType;
   public $requirements;

   public function rules()
   {
      return [
         [
            ['name', 'plantType', 'windowType', 'requirements'], 'required',
         ],
      ];
   }

   public function attributeLabels()
   {
      return [
         'name'         => 'Наименование',
         'plantType'    => 'Тип растения',
         'windowType'   => 'Тип окна',
         'requirements' => 'Требования по уходу'
      ];
   }
}