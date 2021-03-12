<?php
phpinfo();
//Faça um Programa que peça as 
//4 notas bimestrais e mostre a média.

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];


$media = ($n1 + $n2 + $n3 + $n4)/4;

echo $media;

?>
