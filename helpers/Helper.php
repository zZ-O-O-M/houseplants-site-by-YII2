<?php

namespace app\helpers;

class Helper
{
   public static function getSelectList(array $array, string $idField = 'id', string $nameField = 'name')
   {
      $resultList = [];
      foreach ($array as $item) {
         if (is_array($item))
            $resultList[$item[$idField]] = $item[$nameField];
      }
      return $resultList;
   }
}