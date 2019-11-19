<?php
class Maand extends Datum{
  private $_maandNaam = "";
  private $_maandGetal = 0;
  
  function __construct($naam, $getal){
    $this ->_maandNaam = $naam;
    $this ->_maandGetal = $getal;
  }
}
?>