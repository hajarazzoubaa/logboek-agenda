<?php
require_once(__DIR__ . "/Categorie.php");

class Feestdag extends Categorie{
  private $_feestdag = "";
  private $_feestdagen = array();
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een notitie
mee te geven als hij/zij deze klasse wil aanroepen.*/
  public function __construct($notitie){
    $this -> _feestdag = $feestdag;
  }
  
/*Voegt een feestdag toe, vult de array feestdagen aan*/
  public function FeestdagenToevoegen(){
    $feestdag1 = new Feestdag($notitie);
    $this->_feestdagen[] = $feestdag1;
  }
  
/*verwijdert een feestdag, verwijder een waarde uit de array feestdagen*/
  public function FeestdagenVerwijderen(){
    $_feestdagen.remove($feestdag1);
  }
}
?>