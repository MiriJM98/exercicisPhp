<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $funcio = $_POST;
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $funcio = $_GET;
}
if (isset($_POST["nom"])) {
    $nom = $_POST["nom"];
} else {
    echo "Nom i cognoms no rebut<br/>";
    $nom = '';
}
if (isset($_POST["dni"])) {
    $dni = $_POST["dni"];
} else {
    echo "DNI no rebut<br/>";
}
if (isset($_POST["email"])) {
    $email = $_POST["email"];
} else {
    echo "Email no rebut<br/>";
}
if (isset($_POST["nota"])) {
    $nota = $_POST["nota"];
} else {
    echo "Nota mitja no rebuda<br/>";
}

$direccio = isset($_POST["dir"]) ? $_POST["dir"] : '';
$telefon = isset($_POST["tel"]) ? $_POST["tel"] : '';
$localitat = isset($_POST["loc"]) ? $_POST["loc"] : '';
$cpostal = isset($_POST["postal"]) ? $_POST["postal"] : '';
$provincia = isset($_POST["pro"]) ? $_POST["pro"] : '';
$titols = isset($_POST["titols"]) ? $_POST["titols"] : '';
$edat = isset($_POST["edat"]) ? $_POST["edat"] : '';
$germans = isset($_POST["germans"]) ? $_POST["germans"] : '';


/*$comptador = 0;
if (isset($funcio["increment"])) {
    $comptador = $funcio["comptador"] + 1;
} else if (isset($funcio["esborrar"])) {
    $comptador = 0;
}
?>*/
?>
<html>

<head>
    <title>Inscripció</title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    if ($nom == '') {
        echo "Error. Nom requerit<br/>";
    }
    if ($dni == '') {
        echo "Error. DNI requerit<br/>";
    }
    if ($email == '') {
        echo "Error. Email requerit<br/>";
    }
    if ($nota == '') {
        echo "Error. Nota mitja requerida<br/>";
    }

    echo "<h2>Dades rebudes</h2>";
    echo "Nom i cognoms: $nom";
    echo "<br>";
    echo "DNI: $dni";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";
    echo "Telèfon: $telefon";
    echo "<br>";
    echo "Localitat: $localitat";
    echo "<br>";
    echo "Codi postal: $cpostal";
    echo "<br>";
    echo "Província: $provincia";
    echo "<br>";
    echo "Titol:";
    $coma = '';
    foreach ($titols as $ll) {
        echo "$coma $ll";
        $coma = ',';
    }
    echo "<br/>";
    echo "Nota mitja: $nota";
    echo "<br>";
    echo "Major d'edat: $edat";
    echo "<br>";
    echo "Nombre de germans: $germans";
    echo "<br>";

    ?>
</body>

</html>