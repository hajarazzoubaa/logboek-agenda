<?php

require_once(__DIR__ . "/Vakantie.php");

class Evenement extends Vakantie{

  public function __construct($StartDate, $EndDate){
    $this -> _StartDate = $StartDate;
    $this -> _EndDate = $EndDate;
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