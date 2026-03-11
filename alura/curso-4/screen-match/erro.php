<?php

require 'autoload.php';

use ScreenMatch\model\Episodio;
use ScreenMatch\model\Genero;
use ScreenMatch\model\Serie;
use ScreenMatch\calc\ConversorNotaEstrela;

$serie = new Serie('Nome da Serie', 2024, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio);