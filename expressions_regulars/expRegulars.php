<html>

<head>
    <title>Validació d'un codi amb expressions regulars</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="POST" action="expRegulars.php">
        <h3>Validació d'un codi amb expressions regulars</h3>
        <p>Escriu un codi amb el següent format: LDD-DDDD...DD.LLD</p>
        <p>L és una lletra amb majúscules i D és un dígit.
            La sequència de dígits entre el guió i el punt pot tenir una llongitud entre 3 i 10 dígits.</p>
        <label for="codi">Codi:</label>
        <input type="text" name="codi">
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>

</html>

<?php
$codi = $_POST['codi'];
include_once "funcions.php";
validaCodi($codi);
?>