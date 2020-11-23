<?php
session_start();
$productes = array(
    "Llet" => array("quantitat" => 0, "preu" => 0.9),
    "Pa" => array("quantitat" => 0, "preu" => 0.35),
    "Macarrons" => array("quantitat" => 0, "preu" => 1.7),
    "Lletuga" => array("quantitat" => 0, "preu" => 0.6),
    "Xocolata" => array("quantitat" => 0, "preu" => 2),
    "Aigua" => array("quantitat" => 0, "preu" => 1.2)
);
if (!isset($_SESSION['productes'])) {
    $_SESSION['productes'] = $productes;
} else {
    $productes = $_SESSION['productes'];
}
?>

<html>

<head>
    <title>Carro compra</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Carro de la compra</h1>
    <form action="compra.php" method="$_POST">
        <table>
            <?php
            foreach ($productes as $nom => $preufinal) {
                $quantitat = $preufinal['quantitat'];
                $preu = $preufinal['preu'];
                echo "<tr><td>$nom</td>";
                echo "<td><input type='numer' name='$nom' id='$nom' value='$quantitat'</td></tr>";
            }
            ?>
        </table>
    </form>
</body>

</html>