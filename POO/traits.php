<div class="titulo">Traits</div>

<?php
echo "=============Traits 1============= <br>";
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
echo $usuario->a, '<br>' , $usuario->b . "<br>";

echo "=============Traits 2=============<br>";

trait valido{
    public function validarString($str){
        return isset($str)  && $str !== '';
    }
}

trait validarBem{
    public function validarString($str){
        return isset($str) && trim($str);
    }
}

class Usuario2{
    use valido, validarBem{
        // resolução de conflitos com traits
        validarBem::validarString insteadOf valido; // a 1

        valido::validarString as validacaoSimples; // a 2

    }
}

$usuario = new Usuario2();
var_dump($usuario->validarString(''));
echo '<br>';
var_dump($usuario->validacaoSimples(''));