<?php
class Jaar extends Datum{
  private $_jaar = 0;
  
  function __construct($jaar){
    $this ->_jaar = $jaar;
  }
}
?>