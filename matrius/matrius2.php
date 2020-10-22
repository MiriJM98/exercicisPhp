<html>

<body>
    <?php
    $poblacio = array(
        "Mallorca" =>

        array(
            "poble" => array("Alcudia" => 19172, "Inca" => 29321, "Muro" => 7001, "Palma" => 404681, "Sa Pobla" => 12831, "Pollença" => 16981)
        ),

        "Menorca" =>

        array(
            "poble" => array("Alaior" => 9399, "Ciutadella" => 29247, "Maó" => 29050)
        ),

        "Eivissa" =>

        array(
            "poble" => array("Eivissa" => 49516, "Sant Antoni" => 22136)
        ),

        "Formentera" =>
        array(
            "poble" => array("Formentera" => 9962)
        )

    );

    echo "<table>";
    echo "<tr><th>Illa</th><th>Població</th><th>Habitants</th></tr>";
    asort($poblacio);
    foreach ($poblacio as $key => $valor) {
        echo "<tr>";
        echo "<td> $key </td>";
        echo "";
        foreach ($valor as $key2 => $valors) {
            $suma = 0;
            foreach ($valors as $clau => $values) {
                echo "<td> $clau </td>";
                echo "<td> $values </td>";
                $suma += $values;
            }
        }
        echo "<th>Total illa: </th> <th>$suma </th>";
    }

    ?>
</body>

</html>