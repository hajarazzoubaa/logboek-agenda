<?php
class Taak extends Categorie{
  private $_notitie = "";
  private $_taken = array[];
  
  public function __construct($notitie){
    $this -> _notitie = $notitie;
  }
  public function TaakToevoegen(){
    $taak1 = new Taak($notitie);
    $this->_taken[] = $taak1;
  }
  public function TaakVerwijderen(){
    array.remove($taak1);
  }
}
?>