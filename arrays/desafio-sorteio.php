<div class="titulo">Desafio do Sorteio</div>
<?php
$valores = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
$sortear = array_rand($valores);

print_r("<h1>Vencedora: $valores[$sortear] </h1>");
