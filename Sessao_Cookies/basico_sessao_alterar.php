<?php
    session_start();
    print_r($_SESSION);
    ?>

    <p>
        <b>Nome:</b> <?= $_SESSION['nome'] ?>
    </p>
    <p>
        <b>Email:</b> <?= $_SESSION['email'] ?>
    </p>

    <?php
    $_SESSION['email'] = 'diogofilho@gmail.com';
    ?>

<p>
        <a href="/index.php">Voltar pro Index</a>
    </p>

    <p>
        <a href="sessao_01.php">Voltar</a>
    </p>

    <p>
        <a href="basico_sessao_limpar.php">Limpar Sessão</a>
    </p>