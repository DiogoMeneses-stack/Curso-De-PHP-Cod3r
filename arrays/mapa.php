<div class="titulo">Mapa de Valores</div>
<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

var_dump($dados[0]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
var_dump($dados["outra_informacao"]);

$lista = array(
    "a",
    "cinco" => "b",
    6 => "f"
);
echo "<br>";
print_r($lista);

$lista[false];