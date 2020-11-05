<html>

<head>
    <title>Validació d'una data</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="POST" action="data.php">
        <h3>Validació d'una data en format String</h3>
        <label for="data">Data:</label>
        <input type="text" name="data">
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>

</html>

<?php
$data = $_POST['data'];
include_once "funcions.php";
validaData($data);
?>