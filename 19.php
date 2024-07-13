<?php

$binario = readline("Ingrese un número binario: ");

$decimal = 0;
$potencia = 0;

for ($i = strlen($binario) - 1; $i >= 0; $i--) {
    $digito = $binario[$i];
    if ($digito == '1') {
        $decimal += pow(2, $potencia);
    }
    $potencia++;
}

echo "El número decimal es: $decimal\n";
