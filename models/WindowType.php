<?php


namespace app\models;


use yii\db\ActiveRecord;

class WindowType extends ActiveRecord
{
   public static function tableName()
   {
      return '{{window_type}}';
   }
}