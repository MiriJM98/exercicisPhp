<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $funcio = $_GET;
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $funcio = $_POST;
}
$comptador = 0;
if (isset($funcio["increment"])) {
    $comptador = $funcio["comptador"] + 1;
} else if (isset($funcio["esborrar"])) {
    $comptador = 0;
}
?>

<html>

<head>
    <title>Mantenint l'estat</title>
</head>

<body>

    <form method="get" action="formulari3.php">
        <input type="hidden" name="comptador" value="<?= $comptador ?>">
        <button type="submit" name="increment">Incrementa 1 al comptador</button>
        <button type="submit" name="esborrar">Posa el comptador a 0</button>
        <p>Comptador = <?= $comptador ?></p>
    </form>
</body>

</html>