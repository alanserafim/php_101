<?php

$nomeFilme = "Top Gun";
$anoLancamento = 2023;
$notas = [];
$quantidadeDeNotas = $argc - 1;
$incluidoNoPlano = true;
$observacao = "Nada a observar";



//laço condicional
if ($anoLancamento > 2022) {
    echo "\nEsse filme é um lançamento";
} elseif ($anoLancamento > 2020 && $anoLancamento <=2022){
    echo "\nEsse filme ainda é novo";
} else {
    echo "\nEsse filme é antigo";
}

//Laço for
// for (inicialização, condição da repetição, incremento) {repetiçao}
for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}

//$somaDeNotas = 0;
// for ($i = 0; $i < count($notas); $i++){
//     $somaDeNotas += $notas[$i];
// };

// foreach ($notas as $nota){
//      $somaDeNotas += $nota;
// };

// laço while
// $contadorWhile = 1;
// while ($argv[$contador] != 0){ 
//     $somaDeNotas += $argv[$contador];
// }

// laço do while
// do {
//     $somaDeNotas += $argv[$contador];
// } while ($argv[$contador] != 0);

$notaFilme = array_sum($notas) / $quantidadeDeNotas;

//match expression
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor" => "super-heroi",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido"
};


echo " \nNome: $nomeFilme - Ano: $anoLancamento - Nota: $notaFilme - Prime: $incluidoNoPlano";
echo "\n" . "Observacoes: " . $observacao;
echo "\nO genêro do filme é: $genero";
echo "\n";

//arrays
// sintaxe anterior $arrayAntigo = array(10,8,9,12, 5.3);
// sintaxe moderna
$notasParaOFilme = [10, 8, 9, 7.5, 6.8];
//var_dump($notasParaOFilme);

// array associativo (também conhecido como mapa ou dicionário)
$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

echo $filme['nome'];

