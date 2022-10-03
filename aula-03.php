<?php
//Constantes
define("SALA", "601");
//echo SALA
//define("SALA", "701");
echo SALA;
//Arrays Associativos
$dogs = ["boxer", "pastor-alemão", "salsicha", "caramelo", "pug", "pinscher"];
echo "<br>".$dogs[3];
$fichaDog = [
	"nome" => "Gamora",
	"raça" => "Pastor Alemão",
	"idade" => "Três anos",
	"peso" => "28 Kg"
];
print_r($dogs);
echo "<hr>";
print_r($fichaDog);
echo "<hr>";
echo $fichaDog["raça"]." ".$fichaDog["peso"];
echo "<hr>";

//Array Multidimensional
$cadastroDogs = [
	array(
		"nome" => "Gamora",
		"raça" => "Pastor Alemão"
	),
	array(
		"nome" => "Dilma",
		"raça" => "Poodle"
	),
	array(
		"nome" => "Pretinha",
		"raça" => "Pinscher puro ódio"
	)
];
print_r($cadastroDogs);
echo "<br>".$cadastroDogs[2]["nome"].$cadastroDogs[1]["raça"];
echo "<br>".$cadastroDogs[2];
echo "<hr>";

//Laços de Repetição (Looping)
for ($i=0; $i < 5; $i++) { 
		echo "<p>Sextou</p>";	
}
echo "<hr>";
for ($i=1; $i < 10; $i++) { 
	echo " Posição ".$i."<br>";
}
$dogs = ["boxer", "pastor-alemão", "salsicha", "caramelo", "pug", "pinscher"];
for ($i=0; $i < count($dogs) ; $i++) { 
	echo $dogs[$i]."<br>";
}




?>