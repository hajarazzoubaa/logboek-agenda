<?php
require_once(__DIR__ . "/Categorie.php");

class Taak extends Categorie{
  private $_taken = array();
  private $_taak = "";
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een taak
mee te geven als hij/zij deze klasse wil aanroepen.*/
  public function __construct($taak){
    $this -> _taak = $taak;
  }
  
/*Voegt een taak toe, vult de array taken aan*/
  public function TaakToevoegen(){
    $taak1 = new Taak($taak);
    $this->_taken[] = $taak1;
  }
  
/*verwijdert een taak, verwijder een waarde uit de array taken*/
  public function TaakVerwijderen(){
    $_taken.remove($taak1);
  }
}
?>