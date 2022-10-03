<?php 
//Comentário em linha

/* 
	Comentando 
	várias 
	linhas
*/

$alunoSenac = "Gabriel"; // string
$idade = 20; // int
$altura = 1.75; // float
$ads = false; //boolean
$x = 10;
$y = 15;
$soma = $x+$y;
$resultado = "o resultado da soma é: ".$soma;
$lanches = array("risoles","coxinha","empada","pastel","x-calabresa");

echo "Bem Vindo ". $alunoSenac; 
echo "<br>obrigado $alunoSenac";
echo '<br>obrigado $alunoSenac<br>';
echo $soma;
echo $resultado;
echo "<hr>";
//echo "<br>".$lanches;
print_r($lanches);
echo "<br>".$lanches[4];


?>