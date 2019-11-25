<?php
class Logboek{
  private $_naam = array[];
  private $_datum = Datum();
  private $_tijd = Tijd();
  private $_categorie = Categorie();
  
  
  function __construct($naam, $datum, $tijd, $categorie){
    $this ->_naam = $naam;
    $this ->_datum = $datum;
    $this ->_tijd = $tijd;
    $this ->_categorie = $categorie;
  }
  
  function ActiviteitToevoegen(){
    
  }
  
  function ActiviteitVerwijderen(){
    
  }
}
?>