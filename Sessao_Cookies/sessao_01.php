<div class="titulo">Sessão</div>
<?php
    session_start();

    print_r($_SESSION);
    echo '<br>';

    if(!$_SESSION['nome']){
        $_SESSION['nome'] = 'Diogo';
    }

    if(!$_SESSION['email']){
        $_SESSION['email'] = 'diogo@gmail.com';
    }

    ?>

    <p>
        <a href="/Sessao_Cookies/basico_sessao_alterar.php">
            Alterar Sessão
        </a>
    </p>