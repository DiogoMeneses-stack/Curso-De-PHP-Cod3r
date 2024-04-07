<div class="titulo">Desafio de laço For</div>
<p>na primeira 5 vezes repetição faça isso: 
<br>
    #
    <br>
    ##
    <br>
    ###
    <br>
    ...

</p>
<hr>
<p>Solução:</p><br>
<?php

$imprimir = '';

for($contar = 1; $contar <= 5; $contar++){
    $imprimir .= '#';
    echo "$imprimir  <br>";
}

echo "<hr>";
echo "Sem incremento <br>";

for($imprimir2 = '#'; $imprimir2 !== '######'; $imprimir2 .= '#'){
    echo "$imprimir2 <br>";
}