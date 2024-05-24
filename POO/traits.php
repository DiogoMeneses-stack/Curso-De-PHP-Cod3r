<div class="titulo">Traits</div>

<?php

trait validacao{
    public $a = 'Válido';
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor{
    public $b = 'Inválido';
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario{
    use validacao, validacaoMelhor;
}

$usuario = new Usuario();
var_dump($usuario->validarString(''));
echo '<br>';
var_dump($usuario->validarStringMelhor(''));
echo '<br>';
echo $usuario->a, '<br>' , $usuario->b;