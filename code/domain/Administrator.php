<?php

require_once(__DIR__ . "/Gebruiker.php");

class Adminisrator extends Gebruiker{
  
  public function VoegFeestdagenToe($StartDate, $EndDate){
    $this -> _StartDate = $StartDate;
    $this -> _EndDate = $EndDate;

  }


}
?>