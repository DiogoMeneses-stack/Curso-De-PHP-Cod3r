<div class="titulo">Strings em PHP</div>

<?php
echo 'Eu sou uma String';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//Concatenação
echo "Nós também". 'somos';
echo '<br>', "Também aceito"," virgulas";
echo '<br>';
echo "'Teste" . '"Teste"'. '\'Teste\''. "\"Teste\" " . "\n";

print("<br> Também existe a função print");

//Algumas funções
echo '<br>' . strtoupper('maximizado') . "\n";
print('<br>'. strtolower('MINIMIZADO'));
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>'.mb_strlen("Eu também", "utf-8");
echo '<br>'.substr('Só uma parte mesmo', 7, 6); //até que parte da string vai
echo '<br>'.str_replace('isso', 'aquilo', 'Trocar isso isso');