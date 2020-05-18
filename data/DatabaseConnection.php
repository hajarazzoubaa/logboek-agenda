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
    function QueryData()
    //SQl query die alle slideshows opvraagt
      
      
    //SQL query die alle slides per slideshow opvraagt
    // SQl query die alle items per slide opvraagt
    
  }
}

?>