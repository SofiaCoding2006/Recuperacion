<?php

$total=intval(readline("ingrese el total"));
$hipoteca=intval(readline("ingrese la hipoteca"));

if($hipoteca<1000000){
    $inversion=$total*0.50;
    echo"la inversion del 50% cada socio es de ". $inversion;
}elseif($hipoteca-$total){
    $inversion=$total-$hipoteca/2;
    echo"la inversion total de la hipoteca es de ".$hipoteca;
    echo"la inversion que le corresponde a cada socio es de ".$inversion;
}else{
    echo"considere la reinversion";
}