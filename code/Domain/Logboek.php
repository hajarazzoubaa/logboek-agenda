<?php

require_once(__DIR__ . "/Categorie/Categorie.php");
require_once(__DIR__ . "/Datum/Datum.php");

class Logboek{
  private $_naam = array();
  private $_datum = Datum;
  private $_tijd = Tijd;
  private $_categorie = Categorie;
  private $_activiteiten = array();
  
  function __construct($naam, $datum, $tijd, $categorie){
    $this ->_naam = $naam;
    $this ->_datum = $datum;
    $this ->_tijd = $tijd;
    $this ->_categorie = $categorie;
  }
  
  function ActiviteitToevoegen(){
    $Activiteit1 = new Logboek($naam, $datum, $tijd, $categorie);
    $this->_activiteiten[] = $Activiteit1;
  }
  
  function ActiviteitVerwijderen(){
    $_activiteiten.remove($Activiteit1);
  }
}
?>