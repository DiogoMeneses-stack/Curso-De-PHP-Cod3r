<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Deletar Registro 02</div>

<?php
require_once 'conexao.php'; // conexão com banco de dados

try {
    $conexao = novaConexao();
    $registros = [];

    // condição de Exclusão
    if(isset($_GET['excluir']) && $_GET['excluir']){
        $excluirDado = "DELETE FROM cadastro WHERE id = ?";
        $stmt = $conexao->prepare($excluirDado);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }

    //Consultar    
    $sql = "SELECT id, nome, nascimento, email FROM cadastro";
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }
    } elseif ($conexao->error) {
        echo "Erro: " . $conexao->error;
    }
    $conexao->close();

} catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
}

?>

<!-- HTML -->
<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
        <!-- DADOS PEGOS DO DB -->
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?=
                    date('d/m/Y', strtotime($registro['nascimento']));
                    ?>
                </td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <a href="exercicio.php?dir=banco&file=deletar-registro-02&excluir=<?= $registro['id'] ?>"
                        class="btn btn-danger">Deletar</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table>* {
        font-size: 1.2rem;
    }
</style>
