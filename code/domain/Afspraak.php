<?php

require_once(__DIR__ . "/Actviteit.php");

class Afspraak extends Activiteit{

  public function __construct($StartDateTime, $EndDateTime){
    $this -> _StartDateTime = $StartDateTime;
    $this -> _EndDateTime = $EndDateTime;
  }
  
  private function SetStartDate($d, $m, $y){
    $this-> _d = $d;
    $this-> _m = $m;
    $this-> _y = $y;
  }
  
  private function SetStartTime($h, $m){
    $this-> _h = $h;
    $this-> _m = $m;
  }
  private function SetEndTime($h, $m){
    $this-> _h = $h;
    $this-> _m = $m;
  }
}
?>