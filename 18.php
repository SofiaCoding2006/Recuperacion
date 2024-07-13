<?php

$lado = (int) readline("Ingrese el tamaño del lado: ");
$figura = readline("Ingrese la figura a dibujar (cuadrado o triangulo): ");

if ($figura == "cuadrado") {
    for ($i = 0; $i < $lado; $i++) {//en este bucle vamos a repetir la variable lado para que nos dibuje cada fila
        for ($j = 0; $j < $lado; $j++) {
            echo "* ";
        }
        echo "\n";
    }
} elseif ($figura == "triangulo") {
    for ($i = 1; $i <= $lado; $i++) {//en este caso se repite la varible i para que dibije cada fila y en donde i tambien nos representa el numero de fila actual
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}