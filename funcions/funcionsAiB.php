<html>

<head>
    <title>Funcions a i b</title>
</head>

<body>
    <h3>Introdueixi els valors de la longitud i l'amplada del seu rectangle.</h3>
    <form method="POST" action="funcionsAiB.php">
    <label for="altura">Altura:</label>
    <input type="text" name="altura">
    <label for="amplada">Amplada:</label>
    <input type="text" name="amplada">
    <button type="reset" name="borrar">Borrar</button>
    <button type="submit" name="calcular">Calcular</button>
    </form>
</body>

</html>

<?php
$alt = $_POST['altura'];
$ampla = $_POST['amplada'];
include_once "funcions.php";
areaPerimetreRectangle($alt, $ampla);
?>