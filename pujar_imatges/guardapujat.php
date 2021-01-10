<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: pujar.php");
} else {
    $carpeta = $_SESSION["login"];

    if (!file_exists($carpeta) || !is_dir($carpeta)) {
        mkdir($_SESSION["login"], 0777, true);
    }

    $carpeta = $_SESSION["login"];
    if (is_dir($carpeta)) {
        $fitxers = scandir($carpeta, 0);

        if (DIRECTORY_SEPARATOR == '/') {
            array_shift($fitxers);
            array_shift($fitxers);
        }
    }
}
?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Guarda pujat</title>
</head>

<body>
    <form method="get" action="guardapujat.php">
        Introdueix un llinatge: <input type="text" name="text" required>
        <button type="submit" value="submit">Cerca</button><br />
    </form>
    Arxius pujats:
    <?php
    if (empty($fitxers)) {
        echo "No hi ha res.";
    } else {
        print_r($fitxers);
    }
    echo "<p></p>";
    ?>
    <?php
    if (!empty($_GET)) {
        if (isset($_SESSION["nonumbers"])) {
            print_r($_SESSION["nonumbers"]);
        } else {

            $text = $_GET["text"];
            if (preg_match('/\\d/', $text) > 0) {
                echo '<h4 style="color:red">Error: Has introduït un nombre a la cadena de caràcters. La consulta no ha estat realitzada.</h4>';
            } else {
                echo "<b>Resultats Obtinguts en la Cerca:</b><br/> ";
                $comptador = 0;
                foreach ($fitxers as $key => $value) {
                    if (preg_match("/{$text}/i", $value)) {
                        $comptador++;
                        echo $comptador . ") " . '<a href=' . $_SESSION["login"] . "/" . $value . ">" . $value . "</a><br/>";
                    }
                }
                if ($comptador == 0) {
                    echo "No s'ha trobat cap resultat.";
                }
            }
        }
    }
    ?>
    <br />
    <p></p>
    <button type="button" name="pujar" id="pujar">Torna a pujar arxius</button>
</body>
<script>
    document.getElementById("pujar").onclick = function() {
        window.location.href = "pujar.php";
    }
</script>

</html>