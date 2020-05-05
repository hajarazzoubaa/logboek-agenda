<?php

class Activiteit{
  private $_start = DateTime;
  private $_stop = DateTime;
  private $_ID = 0;
  private $_notitie = "";
  private $_herinnering = DateTime[];


  public function __construct($ID, $StartDateTime, $StopDateTime){
    $this -> _ID = $ID;
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
  private function SetStartTime($h, $m){
    $this-> _h = $h;
    $this-> _m = $m;
  }
  private function SetStopTime($h, $m){
    $this-> _h = $h;
    $this-> _m = $m;
  }
  public function SetNote($notitie){
    $this-> _notitie = $notitie;
  }
}
?>