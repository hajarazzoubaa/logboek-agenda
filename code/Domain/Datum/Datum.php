<?php
class Datum extends Datum{
  private $_dag = ;
  private $_maand =;
  private $_jaar = ;
  
  function __construct($dag, $maand, $jaar){
    $this ->_dag = $dag;
    $this ->_maand = $maand;
    $this ->_jaar = $jaar;
  }
}
?>