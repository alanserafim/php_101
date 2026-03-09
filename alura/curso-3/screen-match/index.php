<?php

require __DIR__ . "/src/model/Titulo.php";
require __DIR__ . "/src/model/Filme.php";
require __DIR__ . "/src/model/Genero.php";
require __DIR__ . "/src/model/Serie.php";
require __DIR__ . "/src/Calc/CalculadoraDeMaratona.php";

echo "Bem vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    "Thor - Ragnarok",
    2021,
    Genero::SuperHeroi,
    180
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(9);

echo "\nVerificando o tipo: \n";
echo var_dump($filme);
echo "\nMedia de notas: " . $filme->media() . "\n";
echo "\nAno de Lançamento: " . $filme->anoLancamento . "\n";


$serie = new Serie(
    "Lost",
    2007, 
    Genero::Drama,
    10,
    20,
    40
);

$serie->avalia(7);
$serie->avalia(7);
$serie->avalia(7);

echo "\nVerificando o tipo: \n";
echo var_dump($serie);
echo "\nMedia de notas: " . $serie->media() . "\n";


$calculadora = new CalculadoraDeMaratona();

$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->getDuracao();

echo "Para essa maratona, você precisa de $duracao minutos";