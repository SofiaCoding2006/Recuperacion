<?php

$TotalPreguntas = intval(readline("Ingrese el total de preguntas"));
$PreguntasCorrectas = intval(readline("Ingrese cuantas preguntas tuvo bien"));


if ($TotalPreguntas>=90){
    echo"el postulante tiene un nivel superior"."\n";
}elseif ($porcentaje>=75 and $porcentaje>=90){
    echo"el postulante tiene un nivel medio"."\n";
}elseif ($porcentaje>=50 and $porcentaje<75){
    echo"el postulante tiene un nivel regular"."\n";
}elseif($TotalPreguntas<=30){
    echo"el postulante esta fuera de nivel";
}