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

function insertAccidente($lugar, $tipo)
{
    $conn = connect();
    
    $sql = "INSERT INTO Accidente(lugar, tipo) VALUES (?,?)";
    
    $result = false;
    
    if(!($statement = $conn->prepare($sql))){
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
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function select_accidentes()
{
    $conn = connect();
    $result = "";
    $query = "SELECT L.lugar, T.tipo, A.fecha 
    FROM Accidente A, LugarIncidente L, TipoAccidente T 
    WHERE A.lugar=L.id and A.tipo=T.id
    ORDER BY A.fecha DESC";
    $result = $conn->query($query);
    close($conn);
    return $result;
}
    
?>