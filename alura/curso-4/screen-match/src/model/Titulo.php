<?php

namespace ScreenMatch\model;
use ScreenMatch\interfaces\Avaliavel;

abstract class Titulo implements Avaliavel
{

    use ComAvaliacao;
    
    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
    ) {
    }
  

    abstract public function duracaoEmMinutos(): int;

}
