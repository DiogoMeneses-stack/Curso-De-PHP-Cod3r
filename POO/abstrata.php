<div class="titulo">Classes Abstratas</div>

<?php

abstract class Casa {
    protected $numeroDeQuartos;
    protected $numeroDeBanheiros;
    protected $tipoDeTelhado;
    
    abstract public function abrirPorta();
    abstract public function fecharJanela();
    
    public function ligarLuz() {
        echo "Luzes ligadas.<br>";
    }
}

class CasaDePraia extends Casa {
    public function __construct() {
        $this->numeroDeQuartos = 3;
        $this->numeroDeBanheiros = 2;
        $this->tipoDeTelhado = 'Palha';
    }

    public function abrirPorta() {
        echo "Abrindo a porta de correr da casa de praia.<br>";
    }

    public function fecharJanela() {
        echo "Fechando a janela com vista para o mar.<br>";
    }
}


$imprimir = new CasaDePraia();
$imprimir->abrirPorta();