<?php

namespace ScreenMatch\calc;
use ScreenMatch\model\Titulo;

class CalculadoraDeMaratona
{
    private int $duracaoMaratona = 0;

    public function inclui(Titulo $titulo):void 
    {
       $this->duracaoMaratona += $titulo->duracaoEmMinutos();

    }

    public function getDuracao(): int
    {
        return $this->duracaoMaratona;
    }

}