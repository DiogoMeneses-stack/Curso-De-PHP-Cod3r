<div class="titulo">Desafio Operadores Lógicos</div>
<!-- 
    Dois Trabalhos -> terça e quinta!
        -Se os dois forem executados -> TV 50' e Sorvete
        -Se apenas for executado -> tv 32' e sorvete
        -se nenhum for executado -> ficar em casa é mais saudável
-->
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça Feira): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta Feira): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>
<?php

$executarEmT1 = $_POST['t1'];
$executarEmT2 = $_POST['t2'];
//echo $_POST['t1'];
//echo $_POST['t2'];

if ($executarEmT1 == 1 and $executarEmT2 == 1) {
    echo "comprar TV 50 e Sorvete";
} else if (($executarEmT1 == 1 && $executarEmT2 == 0) || (($executarEmT1 == 0 && $executarEmT2 == 1))) {
    echo "Comprar tv 32 e sorvete";
} else {
    echo "ficar em casa é mais saudável";
}

// solução do professor

?>