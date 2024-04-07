<div class="titulo">Desafio de PHP</div>

<ul>
    <!-- Mostrar de 3 Formas diferentes em PHP o resultado de Cada -->
    <li>1 + 1 = <?= 1 + 1 ?></li>
    <li>4 + 4 = <?php echo 4 + 4; ?></li>
    <?php
    echo '<li>';
    echo '8 + 8 = ';
    echo 8 + 8;
    echo '</li>'
    ?>
</ul>