<?php
session_start();
session_unset();
$nomuser = '';
$paswuser = '';

if (!empty($_POST)) {
    $username = $_POST["nomuser"];
    $password = $_POST["paswuser"];

    $authFile = file('pass.txt', FILE_IGNORE_NEW_LINES);

    print_r(in_array("$username:$password", $authFile));
    if (in_array("$username:$password", $authFile)) {
        $validacioCorrecte = TRUE;

        $_SESSION["login"] = $username;

        echo $validacioCorrecte;
        header("Location: pujar.php");
    } else {
        $validacioCorrecte = FALSE;
        echo $validacioCorrecte;
    }
}

?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
</head>

<body>
    <form method="post" action="login.php">
        <label for="nomuser"><b>Nom d'usuari</b></label><br>
        <input type="text" placeholder="Posa el teu nom d'usuari" name="nomuser" required><br>
        <p></p>
        <label for="paswuser"><b>Contrasenya</b></label><br>
        <input type="password" placeholder="Posa la teva contrasenya" name="paswuser" required><br>
        <p></p>
        <button type="submit">Login</button>
    </form>
</body>

</html>