<?php

require_once(__DIR__ . "/Actviteit.php");

class Taak extends Activiteit{

  public function __construct($date, $datetime){
    $this -> _date = $date;
    $this -> _datetime = $datetime;
  }
  private function SetEndDateTime($d, $m, $y){
    $this-> _h = $h;
    $this-> _m = $m;
    $this-> _y = $y;
  }
  
  private function SetEndTime($h, $m){
    $this-> _h = $h;
    $this-> _m = $m;
  }
}
?>