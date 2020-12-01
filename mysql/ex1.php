<?php
$mysqli = new mysqli();
$mysqli->connect("127.0.0.1", "root", "root", "bd_establiments");
if (!$mysqli) {
    echo "Connection error: " . mysqli_connect_error();
}
$con = mysqli_connect("127.0.0.1", "root", "root", "bd_establiments");
if (mysqli_connect_errno()) {
    printf("Error: %s\n", mysqli_connect_error());
    exit();
}

$con->set_charset("utf8");

//Executar sql
$sql = "select id_usuari,nom,email,password ";
$sql .= "from usuaris";
$sentencia = $con->query($sql) or die("Error SQL:  $sql");

if ($result = $mysqli->query($sql)) {
while ($row = $result->fetch_assoc()) {
    echo $row["id_usuari"].'-'. $row["nom"]."-". $row["email"].'-'. $row["password"]. "<br/>"; }
    $result->free();
}