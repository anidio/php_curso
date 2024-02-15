<?php

    // Definição da interface
    interface Veiculo {
        public function ligar();
        public function desligar();
    }

    // Implementação da interface em uma classe
    class Carro implements Veiculo {
        public function ligar() {
            echo "Carro ligado.<br>";
        }

        public function desligar() {
            echo "Carro desligado.<br>";
        }
    }

    class Moto implements Veiculo {
        public function ligar() {
            echo "Moto ligada.<br>";
        }

        public function desligar() {
            echo "Moto desligada.<br>";
        }
    }

    // Utilização das classes
    $carro = new Carro();
    $moto = new Moto();

    $carro->ligar();
    $carro->desligar();

    $moto->ligar();
    $moto->desligar();

