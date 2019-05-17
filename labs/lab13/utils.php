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

function isUser($mail,$pass)
{
    $conn = connect();
    $result = false;
    $query = "Select id from Usuario where correo='$mail' and apaterno='$pass'";
    $result = $conn->query($query);
    $fila = $result->fetch_array(MYSQLI_ASSOC);
    if ($fila['id']!="") $result=true;
    close($conn);
    return $result;
}

?>