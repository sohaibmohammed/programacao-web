<?php
if (5 > 10) {
	echo "Verdadeiro";
} else {
	echo "Falso";
}
echo "<hr>";

$x = "teste";
$y = "test";
if ($y > $x) {
	echo "Verdadeiro";
} else {
	echo "Falso";
}
echo "<hr>";
$aluno = "10";
if ($aluno === 10) {
	echo "o aluno ".$aluno." passar na secretaria";
} else {
	echo "Bem Vindo";
}
echo "<hr>";

$aluno = "Luíza";
//ou no php: "or" ou "||" 
if ($aluno == "Erick" || $aluno == "Luíza") {
	echo "o aluno ".$aluno." passar na secretaria";
} else {
	echo "Bem Vindo";
}
echo "<hr>";
$aluno = "Elias";
$curso = "ADS";
//and no php: "and" ou "&"
if ($aluno == "Elias" & $curso == "ADS") {
	echo "o aluno ".$aluno." passar na secretaria";
} else {
	echo "Bem Vindo";
}

echo "<hr>";
$media = 7.4;
$resultadoFinal = 6.1;
if ($resultadoFinal >= $media) {
	echo "Aprovado";
} elseif ($resultadoFinal <= 5) {
	echo "Reprovado";
} else {
	echo "Recuperação";
} 



?>