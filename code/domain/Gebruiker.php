<?php

require_once(__DIR__ . "/Activiteit.php");

class Gebruiker extends Activiteit{
  
  private $_email = "";
  private $_activiteit = Activiteit[];
  
  public function VoegTaakToe($dateTime, $onderw, $notitie){
    $this -> _dateTime = $dateTime;
    $this -> _onderw = $onderw;
    $this -> _notitie = $notitie;    
  }
  
  public function VoegVakantieToe($StartDate, $EndDate, $onderw, $notite){
    $this -> _StartDate = $StartDate;
    $this -> _EndDate = $EndDate;
    $this -> _onderw = $onderw;
    $this -> _notite = $notite;
  }
  
  public function VoegEvenementToe($StartDate, $EndDate, $onderw, $notite){
    $this -> _StartDate = $StartDate;
    $this -> _EndDate = $EndDate;
    $this -> _onderw = $onderw;
    $this -> _notite = $notite;
  }
  
  public function VoegAfspraakToe($StartDate, $EndDate, $onderw, $notite){
    $this -> _StartDate = $StartDate;
    $this -> _EndDate = $EndDate;
    $this -> _onderw = $onderw;
    $this -> _notite = $notite;
  }
  
  public function VerwijderTaak($ID){
    $this -> _ID = $ID;

  }
  
  public function VerwijderVakantie($ID){
    $this -> _ID = $ID;
    
    
  }
  
  public function VerwijderEVenement($ID){
    $this -> _ID = $ID;
    
    
  }
  
  public function VerwijderAFspraak($ID){
    $this -> _ID = $ID;
    
    
  }
  
  public function BewerkTaak($ID, $DateTime, $onderw, $notite){
    $this -> _ID = $ID;
    $this -> _DateTime = $DateTime;
    $this -> _onderw = $onderw;
    $this -> _notite = $notite;

  }
  
  public function BewerkVakantie($ID, $DateTime, $onderw, $notite){
    $this -> _ID = $ID;
    $this -> _DateTime = $DateTime;
    $this -> _onderw = $onderw;
    $this -> _notite = $notite;

  }
  
  public function BewerkEvenement($ID, $DateTime, $onderw, $notite){
    $this -> _ID = $ID;
    $this -> _DateTime = $DateTime;
    $this -> _onderw = $onderw;
    $this -> _notite = $notite;

  }
  
  public function BewerkAfspraak($ID, $DateTime, $onderw, $notite){
    $this -> _ID = $ID;
    $this -> _DateTime = $DateTime;
    $this -> _onderw = $onderw;
    $this -> _notite = $notite;

  }
    
}
?>
