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

function retrieveLogin($username, $password)
{
    $conn = connect();
    $query = "SELECT idrol FROM usuarioRol ur, usuarios u WHERE ur.idusuario = u.idusuario ";
    $query.= "AND u.idusuario = ? and contrasena = ?";
    $answer = 0;
    if (!($statement = $conn->prepare($query)))
    {
        echo "<span style='color:red;'>";
        die("Preparation failed: ".$conn->error);
        echo "</span>";
    }
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    if(!($statement->bind_param("ss", $username, $password)))
    {
        echo "<span style='color:red;'>";
        die("Parameter vinculation failed: ".$conn->error);
        echo "</span>";
    }
    if(!($statement->execute()))
    {
        echo "<span style='color:red;'>";
        die("Execution failed: ".$conn->error);
        echo "</span>";
    }
    else
    {
        $answer= "";
        $statement->bind_result($answer['idrol']);
        $statement->fetch();
        if ($answer['idrol'] == "") $answer = 0;
    }
    $statement->close();
    close($conn);
    return $answer;
}

function insertDinosaur($dinosaurio)
{
    $conn = connect();
    
    $sql = "INSERT INTO Dinosaurio(nombre) VALUES (?)";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    $dinosaurio = $conn->real_escape_string($dinosaurio);
    if(!($statement->bind_param("s",$dinosaurio))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}
    
?>