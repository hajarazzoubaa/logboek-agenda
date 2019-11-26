<?php
class Feestdag extends Categorie{
  private $_feestdag = "";
  private $_feestdagen = array[];
  
  public function __construct($notitie){
    $this -> _feestdag = $feestdag;
  }
  public function FeestdagenToevoegen(){
    $feestdag1 = new Feestdag($notitie);
    $this->_feestdagen[] = $feestdag1;
  }
  public function FeestdagenVerwijderen(){
    $_feestdagen.remove($feestdag1);
  }
}
?>