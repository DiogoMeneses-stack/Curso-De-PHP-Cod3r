<div class="titulo">Deletar Registro</div>

<?php
    require_once 'conexao.php';

    $sql = "DELETE FROM cadastro WHERE id = 6 ";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if ($resultado) {
        echo "sucesso";
    } else{
        echo "Erro: " . $conexao->error;
    }

$conexao->close();
    