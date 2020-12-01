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

echo "<table>";
echo "<tr><th>Id Usuari</th><th>Nom</th><th>Email</th><th>Password</th></tr>";
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_usuari"] . "</td>" . "<td>" . $row["nom"] . "</td>" . "<td>" . $row["email"] . "</td>" . "<td>" . $row["password"] . "</td>";
    }
    $result->free();
}
echo "</table>";
