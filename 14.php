<?php

$contador=0;
$x=0;
$y=1;
$z=0;

$numero=intval(readline("ingresa un numero"));
for ($i=1; $i<=$numero; $i++){
    $z=$x+$y;
    $x=$y;
    $y=$z; 
    echo $z;
}