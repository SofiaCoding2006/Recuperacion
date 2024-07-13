<?php
$numero=intval(readline("ingrese un numero"));
$contador=0;

for($i=1; $i=$numero; $i++){
    if ($numero%$i=0){
        $contador=$contador+1;
    }elseif($contador=2){
        echo"el numero si es primo";
    }else{
        echo"el numero no es primo";
    }
}