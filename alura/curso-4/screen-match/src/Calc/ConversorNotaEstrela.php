<?php

namespace ScreenMatch\calc;

use ArgumentCountError;
use DivisionByZeroError;
use ScreenMatch\interfaces\Avaliavel;
use Throwable;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();
            return round($nota) / 2;
        } catch (DivisionByZeroError | ArgumentCountError $erro) {
            echo $erro->getMessage() . "\n";
            return 0;
        } catch (Throwable $e) {
            echo $e->getMessage() . "\n";
            return 0;
        }
    }
}
