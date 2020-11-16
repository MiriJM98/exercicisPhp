<?php
function valida($usuari, $contrasenya)
{
    $authFile = file("pass.txt");
    if (in_array("$usuari:$contrasenya\r\n", $authFile)) {
        $validacioCorrecte = TRUE;
        echo "Validació correcte";
    } else {
        $validacioCorrecte = FALSE;
        echo "Validació incorrecte";
    }
}
if (isset($_POST['enviar'])) {
    echo valida($_POST['usuari'], $_POST['contra']);
}

?>

<html>

<head>
    <title>Login</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="POST" action="#">
        <p><label for="usuari">Escriu el teu nom d'usuari:</label></p>
        <p><input type="text" name="usuari"></p>
        <p><label for="contra">Escriu la teva contrasenya:</label></p>
        <p><input type="password" name="contra"></p>
        <button type="reset" name="borrar">Borrar</button>
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>

</html>