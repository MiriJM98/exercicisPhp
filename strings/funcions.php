<?php
function areaPerimetreRectangle($alt, $ampla)
{
    $area = $alt * $ampla;
    $perimetre = 2 * ($alt + $ampla);
    echo "Un rectangle amb una altura de $alt i una amplada de $ampla tè una àrea de $area i un perímetre de $perimetre.<br/>";
}

function validaEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<b>$email</b> es un correu electrònic.";
    } else {
        echo "<b>$email</b> no es un correu electrònic.";
    }
}

function validaData($dataString)
{
    $date = explode('/', $dataString);
    if (count($date) == 3 && checkdate($date[1], $date[0], $date[2])) {
        echo "<b>$dataString</b> és una data vàlida.";
    } else {
        echo "<b>$dataString</b> no és una data vàlida.";
    }
}

function validaNif($nif)
{
    $lletra = substr($nif, -1);
    $numeros = substr($nif, 0, -1);
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $lletra && strlen($lletra) == 1 && strlen($numeros) == 8) {
        echo "<b>$nif</b> és un NIF vàlid.";
    } else {
        echo "<b>$nif</b> no és un NIF vàlid.";
    }
}
