<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; //Função para não exibir valores após a vírgula
echo round(7 / 4), '<br>'; // Função para arredondar
echo 7 % 4, '<br>'; // Módulo
//echo 7 / 0, '<br>';
echo 4 ** 2 , '<br>'; // potencia

//Precedencia dos Operadores
//() => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 4, '<br>';
echo ((2 + 3) * 4), '<br>';