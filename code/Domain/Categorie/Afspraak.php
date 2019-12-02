<?php
require_once(__DIR__ . "/Categorie.php");

class Afspraak extends Categorie{
  private $_locatie = "";
  private $_tijdstip = "";
  private $_persoon = "";
  private $_afspraken = array();
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een locatie, 
tijd en een persoon mee tegeven als hij deze klasse wil aanroepen.*/
  public function __construct($locatie, $tijd, $persoon){
    $this -> _locatie = $locatie;
    $this -> _tijdstip = $tijd;
    $this -> _persoon = $persoon;
  }
/*Voegt een afspraak toe, vult de array afspraken aan*/
  public function AfspraakToevoegen(){
    $afspraak1 = new Afspraak($locatie, $tijd, $persoon);
		$this->_afspraken[] = $afspraak1;
  }
/*verwijdert een afspraak, verwijder een waarde uit de array afspraken*/
  public function AfspraakVerwijderen(){
    $_afspraken.remove($afspraak1);
  }
}
?>