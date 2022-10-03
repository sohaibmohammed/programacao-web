<?php


//in_array — Checa se um valor existe em um array
$dragonBall = ["Goku", "Vegeta", "Trunks", "Piccolo", "Gohan" ];

$busca = "mohammed";

if (in_array($busca, $dragonBall)) {
	echo "Encontrei o valor {$busca}";
} else {
	echo "Não encontrei o valor {$busca}";
}

echo "<hr>";

echo array_search($busca, $dragonBall);



$juntar = implode("-", $dragonBall);
// echo $juntar;
echo "<hr>";

$frase = "Hoje no almoço eu comi: Frango, Arroz, Feijão, Macarrão, Salada de Repolho";
$explosao = explode(":", $frase);
$almoco = explode(",", $explosao[1]);
// print_r($explosao);
echo "<hr>";
// print_r($almoco);





//implode — Junta elementos de uma matriz em uma string (array -> string).

//explode — Divide uma string em strings (string -> array)

//asort — Ordena um array mantendo a associação entre índices e valores.
//arsort — Ordena um array em ordem descrescente.

//ksort e krsort - ordena pelas chaves.
