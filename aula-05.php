<?php
/*
 Condicionais switch e ternário
 Exemplo idiomas
 Exemplo idades
 */
$idioma = "abc";
switch ($idioma) {
	case 'pt-br':
		echo "Boa Noite";
		break;
	case 'en-us':
		echo "Good Night";
		break;
	case 'es-sp':
		echo "Buenas Noches";
		break;
	case 'jp-jp':
		echo "Oyasumi";
		break;
	default:
		echo "Bom Dia";
		break;
}
echo "<hr>";
$idade = 500;
switch ($idade) {
	case $idade < 18:
		echo "Menor de idade";
		break;
	case $idade < 30:
		echo "Adulto";
		break;
	case $idade < 50:
		echo "Meia Idade";
		break;
	case $idade < 65:
		echo "Pessoa no ponto";
		break;
	default:
		echo "Experiencia Desbalanceada";
		break;
}
/*Operador ternário
  Teste lógico ? 'Verdadeiro' :Falso
*/
echo "<hr>";

$nota = 8;
echo $nota >= 7 ? 'Aprovado' : 'Reprovado';






 ?>