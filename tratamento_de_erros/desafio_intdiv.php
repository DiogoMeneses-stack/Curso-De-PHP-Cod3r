<?php namespace Aritimetica; 

    class NaoINteiroException extends \Exception {

    }

    function intdiv($a, $b){
        if($b == 0){
            throw new \DivisionByZeroError();
        }
        if($a % $b > 0){
            throw new NaoINteiroException();
        }
        return $a / $b;
    }