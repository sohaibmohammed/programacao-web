<?php

/*
    Função date_parse():
    Retorna um array associativo com informações detalhadas da data informada
*/

echo "<h1>Função date_parse()</h1>";

echo "<h2>Exemplo 01</h2>";
$date = date_parse("2022-09-27 21:30:10.5");
print_r($date);

echo "<h2>Exemplo 02</h2>";
echo ($date['year']);
