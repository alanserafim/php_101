<?php

//1 - Escreva um programa em PHP que exiba seu nome na tela.

echo "Alan Nunes Serafim";

//2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$n1 = 5;
$n2 = 5;
$n3 = 5;
$media = ($n1 + $n2 + $n3) / 3;

echo "\nA media entre $n1, $n2, e $n3 é $media";

//3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
$metros = $argv[1] ;
$centimetros = $metros * 100;

echo "\n$metros metros é equivalente a $centimetros centimetros";

//4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "\n$ano é bissexto.";
} else {
    echo "\n$ano não é bissexto.";
}
//5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
$temperaturaEmCelsius = 30.4; // Modifique esse valor para a temperatura que desejar
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 + 32;
$mensagem = "\nA temperatura de $temperaturaEmCelsius Celsius é equivalente a $temperaturaEmFahrenheit Fahrenheit";
echo $mensagem;


//1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 !== 0) {
        echo $contador . "\n";
    }
}

//2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 !== 0) {
        echo $contador . "\n";
    }
}

//3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).
$hora = 10;

if ($hora > 6 && $hora < 12) {
    echo "Bom dia";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde";
} else {
    echo "Boa noite";
}

//1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. 
// Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].
$array = [1, 2, 2, 3, 4, 4, 5];
$semDuplicatas = array_unique($array);

//2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
// Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.
$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];
foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";
    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}

//3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
$conta = [
    'titular' => 'Vinicius Dias',
    'saldo' => 100,
];
echo $conta['titular'] . ' possui ' . $conta['saldo'] . ' reais de saldo.';

//4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.
$familiares = ['Alice', 'Bob', 'Charlie'];
$familiares[] = 'Davi';