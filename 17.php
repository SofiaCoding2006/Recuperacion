<?php

$codigomorse = [
    'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.', 
    'G' => '--.', 'H' => '....', 'I' => '..', 'J' => '.---', 'K' => '-.-', 'L' => '.-..', 
    'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.', 'Q' => '--.-', 'R' => '.-.', 
    'S' => '...', 'T' => '-', 'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-', 
    'Y' => '-.--', 'Z' => '--..', '0' => '-----', '1' => '.----', '2' => '..---', 
    '3' => '...--', '4' => '....-', '5' => '.....', '6' => '-....', '7' => '--...', 
    '8' => '---..', '9' => '----.', ':' => '--..--', '.' => '.-.-.-', 
    '?' => '..--..', '/' => '-..-.', '-' => '-....-', '(' => '-.--.', ')' => '-.--.-'

];

$texto = readline("ingrese el texto que desea convertir a morse ");
$morse = '';
foreach (str_split(strtoupper($texto)) as $buscar) {
    $morse .= $codigomorse[$char] . ' ';
}
echo trim($texto) . "\n"; 
$textomorse= readline("ingrese el texto que desea convertir a lenguaje normal");
$letras = '';
foreach (explode(' ', $textomorse) as $codigo) {
    foreach ($codigomorse as $buscar => $morse) {
        if ($codigo == $morse) {
            $letras.= $buscar;
        }
    }
}
echo $letras . "\n"; 