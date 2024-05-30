<div class="titulo">Desafio do Modulo</div>

<?php
    require_once('pessoa.php');
    require_once('usuario.php');
    ini_set('display_errors', 1);
    $usuario = new Usuario('Diogo Meneses', 22, 'diogo_meneses');
    $usuario->apresentar();
    unset($usuario);
