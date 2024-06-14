<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Criando Formulário</div>
<h2>Cadastro</h2>

<?php
//Validações de Formulário
if (count($_POST) > 0) {
    $erros = [];

    //isset($_POST['nome'])
    //Validação do Nome
    if (!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome é obrigatório';
    }

    // Validação de Nascimento
    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/Y',
            $_POST['nascimento']
        );
        if (!$data) {
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    // Validação de Data
    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if (!$data) {
            $erros['data'] = 'Data dev estar no padrão dd/mm/aaaa';
        }
    }

    //Validação Email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

    // Validação site
    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = 'Site inválido';
    }

    // Validação de Filho
    $filhosConfig = [
        "options" => ["min_renge" => 0, "max_range" => 20]
    ];
    if (!filter_var(
        $_POST['filhos'],
        FILTER_VALIDATE_INT,
        $filhosConfig
    ) && $_POST['filhos'] != 0) {
        $erros['filhos'] = 'Quantidade de filhos inválida';
    }

    // Validação de Salário
    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido';
    }
}
?>

<?php foreach ($erros as $erro) : ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
    <?= "" // $erro 
    ?>
    <!-- </div> -->
<?php endforeach ?>

<script>
    /* Máscaras ER */
    function mascara(o, f) {
        v_obj = o
        v_fun = f
        setTimeout("execmascara()", 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }

    function mtel(v) {
        v = v.replace(/D/g, ""); //Remove tudo o que não é dígito
        v = v.replace(/^(d{2})(d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(d)(d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function id(el) {
        return document.getElementById(el);
    }
    window.onload = function() {
        id('salario').onkeypress = function() {
            mascara(this, mtel);
        }
    }
</script>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Qtde de Filhos" value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Salário" value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>