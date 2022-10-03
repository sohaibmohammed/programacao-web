<?php
/*
    2. Escreva um algoritmo que leia dois números que deverão ser colocados, respectivamente nas variáveis vA e vB.  

    O algoritmo deve, então, trocar os valores de vA por vB e vice-versa. Mostrar o conteúdo destas variáveis conforme a ordem de digitação antes da troca e após a troca.
*/

$vA = 7;
$vB = 19;

echo "vA = {$vA}<br>"; // 7
echo "vB = {$vB}";  // 19

echo "<hr>";

$vAux = $vA; // 7
$vA = $vB; // 19
$vB = $vAux; // 7

echo "vA = {$vA}<br>"; 
echo "vB = {$vB}"; 
