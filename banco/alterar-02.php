<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="titulo">Alterar Registro</div>

        <?php 
        require_once "conexao.php";
        $conexao = novaConexao();

        $erros = [];
        $dados = [];

        if(isset($_GET['codigo'])) {
            $sql = "SELECT * FROM cadastro WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("i", $_GET['codigo']);
            
            if($stmt->execute()) {
                $resultado = $stmt->get_result();
                if($resultado->num_rows > 0) {
                    $dados = $resultado->fetch_assoc();
                    if($dados['nascimento']) {
                        $dt = new DateTime($dados['nascimento']);
                        $dados['nascimento'] = $dt->format('d/m/Y');
                    }
                    if($dados['salario']) {
                        $dados['salario'] = str_replace(".", ",", $dados['salario']);
                    }
                } else {
                    echo '<div class="alert alert-danger">Nenhum registro encontrado.</div>';
                }
            } else {
                echo '<div class="alert alert-danger">Erro ao executar a consulta.</div>';
            }
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = $_POST;

            if(trim($dados['nome']) === "") {
                $erros['nome'] = 'Nome é obrigatório';
            }

            if(isset($dados['nascimento'])) {
                $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
                if(!$data) {
                    $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
                }
            }

            if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                $erros['email'] = 'Email inválido';
            }

            if (!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
                $erros['site'] = 'Site inválido';
            }

            $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];
            if (!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
                $erros['filhos'] = 'Quantidade de filhos inválida (0-20).';
            }

            $salarioConfig = ['options' => ['decimal' => ',']];
            if (!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
                $erros['salario'] = 'Salário inválido';
            }

            if(!count($erros)) {
                $sql = "UPDATE cadastro 
                        SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
                        WHERE id = ?";

                $stmt = $conexao->prepare($sql);

                $params = [
                    $dados['nome'],
                    $data ? $data->format('Y-m-d') : null,
                    $dados['email'],
                    $dados['site'],
                    $dados['filhos'],
                    $dados['salario'] ? str_replace(",", ".", $dados['salario']) : null,
                    $dados['id'],
                ];

                $stmt->bind_param("ssssidi", ...$params);

                if($stmt->execute()) {
                    unset($dados);
                    echo '<div class="alert alert-success">Registro atualizado com sucesso!</div>';
                } else {
                    echo '<div class="alert alert-danger">Erro ao atualizar o registro.</div>';
                }
            }
        }
        ?>

        <form action="#" method="post">
            <input type="hidden" name="id" value="<?= $dados['id'] ?? '' ?>">
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control <?= isset($erros['nome']) ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $dados['nome'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['nome'] ?? '' ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="nascimento">Nascimento</label>
                    <input type="text" class="form-control <?= isset($erros['nascimento']) ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $dados['nascimento'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['nascimento'] ?? '' ?>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control <?= isset($erros['email']) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $dados['email'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['email'] ?? '' ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="site">Site</label>
                    <input type="text" class="form-control <?= isset($erros['site']) ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $dados['site'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['site'] ?? '' ?>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="filhos">Qtde de Filhos</label>
                    <input type="number" class="form-control <?= isset($erros['filhos']) ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Qtde de Filhos" value="<?= $dados['filhos'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['filhos'] ?? '' ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="salario">Salário</label>
                    <input type="text" class="form-control <?= isset($erros['salario']) ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Salário" value="<?= $dados['salario'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $erros['salario'] ?? '' ?>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-94X3dJJ6U5KPS5z+r5gqdcw+7ENf2y26UaqD39DiZ3z7rfq9sLhsjtEHL27EHzD" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
