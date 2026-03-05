<?php

require __DIR__."/src/functions.php";

$nomeFilme = "Thor: Ragnarok";
$anoLancamento = 2023;
$notas = [];
$quantidadeDeNotas = $argc - 1;
$planoPrime = true;
$observacao = "Nada a observar";
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);
exibeMensagemLancamento($anoLancamento);

for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-heroi",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido"
};

echo " \nNome: $nomeFilme - Ano: $anoLancamento - Nota: $notaFilme - Incluído no plano: $incluidoNoPlano";
echo "\n" . "Observacoes: " . $observacao;
echo "\nO genêro do filme é: $genero";
echo "\n";

$notasParaOFilme = [10, 8, 9, 7.5, 6.8];

$filme = criaFilme(
    nome: "Thor: Ragnarok", 
    genero: "super-herói",
    anoLancamento: 2021, 
    nota: 7.8, 
);

echo $filme['nome'];
echo "\n";

// funções de array
//var_dump($notas);
//sort($notas);
//var_dump($notas);
//$menorNota = min($notas);
//echo "\nMenor nota: $menorNota";

var_dump($filme['nome']);
//Descobrir posição de caracter
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

//recortar string
$primeiroNome = substr($filme['nome'], 0, $posicaoDoisPontos);
var_dump($primeiroNome);
echo "\n";

//echo json_encode($filme);
//var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}', true));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__.'/filme.json', $filmeComoStringJson);