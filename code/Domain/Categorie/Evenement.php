<?php
require_once(__DIR__ . "/Categorie.php");

class Evenement extends Categorie{
  private $_locatie = "";
  private $_evenementen = array();
  
  public function __construct($locatie){
    $this -> _locatie = $locatie;
  }
  public function EvenementToevoegen(){
    $evenement1 = new Evenement($locatie);
    $this->_evenementen[] = $evenement1;
  }
  public function EvenementVerwijderen(){
    $_evenementen.remove($evenement1);
  }
  
}
?>