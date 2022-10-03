<?php
// Exercício (foreach)

$alunos = [
    array(
        "aluno" => "João",
        "curso" => "ADS",
        "nota" => 7.8
    ),
    array(
        "aluno" => "Maria",
        "curso" => "Redes",
        "nota" => 5.8
    ),
    array(
        "aluno" => "Pedro",
        "curso" => "Administração",
        "nota" => 7.8
    ),
    array(

        "aluno" => "Ana",
        "curso" => "Programação para Internet",
        "nota" => 9.4
    ),
    array(

        "aluno" => "Chico",
        "curso" => "Marketing",
        "nota" => 8.2
    )
];

foreach ($alunos as $aluno) {
    echo "O aluno {$aluno["aluno"]} do curso {$aluno["curso"]} tirou a nota {$aluno["nota"]}. <br>";
}

?>