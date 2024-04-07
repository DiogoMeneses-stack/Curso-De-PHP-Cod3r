<div class="titulo">Tipos Booleanos</div>
 <?php

 echo true;
 echo '<br>';
 echo false;

 echo '<br>' . var_dump(true);
 echo '<br>' . var_dump(false);
 echo '<br>' . var_dump('true');
 echo '<br>' . is_bool(false);
 echo '<br>' . is_bool('true');

 //Fazer as regras de conversões
 echo '<p>Regras:</p>';
 echo '<br>' . var_dump((bool)0); // apenas zero é falso
 echo '<br>' . var_dump((bool)20);
