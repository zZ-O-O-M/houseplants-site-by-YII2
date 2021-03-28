<?php


namespace app\models;


use yii\base\Model;

class EditPlantForm extends Model
{
   public $name;
   public $plantType;
   public $windowType;
   public $description;

   public function rules()
   {
      return [
         [
            ['name', 'plantType', 'windowType', 'description'], 'required',
         ],
      ];
   }

   public function attributeLabels()
   {
      return [
         'name'        => 'Наименование',
         'plantType'   => 'Тип растения',
         'windowType'  => 'Тип окна',
         'description' => 'Описание по уходу'
      ];
   }
}