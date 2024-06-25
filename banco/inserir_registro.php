<div class="titulo">Inserir Registro</div>

<?php
    require_once "conexao.php";
    
    $sql = "INSERT INTO cadastro
            (nome, nascimento, email, site, filhos, salario)
            VALUES (
                'João Cássio',
                '1990-10-04',
                'JoaoCassio@gmail.com',
                NULL,
                5,
                5000
                )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso";
} else {
    echo "Erro : " . $conexao->error;
}

$conexao->close();