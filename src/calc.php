<?php

echo file_get_contents('templates/head.html');
echo file_get_contents('templates/nav.html');
$page =  file_get_contents('templates/calc.html');

//szamitas itt

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

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

$area = calcArea($a, $b, $c, $d);

$page = str_replace('{{ result }}', $area, $page);

echo $page;
echo file_get_contents('templates/foot.html');
?>