<?php

$texto="proceso de cambios estructurales y fisiológicos a través de los cuales ciertos animales alcanzan la vida adulta, dejando atrás las características obtenidas desde su nacimiento";
echo"proceso de cambios estructurales y fisiológicos a
    través de los cuales ciertos animales alcanzan la vida 
    adulta, dejando atrás las características obtenidas desde
    su nacimiento"."\n";
$buscar=readline("ingrese la letra que decea buscar ");
$letra=substr_count($texto, $buscar);
echo"la letra ".  $buscar. " esta ".$letra. " veces en el texto anterior";