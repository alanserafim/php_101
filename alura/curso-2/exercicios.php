<?php

//Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.
function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2, // Aqui você poderia pensar no caso de divisão por 0 ;-)
        'multiplicação' => $numero1 * $numero2,
    };
}

//Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.
function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    return $pesoEmQuilos / $alturaEmMetros ** 2;
}


//Crie uma função em PHP que converta graus celsius para Fahrenheit.
function celsiusToFahrenheit(float $celsius): float
{
    return ($celsius * 9 / 5) + 32;
}


//Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.
$notas = [8.5, 9.2, 7.8, 9.0, 8.8];
rsort($notas); // Ordena de forma decrescente (r de reverso)
echo "As três maiores notas são: $notas[0], $notas[1] e $notas[2]";

//Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.
$string = "Vinicius Dias,1997,Programador";
var_dump(explode(',', $string));

//Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.
function ordenarStrings(array $array): array
{
    sort($array);
    return $array;
}

// Exemplo de uso:
$array = array("banana", "abacaxi", "laranja", "uva");
$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);


// Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.
$arquivo = fopen('teste.txt', 'r');
$primeiraLinha = fgets($arquivo);
fclose($arquivo);

// Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.
$nomeArquivo = 'teste.txt';
$novaFrase = "\nPHP é incrível!";
 // Abre o arquivo para escrita no final
$arquivo = fopen($nomeArquivo, 'a');
 // Escreve no arquivo
fwrite($arquivo, $novaFrase);
 // Fecha o arquivo
fclose($arquivo);

// Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.
$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
var_dump(json_decode($stringJson, true));

