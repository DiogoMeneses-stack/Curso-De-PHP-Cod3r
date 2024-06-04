<div class="titulo">Desafio intdiv</div>

<?php

require_once 'desafio_intdiv.php';

use function \Aritimetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch (\Aritimetica\NaoINteiroException $e) {
    echo 'Resultado não é um valor esperado.';
}

try {
    echo intdiv(8, 0) . '<br>';
} catch (DivisionByZeroError $e) {
    echo '<br>Divisão por zero';
}
