<?php
    class Carro{

        public $marca;
        public $modelo;
        public $portas;
        public $combustível;
        public $capacidade_tanque;


        function imprime(){
            echo "<h2>Específicações do Carro</h2>";
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Portas: " . $this->portas . "<br>";
            echo "Tipo de combustível: " . $this->combustível . "<br>";
            echo "Capacidade do tanque: " . $this->capacidade_tanque . "<br>"; 
            echo "<br>","<hr>"; 
        }
    }
?>