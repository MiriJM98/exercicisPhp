<html>

<head>
    <title>Equacio segon grau.</title>
</head>

<body>

    <form method="POST" action="formulari2.php">
        <h3>Equacio de segon grau</h3>
        <p>Introdueix tres numeros sencers:</p>
        <p>a = <input type="text" name="a"></p>
        <p>b = <input type="text" name="b"></p>
        <p>c = <input type="text" name="c"></p>
        <p><input type="reset" value="Borrar"></p>
        <p><input type="submit" value="Calcular"></p>
    </form>

</body>

</html>

<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$neg = -1;

$menosb = $b * $neg;
$operacio1 = pow($b, 2);
$operacio2 = 4 * $a * $c;
$resta = $operacio1 - $operacio2;
$arrel = pow($resta, (1 / 2));
$dosa = 2 * $a;

$resultat1 = ($menosb + $arrel) / $dosa;
$resultat2 = ($menosb - $arrel) / $dosa;

echo "Solucio 1 = $resultat1<br>";
echo "Solucio 2 = $resultat2";
?>