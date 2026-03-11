<?php

require 'autoload.php';

use ScreenMatch\model\Episodio;
use ScreenMatch\model\Genero;
use ScreenMatch\model\Serie;
use ScreenMatch\calc\ConversorNotaEstrela;
use ScreenMatch\Exception\NotaInvalidaException;

$serie = new Serie('Nome da Serie', 2024, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);

try {
    $episodio->avalia(45);
    $episodio->avalia(-35);
    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio);
} catch (Exception $e){
    echo "Um problema aconteceu: " . $e->getMessage();
}
