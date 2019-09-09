<?php
class TrataDataInicio {
  static private $dataInicio;
  static public function dataDB($dataInicio){
    self::$dataInicio = explode('/',$dataInicio);
    krsort(self::$dataInicio);
    self::$dataInicio = implode('-', self::$dataInicio);
    return self::$dataInicio;
  }
  
}
