<?php

$monto=intval(readline("ingrese el monto total de la compra"));

if($monto>500000){
    $operacion1=$monto-0.55;
    $operacion2=$operacion1+0.30;
    echo"el dinero con el que la empresa cuenta para invertir es de:".$operacion2;
}elseif($monto<500000){
    $operacion3=$monto-0.70;
    $operacion4=$operacion3+0.30;
    echo"el dinero con el que la empresa cuenta para invertir es de:".$operacion4;
}