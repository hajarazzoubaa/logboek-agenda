<?php
class Categorie{
  private $_naam = "";
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een naam 
mee te geven als hij/zij deze klasse wil aanroepen.*/
  public function __construct($naam){
    $this -> _naam = $naam;
  }
}
?>