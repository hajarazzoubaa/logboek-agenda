<?php
require_once(__DIR__ . "/Categorie.php");

class Herinnering extends Categorie{
  private $_herinnering = "";
  private $_herinneringen = array();
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een herinnering
mee te geven als hij/zij deze klasse wil aanroepen.*/
  public function __construct($herinnering){
    $this -> _herinnering = $herinnering;
  }
  
/*Voegt een herinnering toe, vult de array herinneringen aan*/
  public function HerinneringenToevoegen(){
    $herinering1 = new Herninnering($herinnering);
    $this->_herinnering[] = $herinering1;
  }
  
 /*verwijdert een herinnering, verwijder een waarde uit de array herinneringen*/
  public function HerinneringenVerwijderen(){
    $_herinnering.remove($herinering1);
  }
}
?>