<?php

require_once(__DIR__ . "/data/DatabaseConnection.php");

class Application {
  private $_data = null;
  private $_dagen = array();
  
  public function __construct(){
    $this->_data = new DatabaseConnection();
  }
  
  public function Login($gebruiker, $wachtwoord){
    if (isset($_SESSION["gebruiker"]) == true){
      $gebruiker = $_SESSION["gebruiker"];
    }
    if (this -> _data->UserExists($gebruiker, $wachtwoord) == true){
      $_SESSION["gebruiker"] = $gebruiker;
      
      $this->_dagen = $this->_data->QueryDag($gebruiker);
    }
    else{
      return false;
    }
  }
  
  private function CreateDag($id, $soort, $onderwerp){
    $dag = new Dag($id, $soort, $onderwerp);
  }
}