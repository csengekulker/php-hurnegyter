<?php

echo file_get_contents('templates/head.html');
echo file_get_contents('templates/nav.html');
$page =  file_get_contents('templates/calc.html');

//szamitas itt

function calcArea ($a, $b, $c, $d) {
    $s = ($a + $b + $c + $d) / 2;

    $area = sqrt(
        ($s - $a) *
        ($s - $b) *
        ($s - $c) *
        ($s - $d)
    );

    return $area;
}
// ha nem uresek
if (
    !empty($_GET['a']) and
    !empty($_GET['b']) and
    !empty($_GET['c']) and
    !empty($_GET['d'])
) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $d = $_GET['d'];

    $area = calcArea($a, $b, $c, $d);

    $page = str_replace('{{ result }}', $area, $page);

} else {
    $area = "Hiba! Helytelen bemenő adatok vagy üres mezők!";

    $page = str_replace('{{ result }}', $area, $page);
}

echo $page;
echo file_get_contents('templates/foot.html');
?>