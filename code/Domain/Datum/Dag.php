<?php
class Dag{
  private $_dagInWeek = "";
  private $_dagInMaand = 0;
  
  function __construct($week, $maand){
    $this ->_dagInWeek = $week;
    $this ->_dagInMaand = $maand;  
  }
}
?>