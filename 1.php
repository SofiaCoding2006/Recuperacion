<?php

$pi=3.1416;

$radio=intval(readline("ingrese el radio"));

$perimetro=2*$pi*$radio;
$area=$pi*pow($radio,2);
$volumen=4*$pi*pow($radio,3)/3;

echo"el perimetro de la circunferencia es:".$perimetro."\n";
echo"el area del circulo es:".$area."\n";
echo"el volumen de la esfera es:".$volumen."\n";