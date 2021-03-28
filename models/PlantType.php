<?php


namespace app\models;


use yii\db\ActiveRecord;

class PlantType extends ActiveRecord
{

   public static function tableName()
   {
      return '{{plant_type}}';
   }

}