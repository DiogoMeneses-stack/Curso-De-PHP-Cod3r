<div class="titulo">Escrevendo Arquivos</div>

<?php
$espacao = '<br>';
$arquivo = fopen('teste.txt', 'w');

fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

// $arquivo = fopen('texto.php', 'w');
//fwrite($arquivo, "<?php echo ('Executado com sucesso');");
// fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionando em um segundo nome\n");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');
fwrite($arquivo, "Arquivo Novo!!!");
fclose($arquivo);
?>