<?php
function areaPerimetreRectangle($alt, $ampla)
{
    $area = $alt * $ampla;
    $perimetre = 2 * ($alt + $ampla);
    echo "Un rectangle amb una altura de $alt i una amplada de $ampla tè una àrea de $area i un perímetre de $perimetre.<br/>";
}
