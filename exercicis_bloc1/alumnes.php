<html>

<body>
    <?php

    $alumnes = array(
        "1122" =>

        array(
            "nom" => "Pep",

            "telefons" => array("971223344", " 666778877"),

            "grup" => "S1X",

            "dir" => array("carrer" => "Nou", "Num" => 12, "CP" => "07300", "Poblacio" => "Inca"),

            "notes" => array("client" => 7, "seridor" => 8, "disseny" => 5, "desplegament" => 7)

        ),

        "1992" =>

        array(
            "nom" => "Joan",

            "telefons" => array("699775544"),

            "grup" => "S1G",

            "dir" => array("carrer" => "Major", "Num" => 1, "CP" => "07440", "Poblacio" => "Muro"),

            "notes" => array("client" => 6, "seridor" => 5, "disseny" => 5)

        ),

        "1982" =>

        array(
            "nom" => "Miquel",

            "telefons" => array("971889977", "666000077"),

            "grup" => "S1X",

            "dir" => array("carrer" => "Sa plasa", "Num" => 6, "CP" => "07300", "Poblacio" => "Inca"),

            "notes" => array("client" => 9, "seridor" => 10, "disseny" => 8, "desplegament" => 6)

        )

    );

    print_r($alumnes);
    echo "1", $alumnes["1122"]["nom"];
    echo "<br/>";
    if (array_key_exists("1992", $alumnes)) {
        echo $alumnes["1992"]["grup"];
    } else {
        echo "no hi és";
    }
    echo "<br/>";


    echo "Notes:<br/>";
    $moduls=$alumnes["1992"]["notes"];
    foreach($moduls as $modul => $nota) {
        echo "$modul $nota<br/>";
    }
    //}

    echo "Telèfons:<br/>";
    foreach ($alumnes["1122"]["telefons"] as $clau => $valor) {
        echo "$valor<br/>";
    }

    echo "Llistat d'alumnes amb nom i grup:";
    foreach($alumnes as $clau =>$valor) {
        echo "$clau: ";
    }
    ?>
</body>

</html>