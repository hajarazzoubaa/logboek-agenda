<?php
class Jaar{
  private $_jaar = 0;
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een jaar
mee te geven als hij/zij deze klasse wil aanroepen.*/
  function __construct($jaar){
    $this ->_jaar = $jaar;
  }
}
?>