<?php
class Taak extends Categorie{
  private $_taken = array[];
  private $_taak = "";
  
  public function __construct($taak){
    $this -> _taak = $taak;
  }
  public function TaakToevoegen(){
    $taak1 = new Taak($taak);
    $this->_taken[] = $taak1;
  }
  public function TaakVerwijderen(){
    $_taken.remove($taak1);
  }
}
?>