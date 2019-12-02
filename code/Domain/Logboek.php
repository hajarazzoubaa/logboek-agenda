<?php

require_once(__DIR__ . "/Categorie/Categorie.php");
require_once(__DIR__ . "/Datum/Datum.php");

class Logboek{
  private $_naam = array();
  private $_datum = Datum;
  private $_tijd = Tijd;
  private $_categorie = Categorie;
  private $_activiteiten = array();
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een naam, datum, tijd en categorie
mee te geven als hij/zij deze klasse wil aanroepen.*/
  function __construct($naam, $datum, $tijd, $categorie){
    $this ->_naam = $naam;
    $this ->_datum = $datum;
    $this ->_tijd = $tijd;
    $this ->_categorie = $categorie;
  }
  
/*Voegt een activiteit toe, vult de array activiteiten aan*/
  function ActiviteitToevoegen(){
    $Activiteit1 = new Logboek($naam, $datum, $tijd, $categorie);
    $this->_activiteiten[] = $Activiteit1;
  }
  
/*verwijdert een activiteit, verwijder een waarde uit de array activiteiten*/
  function ActiviteitVerwijderen(){
    $_activiteiten.remove($Activiteit1);
  }
}
?>