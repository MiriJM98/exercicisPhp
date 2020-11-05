<html>

<head>
    <title>Validació d'un NIF</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="POST" action="nif.php">
        <h3>Validació d'un NIF</h3>
        <label for="nif">NIF:</label>
        <input type="text" name="nif">
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>

</html>

<?php
$nif = $_POST['nif'];
include_once "funcions.php";
validaNif($nif);
?>