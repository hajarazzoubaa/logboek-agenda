<?php
class Feestdag extends Categorie{
  private $_notitie = "";
  private $_feestdagen = array[];
  
  public function __construct($notitie){
    $this -> _notitie = $notitie;
  }
  public function FeestdagenToevoegen(){
    $feestdag1 = new Feestdag($notitie);
    $this->_feestdagen[] = $feestdag1;
  }
  public function FeestdagenVerwijderen(){
    array.remove($feestdag1);
  }
}
?>