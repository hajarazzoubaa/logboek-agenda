<?php
class Dag{
  private $_dag = 0;
  
/*deze functie zorgt ervoor dat de gebruiker verplicht wordt om een dag
mee te geven als hij/zij deze klasse wil aanroepen.*/
  function __construct($dag){
    $this ->_dag = $dag;
  }
}
?>