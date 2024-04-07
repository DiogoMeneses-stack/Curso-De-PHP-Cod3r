<div class="titulo">Arrays Constantes</div>
<?php
const FRUTAS = ['laranja', 'Abacaxi'];
//FRUTAS[0] = 'banana'; não pode
// FRUTAS[] = 'banana'; não pode
echo FRUTAS[0];
echo "<br>";
const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo "<br>" . CARROS["Fiat"];