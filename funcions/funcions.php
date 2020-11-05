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
        echo "<b>$email</b> Es un correu electrònic";
    } else {
        echo "<b>$email</b> No es un correu electrònic";
    }
}
