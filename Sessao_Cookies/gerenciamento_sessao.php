<div class="titulo">Gerenciamento de Sessão</div>
<?php
//session_id('0f1d24cca9ebe3bd40b97cac9f59c9e1');
    session_start();
    //0f1d24cca9ebe3bd40b97cac9f59c9e1
    echo session_id();

    $contador = &$_SESSION['contador'];
    $contador = $contador ? $conador + 1 : 1;
    echo '<br>' . $_SESSION['contador'];

    if($_SESSION['contador'] % 5 === 0){
        session_regenerate_id();
    }

    if($_SESSION['contador'] >= 15){
        session_destroy();
    }