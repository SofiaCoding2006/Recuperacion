<?php

$x = intval(readline("Ingresa el valor de X"));
$y = intval(readline("Ingresa el valor de Y"));

if ($x>0 and $y>0){
    echo"el punto $x,$y se encuentra en el primer cuadrante"."/n";
}elseif($x<0 and $y>0){
    echo"el punto $x,$y se encuentra en el segundo cuadrante"."/n";
}elseif($x<0 and $y<0){
    echo"el punto $x,$y se encuentra en el tercer cuadrante"."/n";
}elseif($x>0 and $y<0){
    echo"el punto $x,$y se encuentra en el cuarto cuadrante"."/n";
}else{
    echo"el punto $x,$y se encuentra ubicadoen el origen";
}