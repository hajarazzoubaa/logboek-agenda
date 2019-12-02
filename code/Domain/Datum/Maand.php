<?php
class Maand{
  private $_maand = 0;
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een maand
mee te geven als hij/zij deze klasse wil aanroepen.*/
  function __construct($maand){
    $this ->_maand = $maand;
  }
}
?>