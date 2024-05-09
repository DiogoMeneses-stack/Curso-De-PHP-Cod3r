<div class="titulo">Desafio de Classe</div>

<?php
 
    class Data {
        public $dia = 1;
        public $mes = 1;
        public $ano = 1970;

        function Apresentar(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    $aniversario = new Data();
    $aniversario->dia = 06;
    $aniversario->mes = 05;
    $aniversario->ano = 2002;

    echo $aniversario->Apresentar();

?>