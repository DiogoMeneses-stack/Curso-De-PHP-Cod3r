<div class="titulo">Criar Banco de Dados</div>

<?php
    require_once "conexao.php";

    $conexao = novaConexao(null);
    $sql = 'CREATE DATABASE IF NOT EXISTS cursophp';

    $resultado = $conexao->query($sql);

    if($resultado){
        echo "Sucesso";
    } else {
        echo "Erro: " . $conexao->error;
    }

    $conexao->query($sql);
    $conexao->close();