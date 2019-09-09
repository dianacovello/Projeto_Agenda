<?php
class TrataDataFinal {
  static private $dataFinal;
  static public function dataDB($dataFinal){
    self::$dataFinal = explode('/',$dataFinal);
    krsort(self::$dataFinal);
    self::$dataFinal = implode('-', self::$dataFinal);
    return self::$dataFinal;
  }
  
}
