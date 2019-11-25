<?php
class Afspraak extends Categorie{
  private $_locatie = "";
  private $_tijdstip = "";
  private $_persoon = "";
  
  public function __construct($locatie, $tijd, $persoon){
    $this -> _locatie  $locatie;
    $this -> _tijdstip $tijd;
    $this -> _persoon $persoon;
  }
  public function AfspraakToevoegen(){
    
  }
  public function AfspraakVerwijderen(){
    
  }
}
?>