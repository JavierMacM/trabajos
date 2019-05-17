<?php
function connect()
{
    $servername = "localhost";
    $username = "a01703446";
    $password = "";
    $dbname = "examendaw";
    $SQLconnection = mysqli_connect($servername, $username, $password, $dbname);
    if($SQLconnection == null) die("Connection failed: ".mysqli_connect_error());
    $SQLconnection->set_charset = " ";
    return $SQLconnection;
}

function close ($conn)
{
    mysqli_close($conn);
}

function insertAccident($lugar, $tipo)
{
    $conn = connect();
    
    $query = "CALL insertAccident(?,?)";
    
    if(!($statement = $conn->prepare($query))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $lugar = $conn->real_escape_string($lugar);
    $tipo = $conn->real_escape_string($tipo);
    
    if(!($statement->bind_param("ss",$lugar,$tipo))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    }
    
    $statement->close();
    close($conn);
}

function getAccidents()
{
    $conn = connect();
    $result = "";
    $query = "CALL selectAllAccidents()";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function getPlaces()
{
    $conn = connect();
    $result = "";
    $query = "SELECT lugar FROM LugarIncidente";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function getAccidentType()
{
    $conn = connect();
    $result = "";
    $query = "SELECT tipo FROM TipoAccidente";
    $result = $conn->query($query);
    close($conn);
    return $result;
}
    
?>