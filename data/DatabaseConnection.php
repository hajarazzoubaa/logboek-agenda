<?php
class DatabaseConnection {
  private $_host = "";
  private $_username = "";
  private $_password = "";
  private $_database = "";

  private $_connection = null;

  function __construct(){
    $this->_host = "www.piustien.net";
    $this-> _username= "bin10";
    $this-> _password = "JnZp338x3mTKmwc";
    $this-> _database = "bin10";

    $this ->_connection = new mysqli($this->_host, $this-> _username, $this-> _password, $this-> _databse);

    if($this-> _connection == false){
    die("connection failed" . myspli_connect_error());

    }
  }
  function UserExists($$gebruiker, $wachtwoord){
    //query die nakijkt of de gebruiker bestaat
    $query = "SELECT * FROM Gebruiker 
              WHERE Gebruiker.email = $gebruiker
              AND Gebruiker.wachtwoord = $wachtwoord;";
    if($gebruiker -> num_rows > 0){
      return true;
    }
    else{
      return false;
    }
  }
  function QueryDag($eigenaar){
    //query die alle activiteiten van die dag opvraagt
    $query = "SELECT DISTINCT Activiteit.Onderwerp, Activiteit.Soort 
              FROM Activiteit 
              WHERE Activiteit.GebruikerID = 1 
              AND Activiteit.Start BETWEEN 2020-01-20 00:00:00 AND 2020-01-20 23:59:59;";
    $dagResult = $this ->_connection->query($query);
    
    $dagen = array();
    $onderwerpen = array();
    $soorten = array();
    }

}

?>