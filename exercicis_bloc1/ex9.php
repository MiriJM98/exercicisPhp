<html>

<body>
        <table border="1" align="center">
                <?php
                for ($x = 1; $x <= 7; $x++) {
                        echo "<tr>";
                        echo "<th>";
                        echo $x;
                        echo "</th>";
                        for ($y = 1; $y <= 7; $y++) {
                                $multiplicacio = $x * $y;
                                echo "<td>";
                                echo $multiplicacio;
                                echo "</td>";
                        }
                        echo "</tr>";
                }
                ?>
        </table>
</body>

</html>