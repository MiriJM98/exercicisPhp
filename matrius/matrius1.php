<html>

<body>
    <?php
    $EUROPE = array(
        "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
        "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
        "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" =>
        "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon",
        "Spain" => "Madrid", "Sweden" => "Stockholm", "United
Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga",
        "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
    );
    echo "Llista ordenada per el nom del país: <br/>";
    ksort($EUROPE);
    foreach($EUROPE as $key => $valors) {
        echo "La capital de $key és $valors <br/>";
    }

    echo "<br/>";

    echo "Llista ordenada per el nom de la capital: <br/>";
    asort($EUROPE);
    foreach($EUROPE as $key => $valors) {
        echo "$valors és la capital de $key<br/>";
    }
    ?>
</body>

</html>