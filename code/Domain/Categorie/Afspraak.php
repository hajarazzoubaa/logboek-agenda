<?php
require_once(__DIR__ . "/Categorie.php");

class Afspraak extends Categorie{
  private $_locatie = "";
  private $_tijdstip = "";
  private $_persoon = "";
  private $_afspraken = array();
  
  public function __construct($locatie, $tijd, $persoon){
    $this -> _locatie = $locatie;
    $this -> _tijdstip = $tijd;
    $this -> _persoon = $persoon;
  }
  public function AfspraakToevoegen(){
    $afspraak1 = new Afspraak($locatie, $tijd, $persoon);
		$this->_afspraken[] = $afspraak1;
  }
  public function AfspraakVerwijderen(){
    $_afspraken.remove($afspraak1);
  }
}
?>