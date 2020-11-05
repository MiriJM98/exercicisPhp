<html>

<body>
    <?php
    $dia = date('j', time());
    if ($dia / 2 !== 0) {
        echo "Avui som dia $dia, no és parell";
    } else {
        echo "Avui som dia $dia, és parell";
    }
    ?>
</body>

</html>