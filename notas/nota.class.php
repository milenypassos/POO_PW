<?php
    class Aluno {
        public $matricula;
        public $nome;
        private $n1;
        private $n2;
        private $t1;
        public $media;


        public function getN1() { return $this->n1; }
        public function getN2() { return $this->n2; }
        public function getT1() { return $this->t1; }

        public function setN1($n1) { $this->n1 = $n1; }
        public function setN2($n2) { $this->n2 = $n2; }
        public function setT1($t1) { $this->t1 = $t1; }


    public function Media() {
        $n1 = $this->n1; $n2 = $this->n2; $t1 = $this->t1;

        $notafinal = (($n1 * 3.5) + ($n2 * 3.5) + ($t1 * 3));
            $this->media = $notafinal;

        if ($notafinal >= 70) {
            return "Situação: Aprovado";
        } if ($notafinal >= 0 && $notafinal < 70) {
            return "Situação: Reprovado";
        }
        }

        public function imprime(){
        echo "<br>";
            echo "Matrícula: " . $this->matricula . "<br>";
            echo "Nome: " . $this->nome . "<br>";
            echo "Primeira prova: " . $this->n1 . "<br>";
            echo "Segunda Prova: " . $this->n2 . "<br>";
            echo "Trabalho: " . $this->t1 . "<br>";
        echo "Nota Final: " . $this->media . "<br>";
        echo $this->Media() . "<br><br>";
        echo "<hr>";
        }
    }
?>