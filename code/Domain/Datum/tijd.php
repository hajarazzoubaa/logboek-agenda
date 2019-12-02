<?php
class Tijd{
  private $_uur = 0;
  private $_minuten = 0;
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een uur en minuten
mee te geven als hij/zij deze klasse wil aanroepen.*/
  function __construct($uur, $minuten){
    $this ->_uur = $uur;
    $this ->_minuten = $minuten;
      
    if($uur > 24){
      $uur = 24;
    }
    if($minuten > 59){
      $minuten = 59;
    }
  }

}
?>