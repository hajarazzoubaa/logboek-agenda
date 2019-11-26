<?php
class Datum{
    
  private $_dag = 0;
  private $_maand = 0;
  private $_jaar = 0;
  
  function __construct($dag, $maand, $jaar){
    $this ->_dag = $dag;
    $this ->_maand = $maand;
    $this ->_jaar = $jaar;
  }
  if($dag > 31){
    $dag = 31;
  }
  if($maand > 12){
    $maand = 12;
  }
}
?>