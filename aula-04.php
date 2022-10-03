<?php
$lanches = array("risoles","empada","x-tudo","enroladinho","coxinha");
$i = 0;
foreach ($lanches as $lanche) {
	echo $lanche." - ";
}
echo "<hr>";
$carros = [
	array(
		"fabricante" => "Volkswagen",
		"modelo" => "gol",
		"ano" => "2010" 
	),
	array(
		"fabricante" => "Nissan",
		"modelo" => "tida",
		"ano" => "2018" 
	),
	array(
		"fabricante" => "Ford",
		"modelo" => "fiesta",
		"ano" => "2017" 
	)
];
//print_r($carros); 
$count = 1;
foreach ($carros as $carro) {
	echo "<strong>Carro</strong> ".$count."<br>";
	foreach ($carro as  $prop) {
		echo $prop."<br>";
	}
	echo "<hr>";
	$count++;
	// echo $carro["fabricante"]."<br>";
	// echo "fabricante: ".$carro["modelo"]."<br>";
}
//echo $carros[0]["fabricante"];





/*while ($i < count($lanches)) {
	echo $lanches[$i]."<br>";
	$i++;
}

while ($i <= 10) {
	echo $i."<br>";
	$i++;
}
*/







?>