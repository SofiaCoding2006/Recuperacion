<?php

$capital=intval(readline("ingrese su capital actual"));

if($capital<1){
    $prestamo=10000;
    $saldo=$capital+$prestamo;
    $nuevoSaldo=$prestamo;
    echo"su nuevo saldo es de:".$nuevoSaldo;
}elseif($capital>1 and $capital <20000){
    $prestamo=20000;
    $capital=$prestamo;
    $nuevoSaldo=$capital;
    echo"su nuevo saldo es de:".$nuevoSaldo;
}elseif($capital>20000){
    $nuevoSaldo=$capital-7000;
    $insumos=$nuevoSaldo/2;
    $insentivos=$nuevoSaldo/2;
    $prestamo=0;
    echo"la cantidad que se destinara para la compra de insumos".$insumos."\n";
    echo"la cantidad que se destinara para la compra de insentivos".$incentivos."\n";
    echo"el prestamo que se pidio al banco es:".$prestamo;
}