<?php

$valor1=intval(readline("introduce tu primer valor"));
$valor2=intval(readline("introduce tu segundo valor"));
$valor3=intval(readline("introduce tu tercer valor"));

if($valor1>$valor2 and $valor1>$valor3){
    echo"el valor mayor es:".$valor1;
}elseif($valor2>$valor3){
    echo"el valor mayor es:".$valor3;
}else{
    echo"el valor mayor es:".$valor3;
}