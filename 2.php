<?php

$Numero1 = readline("introduce tu primer numero");
$Numero2 = readline("Introduce tu segundo numero");

if($Numero1>$Numero2){
    $suma = $Numero1+$Numero2;
    $resta = $Numero1-$Numero2;
    echo"la suma es de:".$suma."/n";
    echo"la resta es de:".$resta."/n";
}else{
    $multiplicacion = $Numero1*$Numero2;
    $division = $Numero1/$Numero2;
    echo"la multiplicacion es de:".$multiplicacion."/n";
    echo"la division es de:".$division."/n";
}
?>
