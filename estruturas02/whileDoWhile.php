<div class="titulo">While e Do While</div>
<?php
const VALOR_LIMITE = 10;
$contador = 5;

while ($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
    break;
}

echo "<br>";

do {
    echo "Do while $contador <br>";
    $contador++;
    break;
} while ($contador < VALOR_LIMITE);

echo "<br>";

$contador = 0;
while (true) {
    echo "while(true) $contador <br>";
    $contador++;
    if ($contador >= VALOR_LIMITE) break;
}
?>