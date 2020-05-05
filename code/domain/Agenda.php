<?php

require_once(__DIR__ . "/Gebruiker.php");
require_once(__DIR__ . "/Evenemnt.php");

class Agenda extends Gebruiker, extends Evenement{
  private $_gebruiker = Gebruiker;
  private $_weergaven = "";
  private $_feestdagen = Evenement[];


  public function Login($email, $wachtwoord){

  }
  
  public function Loguit(){
    
  }
}
?>