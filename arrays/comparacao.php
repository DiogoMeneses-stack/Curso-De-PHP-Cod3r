<div class="titulo">Comparação entre Arrays</div>
<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Silvana', 'idade' => 20];
var_dump($arr1 == $arr2); //false
var_dump($arr1 === $arr2); // false
var_dump($arr1 != $arr2); // true
var_dump($arr1 !== $arr2); // true