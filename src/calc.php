<?php

echo file_get_contents('templates/head.html');
echo file_get_contents('templates/nav.html');
$page =  file_get_contents('templates/calc.html');

//szamitas itt

echo $page;
echo file_get_contents('templates/foot.html');
?>