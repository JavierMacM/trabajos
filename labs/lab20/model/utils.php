<?php
function connect()
{
    $servername = "localhost";
    $username = "a01703446";
    $password = "";
    $dbname = "mi_sistema";
    $SQLconnection = mysqli_connect($servername, $username, $password, $dbname);
    if($SQLconnection == null) die("Connection failed: ".mysqli_connect_error());
    $SQLconnection->set_charset = " ";
    return $SQLconnection;
}

function close ($conn)
{
    mysqli_close($conn);
}

function getHobbies(){
    $conn = connect();
    $result = "";
    $query = "CALL selectHobbies()";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function registerUser($name,$lastname,$email,$hobbie){
    $conn = connect();
    $result = "";
    $query = "INSERT INTO Usuario (nombre, apaterno,correo,idhobbie) values (?,?,?,?)";
    
    if(!($statement = $conn->prepare($query))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    
    $name = $conn->real_escape_string($name);
    $lastname = $conn->real_escape_string($lastname);
    $email = $conn->real_escape_string($email);
    $hobbie = $conn->real_escape_string($hobbie);
    
    if(!($statement->bind_param("ssss", $name, $lastname, $email, $hobbie))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    }
    else $result = $name." ".$lastname;
    
    $statement->close();
    close($conn);
    return $result;
}

?>