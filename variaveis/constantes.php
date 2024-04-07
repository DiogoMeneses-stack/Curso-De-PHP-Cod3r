<div class="titulo">Constantes</div>
<?php
define('TAXA_DE_JUROS', 5.9);
define('BR', '<br>');

echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;
echo BR . NOVA_TAXA ;

$valorVariavel = 2.8;
// const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo BR . NOVISSIMA_TAXA;

echo BR . PHP_VERSION;
echo BR . PHP_INT_MAX;

echo BR . __LINE__;
echo BR . __FILE__;
echo BR . __DIR__;
