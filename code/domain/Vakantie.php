<?php

require_once(__DIR__ . "/Actviteit.php");

class Vakantie extends Activiteit{

  public function __construct($StartDateTime, $StopDateTime){
    $this -> _StartDateTime = $StartDateTime;
    $this -> _StopDateTime = $StopDateTime;
  }
  
  private function SetStartDate($d, $m, $y){
    $this-> _d = $d;
    $this-> _m = $m;
    $this-> _y = $y;
  }
  
  private function SetEndDate($d, $m, $y){
    $this-> _d = $d;
    $this-> _m = $m;
    $this-> _y = $y;
  }
}
?>