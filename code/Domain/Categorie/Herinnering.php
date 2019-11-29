<?php
require_once(__DIR__ . "/Categorie.php");

class Herinnering extends Categorie{
  private $_herinnering = "";
  private $_herinneringen = array();
  
  public function __construct($herinnering){
    $this -> _herinnering = $herinnering;
  }
  public function HerinneringenToevoegen(){
    $herinering1 = new Herninnering($herinnering);
    $this->_herinnering[] = $herinering1;
  }
  public function HerinneringenVerwijderen(){
    $_herinnering.remove($herinering1);
  }
}
?>