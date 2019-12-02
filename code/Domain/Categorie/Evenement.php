<?php
require_once(__DIR__ . "/Categorie.php");

class Evenement extends Categorie{
  private $_locatie = "";
  private $_evenementen = array();
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een locatie
mee te geven als hij/zij deze klasse wil aanroepen.*/
  public function __construct($locatie){
    $this -> _locatie = $locatie;
  }
/*Voegt een evenement toe, vult de array evenementen aan*/
  public function EvenementToevoegen(){
    $evenement1 = new Evenement($locatie);
    $this->_evenementen[] = $evenement1;
  }
/*verwijdert een evenement, verwijder een waarde uit de array evenementen*/
  public function EvenementVerwijderen(){
    $_evenementen.remove($evenement1);
  }
  
}
?>