<div class="titulo">Lendo Arquivos</div>

<?php
    $espaco = '<br>';
    $arquivo = fopen('teste.txt', 'r');
    echo fread($arquivo, 10) . $espaco;
    echo fread($arquivo, 10). $espaco;
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    $tamanho = filesize('teste.txt');
    echo $tamanho . $espaco;
    echo fread($arquivo, $tamanho);
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    echo fgets($arquivo) . $espaco;
    echo fgets($arquivo) . $espaco;
    echo fgets($arquivo) . $espaco;

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)){
        echo fgets($arquivo) . $espaco;
    }

    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)){
        echo fgetc($arquivo) . $espaco;
    }

    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r+');
    echo fgets($arquivo) . $espaco;
    echo fgets($arquivo) . $espaco;
    fwrite($arquivo, "\nAdicionado durante a leitura");
    fclose($arquivo);

    echo "Fim!";
?>
