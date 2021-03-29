<?php


namespace app\models;


use yii\db\ActiveRecord;

class Plant extends ActiveRecord
{
   public function rules()
   {
      return [
         [
            [
               'name',
               'plant_type',
               'window_type',
               'requirements'
            ],
            'required'
         ]
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