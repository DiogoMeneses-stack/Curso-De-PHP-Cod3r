<div class="titulo">Desafio de String</div>

<?php
// !AbcaBcabc

echo "Enunciado" . "<br>" . "Aliando os métodos da documentação da string, qual dos métodos que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?";
echo "<br>";
echo "<br>";

$a = "!AbcaBcabc";
$resultado = strpos($a, "abc"). '<br>';
$resultado_02 = stripos($a, "abc"). '<br>'; // Função mostra a posição mas ignora as letras maiusculas case sensitive
echo $resultado_02;