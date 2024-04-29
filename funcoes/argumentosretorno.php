<div class="titulo">Argumentos e Retronos</div>

<?php 
    function obterMenssagem(){
        return  'Seja Bem Vindo !!!';
    }

    $mensagem = obterMenssagem();
    echo $mensagem;
    echo '<br>', obterMenssagem();
    echo '<br>';

    var_dump(obterMenssagem());
    echo "<br>";
    function obterMenssagemComNome($nome){
        return "Bem Vindo, {$nome}!";
    }

    echo "<br>", obterMenssagemComNome('Wagner');

    function soma($a, $b){
        $soma = $a + $b;
        return $soma;
    }

    echo '<br>', soma(4, 5);

    function trocarValor($a, $novoValor){
        $a = $novoValor;
    }

    $variavel = 1;
    trocarValor($variavel, 3);
    echo '<br>', $variavel;