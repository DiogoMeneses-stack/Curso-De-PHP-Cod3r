<div class="titulo">Operadores Relacionais</div>
<?php
var_dump(1 === 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 < 1);
var_dump(1 <= 1);
var_dump(1 != 1);
var_dump(1 <> 1);

var_dump(1 == '1');
var_dump(1 === '1');
var_dump(1 != '1');
var_dump(1 !== '1');

// Operador spaceship: serve para é utilizado para fazer comparações combinadas.
var_dump(5 <=> 3); //1 
var_dump(5 <=> 5); //0
var_dump(3 <=> 5); //-1

echo "<p> usando no If else </p>";

$idade = 19;
if($idade < 18){
    echo "menor de Idade.";
 } else if($idade >= 18){
    echo "Pode entrar.";
 } else {
    echo "Não aceito";
 }