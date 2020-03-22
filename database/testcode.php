<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
  queries in php
<?php
    $servername = "localhost";
    $username = "bin10";
    $password = "JnZp338x3mTKmwc";
    $dbname = "bin10";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    echo "<br>";
    if($conn == false){
      die( "connectie niet gelukt");
    }

     $query = "SELECT DISTINCT * 
            FROM Persoon
            INNER JOIN Administrator
            ON Persoon.email = Administrator.email;";


    $result = $conn->query($query);

    $numrows = mysqli_num_rows($result);

    for($i = 0;$i < $numrows; ++$i){
      $record = $result->fetch_assoc();
      echo $record["email"] . " " . $record["wachtwoord"];
      echo "<br>";
    }

    $conn->close();
?>
  </body>
</html>