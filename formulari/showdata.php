<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["NOM"])) {
        $nom = $_POST["NOM"];
    } else {
        echo "Nom no rebut<br/>";
        $nom = '';
    }
    if ($codi == '') {
        echo "Codi esta buit<br/>";
    }
    if ($dni == '') {
        echo "DNI esta buit<br/>";
    }
    if ($nom == '') {
        echo "Nom esta buit<br/>";
    }
    if ($lli1 == '') {
        echo "Llinatge1 esta buit<br/>";
    }
    if ($lli2 == '') {
        echo "Llinatge2 esta buit<br/>";
    }
    if ($data == '') {
        echo "Data esta buit<br/>";
    }
    if ($tel == '') {
        echo "Telefon esta buit<br/>";
    }
    if ($email == '') {
        echo "Email esta buit<br/>";
    }

    $codi = isset($_POST["CODI"]) ? $_POST["CODI"] : '';
    $dni = isset($_POST["DNI"]) ? $_POST["DNI"] : '';
    $lli1 = isset($_POST["LL1"]) ? $_POST["LL1"] : '';
    $lli2 = isset($_POST["LL2"]) ? $_POST["LL2"] : '';
    $data = isset($_POST["DATA"]) ? $_POST["DATA"] : '';
    $tel = isset($_POST["TEL"]) ? $_POST["TEL"] : '';
    $email = isset($_POST["EMAIL"]) ? $_POST["EMAIL"] : '';
} else {
    echo "S'esperava rebre els paràmetres per post";
}

?>
<html>

<head>
    <title>ShowData</title>
</head>

<body>
    <?php
    if ($nom == '') {
        echo "error. Nom requerit";
    }

    echo "<h2>He rebut les dades:</h2>";
    echo "Codi: $codi";
    echo "<br>";
    echo "DNI: $dni";
    echo "<br>";
    echo "Nom: $nom";
    echo "<br>";
    echo "Llinatge1: $lli1";
    echo "<br>";
    echo "Llinatge2: $lli2";
    echo "<br>";
    echo "Data: $data";
    echo "<br>";
    echo "Telefon: $tel";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";

    ?>

</body>

</html>