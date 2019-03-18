<?php
    function connectDB()
    {
        $servernaame = "localhost";
        $username = "javiermacm";
        $password = "";
        $dbname = "dbname";

        $con = mysqli_connect($servername, $username, $password, $dbname);
        //Check connection
        if(!$con)
          die("Connection failed: " . mysqli_connect_error());

    return $con;
    }

    function closeDB($conn)
    {
        mysqli_close($conn);
    }

    function getFruits()
    {
      $conn = connectDb();
      $sql = "SELECT id, name, units, quantity, price, country FROM Fruit";
      $result = mysqli_query($conn, $sql);
      closeDb($conn);
      return $result;
    }

    function getFruitsByName($fruitName)
    {
      $conn = connectDb();
      $sql = "SELECT id, name, units, quantity, price, country FROM Fruit WHERE name <= '".$fruitName."'";
      $result = mysqli_query($conn, $sql);
      closeDb($conn);
      return $result;
    }

    function getFruitsByUnits($fruitUnits)
    {
        $conn = connectDB();
        $sql = "SELECT name, units, quantity, price, country FROM Fruit WHERE units <= '".$fruitUnits."'";
        $result = mysql_query($conn, $sql);
        closeDB($conn);
        return $result;
    }
?>
