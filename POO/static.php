<div class="titulo">Classes Estáticas</div>

<?php
    class A{
        public $naoStatic = 'Variável de Instância';
        public static $static = 'Variável de classe ( estática )';
        
        public function mostrarA(){
            //tentativa 01
                echo "Não Estática = {$this->naoStatic}<br>";
                //echo "Estática = {$this->static}<br>";
                //TENTATIVA 02  
                echo "Estática = ". self::$static . "<br>"; //serve para acessar membros estáticos

        }

        public static function mostrarStaticA(){
            echo "Estática = ". self::$static . "<br>";
        }
    }

    $objetoA = new A();
    $objetoA->mostrarA();
    //$objetoA->mostrarStaticA();
    A::mostrarStaticA(); // forma correta de chamar função estática