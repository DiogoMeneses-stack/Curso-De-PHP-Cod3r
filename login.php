<?php
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuaroio'] = $_COOKIE['usuario'];
}

$email = $_POST['email'];
$senha = $_POST['senha'];


if($_POST['email']){
    $usuarios = [
        [
        "nome"=> "Diogo",
        "email"=>"diogo@gmail.com",
        "senha"=>"123456"
        ],
        [
            "nome"=> "Ricardo",
            "email"=>"ricardo@gmail.com",
            "senha"=>"root"
        ]
    ];
    
    foreach($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida){
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }
    }

    if(!$_SESSION['usuario']){
        $_SESSION['erros'] = ['Usuário/Senha Inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Recursos/css/estilo.css">
    <link rel="stylesheet" href="Recursos/css/login.css">
    <title>Curso PHP</title>
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']):?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        <?php require_once('footer.php'); ?>
    </footer>
</body>
</html>
