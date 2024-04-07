<div class="titulo">$_GET</div>
<?php
//para pegar parametros do tipo get deve-se colocar ? antes caso tenho outro parametro colocar &
echo $_GET;
echo "<br>";
print_r($_GET);
echo "<br>{$_GET['nome']}";