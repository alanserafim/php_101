<?php

$titular = "Alan Nunes";
$saldo = 0;

$msgBoasVindas = "******* Seja bem-vindo(a) ao Serafim Bank *******";
$menu = "\n1. Consultar o saldo atual \n2. Sacar valor \n3. Depositar valor \n4. Sair";
echo "\n";
echo "$msgBoasVindas";
echo "\n*************************************************";
echo "\nTitular: " .$titular;
echo "\nSaldo atual: " .$saldo;
echo "\n*************************************************";

do { 
$opcao = 0;
echo "\n*************************************************";
echo $menu;
echo "\n*************************************************";
echo "\nDigite a opção desejada: ";
$opcao = (int) fgets(STDIN);
switch ($opcao) {
    case '1':
        echo "\nSaldo atual: ".$saldo;
        break;
    case '2':
        echo "\n--------SACAR---------";
        echo "\nDigite o valor do saque: ";
        $saque = (float) fgets(STDIN);
        if($saque > $saldo) {
            echo "\nSaldo insuficiente";
        } else {
            $saldo -= $saque;
            echo "\nOperação efetuada com Sucesso";
        }
        break;
    case '3':
        echo "\n--------DEPOSITAR---------";
        echo "\nDigite o valor do deposito: ";
        $deposito = (float) fgets(STDIN);
        if($deposito < 0) {
            echo "\nNão é possível realizar o deposito";
        } else {
            $saldo += $deposito;
            echo "\nOperação efetuada com Sucesso";
        }
        break;
    case '4':
        echo "Fechando a aplicação ...";
        $opcao = 0;
        break;
    default:
        echo "Opção inválida ...";
        break;
    }
} while ($opcao != 0);

