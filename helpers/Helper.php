<?php

namespace app\helpers;

class Helper
{
   public static function makeSelectedList(array $array, string $idField = 'id', string $nameField = 'name')
   {
      $resultList = [];
      foreach ($array as $item) {
         if (is_array($item)) {
            $resultList[$item[$idField]] = $item[$nameField];
         }
         else {
            echo "Error! element in item is not array";
            exit();
         }
      }
      return $resultList;
   }
}