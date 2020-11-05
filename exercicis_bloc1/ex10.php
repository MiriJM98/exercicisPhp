<html>

<body>
    <table border="1" align="center">
        <?php
        echo "<tr>";
        echo "<th>";
        for ($x = 50; $x <= 60; $x++) {
            echo "<td>";
            echo "$x";
            echo "</td>";
        }
        for ($divisors = 1; $divisors <= 10; $divisors++) {
            echo "<tr>";
            echo "<th>";
            echo "$divisors";
            echo "</th>";
            for ($dividends = 50; $dividends <= 60; $dividends++) {
                if ($dividends % $divisors === 0) {
                    echo "<td>";
                    echo "*";
                    echo "</td>";
                } else {
                    echo "<td>";
                    echo "-";
                    echo "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>